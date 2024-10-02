<?php

namespace App\Http\Controllers\Frondend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\ResumeProfileResource;
use App\Models\Admin\ResumeProfile;

class FrontendController extends Controller
{
    /**
     * Display the form for managing settings.
     */
    public function index()
    {
        $resumeProfile = ResumeProfile::whereIsApproved(1)->first();
        return view('welcome', [
            'resumeProfile' => new ResumeProfileResource($resumeProfile)
        ]);
    }
}
