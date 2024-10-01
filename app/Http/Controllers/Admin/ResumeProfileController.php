<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\ResumeProfile;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ResumeProfileRequest;
use App\Http\Resources\Admin\ResumeProfileResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ResumeProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:resume-profile.index', ['only' => ['index']]);
        $this->middleware('permission:resume-profile.create', ['only' => ['create']]);
        $this->middleware('permission:resume-profile.show', ['only' => ['show']]);
        $this->middleware('permission:resume-profile.edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:resume-profile.delete', ['only' => ['destroy']]);
        $this->middleware('permission:resume-profile.approve', ['only' => ['toggleApproval']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // If request is AJAX, return JSON for DataTables
        if ($request->ajax()) {
            $resumeProfiles = ResumeProfile::latest()->get();
            return datatables()->of($resumeProfiles)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->format('F j, Y, g:i a');
                })
                ->addColumn('action', function ($profile) {
                    return '<a href="' . route('admin.resume-profiles.show', $profile->id) . '" class="btn_navy text-white px-2 rounded ms-3">View</a>
                            <a href="' . route('admin.resume-profiles.edit', $profile->id) . '" class="btn_paste text-white px-2 rounded ms-3">Edit</a>
                            <a href="' . route('admin.resume-profiles.destroy', $profile->id) . '" class="btn_red text-white px-2 rounded delete ms-3">Delete</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // For normal HTTP request, return the view
        return view('admin.pages.resumeProfiles.index', [
            'resumeProfiles' => ResumeProfileResource::collection(ResumeProfile::get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.resumeProfiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResumeProfileRequest $request)
    {
        DB::beginTransaction();

        try {
            // Check for existing active profiles
            if ($request->is_approved && ResumeProfile::where('is_approved', 1)->exists()) {
                // Rollback the transaction as we're not creating the new profile
                DB::rollBack();
                return redirect()->back()->with('error', 'You cannot activate a new resume profile while another is active. Please deactivate the existing profile first.');
            }
            $photoPath = $request->file('photo') ? uploadImage($request->file('photo'), 'resume_profiles') : null;

            ResumeProfile::create([
                'first_name'           => $request->first_name,
                'last_name'            => $request->last_name,
                'job_title'            => $request->job_title,
                'email'                => $request->email,
                'phone'                => $request->phone,
                'location'             => $request->location,
                'about'                => $request->about,
                'website'              => $request->website,
                'degree'               => $request->degree,
                'institution'          => $request->institution,
                'start_year'           => $request->start_year,
                'end_year'             => $request->end_year,
                'work_position'        => $request->work_position,
                'company'              => $request->company,
                'work_start_year'      => $request->work_start_year,
                'work_end_year'        => $request->work_end_year,
                'work_description'     => $request->work_description,
                'project_title'        => $request->project_title,
                'project_technologies' => $request->project_technologies,
                'project_url'          => $request->project_url,
                'project_description'  => $request->project_description,
                'social_platform'      => $request->social_platform,
                'social_profile_type'  => $request->social_profile_type,
                'social_url'           => $request->social_url,
                'skills'               => $request->skills,
                'hobbies_interests'    => $request->hobbies_interests,
                'photo'                => $photoPath,
                'is_approved'          => $request->is_approved ?? 0,
            ]);

            DB::commit();
            return redirect()->route('admin.resume-profiles.index')->with('success', 'Resume Profile created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'There was an error creating the resume profile: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\ResumeProfile  $resumeProfile
     * @return \Illuminate\Http\Response
     */
    public function show(ResumeProfile $resumeProfile)
    {
        return view('admin.pages.resumeProfiles.show', compact('resumeProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\ResumeProfile  $resumeProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(ResumeProfile $resumeProfile)
    {
        return view('admin.pages.resumeProfiles.edit', compact('resumeProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\ResumeProfile  $resumeProfile
     * @return \Illuminate\Http\Response
     */
    public function update(ResumeProfileRequest $request, ResumeProfile $resumeProfile)
    {
        DB::beginTransaction();

        try {
            if ($request->hasFile('photo')) {
                if ($resumeProfile->photo) {
                    Storage::disk('public')->delete($resumeProfile->photo);
                }

                $photoPath = uploadImage($request->file('photo'), 'resume_profiles');
            } else {
                $photoPath = $resumeProfile->photo;
            }

            $resumeProfile->update([
                'first_name'           => $request->first_name,
                'last_name'            => $request->last_name,
                'job_title'            => $request->job_title,
                'email'                => $request->email,
                'phone'                => $request->phone,
                'location'             => $request->location,
                'about'                => $request->about,
                'website'              => $request->website,
                'degree'               => $request->degree,
                'institution'          => $request->institution,
                'start_year'           => $request->start_year,
                'end_year'             => $request->end_year,
                'work_position'        => $request->work_position,
                'company'              => $request->company,
                'work_start_year'      => $request->work_start_year,
                'work_end_year'        => $request->work_end_year,
                'work_description'     => $request->work_description,
                'project_title'        => $request->project_title,
                'project_technologies' => $request->project_technologies,
                'project_url'          => $request->project_url,
                'project_description'  => $request->project_description,
                'social_platform'      => $request->social_platform,
                'social_profile_type'  => $request->social_profile_type,
                'social_url'           => $request->social_url,
                'skills'               => $request->skills,
                'hobbies_interests'    => $request->hobbies_interests,
                'photo'                => $photoPath,
                'is_approved'          => $request->is_approved ?? $resumeProfile->is_approved,
            ]);

            DB::commit();
            return redirect()->route('admin.resume-profiles.index')->with('success', 'Resume Profile updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'There was an error updating the resume profile: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\ResumeProfile  $resumeProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResumeProfile $resumeProfile)
    {
        if ($resumeProfile->photo) {
            Storage::disk('public')->delete($resumeProfile->photo);
        }

        $resumeProfile->delete();
    }

    /**
     * Toggle the approval status of the specified resource.
     *
     * @param  \App\Models\Admin\ResumeProfile  $resumeProfile
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus(ResumeProfile $resumeProfile)
    {
        // Toggle the is_approved: 1 = Active, 0 = Inactive
        $resumeProfile->is_approved = !$resumeProfile->is_approved;
        $resumeProfile->save();
    
        // Return a JSON response with the new is_approved
        return response()->json(['is_approved' => $resumeProfile->is_approved]);
    }
}
