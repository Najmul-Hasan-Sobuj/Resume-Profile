<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class ResumeProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                   => $this->id,
            // Personal Information
            'first_name'           => $this->first_name, // First name
            'last_name'            => $this->last_name,   // Last name
            'job_title'            => $this->job_title,   // Job title
            'photo'                => $this->photo,           // Photo URL
            'about'                => $this->about,           // Description
            'location'             => $this->location,     // Location
            'phone'                => $this->phone,           // Phone number
            'email'                => $this->email,           // Email address
            'website'              => $this->website,       // Personal website

            // Education
            'degree'               => $this->degree,         // Degree
            'institution'          => $this->institution, // Institution
            'start_year'           => $this->start_year,   // Start year of education
            'end_year'             => $this->end_year,       // End year of education

            // Work Experience
            'work_position'        => $this->work_position,  // Job position
            'company'              => $this->company,              // Company name
            'work_start_year'      => $this->work_start_year, // Start year of work
            'work_end_year'        => $this->work_end_year,     // End year of work
            'work_description'     => $this->work_description, // Work description

            // Projects
            'project_title'        => $this->project_title,        // Project title
            'project_technologies' => $this->project_technologies, // Technologies used
            'project_url'          => $this->project_url,            // Project URL
            'project_description'  => $this->project_description, // Project description

            // Social Profiles
            'social_platform'      => $this->social_platform,    // Social platform
            'social_profile_type'  => $this->social_profile_type, // Social profile type
            'social_url'           => $this->social_url,              // Social URL

            // Skills & Hobbies (automatically decoded via accessors)
            'skills'               => $this->skills,                      // Skills (JSON encoded/decoded)
            'hobbies_interests'    => $this->hobbies_interests, // Hobbies and interests (JSON encoded/decoded)

            'is_approved'          => $this->is_approved, // Approval status

            // Timestamps
            'created_at'           => $this->created_at->toDateTimeString(), // Creation timestamp
            'updated_at'           => $this->updated_at->toDateTimeString(), // Update timestamp
        ];
    }
}
