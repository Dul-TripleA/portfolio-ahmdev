<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project ? $project['title'] . ' - Portfolio Detail' : 'Project Not Found' }}</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* Custom Keyframe Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        /* Stagger Delays */
        .delay-100 {
            animation-delay: 100ms;
        }

        .delay-200 {
            animation-delay: 200ms;
        }

        .delay-300 {
            animation-delay: 300ms;
        }

        .delay-400 {
            animation-delay: 400ms;
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between selection:bg-emerald-500 selection:text-white">

    <!-- NAVIGATION BAR -->
    <nav class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="javascript:history.back()" class="group inline-flex items-center text-sm font-semibold text-slate-600 hover:text-emerald-600 transition-colors">
                <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1.5 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Portfolio
            </a>
            <span class="text-xs font-mono font-bold tracking-widest text-emerald-600 uppercase bg-emerald-50 px-3 py-1 rounded-full border border-emerald-100 shadow-sm animate-pulse">
                Project Detail
            </span>
        </div>
    </nav>

    <!-- VALIDATION: IF DATA NOT FOUND -->
    @if(!$project)
    <main class="flex-grow flex items-center justify-center px-4 py-20 animate-fade-in-up">
        <div class="text-center max-w-md bg-white p-8 rounded-3xl shadow-xl border border-slate-100">
            <div class="w-16 h-16 bg-rose-100 text-rose-500 rounded-2xl flex items-center justify-center mx-auto mb-4 animate-bounce">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-slate-900 mb-2">Project Not Found</h1>
            <p class="text-slate-600 text-sm mb-6">Sorry, the project you are looking for could not be found or has been removed.</p>
            <a href="javascript:history.back()" class="inline-block bg-emerald-600 hover:bg-emerald-700 hover:shadow-lg hover:shadow-emerald-600/30 text-white font-semibold text-sm px-6 py-3 rounded-xl transition-all duration-200 active:scale-95">
                Go Back
            </a>
        </div>
    </main>
    @else
    <!-- MAIN CONTENT (IF DATA IS VALID) -->
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 w-full space-y-10">

        <!-- PROJECT HEADER -->
        <div class="animate-fade-in-up opacity-0">
            <div class="flex flex-wrap items-center gap-3 mb-3">
                <span class="text-xs font-mono font-semibold text-emerald-600 uppercase tracking-wider bg-emerald-100 px-3 py-1 rounded-full border border-emerald-200">
                    {{ $project['category'] }}
                </span>
                <span class="text-xs font-bold text-slate-500 bg-slate-200 px-3 py-1 rounded-full">
                    {{ $project['badge'] }}
                </span>
            </div>
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                {{ $project['title'] }}
            </h1>
        </div>

        <!-- MAIN BANNER -->
        <div class="animate-fade-in-up delay-100 opacity-0 relative w-full rounded-3xl overflow-hidden shadow-2xl border border-emerald-500/20 bg-gradient-to-br from-emerald-900 via-teal-900 to-slate-900 p-8 sm:p-16 flex flex-col justify-center items-center text-center group hover:shadow-emerald-900/30 transition-shadow duration-500">

            <!-- Radial Light Gradient -->
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(16,185,129,0.25),transparent_60%)] group-hover:scale-125 transition-transform duration-700 pointer-events-none"></div>

            <!-- Badge Sub-Title -->
            <span class="relative z-10 text-xs sm:text-sm font-mono font-bold tracking-widest text-emerald-400 uppercase bg-emerald-950/80 border border-emerald-500/30 px-4 py-1.5 rounded-full mb-4 shadow-inner group-hover:border-emerald-400 transition-colors duration-300">
                Portfolio Expertise
            </span>

            <!-- Main Heading -->
            <h2 class="relative z-10 text-3xl sm:text-5xl md:text-6xl font-black text-white tracking-tight leading-tight max-w-3xl">
                Design <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-200 group-hover:from-teal-200 group-hover:to-emerald-400 transition-all duration-500">&</span> Social Media
            </h2>

            <!-- Decorative Glowing Bar -->
            <div class="relative z-10 w-24 h-1.5 bg-gradient-to-r from-emerald-500 to-teal-400 rounded-full mt-6 shadow-lg shadow-emerald-500/50 group-hover:w-36 transition-all duration-500"></div>
        </div>

        <!-- INFORMATION GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <!-- LEFT COLUMN (PROJECT DESCRIPTION) -->
            <div class="lg:col-span-2 space-y-8">

                <!-- Overview -->
                <div class="animate-fade-in-up delay-200 opacity-0 bg-white p-6 sm:p-8 rounded-3xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow duration-300">
                    <h3 class="text-xl font-bold text-slate-900 mb-4">Project Overview</h3>
                    <p class="text-slate-600 leading-relaxed text-base">
                        {{ $project['description'] }}
                    </p>
                </div>

                <!-- Challenges & Solutions -->
                <div class="animate-fade-in-up delay-300 opacity-0 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-amber-50/60 p-6 rounded-2xl border border-amber-100 hover:border-amber-300 hover:bg-amber-50 transition-all duration-300 hover:-translate-y-1">
                        <h4 class="text-amber-900 font-bold mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-amber-600 animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            Challenge
                        </h4>
                        <p class="text-amber-800/80 text-sm leading-relaxed">
                            {{ $project['challenge'] }}
                        </p>
                    </div>
                    <div class="bg-emerald-50/60 p-6 rounded-2xl border border-emerald-100 hover:border-emerald-300 hover:bg-emerald-50 transition-all duration-300 hover:-translate-y-1">
                        <h4 class="text-emerald-900 font-bold mb-2 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Solution
                        </h4>
                        <p class="text-emerald-800/80 text-sm leading-relaxed">
                            {{ $project['solution'] }}
                        </p>
                    </div>
                </div>

                <!-- GALLERY DOCUMENTATION -->
                @if(!empty($project['gallery']))
                <div class="animate-fade-in-up delay-400 opacity-0 bg-white p-6 sm:p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h3 class="text-xl font-bold text-slate-900 mb-6">Work Gallery</h3>

                    <!-- Diubah dari columns-2 menjadi columns-2 md:columns-3 lg:columns-4 agar gambar lebih kecil -->
                    <div class="columns-2 md:columns-3 lg:columns-4 gap-3 space-y-3">
                        @foreach($project['gallery'] as $loopIndex => $img)
                        <div class="break-inside-avoid rounded-xl overflow-hidden bg-slate-100 shadow-sm hover:shadow-lg transition-all duration-500 group relative">
                            <img src="{{ asset('storage/img/'.$img) }}"
                                alt="Gallery Image {{ $loopIndex + 1 }}"
                                class="w-full h-auto object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-slate-900/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif

            </div>

            <!-- RIGHT COLUMN (META & CTA) -->
            <div class="space-y-6">

                <div class="animate-fade-in-up delay-300 opacity-0 bg-white p-6 rounded-3xl shadow-sm border border-slate-100 space-y-6 hover:shadow-md transition-shadow duration-300">
                    <h3 class="text-lg font-bold text-slate-900 border-b border-slate-100 pb-4">Project Details</h3>

                    <div>
                        <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Client / Organization</span>
                        <span class="text-sm font-semibold text-slate-800">{{ $project['client'] }}</span>
                    </div>

                    <div>
                        <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">My Role</span>
                        <span class="text-sm font-semibold text-slate-800">{{ $project['role'] }}</span>
                    </div>

                    <div>
                        <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Timeline</span>
                        <span class="text-sm font-semibold text-slate-800">{{ $project['date'] }}</span>
                    </div>

                    <div>
                        <span class="text-xs font-mono text-slate-400 uppercase tracking-wider block mb-1">Tools & Technologies</span>
                        <div class="flex flex-wrap gap-2 mt-2">
                            @foreach($project['tools'] as $tool)
                            <span class="text-xs font-medium bg-slate-100 hover:bg-emerald-50 hover:text-emerald-700 text-slate-700 px-3 py-1 rounded-lg border border-transparent hover:border-emerald-200 transition-colors duration-200 cursor-default">
                                {{ $tool }}
                            </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Call To Action -->
                <div class="animate-fade-in-up delay-400 opacity-0 bg-gradient-to-br from-emerald-600 via-teal-700 to-slate-900 p-6 rounded-3xl text-white shadow-xl shadow-emerald-600/20 relative overflow-hidden group">
                    <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-emerald-400/20 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

                    <h4 class="font-bold text-lg mb-2 relative z-10">Interested in similar results?</h4>
                    <p class="text-emerald-100 text-xs leading-relaxed mb-4 relative z-10">Let's discuss how we can build impactful visual and technical solutions for your project.</p>

                    <a href="https://wa.me/" target="_blank" class="relative z-10 block text-center bg-white text-emerald-700 hover:bg-emerald-50 font-bold text-sm py-3 px-4 rounded-xl shadow-md transition-all duration-200 hover:shadow-lg active:scale-95">
                        Get In Touch
                    </a>
                </div>

            </div>

        </div>

    </main>
    @endif

    <!-- FOOTER -->
    <footer class="bg-white border-t border-slate-200 py-6 mt-16">
        <div class="max-w-7xl mx-auto px-4 text-center text-xs text-slate-400">
            &copy; {{ date('Y') }} Fitroh Ahmad Abdul Aziz. All rights reserved.
        </div>
    </footer>

</body>

</html>