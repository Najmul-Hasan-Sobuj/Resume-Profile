<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResumeProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resume_profiles')->insert([
            // Personal Information
            'first_name' => 'Najmul',
            'last_name' => 'Hasan',
            'job_title' => 'Web Developer',
            'photo' => null, // No photo URL provided
            'about' => 'I am a full-stack developer specializing in Laravel and React.js, with a strong focus on backend development. For me, web development is not just a job but a passion, where I enjoy building innovative, scalable, and secure backend systems that solve real-world problems.',
            'location' => 'Mohammadpur, Dhaka, Bangladesh',
            'phone' => '01722707693',
            'email' => 'najmulhasansobuj87@gmail.com',
            'website' => 'https://www.najmulhasan.xyz',

            // Education
            'degree_one' => 'B.Sc in Software Engineering',
            'institution_one' => 'Daffodil International University',
            'start_year_one' => 2018,
            'end_year_one' => 2022,

            'degree_two' => 'Higher Secondary Certificate (HSC)',
            'institution_two' => 'Pirganj Govt. College',
            'start_year_two' => 2016,
            'end_year_two' => 2018,

            'degree_three' => 'Secondary School Certificate (SSC)',
            'institution_three' => 'Pirganj Pilot High School',
            'start_year_three' => 2011,
            'end_year_three' => 2016,

            // Work Experience One
            'work_position_one' => 'Backend Developer',
            'company_one' => 'Bangla Puzzle Limited',
            'work_start_year_one' => 2024,
            'work_end_year_one' => 2024,
            'work_description_one' => 'Developed a blog platform with SEO optimization using Laravel, Tailwind CSS, and JavaScript, increasing web traffic by 20%.',

            // Work Experience Two
            'work_position_two' => 'Laravel Developer',
            'company_two' => 'NGEN IT',
            'work_start_year_two' => 2022,
            'work_end_year_two' => 2024,
            'work_description_two' => 'Developed innovative technology solutions, including business automation and HR modules using Laravel and Bootstrap.',

            // Project One
            'project_title_one' => 'Service Platform',
            'project_technologies_one' => 'Laravel - blade - Tailwind CSS - JavaScript',
            'project_url_one' => 'http://service.bpwork.xyz',
            'project_description_one' => 'A service platform for business management.',

            // Project Two
            'project_title_two' => 'LMS',
            'project_technologies_two' => 'Laravel - blade - Tailwind CSS - JavaScript',
            'project_url_two' => 'http://imli.edumanagebd.website',
            'project_description_two' => 'A learning management system for schools.',

            // Social Profile One
            'social_platform_one' => 'LinkedIn',
            'social_profile_type_one' => 'Work Profile',
            'social_url_one' => 'https://linkedin.com/in/md-najmul-hasan',

            // Social Profile Two
            'social_platform_two' => 'GitHub',
            'social_profile_type_two' => 'Work Profile',
            'social_url_two' => 'https://github.com/Najmul-Hasan-Sobuj',

            // Skills
            'skills' => json_encode([
                'HTML',
                'CSS',
                'Bootstrap',
                'Tailwind',
                'PHP',
                'PHP OOP',
                'Laravel',
                'InertiaJS',
                'Livewire',
                'MySQL',
                'JavaScript',
                'jQuery',
                'Ajax',
                'React.js',
                'GitHub',
                'GitLab',
                'Postman',
                'RESTful API',
                'AI (Prompt Generator)'
            ]),

            // Hobbies and Interests
            'hobbies_interests' => json_encode([
                'Gaming',
                'Blogging',
                'Exploring new technologies',
                'More...'
            ]),

            'is_approved' => 1, // Setting approval status as approved

            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
