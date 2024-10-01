<x-admin-app-layout>
    <div class="grid place-items-center my-10">
        <div
            class="w-full max-w-screen-lg p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:border-gray-700">
            <div class="grid grid-cols-3 gap-4">
                <div class="text-lg font-semibold">Edit Resume Profile</div>
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
            <form method="POST" action="{{ route('admin.resume-profiles.update', $resumeProfile->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-2 gap-4">

                    <!-- First Name -->
                    <div>
                        <x-input-label for="first_name" :value="__('First Name')" />
                        <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                            :value="old('first_name', $resumeProfile->first_name)" required autofocus autocomplete="first_name" />
                        <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                    </div>

                    <!-- Last Name -->
                    <div>
                        <x-input-label for="last_name" :value="__('Last Name')" />
                        <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                            :value="old('last_name', $resumeProfile->last_name)" required autocomplete="last_name" />
                        <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                    </div>

                    <!-- Job Title -->
                    <div>
                        <x-input-label for="job_title" :value="__('Job Title')" />
                        <x-text-input id="job_title" class="block mt-1 w-full" type="text" name="job_title"
                            :value="old('job_title', $resumeProfile->job_title)" required autocomplete="job_title" />
                        <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
                    </div>

                    <!-- Photo URL -->
                    <div>
                        <x-input-label for="photo" :value="__('Photo')" />
                        <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo"
                            :value="old('photo', $resumeProfile->photo)" />
                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                    </div>

                    <!-- About -->
                    <div class="col-span-2">
                        <x-input-label for="about" :value="__('About')" />
                        <textarea id="about"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="about" required>{{ old('about', $resumeProfile->about) }}</textarea>
                        <x-input-error :messages="$errors->get('about')" class="mt-2" />
                    </div>

                    <!-- Location -->
                    <div>
                        <x-input-label for="location" :value="__('Location')" />
                        <x-text-input id="location" class="block mt-1 w-full" type="text" name="location"
                            :value="old('location', $resumeProfile->location)" required />
                        <x-input-error :messages="$errors->get('location')" class="mt-2" />
                    </div>

                    <!-- Phone -->
                    <div>
                        <x-input-label for="phone" :value="__('Phone')" />
                        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone', $resumeProfile->phone)" required />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>

                    <!-- Email -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email', $resumeProfile->email)" required />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Website -->
                    <div>
                        <x-input-label for="website" :value="__('Website')" />
                        <x-text-input id="website" class="block mt-1 w-full" type="url" name="website"
                            :value="old('website', $resumeProfile->website)" />
                        <x-input-error :messages="$errors->get('website')" class="mt-2" />
                    </div>

                    <!-- Degree -->
                    <div>
                        <x-input-label for="degree" :value="__('Degree')" />
                        <x-text-input id="degree" class="block mt-1 w-full" type="text" name="degree"
                            :value="old('degree', $resumeProfile->degree)" required />
                        <x-input-error :messages="$errors->get('degree')" class="mt-2" />
                    </div>

                    <!-- Institution -->
                    <div>
                        <x-input-label for="institution" :value="__('Institution')" />
                        <x-text-input id="institution" class="block mt-1 w-full" type="text" name="institution"
                            :value="old('institution', $resumeProfile->institution)" required />
                        <x-input-error :messages="$errors->get('institution')" class="mt-2" />
                    </div>

                    <!-- Start Year -->
                    <div>
                        <x-input-label for="start_year" :value="__('Start Year')" />
                        <x-text-input id="start_year" class="block mt-1 w-full" type="number" name="start_year"
                            :value="old('start_year', $resumeProfile->start_year)" required />
                        <x-input-error :messages="$errors->get('start_year')" class="mt-2" />
                    </div>

                    <!-- End Year -->
                    <div>
                        <x-input-label for="end_year" :value="__('End Year')" />
                        <x-text-input id="end_year" class="block mt-1 w-full" type="number" name="end_year"
                            :value="old('end_year', $resumeProfile->end_year)" />
                        <x-input-error :messages="$errors->get('end_year')" class="mt-2" />
                    </div>

                    <!-- Work Position -->
                    <div>
                        <x-input-label for="work_position" :value="__('Work Position')" />
                        <x-text-input id="work_position" class="block mt-1 w-full" type="text" name="work_position"
                            :value="old('work_position', $resumeProfile->work_position)" required />
                        <x-input-error :messages="$errors->get('work_position')" class="mt-2" />
                    </div>

                    <!-- Company -->
                    <div>
                        <x-input-label for="company" :value="__('Company')" />
                        <x-text-input id="company" class="block mt-1 w-full" type="text" name="company"
                            :value="old('company', $resumeProfile->company)" required />
                        <x-input-error :messages="$errors->get('company')" class="mt-2" />
                    </div>

                    <!-- Work Start Year -->
                    <div>
                        <x-input-label for="work_start_year" :value="__('Work Start Year')" />
                        <x-text-input id="work_start_year" class="block mt-1 w-full" type="number"
                            name="work_start_year" :value="old('work_start_year', $resumeProfile->work_start_year)" required />
                        <x-input-error :messages="$errors->get('work_start_year')" class="mt-2" />
                    </div>

                    <!-- Work End Year -->
                    <div>
                        <x-input-label for="work_end_year" :value="__('Work End Year')" />
                        <x-text-input id="work_end_year" class="block mt-1 w-full" type="number"
                            name="work_end_year" :value="old('work_end_year', $resumeProfile->work_end_year)" />
                        <x-input-error :messages="$errors->get('work_end_year')" class="mt-2" />
                    </div>

                    <!-- Work Description -->
                    <div class="col-span-2">
                        <x-input-label for="work_description" :value="__('Work Description')" />
                        <textarea id="work_description"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="work_description" required>{{ old('work_description', $resumeProfile->work_description) }}</textarea>
                        <x-input-error :messages="$errors->get('work_description')" class="mt-2" />
                    </div>

                    <!-- Project Title -->
                    <div>
                        <x-input-label for="project_title" :value="__('Project Title')" />
                        <x-text-input id="project_title" class="block mt-1 w-full" type="text"
                            name="project_title" :value="old('project_title', $resumeProfile->project_title)" required />
                        <x-input-error :messages="$errors->get('project_title')" class="mt-2" />
                    </div>

                    <!-- Project Technologies -->
                    <div>
                        <x-input-label for="project_technologies" :value="__('Project Technologies')" />
                        <x-text-input id="project_technologies" class="block mt-1 w-full" type="text"
                            name="project_technologies" :value="old('project_technologies', $resumeProfile->project_technologies)" required />
                        <x-input-error :messages="$errors->get('project_technologies')" class="mt-2" />
                    </div>

                    <!-- Project URL -->
                    <div>
                        <x-input-label for="project_url" :value="__('Project URL')" />
                        <x-text-input id="project_url" class="block mt-1 w-full" type="url" name="project_url"
                            :value="old('project_url', $resumeProfile->project_url)" />
                        <x-input-error :messages="$errors->get('project_url')" class="mt-2" />
                    </div>

                    <!-- Project Description -->
                    <div class="col-span-2">
                        <x-input-label for="project_description" :value="__('Project Description')" />
                        <textarea id="project_description"
                            class="form-input w-full text-gray-800 rounded-md bg-gray-50 border border-gray-300 focus:border-blue-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-300 p-2 transition duration-200 ease-in-out shadow-sm hover:border-blue-400"
                            name="project_description" required>{{ old('project_description', $resumeProfile->project_description) }}</textarea>
                        <x-input-error :messages="$errors->get('project_description')" class="mt-2" />
                    </div>

                    <!-- Social Platform -->
                    <div>
                        <x-input-label for="social_platform" :value="__('Social Platform')" />
                        <x-text-input id="social_platform" class="block mt-1 w-full" type="text"
                            name="social_platform" :value="old('social_platform', $resumeProfile->social_platform)" required />
                        <x-input-error :messages="$errors->get('social_platform')" class="mt-2" />
                    </div>

                    <!-- Social Profile Type -->
                    <div>
                        <x-input-label for="social_profile_type" :value="__('Social Profile Type')" />
                        <x-text-input id="social_profile_type" class="block mt-1 w-full" type="text"
                            name="social_profile_type" :value="old('social_profile_type', $resumeProfile->social_profile_type)" required />
                        <x-input-error :messages="$errors->get('social_profile_type')" class="mt-2" />
                    </div>

                    <!-- Social URL -->
                    <div>
                        <x-input-label for="social_url" :value="__('Social URL')" />
                        <x-text-input id="social_url" class="block mt-1 w-full" type="url" name="social_url"
                            :value="old('social_url', $resumeProfile->social_url)" />
                        <x-input-error :messages="$errors->get('social_url')" class="mt-2" />
                    </div>

                    <!-- Skills -->
                    <div class="col-span-2 mt-4">
                        <x-input-label for="skills" :value="__('Skills')" />
                        <select class="dropdown" name="skills[]" style="width: 100%" multiple required>
                            <option value="HTML"
                                {{ in_array('HTML', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>HTML
                            </option>
                            <option value="CSS"
                                {{ in_array('CSS', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>CSS
                            </option>
                            <option value="JavaScript"
                                {{ in_array('JavaScript', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>
                                JavaScript</option>
                            <option value="PHP"
                                {{ in_array('PHP', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>PHP
                            </option>
                            <option value="Laravel"
                                {{ in_array('Laravel', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>
                                Laravel</option>
                            <option value="Tailwind CSS"
                                {{ in_array('Tailwind CSS', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>
                                Tailwind CSS</option>
                            <option value="Bootstrap"
                                {{ in_array('Bootstrap', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>
                                Bootstrap</option>
                            <option value="MySQL"
                                {{ in_array('MySQL', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>MySQL
                            </option>
                            <option value="React.js"
                                {{ in_array('React.js', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>
                                React.js</option>
                            <option value="jQuery"
                                {{ in_array('jQuery', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>
                                jQuery</option>
                            <option value="AJAX"
                                {{ in_array('AJAX', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>AJAX
                            </option>
                            <option value="Postman"
                                {{ in_array('Postman', old('skills', $resumeProfile->skills)) ? 'selected' : '' }}>
                                Postman</option>
                        </select>
                        <x-input-error :messages="$errors->get('skills')" class="mt-2" />
                    </div>

                    <!-- Hobbies & Interests -->
                    <div class="col-span-2 mt-4">
                        <x-input-label for="hobbies_interests" :value="__('Hobbies & Interests')" />
                        <select class="dropdown" name="hobbies_interests[]" style="width: 100%" multiple required>
                            <option value="Photography"
                                {{ in_array('Photography', old('hobbies_interests', $resumeProfile->hobbies_interests)) ? 'selected' : '' }}>
                                Photography</option>
                            <option value="Traveling"
                                {{ in_array('Traveling', old('hobbies_interests', $resumeProfile->hobbies_interests)) ? 'selected' : '' }}>
                                Traveling</option>
                            <option value="Reading"
                                {{ in_array('Reading', old('hobbies_interests', $resumeProfile->hobbies_interests)) ? 'selected' : '' }}>
                                Reading</option>
                            <option value="Fitness"
                                {{ in_array('Fitness', old('hobbies_interests', $resumeProfile->hobbies_interests)) ? 'selected' : '' }}>
                                Fitness</option>
                            <option value="Music"
                                {{ in_array('Music', old('hobbies_interests', $resumeProfile->hobbies_interests)) ? 'selected' : '' }}>
                                Music</option>
                            <option value="Coding Challenges"
                                {{ in_array('Coding Challenges', old('hobbies_interests', $resumeProfile->hobbies_interests)) ? 'selected' : '' }}>
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
                            <option value="1"
                                {{ old('is_approved', $resumeProfile->is_approved) == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0"
                                {{ old('is_approved', $resumeProfile->is_approved) == '0' ? 'selected' : '' }}>In Active
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
