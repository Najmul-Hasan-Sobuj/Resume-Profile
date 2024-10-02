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
            $table->string('degree_one', 100) // Degree obtained
                ->comment('Example: Bachelor in Computer Science');
            $table->string('institution_one', 100) // Educational institution
                ->comment('Example: University London, UK');
            $table->year('start_year_one')  // Start year of education
                ->comment('Example: 2000');
            $table->year('end_year_one')->nullable() // End year of education
                ->comment('Example: 2005');

            // Education Two
            $table->string('degree_two', 100) // Degree obtained
                ->comment('Example: Master in Computer Science');
            $table->string('institution_two', 100) // Educational institution
                ->comment('Example: Harvard University, USA');
            $table->year('start_year_two')  // Start year of education
                ->comment('Example: 2006');
            $table->year('end_year_two')->nullable() // End year of education
                ->comment('Example: 2010');

            // Education Three
            $table->string('degree_three', 100) // Degree obtained
                ->comment('Example: PhD in Computer Science');
            $table->string('institution_three', 100) // Educational institution
                ->comment('Example: MIT, USA');
            $table->year('start_year_three')  // Start year of education
                ->comment('Example: 2011');
            $table->year('end_year_three')->nullable() // End year of education
                ->comment('Example: 2015');

            // Work Experience One
            $table->string('work_position_one', 100)->nullable() // Job position held
                ->comment('Example: Web Designer');
            $table->string('company_one', 100)->nullable() // Company name
                ->comment('Example: Web Inspired LLC');
            $table->year('work_start_year_one')->nullable() // Start year of work experience
                ->comment('Example: 2003');
            $table->year('work_end_year_one')->nullable() // End year of work experience
                ->comment('Example: 2008');
            $table->text('work_description_one')->nullable() // Description of work responsibilities
                ->comment('Example: As a Web Designer at Web Inspired LLC...');

            // Work Experience Two
            $table->string('work_position_two', 100)->nullable() // Job position held
                ->comment('Example: Software Engineer');
            $table->string('company_two', 100)->nullable() // Company name
                ->comment('Example: Tech Innovations Inc.');
            $table->year('work_start_year_two')->nullable() // Start year of work experience
                ->comment('Example: 2009');
            $table->year('work_end_year_two')->nullable() // End year of work experience
                ->comment('Example: 2013');
            $table->text('work_description_two')->nullable() // Description of work responsibilities
                ->comment('Example: As a Software Engineer at Tech Innovations Inc....');

            // Work Experience Three
            $table->string('work_position_three', 100)->nullable() // Job position held
                ->comment('Example: Senior Developer');
            $table->string('company_three', 100)->nullable() // Company name
                ->comment('Example: Creative Solutions Ltd.');
            $table->year('work_start_year_three')->nullable() // Start year of work experience
                ->comment('Example: 2014');
            $table->year('work_end_year_three')->nullable() // End year of work experience
                ->comment('Example: Present');
            $table->text('work_description_three')->nullable() // Description of work responsibilities
                ->comment('Example: As a Senior Developer at Creative Solutions Ltd....');

            // Project One
            $table->string('project_title_one', 100)->nullable() // Title of the project
                ->comment('Example: Project Management SaaS');
            $table->string('project_technologies_one', 100)->nullable() // Technologies used in the project
                ->comment('Example: Laravel - Vue.js');
            $table->string('project_url_one', 255)->nullable() // URL to the project
                ->comment('Example: https://example.com');
            $table->text('project_description_one')->nullable() // Description of the project
                ->comment('Example: In my role with a Project Management SaaS...');

            // Project Two
            $table->string('project_title_two', 100)->nullable() // Title of the project
                ->comment('Example: E-commerce Platform');
            $table->string('project_technologies_two', 100)->nullable() // Technologies used in the project
                ->comment('Example: React - Node.js');
            $table->string('project_url_two', 255)->nullable() // URL to the project
                ->comment('Example: https://example.com/ecommerce');
            $table->text('project_description_two')->nullable() // Description of the project
                ->comment('Example: Developed an E-commerce platform for...');

            // Project Three
            $table->string('project_title_three', 100)->nullable() // Title of the project
                ->comment('Example: Blogging Platform');
            $table->string('project_technologies_three', 100)->nullable() // Technologies used in the project
                ->comment('Example: PHP - MySQL');
            $table->string('project_url_three', 255)->nullable() // URL to the project
                ->comment('Example: https://example.com/blog');
            $table->text('project_description_three')->nullable() // Description of the project
                ->comment('Example: Created a blogging platform with...');

            // Project Four
            $table->string('project_title_four', 100)->nullable() // Title of the project
                ->comment('Example: Portfolio Website');
            $table->string('project_technologies_four', 100)->nullable() // Technologies used in the project
                ->comment('Example: HTML - CSS - JavaScript');
            $table->string('project_url_four', 255)->nullable() // URL to the project
                ->comment('Example: https://example.com/portfolio');
            $table->text('project_description_four')->nullable() // Description of the project
                ->comment('Example: Designed a personal portfolio website...');

            // Project Five
            $table->string('project_title_five', 100)->nullable() // Title of the project
                ->comment('Example: Task Management App');
            $table->string('project_technologies_five', 100)->nullable() // Technologies used in the project
                ->comment('Example: Laravel - Livewire');
            $table->string('project_url_five', 255)->nullable() // URL to the project
                ->comment('Example: https://example.com/task-management');
            $table->text('project_description_five')->nullable() // Description of the project
                ->comment('Example: Developed a task management application that...');

            // Social Profile One
            $table->string('social_platform_one', 50)->nullable() // Name of the social platform
                ->comment('Example: LinkedIn');
            $table->string('social_profile_type_one', 50)->nullable() // Type of profile (Work or Personal)
                ->comment('Example: Work Profile');
            $table->string('social_url_one', 255)->nullable() // URL of the social profile
                ->comment('Example: https://linkedin.com/shaun.castillo');

            // Social Profile Two
            $table->string('social_platform_two', 50)->nullable() // Name of the social platform
                ->comment('Example: GitHub');
            $table->string('social_profile_type_two', 50)->nullable() // Type of profile (Work or Personal)
                ->comment('Example: Personal Profile');
            $table->string('social_url_two', 255)->nullable() // URL of the social profile
                ->comment('Example: https://github.com/yourusername');

            // Social Profile Three
            $table->string('social_platform_three', 50)->nullable() // Name of the social platform
                ->comment('Example: Twitter');
            $table->string('social_profile_type_three', 50)->nullable() // Type of profile (Work or Personal)
                ->comment('Example: Personal Profile');
            $table->string('social_url_three', 255)->nullable() // URL of the social profile
                ->comment('Example: https://twitter.com/yourusername');

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
