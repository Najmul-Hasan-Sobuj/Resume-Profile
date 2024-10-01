<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_profiles', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('first_name', 50) // User's first name
                ->comment('Example: Shaun');
            $table->string('last_name', 50)  // User's last name
                ->comment('Example: Castillo');
            $table->string('job_title', 100)  // Job title
                ->comment('Example: Web Developer');
            $table->string('photo', 255)->nullable() // URL to user's photo
                ->comment('Example: URL to photo');
            $table->text('about')  // Brief description about the user
                ->comment('Example: I am a skilled web developer...');
            $table->string('location', 100)  // User's location
                ->comment('Example: New York, USA');
            $table->string('phone', 20)  // Phone number
                ->comment('Example: +10 123 456 789');
            $table->string('email', 100)  // Email address
                ->comment('Example: shaun.castillo@example.com');
            $table->string('website', 255)->nullable() // Personal website URL
                ->comment('Example: https://example.com');

            // Education
            $table->string('degree', 100) // Degree obtained
                ->comment('Example: Bachelor in Computer Science');
            $table->string('institution', 100) // Educational institution
                ->comment('Example: University London, UK');
            $table->year('start_year')  // Start year of education
                ->comment('Example: 2000');
            $table->year('end_year')->nullable() // End year of education
                ->comment('Example: 2005');

            // Work Experience
            $table->string('work_position', 100) // Job position held
                ->comment('Example: Web Designer');
            $table->string('company', 100) // Company name
                ->comment('Example: Web Inspired LLC');
            $table->year('work_start_year') // Start year of work experience
                ->comment('Example: 2003');
            $table->year('work_end_year')->nullable() // End year of work experience
                ->comment('Example: 2008');
            $table->text('work_description') // Description of work responsibilities
                ->comment('Example: As a Web Designer at Web Inspired LLC...');

            // Projects
            $table->string('project_title', 100) // Title of the project
                ->comment('Example: Project Management SaaS');
            $table->string('project_technologies', 100) // Technologies used in the project
                ->comment('Example: Laravel - Vue.js');
            $table->string('project_url', 255)->nullable() // URL to the project
                ->comment('Example: https://example.com');
            $table->text('project_description') // Description of the project
                ->comment('Example: In my role with a Project Management SaaS...');

            // Social Profiles
            $table->string('social_platform', 50) // Name of the social platform
                ->comment('Example: LinkedIn');
            $table->string('social_profile_type', 50) // Type of profile (Work or Personal)
                ->comment('Example: Work Profile');
            $table->string('social_url', 255) // URL of the social profile
                ->comment('Example: https://linkedin.com/shaun.castillo');

            // Skills (JSON field for flexibility)
            $table->json('skills') // List of skills
                ->comment('Example: ["HTML", "CSS", "JavaScript"]');

            // Hobbies & Interests (JSON field)
            $table->json('hobbies_interests') // List of hobbies and interests
                ->comment('Example: ["Photography", "Reading"]');

            $table->boolean('is_approved')->default(0)->comment('Approval status of the user: 0 (not approved), 1 (approved)');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume_profiles');
    }
};
