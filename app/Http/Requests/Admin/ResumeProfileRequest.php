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

            // Education One
            'degree_one' => 'nullable|string|max:100',
            'institution_one' => 'nullable|string|max:100',
            'start_year_one' => 'nullable|integer|digits:4|gte:1900|lte:' . date('Y'),
            'end_year_one' => 'nullable|integer|digits:4|gte:start_year_one|lte:' . date('Y'),

            // Education Two
            'degree_two' => 'nullable|string|max:100',
            'institution_two' => 'nullable|string|max:100',
            'start_year_two' => 'nullable|integer|digits:4|gte:1900|lte:' . date('Y'),
            'end_year_two' => 'nullable|integer|digits:4|gte:start_year_two|lte:' . date('Y'),

            // Education Three
            'degree_three' => 'nullable|string|max:100',
            'institution_three' => 'nullable|string|max:100',
            'start_year_three' => 'nullable|integer|digits:4|gte:1900|lte:' . date('Y'),
            'end_year_three' => 'nullable|integer|digits:4|gte:start_year_three|lte:' . date('Y'),

            // Work Experience One
            'work_position_one' => 'nullable|string|max:100',
            'company_one' => 'nullable|string|max:100',
            'work_start_year_one' => 'nullable|integer|digits:4|gte:1900|lte:' . date('Y'),
            'work_end_year_one' => 'nullable|integer|digits:4|gte:work_start_year_one|lte:' . date('Y'),
            'work_description_one' => 'nullable|string',

            // Work Experience Two
            'work_position_two' => 'nullable|string|max:100',
            'company_two' => 'nullable|string|max:100',
            'work_start_year_two' => 'nullable|integer|digits:4|gte:1900|lte:' . date('Y'),
            'work_end_year_two' => 'nullable|integer|digits:4|gte:work_start_year_two|lte:' . date('Y'),
            'work_description_two' => 'nullable|string',

            // Work Experience Three
            'work_position_three' => 'nullable|string|max:100',
            'company_three' => 'nullable|string|max:100',
            'work_start_year_three' => 'nullable|integer|digits:4|gte:1900|lte:' . date('Y'),
            'work_end_year_three' => 'nullable|integer|digits:4|gte:work_start_year_three|lte:' . date('Y'),
            'work_description_three' => 'nullable|string',

            // Project One
            'project_title_one' => 'nullable|string|max:100',
            'project_technologies_one' => 'nullable|string|max:100',
            'project_url_one' => 'nullable|url|max:255',
            'project_description_one' => 'nullable|string',

            // Project Two
            'project_title_two' => 'nullable|string|max:100',
            'project_technologies_two' => 'nullable|string|max:100',
            'project_url_two' => 'nullable|url|max:255',
            'project_description_two' => 'nullable|string',

            // Project Three
            'project_title_three' => 'nullable|string|max:100',
            'project_technologies_three' => 'nullable|string|max:100',
            'project_url_three' => 'nullable|url|max:255',
            'project_description_three' => 'nullable|string',

            // Project Four
            'project_title_four' => 'nullable|string|max:100',
            'project_technologies_four' => 'nullable|string|max:100',
            'project_url_four' => 'nullable|url|max:255',
            'project_description_four' => 'nullable|string',

            // Custom validation messages for Project One
            'project_title_one.max' => 'The project title one must not exceed 100 characters.',
            'project_technologies_one.max' => 'The project technologies one must not exceed 100 characters.',
            'project_url_one.url' => 'The project URL one must be a valid URL.',
            'project_url_one.max' => 'The project URL one must not exceed 255 characters.',
            'project_description_one.string' => 'The project description one must be a string.',

            // Custom validation messages for Project Two
            'project_title_two.max' => 'The project title two must not exceed 100 characters.',
            'project_technologies_two.max' => 'The project technologies two must not exceed 100 characters.',
            'project_url_two.url' => 'The project URL two must be a valid URL.',
            'project_url_two.max' => 'The project URL two must not exceed 255 characters.',
            'project_description_two.string' => 'The project description two must be a string.',

            // Custom validation messages for Project Three
            'project_title_three.max' => 'The project title three must not exceed 100 characters.',
            'project_technologies_three.max' => 'The project technologies three must not exceed 100 characters.',
            'project_url_three.url' => 'The project URL three must be a valid URL.',
            'project_url_three.max' => 'The project URL three must not exceed 255 characters.',
            'project_description_three.string' => 'The project description three must be a string.',

            // Custom validation messages for Project Four
            'project_title_four.max' => 'The project title four must not exceed 100 characters.',
            'project_technologies_four.max' => 'The project technologies four must not exceed 100 characters.',
            'project_url_four.url' => 'The project URL four must be a valid URL.',
            'project_url_four.max' => 'The project URL four must not exceed 255 characters.',
            'project_description_four.string' => 'The project description four must be a string.',

            // Custom validation messages for Project Five
            'project_title_five.max' => 'The project title five must not exceed 100 characters.',
            'project_technologies_five.max' => 'The project technologies five must not exceed 100 characters.',
            'project_url_five.url' => 'The project URL five must be a valid URL.',
            'project_url_five.max' => 'The project URL five must not exceed 255 characters.',
            'project_description_five.string' => 'The project description five must be a string.',

            // Social Profile One
            'social_platform_one' => 'nullable|string|max:50',
            'social_profile_type_one' => 'nullable|string|max:50',
            'social_url_one' => 'nullable|url|max:255',

            // Social Profile Two
            'social_platform_two' => 'nullable|string|max:50',
            'social_profile_type_two' => 'nullable|string|max:50',
            'social_url_two' => 'nullable|url|max:255',

            // Social Profile Three
            'social_platform_three' => 'nullable|string|max:50',
            'social_profile_type_three' => 'nullable|string|max:50',
            'social_url_three' => 'nullable|url|max:255',

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

            // Custom validation messages for Education One
            'degree_one.max' => 'The degree one must not exceed 100 characters.',
            'institution_one.max' => 'The institution one must not exceed 100 characters.',
            'start_year_one.digits' => 'The start year one must be a 4-digit year.',
            'end_year_one.digits' => 'The end year one must be a 4-digit year.',
            'end_year_one.gte' => 'The end year one must be greater than or equal to the start year one.',
            'end_year_one.lte' => 'The end year one must not be greater than the current year.',

            // Custom validation messages for Education Two
            'degree_two.max' => 'The degree two must not exceed 100 characters.',
            'institution_two.max' => 'The institution two must not exceed 100 characters.',
            'start_year_two.digits' => 'The start year two must be a 4-digit year.',
            'end_year_two.digits' => 'The end year two must be a 4-digit year.',
            'end_year_two.gte' => 'The end year two must be greater than or equal to the start year two.',
            'end_year_two.lte' => 'The end year two must not be greater than the current year.',

            // Custom validation messages for Education Three
            'degree_three.max' => 'The degree three must not exceed 100 characters.',
            'institution_three.max' => 'The institution three must not exceed 100 characters.',
            'start_year_three.digits' => 'The start year three must be a 4-digit year.',
            'end_year_three.digits' => 'The end year three must be a 4-digit year.',
            'end_year_three.gte' => 'The end year three must be greater than or equal to the start year three.',
            'end_year_three.lte' => 'The end year three must not be greater than the current year.',

            // Custom validation messages for Work Experience One
            'work_position_one.max' => 'The work position one must not exceed 100 characters.',
            'company_one.max' => 'The company one must not exceed 100 characters.',
            'work_start_year_one.digits' => 'The work start year one must be a 4-digit year.',
            'work_end_year_one.digits' => 'The work end year one must be a 4-digit year.',
            'work_end_year_one.gte' => 'The work end year one must be greater than or equal to the start year one.',
            'work_end_year_one.lte' => 'The work end year one must not be greater than the current year.',

            // Custom validation messages for Work Experience Two
            'work_position_two.max' => 'The work position two must not exceed 100 characters.',
            'company_two.max' => 'The company two must not exceed 100 characters.',
            'work_start_year_two.digits' => 'The work start year two must be a 4-digit year.',
            'work_end_year_two.digits' => 'The work end year two must be a 4-digit year.',
            'work_end_year_two.gte' => 'The work end year two must be greater than or equal to the start year two.',
            'work_end_year_two.lte' => 'The work end year two must not be greater than the current year.',

            // Custom validation messages for Work Experience Three
            'work_position_three.max' => 'The work position three must not exceed 100 characters.',
            'company_three.max' => 'The company three must not exceed 100 characters.',
            'work_start_year_three.digits' => 'The work start year three must be a 4-digit year.',
            'work_end_year_three.digits' => 'The work end year three must be a 4-digit year.',
            'work_end_year_three.gte' => 'The work end year three must be greater than or equal to the start year three.',
            'work_end_year_three.lte' => 'The work end year three must not be greater than the current year.',

            // Custom validation messages for Social Profile One
            'social_platform_one.max' => 'The social platform one must not exceed 50 characters.',
            'social_profile_type_one.max' => 'The social profile type one must not exceed 50 characters.',
            'social_url_one.url' => 'The social URL one must be a valid URL.',
            'social_url_one.max' => 'The social URL one must not exceed 255 characters.',

            // Custom validation messages for Social Profile Two
            'social_platform_two.max' => 'The social platform two must not exceed 50 characters.',
            'social_profile_type_two.max' => 'The social profile type two must not exceed 50 characters.',
            'social_url_two.url' => 'The social URL two must be a valid URL.',
            'social_url_two.max' => 'The social URL two must not exceed 255 characters.',

            // Custom validation messages for Social Profile Three
            'social_platform_three.max' => 'The social platform three must not exceed 50 characters.',
            'social_profile_type_three.max' => 'The social profile type three must not exceed 50 characters.',
            'social_url_three.url' => 'The social URL three must be a valid URL.',
            'social_url_three.max' => 'The social URL three must not exceed 255 characters.',

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
