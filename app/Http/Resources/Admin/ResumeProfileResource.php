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
            'id'                         => $this->id,
            'first_name'                 => $this->first_name,
            'last_name'                  => $this->last_name,
            'job_title'                  => $this->job_title,
            'photo'                      => $this->photo,
            'about'                      => $this->about,
            'location'                   => $this->location,
            'phone'                      => $this->phone,
            'email'                      => $this->email,
            'website'                    => $this->website,
            'degree_one'                 => $this->degree_one,
            'institution_one'            => $this->institution_one,
            'start_year_one'             => $this->start_year_one,
            'end_year_one'               => $this->end_year_one,
            'degree_two'                 => $this->degree_two,
            'institution_two'            => $this->institution_two,
            'start_year_two'             => $this->start_year_two,
            'end_year_two'               => $this->end_year_two,
            'degree_three'               => $this->degree_three,
            'institution_three'          => $this->institution_three,
            'start_year_three'           => $this->start_year_three,
            'end_year_three'             => $this->end_year_three,
            'work_position_one'          => $this->work_position_one,
            'company_one'                => $this->company_one,
            'work_start_year_one'        => $this->work_start_year_one,
            'work_end_year_one'          => $this->work_end_year_one,
            'work_description_one'       => $this->work_description_one,
            'work_position_two'          => $this->work_position_two,
            'company_two'                => $this->company_two,
            'work_start_year_two'        => $this->work_start_year_two,
            'work_end_year_two'          => $this->work_end_year_two,
            'work_description_two'       => $this->work_description_two,
            'work_position_three'        => $this->work_position_three,
            'company_three'              => $this->company_three,
            'work_start_year_three'      => $this->work_start_year_three,
            'work_end_year_three'        => $this->work_end_year_three,
            'work_description_three'     => $this->work_description_three,
            'project_title_one'          => $this->project_title_one,
            'project_technologies_one'   => $this->project_technologies_one,
            'project_url_one'            => $this->project_url_one,
            'project_description_one'    => $this->project_description_one,
            'project_title_two'          => $this->project_title_two,
            'project_technologies_two'   => $this->project_technologies_two,
            'project_url_two'            => $this->project_url_two,
            'project_description_two'    => $this->project_description_two,
            'project_title_three'        => $this->project_title_three,
            'project_technologies_three' => $this->project_technologies_three,
            'project_url_three'          => $this->project_url_three,
            'project_description_three'  => $this->project_description_three,
            'project_title_four'         => $this->project_title_four,
            'project_technologies_four'  => $this->project_technologies_four,
            'project_url_four'           => $this->project_url_four,
            'project_description_four'   => $this->project_description_four,
            'project_title_five'         => $this->project_title_five,
            'project_technologies_five'  => $this->project_technologies_five,
            'project_url_five'           => $this->project_url_five,
            'project_description_five'   => $this->project_description_five,
            'social_platform_one'        => $this->social_platform_one,
            'social_profile_type_one'    => $this->social_profile_type_one,
            'social_url_one'             => $this->social_url_one,
            'social_platform_two'        => $this->social_platform_two,
            'social_profile_type_two'    => $this->social_profile_type_two,
            'social_url_two'             => $this->social_url_two,
            'social_platform_three'      => $this->social_platform_three,
            'social_profile_type_three'  => $this->social_profile_type_three,
            'social_url_three'           => $this->social_url_three,
            'skills'                     => $this->skills,
            'hobbies_interests'          => $this->hobbies_interests,
            'is_approved'                => $this->is_approved,
            'created_at'                 => $this->created_at->toDateTimeString(),
            'updated_at'                 => $this->updated_at->toDateTimeString(),
        ];
    }
}
