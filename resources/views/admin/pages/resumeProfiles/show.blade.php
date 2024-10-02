<x-admin-app-layout>
    <div class="grid place-items-center my-10">
        <div
            class="w-full max-w-screen-lg p-6 bg-white border border-gray-200 rounded-lg shadow-lg dark:border-gray-700">
            <!-- Page Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-xl font-semibold text-gray-800">Resume Profile Details</h1>
                <a href="{{ route('admin.resume-profiles.index') }}"
                    class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Back
                </a>
            </div>

            <!-- Resume Profile Data -->
            <dl class="divide-y divide-gray-200">
                <!-- First Name -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">First Name:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->first_name }}</dd>
                </div>

                <!-- Last Name -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Last Name:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->last_name }}</dd>
                </div>

                <!-- Job Title -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Job Title:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->job_title }}</dd>
                </div>

                <!-- Photo URL -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Photo:</dt>
                    <dd class="text-gray-800">
                        <img src="{{ $resumeProfile->photo }}" alt="Profile Photo" class="h-24 w-24 rounded-full" />
                    </dd>
                </div>

                <!-- About -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">About:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->about }}</dd>
                </div>

                <!-- Location -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Location:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->location }}</dd>
                </div>

                <!-- Phone -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Phone:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->phone }}</dd>
                </div>

                <!-- Email -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Email:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->email }}</dd>
                </div>

                <!-- Website -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Website:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->website }}</dd>
                </div>

                <div class="py-4">
                    <h3 class="text-lg font-semibold">Education One</h3>

                    <!-- Degree One -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Degree One:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->degree_one }}</dd>
                    </div>

                    <!-- Institution One -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Institution One:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->institution_one }}</dd>
                    </div>

                    <!-- Start Year One -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Start Year One:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->start_year_one }}</dd>
                    </div>

                    <!-- End Year One -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">End Year One:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->end_year_one }}</dd>
                    </div>
                </div>
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Education Two</h3>
                    <!-- Degree Two -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Degree Two:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->degree_two }}</dd>
                    </div>

                    <!-- Institution Two -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Institution Two:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->institution_two }}</dd>
                    </div>

                    <!-- Start Year Two -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Start Year Two:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->start_year_two }}</dd>
                    </div>

                    <!-- End Year Two -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">End Year Two:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->end_year_two }}</dd>
                    </div>
                </div>
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Education Two</h3>
                    <!-- Degree Three -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Degree Three:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->degree_three }}</dd>
                    </div>

                    <!-- Institution Three -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Institution Three:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->institution_three }}</dd>
                    </div>

                    <!-- Start Year Three -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Start Year Three:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->start_year_three }}</dd>
                    </div>

                    <!-- End Year Three -->
                    <div class="py-4 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">End Year Three:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->end_year_three }}</dd>
                    </div>
                </div>

                <!-- Work Experience One -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Work Experience One</h3>
                    <!-- Work Position -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Position:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_position_one }}</dd>
                    </div>

                    <!-- Company -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Company:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->company_one }}</dd>
                    </div>

                    <!-- Work Start Year -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Start Year:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_start_year_one }}</dd>
                    </div>

                    <!-- Work End Year -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work End Year:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_end_year_one }}</dd>
                    </div>

                    <!-- Work Description -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Description:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_description_one }}</dd>
                    </div>
                </div>

                <!-- Work Experience Two -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Work Experience Two</h3>
                    <!-- Work Position -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Position:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_position_two }}</dd>
                    </div>

                    <!-- Company -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Company:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->company_two }}</dd>
                    </div>

                    <!-- Work Start Year -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Start Year:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_start_year_two }}</dd>
                    </div>

                    <!-- Work End Year -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work End Year:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_end_year_two }}</dd>
                    </div>

                    <!-- Work Description -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Description:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_description_two }}</dd>
                    </div>
                </div>

                <!-- Work Experience Three -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Work Experience Three</h3>
                    <!-- Work Position -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Position:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_position_three }}</dd>
                    </div>

                    <!-- Company -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Company:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->company_three }}</dd>
                    </div>

                    <!-- Work Start Year -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Start Year:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_start_year_three }}</dd>
                    </div>

                    <!-- Work End Year -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work End Year:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_end_year_three }}</dd>
                    </div>

                    <!-- Work Description -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Work Description:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->work_description_three }}</dd>
                    </div>
                </div>

                <!-- Project One -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Project One</h3>
                    <!-- Project Title -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Title:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_title_one }}</dd>
                    </div>

                    <!-- Project Technologies -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Technologies:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_technologies_one }}</dd>
                    </div>

                    <!-- Project URL -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project URL:</dt>
                        <dd class="text-gray-800"><a href="{{ $resumeProfile->project_url_one }}"
                                class="text-indigo-600 hover:underline">{{ $resumeProfile->project_url_one }}</a></dd>
                    </div>

                    <!-- Project Description -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Description:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_description_one }}</dd>
                    </div>
                </div>

                <!-- Project Two -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Project Two</h3>
                    <!-- Project Title -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Title:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_title_two }}</dd>
                    </div>

                    <!-- Project Technologies -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Technologies:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_technologies_two }}</dd>
                    </div>

                    <!-- Project URL -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project URL:</dt>
                        <dd class="text-gray-800"><a href="{{ $resumeProfile->project_url_two }}"
                                class="text-indigo-600 hover:underline">{{ $resumeProfile->project_url_two }}</a></dd>
                    </div>

                    <!-- Project Description -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Description:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_description_two }}</dd>
                    </div>
                </div>

                <!-- Project Three -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Project Three</h3>
                    <!-- Project Title -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Title:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_title_three }}</dd>
                    </div>

                    <!-- Project Technologies -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Technologies:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_technologies_three }}</dd>
                    </div>

                    <!-- Project URL -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project URL:</dt>
                        <dd class="text-gray-800"><a href="{{ $resumeProfile->project_url_three }}"
                                class="text-indigo-600 hover:underline">{{ $resumeProfile->project_url_three }}</a>
                        </dd>
                    </div>

                    <!-- Project Description -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Project Description:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->project_description_three }}</dd>
                    </div>
                </div>

                <!-- Social Profile One -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Social Profile One</h3>
                    <!-- Social Platform -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social Platform:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->social_platform_one }}</dd>
                    </div>

                    <!-- Social Profile Type -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social Profile Type:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->social_profile_type_one }}</dd>
                    </div>

                    <!-- Social URL -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social URL:</dt>
                        <dd class="text-gray-800"><a href="{{ $resumeProfile->social_url_one }}"
                                class="text-indigo-600 hover:underline">{{ $resumeProfile->social_url_one }}</a></dd>
                    </div>
                </div>

                <!-- Social Profile Two -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Social Profile Two</h3>
                    <!-- Social Platform -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social Platform:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->social_platform_two }}</dd>
                    </div>

                    <!-- Social Profile Type -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social Profile Type:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->social_profile_type_two }}</dd>
                    </div>

                    <!-- Social URL -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social URL:</dt>
                        <dd class="text-gray-800"><a href="{{ $resumeProfile->social_url_two }}"
                                class="text-indigo-600 hover:underline">{{ $resumeProfile->social_url_two }}</a></dd>
                    </div>
                </div>

                <!-- Social Profile Three -->
                <div class="py-4">
                    <h3 class="text-lg font-semibold">Social Profile Three</h3>
                    <!-- Social Platform -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social Platform:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->social_platform_three }}</dd>
                    </div>

                    <!-- Social Profile Type -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social Profile Type:</dt>
                        <dd class="text-gray-800">{{ $resumeProfile->social_profile_type_three }}</dd>
                    </div>

                    <!-- Social URL -->
                    <div class="py-2 flex justify-between items-start">
                        <dt class="text-gray-600 font-medium">Social URL:</dt>
                        <dd class="text-gray-800"><a href="{{ $resumeProfile->social_url_three }}"
                                class="text-indigo-600 hover:underline">{{ $resumeProfile->social_url_three }}</a>
                        </dd>
                    </div>
                </div>

                <!-- Skills -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Skills:</dt>
                    <dd class="text-gray-800 flex flex-wrap gap-2">
                        @if (is_array($resumeProfile->skills) && count($resumeProfile->skills) > 0)
                            @foreach ($resumeProfile->skills as $skill)
                                <span
                                    class="inline-flex items-center px-2 py-1 text-sm font-medium text-green-800 bg-green-100 rounded-full">
                                    {{ $skill }}
                                </span>
                            @endforeach
                        @else
                            <span>No skills provided.</span>
                        @endif
                    </dd>
                </div>

                <!-- Hobbies & Interests -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Hobbies & Interests:</dt>
                    <dd class="text-gray-800 flex flex-wrap gap-2">
                        @if (is_array($resumeProfile->hobbies_interests) && count($resumeProfile->hobbies_interests) > 0)
                            @foreach ($resumeProfile->hobbies_interests as $hobby)
                                <span
                                    class="inline-flex items-center px-2 py-1 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">
                                    {{ $hobby }}
                                </span>
                            @endforeach
                        @else
                            <span>No hobbies/interests provided.</span>
                        @endif
                    </dd>
                </div>


                <!-- Created At -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Created At:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->created_at->format('d M Y, h:i A') }}</dd>
                </div>

                <!-- Updated At -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Last Updated:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->updated_at->format('d M Y, h:i A') }}</dd>
                </div>
            </dl>
        </div>
    </div>
</x-admin-app-layout>
