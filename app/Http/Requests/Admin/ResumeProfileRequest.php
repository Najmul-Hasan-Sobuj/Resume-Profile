<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ResumeProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $profileId = $this->route('resume_profile');

        return [
            // Personal Information
            'first_name' => 'required|string|max:50', // First name
            'last_name' => 'required|string|max:50',  // Last name
            'job_title' => 'required|string|max:100',  // Job title
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Photo 
            'about' => 'required|string',  // About section
            'location' => 'required|string|max:100',  // Location
            'phone' => 'required|string|max:20',  // Phone number
            'email' => [
                'required',
                'email:rfc,dns',
                Rule::unique('resume_profiles')->ignore($profileId),
            ],
            'website' => 'nullable|url|max:255', // Website URL

            // Education
            'degree' => 'required|string|max:100', // Degree
            'institution' => 'required|string|max:100', // Institution
            'start_year' => 'required|integer|digits:4|between:1900,2100', // Start year
            'end_year' => 'nullable|integer|digits:4|between:1900,2100', // End year

            // Work Experience
            'work_position' => 'required|string|max:100', // Work position
            'company' => 'required|string|max:100', // Company name
            'work_start_year' => 'required|integer|digits:4|between:1900,2100', // Work start year
            'work_end_year' => 'nullable|integer|digits:4|between:1900,2100', // Work end year
            'work_description' => 'required|string', // Work description

            // Projects
            'project_title' => 'required|string|max:100', // Project title
            'project_technologies' => 'required|string|max:100', // Project technologies
            'project_url' => 'nullable|url|max:255', // Project URL
            'project_description' => 'required|string', // Project description

            // Social Profiles
            'social_platform' => 'required|string|max:50', // Social platform name
            'social_profile_type' => 'required|string|max:50', // Profile type
            'social_url' => 'nullable|url|max:255', // Social URL

            // Skills (Array validation)
            'skills' => 'required|array', // Skills

            // Hobbies & Interests (Array validation)
            'hobbies_interests' => 'required|array', // Hobbies and interests

            'is_approved' => 'nullable|in:0,1', // Approval status
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required.',
            'last_name.required' => 'Last name is required.',
            'job_title.required' => 'Job title is required.',
            'email.email' => 'The email must be a valid email address.',
            'skills.required' => 'At least one skill is required.',
            'skills.array' => 'Skills must be an array.',
            'hobbies_interests.required' => 'At least one hobby or interest is required.',
            'hobbies_interests.array' => 'Hobbies and interests must be an array.',
            'is_approved.in' => 'Approval status must be either active or inactive.',
            'photo.image' => 'The photo must be an image file.',
            'photo.mimes' => 'The photo must be a file of type: jpeg, png, jpg, gif.',
            'photo.max' => 'The photo must not be greater than 2 MB.',
        ];
    }
}
