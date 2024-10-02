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
                'first_name'                 => $request->first_name,
                'last_name'                  => $request->last_name,
                'job_title'                  => $request->job_title,
                'email'                      => $request->email,
                'phone'                      => $request->phone,
                'location'                   => $request->location,
                'about'                      => $request->about,
                'website'                    => $request->website,
                'degree_one'                 => $request->degree_one,
                'institution_one'            => $request->institution_one,
                'start_year_one'             => $request->start_year_one,
                'end_year_one'               => $request->end_year_one,
                'degree_two'                 => $request->degree_two,
                'institution_two'            => $request->institution_two,
                'start_year_two'             => $request->start_year_two,
                'end_year_two'               => $request->end_year_two,
                'degree_three'               => $request->degree_three,
                'institution_three'          => $request->institution_three,
                'start_year_three'           => $request->start_year_three,
                'end_year_three'             => $request->end_year_three,
                'work_position_one'          => $request->work_position_one,
                'company_one'                => $request->company_one,
                'work_start_year_one'        => $request->work_start_year_one,
                'work_end_year_one'          => $request->work_end_year_one,
                'work_description_one'       => $request->work_description_one,
                'work_position_two'          => $request->work_position_two,
                'company_two'                => $request->company_two,
                'work_start_year_two'        => $request->work_start_year_two,
                'work_end_year_two'          => $request->work_end_year_two,
                'work_description_two'       => $request->work_description_two,
                'work_position_three'        => $request->work_position_three,
                'company_three'              => $request->company_three,
                'work_start_year_three'      => $request->work_start_year_three,
                'work_end_year_three'        => $request->work_end_year_three,
                'work_description_three'     => $request->work_description_three,
                'project_title_one'          => $request->project_title_one,
                'project_technologies_one'   => $request->project_technologies_one,
                'project_url_one'            => $request->project_url_one,
                'project_description_one'    => $request->project_description_one,
                'project_title_two'          => $request->project_title_two,
                'project_technologies_two'   => $request->project_technologies_two,
                'project_url_two'            => $request->project_url_two,
                'project_description_two'    => $request->project_description_two,
                'project_title_three'        => $request->project_title_three,
                'project_technologies_three' => $request->project_technologies_three,
                'project_url_three'          => $request->project_url_three,
                'project_description_three'  => $request->project_description_three,
                'project_title_four'         => $request->project_title_four,
                'project_technologies_four'  => $request->project_technologies_four,
                'project_url_four'           => $request->project_url_four,
                'project_description_four'   => $request->project_description_four,
                'project_title_five'         => $request->project_title_five,
                'project_technologies_five'  => $request->project_technologies_five,
                'project_url_five'           => $request->project_url_five,
                'project_description_five'   => $request->project_description_five,
                'social_platform_one'        => $request->social_platform_one,
                'social_profile_type_one'    => $request->social_profile_type_one,
                'social_url_one'             => $request->social_url_one,
                'social_platform_two'        => $request->social_platform_two,
                'social_profile_type_two'    => $request->social_profile_type_two,
                'social_url_two'             => $request->social_url_two,
                'social_platform_three'      => $request->social_platform_three,
                'social_profile_type_three'  => $request->social_profile_type_three,
                'social_url_three'           => $request->social_url_three,
                'skills'                     => $request->skills,
                'hobbies_interests'          => $request->hobbies_interests,
                'photo'                      => $photoPath,
                'is_approved'                => $request->is_approved ?? 0,
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
                'first_name'                 => $request->first_name,
                'last_name'                  => $request->last_name,
                'job_title'                  => $request->job_title,
                'email'                      => $request->email,
                'phone'                      => $request->phone,
                'location'                   => $request->location,
                'about'                      => $request->about,
                'website'                    => $request->website,
                'degree_one'                 => $request->degree_one,
                'institution_one'            => $request->institution_one,
                'start_year_one'             => $request->start_year_one,
                'end_year_one'               => $request->end_year_one,
                'degree_two'                 => $request->degree_two,
                'institution_two'            => $request->institution_two,
                'start_year_two'             => $request->start_year_two,
                'end_year_two'               => $request->end_year_two,
                'degree_three'               => $request->degree_three,
                'institution_three'          => $request->institution_three,
                'start_year_three'           => $request->start_year_three,
                'end_year_three'             => $request->end_year_three,
                'work_position_one'          => $request->work_position_one,
                'company_one'                => $request->company_one,
                'work_start_year_one'        => $request->work_start_year_one,
                'work_end_year_one'          => $request->work_end_year_one,
                'work_description_one'       => $request->work_description_one,
                'work_position_two'          => $request->work_position_two,
                'company_two'                => $request->company_two,
                'work_start_year_two'        => $request->work_start_year_two,
                'work_end_year_two'          => $request->work_end_year_two,
                'work_description_two'       => $request->work_description_two,
                'work_position_three'        => $request->work_position_three,
                'company_three'              => $request->company_three,
                'work_start_year_three'      => $request->work_start_year_three,
                'work_end_year_three'        => $request->work_end_year_three,
                'work_description_three'     => $request->work_description_three,
                'project_title_one'          => $request->project_title_one,
                'project_technologies_one'   => $request->project_technologies_one,
                'project_url_one'            => $request->project_url_one,
                'project_description_one'    => $request->project_description_one,
                'project_title_two'          => $request->project_title_two,
                'project_technologies_two'   => $request->project_technologies_two,
                'project_url_two'            => $request->project_url_two,
                'project_description_two'    => $request->project_description_two,
                'project_title_three'        => $request->project_title_three,
                'project_technologies_three' => $request->project_technologies_three,
                'project_url_three'          => $request->project_url_three,
                'project_description_three'  => $request->project_description_three,
                'project_title_four'         => $request->project_title_four,
                'project_technologies_four'  => $request->project_technologies_four,
                'project_url_four'           => $request->project_url_four,
                'project_description_four'   => $request->project_description_four,
                'project_title_five'         => $request->project_title_five,
                'project_technologies_five'  => $request->project_technologies_five,
                'project_url_five'           => $request->project_url_five,
                'project_description_five'   => $request->project_description_five,
                'social_platform_one'        => $request->social_platform_one,
                'social_profile_type_one'    => $request->social_profile_type_one,
                'social_url_one'             => $request->social_url_one,
                'social_platform_two'        => $request->social_platform_two,
                'social_profile_type_two'    => $request->social_profile_type_two,
                'social_url_two'             => $request->social_url_two,
                'social_platform_three'      => $request->social_platform_three,
                'social_profile_type_three'  => $request->social_profile_type_three,
                'social_url_three'           => $request->social_url_three,
                'skills'                     => $request->skills,
                'hobbies_interests'          => $request->hobbies_interests,
                'photo'                      => $photoPath,
                'is_approved'                => $request->is_approved ?? $resumeProfile->is_approved,
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
