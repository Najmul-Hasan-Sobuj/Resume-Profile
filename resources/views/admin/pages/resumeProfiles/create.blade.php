<x-admin-app-layout>
    <div class="grid place-items-center my-10">
        <div
            class="w-full max-w-screen-lg p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:border-gray-700">
            <div class="grid grid-cols-3 gap-4">
                <div class="text-lg font-semibold">Create Resume Profile</div>
                <div></div>
                <div class="justify-self-end">
                    <a href="{{ route('admin.resume-profiles.index') }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Back</a>
                </div>
            </div>
        </div>
    </div>

    <div class="grid place-items-center">
        <div
            class="w-full max-w-screen-lg p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:border-gray-700">
            <form method="POST" action="{{ route('admin.resume-profiles.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-2 gap-4">

                    <!-- First Name -->
                    <div>
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                            :value="old('first_name')" required autofocus autocomplete="first_name" />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div>
                        <x-input-label for="last_name" :value="__('Last Name')" />
                        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                            :value="old('last_name')" required autocomplete="last_name" />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- Job Title -->
                    <div>
                        <x-input-label for="job_title" :value="__('Job Title')" />
                        <x-text-input id="job_title" class="block mt-1 w-full" type="text" name="job_title"
                            :value="old('job_title')" required autocomplete="job_title" />
                        <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
                    </div>

                    <!-- Photo URL -->
                    <div>
                        <x-input-label for="photo" :value="__('Photo URL')" />
                        <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo"
                            :value="old('photo')" required />
                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                    </div>

                    <!-- About -->
                    <div class="col-span-2">
                        <x-input-label for="about" :value="__('About')" />
                        <textarea id="about"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="about" required>{{ old('about') }}</textarea>
                        <x-input-error :messages="$errors->get('about')" class="mt-2" />
                    </div>

                    <!-- Location -->
                    <div>
                        <x-input-label for="location" :value="__('Location')" />
                        <x-text-input id="location" class="block mt-1 w-full" type="text" name="location"
                            :value="old('location')" required />
                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div>
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone')" required />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Website -->
                    <div>
                        <x-input-label for="website" :value="__('Website')" />
                        <x-text-input id="website" class="block mt-1 w-full" type="url" name="website"
                            :value="old('website')" />
                        <x-input-error :messages="$errors->get('website')" class="mt-2" />
                    </div>

                    <!-- Degree One -->
                    <div>
                        <x-input-label for="degree_one" :value="__('Degree One')" />
                        <x-text-input id="degree_one" class="block mt-1 w-full" type="text" name="degree_one"
                            :value="old('degree_one')" required />
                        <x-input-error :messages="$errors->get('degree_one')" class="mt-2" />
                    </div>

                    <!-- Institution One -->
                    <div>
                        <x-input-label for="institution_one" :value="__('Institution One')" />
                        <x-text-input id="institution_one" class="block mt-1 w-full" type="text"
                            name="institution_one" :value="old('institution_one')" required />
                        <x-input-error :messages="$errors->get('institution_one')" class="mt-2" />
                    </div>

                    <!-- Start Year One -->
                    <div>
                        <x-input-label for="start_year_one" :value="__('Start Year One')" />
                        <x-text-input id="start_year_one" class="block mt-1 w-full" type="number" name="start_year_one"
                            :value="old('start_year_one')" required />
                        <x-input-error :messages="$errors->get('start_year_one')" class="mt-2" />
                    </div>

                    <!-- End Year One -->
                    <div>
                        <x-input-label for="end_year_one" :value="__('End Year One')" />
                        <x-text-input id="end_year_one" class="block mt-1 w-full" type="number" name="end_year_one"
                            :value="old('end_year_one')" />
                        <x-input-error :messages="$errors->get('end_year_one')" class="mt-2" />
                    </div>

                    <!-- Degree Two -->
                    <div>
                        <x-input-label for="degree_two" :value="__('Degree Two')" />
                        <x-text-input id="degree_two" class="block mt-1 w-full" type="text" name="degree_two"
                            :value="old('degree_two')" required />
                        <x-input-error :messages="$errors->get('degree_two')" class="mt-2" />
                    </div>

                    <!-- Institution Two -->
                    <div>
                        <x-input-label for="institution_two" :value="__('Institution Two')" />
                        <x-text-input id="institution_two" class="block mt-1 w-full" type="text"
                            name="institution_two" :value="old('institution_two')" required />
                        <x-input-error :messages="$errors->get('institution_two')" class="mt-2" />
                    </div>

                    <!-- Start Year Two -->
                    <div>
                        <x-input-label for="start_year_two" :value="__('Start Year Two')" />
                        <x-text-input id="start_year_two" class="block mt-1 w-full" type="number"
                            name="start_year_two" :value="old('start_year_two')" required />
                        <x-input-error :messages="$errors->get('start_year_two')" class="mt-2" />
                    </div>

                    <!-- End Year Two -->
                    <div>
                        <x-input-label for="end_year_two" :value="__('End Year Two')" />
                        <x-text-input id="end_year_two" class="block mt-1 w-full" type="number" name="end_year_two"
                            :value="old('end_year_two')" />
                        <x-input-error :messages="$errors->get('end_year_two')" class="mt-2" />
                    </div>

                    <!-- Degree Three -->
                    <div>
                        <x-input-label for="degree_three" :value="__('Degree Three')" />
                        <x-text-input id="degree_three" class="block mt-1 w-full" type="text" name="degree_three"
                            :value="old('degree_three')" required />
                        <x-input-error :messages="$errors->get('degree_three')" class="mt-2" />
                    </div>

                    <!-- Institution Three -->
                    <div>
                        <x-input-label for="institution_three" :value="__('Institution Three')" />
                        <x-text-input id="institution_three" class="block mt-1 w-full" type="text"
                            name="institution_three" :value="old('institution_three')" required />
                        <x-input-error :messages="$errors->get('institution_three')" class="mt-2" />
                    </div>

                    <!-- Start Year Three -->
                    <div>
                        <x-input-label for="start_year_three" :value="__('Start Year Three')" />
                        <x-text-input id="start_year_three" class="block mt-1 w-full" type="number"
                            name="start_year_three" :value="old('start_year_three')" required />
                        <x-input-error :messages="$errors->get('start_year_three')" class="mt-2" />
                    </div>

                    <!-- End Year Three -->
                    <div>
                        <x-input-label for="end_year_three" :value="__('End Year Three')" />
                        <x-text-input id="end_year_three" class="block mt-1 w-full" type="number"
                            name="end_year_three" :value="old('end_year_three')" />
                        <x-input-error :messages="$errors->get('end_year_three')" class="mt-2" />
                    </div>

                    <!-- Work Position One -->
                    <div>
                        <x-input-label for="work_position_one" :value="__('Work Position One')" />
                        <x-text-input id="work_position_one" class="block mt-1 w-full" type="text"
                            name="work_position_one" :value="old('work_position_one')" required />
                        <x-input-error :messages="$errors->get('work_position_one')" class="mt-2" />
                    </div>

                    <!-- Company One -->
                    <div>
                        <x-input-label for="company_one" :value="__('Company One')" />
                        <x-text-input id="company_one" class="block mt-1 w-full" type="text" name="company_one"
                            :value="old('company_one')" required />
                        <x-input-error :messages="$errors->get('company_one')" class="mt-2" />
                    </div>

                    <!-- Work Start Year One -->
                    <div>
                        <x-input-label for="work_start_year_one" :value="__('Work Start Year One')" />
                        <x-text-input id="work_start_year_one" class="block mt-1 w-full" type="number"
                            name="work_start_year_one" :value="old('work_start_year_one')" required />
                        <x-input-error :messages="$errors->get('work_start_year_one')" class="mt-2" />
                    </div>

                    <!-- Work End Year One -->
                    <div>
                        <x-input-label for="work_end_year_one" :value="__('Work End Year One')" />
                        <x-text-input id="work_end_year_one" class="block mt-1 w-full" type="number"
                            name="work_end_year_one" :value="old('work_end_year_one')" />
                        <x-input-error :messages="$errors->get('work_end_year_one')" class="mt-2" />
                    </div>

                    <!-- Work Description One -->
                    <div class="col-span-2">
                        <x-input-label for="work_description_one" :value="__('Work Description One')" />
                        <textarea id="work_description_one"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="work_description_one" required>{{ old('work_description_one') }}</textarea>
                        <x-input-error :messages="$errors->get('work_description_one')" class="mt-2" />
                    </div>

                    <!-- Work Position Two -->
                    <div>
                        <x-input-label for="work_position_two" :value="__('Work Position Two')" />
                        <x-text-input id="work_position_two" class="block mt-1 w-full" type="text"
                            name="work_position_two" :value="old('work_position_two')" required />
                        <x-input-error :messages="$errors->get('work_position_two')" class="mt-2" />
                    </div>

                    <!-- Company Two -->
                    <div>
                        <x-input-label for="company_two" :value="__('Company Two')" />
                        <x-text-input id="company_two" class="block mt-1 w-full" type="text" name="company_two"
                            :value="old('company_two')" required />
                        <x-input-error :messages="$errors->get('company_two')" class="mt-2" />
                    </div>

                    <!-- Work Start Year Two -->
                    <div>
                        <x-input-label for="work_start_year_two" :value="__('Work Start Year Two')" />
                        <x-text-input id="work_start_year_two" class="block mt-1 w-full" type="number"
                            name="work_start_year_two" :value="old('work_start_year_two')" required />
                        <x-input-error :messages="$errors->get('work_start_year_two')" class="mt-2" />
                    </div>

                    <!-- Work End Year Two -->
                    <div>
                        <x-input-label for="work_end_year_two" :value="__('Work End Year Two')" />
                        <x-text-input id="work_end_year_two" class="block mt-1 w-full" type="number"
                            name="work_end_year_two" :value="old('work_end_year_two')" />
                        <x-input-error :messages="$errors->get('work_end_year_two')" class="mt-2" />
                    </div>

                    <!-- Work Description Two -->
                    <div class="col-span-2">
                        <x-input-label for="work_description_two" :value="__('Work Description Two')" />
                        <textarea id="work_description_two"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="work_description_two" required>{{ old('work_description_two') }}</textarea>
                        <x-input-error :messages="$errors->get('work_description_two')" class="mt-2" />
                    </div>

                    <!-- Work Position Three -->
                    <div>
                        <x-input-label for="work_position_three" :value="__('Work Position Three')" />
                        <x-text-input id="work_position_three" class="block mt-1 w-full" type="text"
                            name="work_position_three" :value="old('work_position_three')" required />
                        <x-input-error :messages="$errors->get('work_position_three')" class="mt-2" />
                    </div>

                    <!-- Company Three -->
                    <div>
                        <x-input-label for="company_three" :value="__('Company Three')" />
                        <x-text-input id="company_three" class="block mt-1 w-full" type="text"
                            name="company_three" :value="old('company_three')" required />
                        <x-input-error :messages="$errors->get('company_three')" class="mt-2" />
                    </div>

                    <!-- Work Start Year Three -->
                    <div>
                        <x-input-label for="work_start_year_three" :value="__('Work Start Year Three')" />
                        <x-text-input id="work_start_year_three" class="block mt-1 w-full" type="number"
                            name="work_start_year_three" :value="old('work_start_year_three')" required />
                        <x-input-error :messages="$errors->get('work_start_year_three')" class="mt-2" />
                    </div>

                    <!-- Work End Year Three -->
                    <div>
                        <x-input-label for="work_end_year_three" :value="__('Work End Year Three')" />
                        <x-text-input id="work_end_year_three" class="block mt-1 w-full" type="number"
                            name="work_end_year_three" :value="old('work_end_year_three')" />
                        <x-input-error :messages="$errors->get('work_end_year_three')" class="mt-2" />
                    </div>

                    <!-- Work Description Three -->
                    <div class="col-span-2">
                        <x-input-label for="work_description_three" :value="__('Work Description Three')" />
                        <textarea id="work_description_three"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="work_description_three" required>{{ old('work_description_three') }}</textarea>
                        <x-input-error :messages="$errors->get('work_description_three')" class="mt-2" />
                    </div>

                    <!-- Project Title One -->
                    <div>
                        <x-input-label for="project_title_one" :value="__('Project Title One')" />
                        <x-text-input id="project_title_one" class="block mt-1 w-full" type="text"
                            name="project_title_one" :value="old('project_title_one')" required />
                        <x-input-error :messages="$errors->get('project_title_one')" class="mt-2" />
                    </div>

                    <!-- Project Technologies One -->
                    <div>
                        <x-input-label for="project_technologies_one" :value="__('Project Technologies One')" />
                        <x-text-input id="project_technologies_one" class="block mt-1 w-full" type="text"
                            name="project_technologies_one" :value="old('project_technologies_one')" required />
                        <x-input-error :messages="$errors->get('project_technologies_one')" class="mt-2" />
                    </div>

                    <!-- Project URL One -->
                    <div>
                        <x-input-label for="project_url_one" :value="__('Project URL One')" />
                        <x-text-input id="project_url_one" class="block mt-1 w-full" type="url"
                            name="project_url_one" :value="old('project_url_one')" />
                        <x-input-error :messages="$errors->get('project_url_one')" class="mt-2" />
                    </div>

                    <!-- Project Description One -->
                    <div class="col-span-2">
                        <x-input-label for="project_description_one" :value="__('Project Description One')" />
                        <textarea id="project_description_one"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="project_description_one" required>{{ old('project_description_one') }}</textarea>
                        <x-input-error :messages="$errors->get('project_description_one')" class="mt-2" />
                    </div>

                    <!-- Project Title Two -->
                    <div>
                        <x-input-label for="project_title_two" :value="__('Project Title Two')" />
                        <x-text-input id="project_title_two" class="block mt-1 w-full" type="text"
                            name="project_title_two" :value="old('project_title_two')" required />
                        <x-input-error :messages="$errors->get('project_title_two')" class="mt-2" />
                    </div>

                    <!-- Project Technologies Two -->
                    <div>
                        <x-input-label for="project_technologies_two" :value="__('Project Technologies Two')" />
                        <x-text-input id="project_technologies_two" class="block mt-1 w-full" type="text"
                            name="project_technologies_two" :value="old('project_technologies_two')" required />
                        <x-input-error :messages="$errors->get('project_technologies_two')" class="mt-2" />
                    </div>

                    <!-- Project URL Two -->
                    <div>
                        <x-input-label for="project_url_two" :value="__('Project URL Two')" />
                        <x-text-input id="project_url_two" class="block mt-1 w-full" type="url"
                            name="project_url_two" :value="old('project_url_two')" />
                        <x-input-error :messages="$errors->get('project_url_two')" class="mt-2" />
                    </div>

                    <!-- Project Description Two -->
                    <div class="col-span-2">
                        <x-input-label for="project_description_two" :value="__('Project Description Two')" />
                        <textarea id="project_description_two"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="project_description_two" required>{{ old('project_description_two') }}</textarea>
                        <x-input-error :messages="$errors->get('project_description_two')" class="mt-2" />
                    </div>

                    <!-- Project Title Three -->
                    <div>
                        <x-input-label for="project_title_three" :value="__('Project Title Three')" />
                        <x-text-input id="project_title_three" class="block mt-1 w-full" type="text"
                            name="project_title_three" :value="old('project_title_three')" required />
                        <x-input-error :messages="$errors->get('project_title_three')" class="mt-2" />
                    </div>

                    <!-- Project Technologies Three -->
                    <div>
                        <x-input-label for="project_technologies_three" :value="__('Project Technologies Three')" />
                        <x-text-input id="project_technologies_three" class="block mt-1 w-full" type="text"
                            name="project_technologies_three" :value="old('project_technologies_three')" required />
                        <x-input-error :messages="$errors->get('project_technologies_three')" class="mt-2" />
                    </div>

                    <!-- Project URL Three -->
                    <div>
                        <x-input-label for="project_url_three" :value="__('Project URL Three')" />
                        <x-text-input id="project_url_three" class="block mt-1 w-full" type="url"
                            name="project_url_three" :value="old('project_url_three')" />
                        <x-input-error :messages="$errors->get('project_url_three')" class="mt-2" />
                    </div>

                    <!-- Project Description Three -->
                    <div class="col-span-2">
                        <x-input-label for="project_description_three" :value="__('Project Description Three')" />
                        <textarea id="project_description_three"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="project_description_three" required>{{ old('project_description_three') }}</textarea>
                        <x-input-error :messages="$errors->get('project_description_three')" class="mt-2" />
                    </div>

                    <!-- Project Title Four -->
                    <div>
                        <x-input-label for="project_title_four" :value="__('Project Title Four')" />
                        <x-text-input id="project_title_four" class="block mt-1 w-full" type="text"
                            name="project_title_four" :value="old('project_title_four')" required />
                        <x-input-error :messages="$errors->get('project_title_four')" class="mt-2" />
                    </div>

                    <!-- Project Technologies Four -->
                    <div>
                        <x-input-label for="project_technologies_four" :value="__('Project Technologies Four')" />
                        <x-text-input id="project_technologies_four" class="block mt-1 w-full" type="text"
                            name="project_technologies_four" :value="old('project_technologies_four')" required />
                        <x-input-error :messages="$errors->get('project_technologies_four')" class="mt-2" />
                    </div>

                    <!-- Project URL Four -->
                    <div>
                        <x-input-label for="project_url_four" :value="__('Project URL Four')" />
                        <x-text-input id="project_url_four" class="block mt-1 w-full" type="url"
                            name="project_url_four" :value="old('project_url_four')" />
                        <x-input-error :messages="$errors->get('project_url_four')" class="mt-2" />
                    </div>

                    <!-- Project Description Four -->
                    <div class="col-span-2">
                        <x-input-label for="project_description_four" :value="__('Project Description Four')" />
                        <textarea id="project_description_four"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="project_description_four" required>{{ old('project_description_four') }}</textarea>
                        <x-input-error :messages="$errors->get('project_description_four')" class="mt-2" />
                    </div>

                    <!-- Project Title Five -->
                    <div>
                        <x-input-label for="project_title_five" :value="__('Project Title Five')" />
                        <x-text-input id="project_title_five" class="block mt-1 w-full" type="text"
                            name="project_title_five" :value="old('project_title_five')" required />
                        <x-input-error :messages="$errors->get('project_title_five')" class="mt-2" />
                    </div>

                    <!-- Project Technologies Five -->
                    <div>
                        <x-input-label for="project_technologies_five" :value="__('Project Technologies Five')" />
                        <x-text-input id="project_technologies_five" class="block mt-1 w-full" type="text"
                            name="project_technologies_five" :value="old('project_technologies_five')" required />
                        <x-input-error :messages="$errors->get('project_technologies_five')" class="mt-2" />
                    </div>

                    <!-- Project URL Five -->
                    <div>
                        <x-input-label for="project_url_five" :value="__('Project URL Five')" />
                        <x-text-input id="project_url_five" class="block mt-1 w-full" type="url"
                            name="project_url_five" :value="old('project_url_five')" />
                        <x-input-error :messages="$errors->get('project_url_five')" class="mt-2" />
                    </div>

                    <!-- Project Description Five -->
                    <div class="col-span-2">
                        <x-input-label for="project_description_five" :value="__('Project Description Five')" />
                        <textarea id="project_description_five"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="project_description_five" required>{{ old('project_description_five') }}</textarea>
                        <x-input-error :messages="$errors->get('project_description_five')" class="mt-2" />
                    </div>

                    <!-- Social Platform One -->
                    <div>
                        <x-input-label for="social_platform_one" :value="__('Social Platform One')" />
                        <x-text-input id="social_platform_one" class="block mt-1 w-full" type="text"
                            name="social_platform_one" :value="old('social_platform_one')" required />
                        <x-input-error :messages="$errors->get('social_platform_one')" class="mt-2" />
                    </div>

                    <!-- Social Profile Type One -->
                    <div>
                        <x-input-label for="social_profile_type_one" :value="__('Social Profile Type One')" />
                        <x-text-input id="social_profile_type_one" class="block mt-1 w-full" type="text"
                            name="social_profile_type_one" :value="old('social_profile_type_one')" required />
                        <x-input-error :messages="$errors->get('social_profile_type_one')" class="mt-2" />
                    </div>

                    <!-- Social URL One -->
                    <div>
                        <x-input-label for="social_url_one" :value="__('Social URL One')" />
                        <x-text-input id="social_url_one" class="block mt-1 w-full" type="url"
                            name="social_url_one" :value="old('social_url_one')" required />
                        <x-input-error :messages="$errors->get('social_url_one')" class="mt-2" />
                    </div>

                    <!-- Social Platform Two -->
                    <div>
                        <x-input-label for="social_platform_two" :value="__('Social Platform Two')" />
                        <x-text-input id="social_platform_two" class="block mt-1 w-full" type="text"
                            name="social_platform_two" :value="old('social_platform_two')" required />
                        <x-input-error :messages="$errors->get('social_platform_two')" class="mt-2" />
                    </div>

                    <!-- Social Profile Type Two -->
                    <div>
                        <x-input-label for="social_profile_type_two" :value="__('Social Profile Type Two')" />
                        <x-text-input id="social_profile_type_two" class="block mt-1 w-full" type="text"
                            name="social_profile_type_two" :value="old('social_profile_type_two')" required />
                        <x-input-error :messages="$errors->get('social_profile_type_two')" class="mt-2" />
                    </div>

                    <!-- Social URL Two -->
                    <div>
                        <x-input-label for="social_url_two" :value="__('Social URL Two')" />
                        <x-text-input id="social_url_two" class="block mt-1 w-full" type="url"
                            name="social_url_two" :value="old('social_url_two')" required />
                        <x-input-error :messages="$errors->get('social_url_two')" class="mt-2" />
                    </div>

                    <!-- Social Platform Three -->
                    <div>
                        <x-input-label for="social_platform_three" :value="__('Social Platform Three')" />
                        <x-text-input id="social_platform_three" class="block mt-1 w-full" type="text"
                            name="social_platform_three" :value="old('social_platform_three')" required />
                        <x-input-error :messages="$errors->get('social_platform_three')" class="mt-2" />
                    </div>

                    <!-- Social Profile Type Three -->
                    <div>
                        <x-input-label for="social_profile_type_three" :value="__('Social Profile Type Three')" />
                        <x-text-input id="social_profile_type_three" class="block mt-1 w-full" type="text"
                            name="social_profile_type_three" :value="old('social_profile_type_three')" required />
                        <x-input-error :messages="$errors->get('social_profile_type_three')" class="mt-2" />
                    </div>

                    <!-- Social URL Three -->
                    <div>
                        <x-input-label for="social_url_three" :value="__('Social URL Three')" />
                        <x-text-input id="social_url_three" class="block mt-1 w-full" type="url"
                            name="social_url_three" :value="old('social_url_three')" required />
                        <x-input-error :messages="$errors->get('social_url_three')" class="mt-2" />
                    </div>


                    <!-- Skills -->
                    <div class="col-span-2 mt-4">
                        <x-input-label for="skills" :value="__('Skills')" />
                        <select class="dropdown" name="skills[]" style="width: 100%" multiple required>
                            <option value="HTML" {{ in_array('HTML', old('skills', [])) ? 'selected' : '' }}>HTML
                            </option>
                            <option value="CSS" {{ in_array('CSS', old('skills', [])) ? 'selected' : '' }}>CSS
                            </option>
                            <option value="JavaScript"
                                {{ in_array('JavaScript', old('skills', [])) ? 'selected' : '' }}>JavaScript</option>
                            <option value="PHP" {{ in_array('PHP', old('skills', [])) ? 'selected' : '' }}>PHP
                            </option>
                            <option value="Laravel" {{ in_array('Laravel', old('skills', [])) ? 'selected' : '' }}>
                                Laravel</option>
                            <option value="Tailwind CSS"
                                {{ in_array('Tailwind CSS', old('skills', [])) ? 'selected' : '' }}>Tailwind CSS
                            </option>
                            <option value="Bootstrap"
                                {{ in_array('Bootstrap', old('skills', [])) ? 'selected' : '' }}>Bootstrap</option>
                            <option value="MySQL" {{ in_array('MySQL', old('skills', [])) ? 'selected' : '' }}>MySQL
                            </option>
                            <option value="React.js" {{ in_array('React.js', old('skills', [])) ? 'selected' : '' }}>
                                React.js</option>
                            <option value="jQuery" {{ in_array('jQuery', old('skills', [])) ? 'selected' : '' }}>
                                jQuery</option>
                            <option value="AJAX" {{ in_array('AJAX', old('skills', [])) ? 'selected' : '' }}>AJAX
                            </option>
                            <option value="Postman" {{ in_array('Postman', old('skills', [])) ? 'selected' : '' }}>
                                Postman</option>
                        </select>
                        <x-input-error :messages="$errors->get('skills')" class="mt-2" />
                    </div>

                    <!-- Hobbies & Interests -->
                    <div class="col-span-2 mt-4">
                        <x-input-label for="hobbies_interests" :value="__('Hobbies & Interests')" />
                        <select class="dropdown" name="hobbies_interests[]" style="width: 100%" multiple required>
                            <option value="Photography"
                                {{ in_array('Photography', old('hobbies_interests', [])) ? 'selected' : '' }}>
                                Photography</option>
                            <option value="Traveling"
                                {{ in_array('Traveling', old('hobbies_interests', [])) ? 'selected' : '' }}>Traveling
                            </option>
                            <option value="Reading"
                                {{ in_array('Reading', old('hobbies_interests', [])) ? 'selected' : '' }}>Reading
                            </option>
                            <option value="Fitness"
                                {{ in_array('Fitness', old('hobbies_interests', [])) ? 'selected' : '' }}>Fitness
                            </option>
                            <option value="Music"
                                {{ in_array('Music', old('hobbies_interests', [])) ? 'selected' : '' }}>Music</option>
                            <option value="Coding Challenges"
                                {{ in_array('Coding Challenges', old('hobbies_interests', [])) ? 'selected' : '' }}>
                                Coding Challenges</option>
                        </select>
                        <x-input-error :messages="$errors->get('hobbies_interests')" class="mt-2" />
                    </div>

                    <!-- Is Approved -->
                    <div>
                        <label for="is_approved" class="block text-gray-700">Status</label>
                        <select name="is_approved" id="is_approved"
                            class="w-full mt-1 p-2 border border-gray-300 rounded-lg" required>
                            <option value="">Select Status</option>
                            <option value="1" {{ old('is_approved') == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('is_approved') == '0' ? 'selected' : '' }}>In Active
                            </option>
                        </select>
                        @error('is_approved')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-admin-app-layout>
