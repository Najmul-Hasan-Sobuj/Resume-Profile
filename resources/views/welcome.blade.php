<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title>{{ $title ?? config('app.name') }}</title>

    <meta name="description"
        content="Freebie 62 - Resume Alternate (Tailwind CSS). Check out more at https://pixelcave.com" />
    <meta name="author" content="pixelcave" />

    <!-- Icons -->
    <link rel="icon" href="https://cdn.pixelcave.com/favicon.svg" sizes="any" type="image/svg+xml" />
    <link rel="icon" href="https://cdn.pixelcave.com/favicon.png" type="image/png" />

    <!-- Inter web font from bunny.net (GDPR compliant) -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS Play CDN (mainly for development/testing purposes) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>

    <!-- Tailwind CSS v3 Configuration -->
    <script>
        const defaultTheme = tailwind.defaultTheme;
        const colors = tailwind.colors;
        const plugin = tailwind.plugin;

        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    fontFamily: {
                        sans: ["Inter", ...defaultTheme.fontFamily.sans],
                    },
                },
            },
        };
    </script>

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Alpine.js (x-cloak - https://alpinejs.dev/directives/cloak) -->
    <style>
        [x-cloak] {
            display: none !important;
        }

        @keyframes shake {
            0% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            50% {
                transform: translateX(5px);
            }

            75% {
                transform: translateX(-5px);
            }

            100% {
                transform: translateX(0);
            }
        }

        .animate-shake {
            animation: shake 4s ease infinite;
        }

        .hover\:animate-none:hover {
            animation: none;
            /* Stops the animation on hover */
        }
    </style>
</head>

<body>
    <!-- Page Container -->
    <div x-data="{
        darkMode: false,
        toggleDarkMode() {
            this.darkMode = !this.darkMode;
    
            // Toggle dark class on html element
            if (this.darkMode) {
                document.body.parentNode.classList.add('dark');
            } else {
                document.body.parentNode.classList.remove('dark');
            }
        }
    }"
        class="min-h-dvh min-w-[320px] bg-white text-gray-800 dark:bg-gray-950 dark:text-gray-100">
        <!-- Toggle Dark Mode -->
        <div class="fixed right-0 top-0 z-50 flex size-12 items-center justify-center">
            <button x-on:click="toggleDarkMode()" type="button"
                class="inline-block size-9 text-gray-600 hover:opacity-75 dark:text-gray-400">
                <svg x-show="!darkMode" x-cloak xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="inline-block size-6">
                    <circle cx="12" cy="12" r="4" />
                    <path d="M12 2v2" />
                    <path d="M12 20v2" />
                    <path d="m4.93 4.93 1.41 1.41" />
                    <path d="m17.66 17.66 1.41 1.41" />
                    <path d="M2 12h2" />
                    <path d="M20 12h2" />
                    <path d="m6.34 17.66-1.41 1.41" />
                    <path d="m19.07 4.93-1.41 1.41" />
                </svg>
                <svg x-show="darkMode" x-cloak xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="inline-block size-6">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z" />
                </svg>
            </button>
        </div>
        <!-- END Toggle Dark Mode -->
        <!-- Navbar -->
        <nav class="bg-white dark:bg-gray-900 shadow-md">
            <div class="container mx-auto px-6 py-4 flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-purple-600 dark:text-purple-400">
                        Najmul Hasan
                    </a>
                </div>

                <!-- Menu Links -->
                <div id="menu-links" class="hidden md:flex space-x-6">
                    <a href="#"
                        class="text-gray-700 hover:text-purple-600 dark:text-gray-300 dark:hover:text-purple-400 transition">
                        Home
                    </a>
                    <a href="#"
                        class="text-gray-700 hover:text-purple-600 dark:text-gray-300 dark:hover:text-purple-400 transition">
                        Services
                    </a>
                    <a href="#"
                        class="text-gray-700 hover:text-purple-600 dark:text-gray-300 dark:hover:text-purple-400 transition">
                        Portfolio
                    </a>
                    <a href="#"
                        class="text-gray-700 hover:text-purple-600 dark:text-gray-300 dark:hover:text-purple-400 transition">
                        Contact
                    </a>
                </div>

                <!-- Action Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <!-- User is authenticated, show link to home -->
                            <a href="{{ url('/home') }}"
                                class="px-4 py-2 text-sm font-semibold text-purple-600 border border-purple-600 rounded hover:bg-purple-600 hover:text-white transition">
                                Home
                            </a>
                        @else
                            <!-- User is not authenticated, show login and register buttons -->
                            <a href="{{ route('login') }}"
                                class="px-4 py-2 text-sm font-semibold text-purple-600 border border-purple-600 rounded hover:bg-purple-600 hover:text-white transition">
                                Sign In
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" id="sign-up-btn"
                                    class="px-4 py-2 text-sm font-semibold text-white bg-purple-600 rounded hover:bg-purple-700 transition animate-shake hover:animate-none">
                                    Sign Up
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700 dark:text-gray-300"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-800">
                    Home
                </a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-800">
                    Services
                </a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-800">
                    Portfolio
                </a>
                <a href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 dark:text-gray-300 dark:hover:bg-gray-800">
                    Contact
                </a>
                <div class="px-4 py-2">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}"
                                class="block text-center px-4 py-2 text-sm font-semibold text-purple-600 border border-purple-600 rounded hover:bg-purple-600 hover:text-white transition">
                                Home
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="block text-center px-4 py-2 text-sm font-semibold text-purple-600 border border-purple-600 rounded hover:bg-purple-600 hover:text-white transition">
                                Sign In
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="block text-center mt-2 px-4 py-2 text-sm font-semibold text-white bg-purple-600 rounded hover:bg-purple-700 transition">
                                    Sign Up
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>

        <div class="container mx-auto max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-12">
                <!-- Info -->
                <div class="bg-gray-100 p-5 text-left dark:bg-gray-900 md:col-span-4 lg:p-14">
                    <h1 class="leading-tighter mt-5 text-4xl font-extrabold lg:text-6xl">
                        Shaun<br />
                        Castillo
                    </h1>
                    <h2 class="mt-3 text-xl text-purple-600 dark:text-purple-500">
                        Web Developer
                    </h2>
                    <div class="-mx-5 mt-10 lg:-mx-16">
                        <img src="assets/christian-buehner-DItYlc26zVI-unsplash.jpg"
                            class="inline-block lg:rounded-sm" alt="Shaun Castillo photo" />
                    </div>
                    <p class="mt-10 text-balance leading-relaxed text-gray-700 dark:text-gray-300">
                        I am a skilled web developer, proficient in HTML, CSS, and JavaScript, who combines technical
                        expertise with
                        a passion for creating visually appealing and user-friendly websites.
                    </p>

                    <!-- Contact Section -->
                    <div class="mt-10 space-y-5">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Contact</h3>
                        <div class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="inline-block size-6 flex-none text-purple-600 dark:text-purple-500">
                                <path d="M18 8c0 4.5-6 9-6 9s-6-4.5-6-9a6 6 0 0 1 12 0" />
                                <circle cx="12" cy="8" r="2" />
                                <path
                                    d="M8.835 14H5a1 1 0 0 0-.9.7l-2 6c-.1.1-.1.2-.1.3 0 .6.4 1 1 1h18c.6 0 1-.4 1-1 0-.1 0-.2-.1-.3l-2-6a1 1 0 0 0-.9-.7h-3.835" />
                            </svg>
                            <span class="truncate font-medium">New York, USA</span>
                        </div>
                        <div class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="inline-block size-6 flex-none text-purple-600 dark:text-purple-500">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            <span class="truncate font-medium">+10 123 456 789</span>
                        </div>
                        <div class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="inline-block size-6 flex-none text-purple-600 dark:text-purple-500">
                                <path d="M22 13V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h8" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                <path d="M19 16v6" />
                                <path d="M16 19h6" />
                            </svg>
                            <a href="javascript:void(0)"
                                class="truncate font-medium text-black underline hover:text-black/75 dark:text-white dark:hover:text-white/75">
                                shaun.castillo@example.com
                            </a>
                        </div>
                        <div class="flex items-center gap-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="inline-block size-6 flex-none text-purple-600 dark:text-purple-500">
                                <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
                                <path
                                    d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v0c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17" />
                                <path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
                                <circle cx="12" cy="12" r="10" />
                            </svg>
                            <a class="truncate font-medium text-black underline hover:text-black/75 dark:text-white dark:hover:text-white/75"
                                href="javascript:void(0)">
                                https://example.com
                            </a>
                        </div>
                    </div>

                    <!-- Skills Section -->
                    <div class="mt-10 space-y-5">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Skills</h3>
                        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Bootstrap</li>
                            <li>Tailwind</li>
                            <li>PHP</li>
                            <li>PHP OOP</li>
                            <li>Laravel</li>
                            <li>InertiaJS</li>
                            <li>Livewire</li>
                            <li>MySQL</li>
                            <li>JavaScript</li>
                            <li>jQuery</li>
                            <li>Ajax</li>
                            <li>React.js</li>
                            <li>GitHub</li>
                            <li>GitLab</li>
                            <li>Postman</li>
                            <li>RESTful API</li>
                            <li>AI (Prompt Generator)</li>
                        </ul>
                    </div>

                    <!-- Hobbies & Interests Section -->
                    <div class="mt-10 space-y-5">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Hobbies & Interests</h3>
                        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                            <li>Coding Challenges & Hackathons</li>
                            <li>Photography & Traveling</li>
                            <li>Reading Tech Blogs & Articles</li>
                            <li>Playing Guitar & Music Composition</li>
                            <li>Fitness & Outdoor Activities</li>
                        </ul>
                    </div>
                </div>
                <!-- END Info -->


                <!-- Bio -->
                <div class="mx-auto max-w-2xl space-y-16 p-5 md:col-span-8 md:p-10">
                    <!-- Education -->
                    <div>
                        <div class="mb-8 border-b-4 border-gray-100 py-2.5 dark:border-gray-900">
                            <h3 class="text-xl font-medium">Education</h3>
                        </div>
                        <ul
                            class="relative space-y-6 pl-6 before:absolute before:bottom-0 before:left-0 before:top-0 before:block before:w-1 before:rounded-full before:bg-purple-50 before:content-[''] dark:before:bg-purple-950">
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    2000-2005
                                </h4>
                                <h5 class="mb-2 font-bold">
                                    Bachelor in Computer Science, University London, UK
                                </h5>
                                <p class="text-sm/relaxed text-gray-700 dark:text-gray-300">
                                    With a degree in Computer Science from the University of
                                    London, UK, I cultivated the skills and knowledge that form
                                    the bedrock of my expertise in web development and
                                    programming.
                                </p>
                            </li>
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    2005-2007
                                </h4>
                                <h5 class="mb-2 font-bold">
                                    Master in Computer Science, University NY, USA
                                </h5>
                                <p class="text-sm/relaxed text-gray-700 dark:text-gray-300">
                                    I further honed my skills by pursuing a Master's degree in
                                    Computer Science, delving deeper into advanced concepts and
                                    emerging technologies to elevate my proficiency in web
                                    development at New York University.
                                </p>
                            </li>
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    2007-2009
                                </h4>
                                <h5 class="mb-2 font-bold">
                                    Professional Studies in Web Developement, NY, USA
                                </h5>
                                <p class="text-sm/relaxed text-gray-700 dark:text-gray-300">
                                    My journey continued with Professional Studies in Web
                                    Development, where I delved into specialized courses,
                                    refining my expertise and staying abreast of the latest
                                    industry trends to excel in the dynamic world of web
                                    development.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- END Education -->

                    <!-- Work Experience -->
                    <div>
                        <div class="mb-8 border-b-4 border-gray-100 py-2.5 dark:border-gray-900">
                            <h3 class="text-xl font-medium">Work Experience</h3>
                        </div>
                        <ul
                            class="relative space-y-6 pl-6 before:absolute before:bottom-0 before:left-0 before:top-0 before:block before:w-1 before:rounded-full before:bg-purple-50 before:content-[''] dark:before:bg-purple-950">
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    2003-2008
                                </h4>
                                <h5 class="mb-2 font-bold">
                                    Web Designer at Web Inspired LLC
                                </h5>
                                <p class="text-sm/relaxed text-gray-700 dark:text-gray-300">
                                    As a Web Designer at Web Inspired LLC, I translated my
                                    passion for aesthetics and functionality into captivating
                                    online experiences, leveraging my skills to craft visually
                                    stunning and user-centric websites for enhanced digital
                                    engagement.
                                </p>
                            </li>
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    2008-2020
                                </h4>
                                <h5 class="mb-2 font-bold">Freelance Web Developer</h5>
                                <p class="text-sm/relaxed text-gray-700 dark:text-gray-300">
                                    Embracing the freedom of a Freelance Web Developer, I thrive
                                    on the diversity of projects, employing my technical prowess
                                    to bring clients' visions to life through customized and
                                    efficient web solutions.
                                </p>
                            </li>
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    2010-2020
                                </h4>
                                <h5 class="mb-2 font-bold">
                                    Part Time Web Developer at Web Stories LLC
                                </h5>
                                <p class="text-sm/relaxed text-gray-700 dark:text-gray-300">
                                    Balancing my commitment as a Part-Time Web Developer at Web
                                    Stories LLC, I contribute to the team's success by applying
                                    my web development skills, ensuring seamless digital
                                    experiences and collaborating on projects that enhance the
                                    online presence of the company.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- END Work Experience -->

                    <!-- Projects -->
                    <div>
                        <div class="mb-8 border-b-4 border-gray-100 py-2.5 dark:border-gray-900">
                            <h3 class="text-xl font-medium">Projects</h3>
                        </div>
                        <ul
                            class="relative space-y-6 pl-6 before:absolute before:bottom-0 before:left-0 before:top-0 before:block before:w-1 before:rounded-full before:bg-purple-50 before:content-[''] dark:before:bg-purple-950">
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    Laravel - Vue.js
                                </h4>
                                <h5 class="mb-2 font-bold">
                                    Project Management SaaS -
                                    <a class="font-medium text-black underline hover:text-black/75"
                                        href="javascript:void(0)">https://example.com</a>
                                </h5>
                                <p class="text-sm/relaxed text-gray-700 dark:text-gray-300">
                                    In my role with a Project Management SaaS, I specialize in
                                    harnessing the power of Laravel and Vue.js to create robust
                                    and efficient solutions, facilitating seamless project
                                    coordination and enhancing the user experience within the
                                    dynamic realm of software as a service.
                                </p>
                            </li>
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    Python - React
                                </h4>
                                <h5 class="mb-2 font-bold">
                                    Job Listing SaaS -
                                    <a class="font-medium text-black underline hover:text-black/75"
                                        href="javascript:void(0)">https://example.com</a>
                                </h5>
                                <p class="text-sm/relaxed text-gray-700 dark:text-gray-300">
                                    Within the realm of Job Listing SaaS, I leverage my
                                    expertise in Python and React to develop innovative
                                    solutions, ensuring a streamlined and user-friendly platform
                                    that enhances the recruitment process and transforms the way
                                    job opportunities are accessed and managed.
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- END Projects -->

                    <!-- Social -->
                    <div>
                        <div class="mb-8 border-b-4 border-gray-100 py-2.5 dark:border-gray-900">
                            <h3 class="text-xl font-medium">Social</h3>
                        </div>
                        <ul
                            class="relative space-y-6 pl-6 before:absolute before:bottom-0 before:left-0 before:top-0 before:block before:w-1 before:rounded-full before:bg-purple-50 before:content-[''] dark:before:bg-purple-950">
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    LinkedIn
                                </h4>
                                <h5 class="mb-2 font-bold">Work Profile</h5>
                                <p>
                                    <a href="javascript:void(0)"
                                        class="text-sm font-medium text-gray-600 underline hover:text-gray-600/75 dark:text-gray-400 dark:hover:text-gray-400/75">
                                        https://linkedin.com/shaun.castillo
                                    </a>
                                </p>
                            </li>
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    X
                                </h4>
                                <h5 class="mb-2 font-bold">Work Profile</h5>
                                <p>
                                    <a href="javascript:void(0)"
                                        class="text-sm font-medium text-gray-600 underline hover:text-gray-600/75 dark:text-gray-400 dark:hover:text-gray-400/75">
                                        https://x.com/shaun.castillo
                                    </a>
                                </p>
                            </li>
                            <li
                                class="before:border-1 relative before:absolute before:-left-[1.875rem] before:top-6 before:block before:size-4 before:rounded-full before:border-2 before:border-purple-200/75 before:bg-white before:content-[''] dark:before:border-purple-800/75 dark:before:bg-gray-950">
                                <h4 class="text-sm font-semibold text-purple-600 dark:text-purple-500">
                                    Facebook
                                </h4>
                                <h5 class="mb-2 font-bold">Personal Profile</h5>
                                <p>
                                    <a class="text-sm font-medium text-gray-600 underline hover:text-gray-600/75 dark:text-gray-400 dark:hover:text-gray-400/75"
                                        href="javascript:void(0)">
                                        https://facebook.com/shaun.castillo
                                    </a>
                                </p>
                            </li>
                        </ul>

                        <!-- Footer -->
                        <footer class="mt-20 space-y-2 py-8 text-sm text-gray-600 dark:text-gray-400">
                            <p class="font-semibold">
                                Resume &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                            </p>
                            <p class="inline-flex items-center gap-1">
                                <span>Develop</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    data-slot="icon" class="hi-mini hi-heart inline-block size-5 text-rose-500">
                                    <path
                                        d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z" />
                                </svg>
                                <span>by
                                    <a href="js:void(0)"
                                        class="font-medium text-black underline hover:text-black/75 dark:text-white dark:hover:text-white/75">
                                        Najmul Hasan
                                    </a></span>
                            </p>
                        </footer>
                        <!-- END Footer -->
                    </div>
                    <!-- END Social -->
                </div>
                <!-- END Bio -->
            </div>
        </div>
    </div>
    <!-- END Page Container -->
    <!-- Navbar Toggle Script -->
    <script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    <!-- End Navbar -->
</body>

</html>
