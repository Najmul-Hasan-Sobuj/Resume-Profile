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

                <!-- Degree -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Degree:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->degree }}</dd>
                </div>

                <!-- Institution -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Institution:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->institution }}</dd>
                </div>

                <!-- Start Year -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Start Year:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->start_year }}</dd>
                </div>

                <!-- End Year -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">End Year:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->end_year }}</dd>
                </div>

                <!-- Work Position -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Work Position:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->work_position }}</dd>
                </div>

                <!-- Company -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Company:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->company }}</dd>
                </div>

                <!-- Work Start Year -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Work Start Year:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->work_start_year }}</dd>
                </div>

                <!-- Work End Year -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Work End Year:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->work_end_year }}</dd>
                </div>

                <!-- Work Description -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Work Description:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->work_description }}</dd>
                </div>

                <!-- Project Title -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Project Title:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->project_title }}</dd>
                </div>

                <!-- Project Technologies -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Project Technologies:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->project_technologies }}</dd>
                </div>

                <!-- Project URL -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Project URL:</dt>
                    <dd class="text-gray-800"><a href="{{ $resumeProfile->project_url }}"
                            class="text-indigo-600 hover:underline">{{ $resumeProfile->project_url }}</a></dd>
                </div>

                <!-- Project Description -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Project Description:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->project_description }}</dd>
                </div>

                <!-- Social Platform -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Social Platform:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->social_platform }}</dd>
                </div>

                <!-- Social Profile Type -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Social Profile Type:</dt>
                    <dd class="text-gray-800">{{ $resumeProfile->social_profile_type }}</dd>
                </div>

                <!-- Social URL -->
                <div class="py-4 flex justify-between items-start">
                    <dt class="text-gray-600 font-medium">Social URL:</dt>
                    <dd class="text-gray-800"><a href="{{ $resumeProfile->social_url }}"
                            class="text-indigo-600 hover:underline">{{ $resumeProfile->social_url }}</a></dd>
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
