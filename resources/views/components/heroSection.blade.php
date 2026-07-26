<!-- ================= HERO SECTION ================= -->
    <section id="hero" class="min-h-screen flex items-center justify-center relative px-6 md:px-24 pt-20 z-10">
        <div class="max-w-6xl w-full my-auto py-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Teks Hero -->
                <div class="lg:col-span-7 space-y-4">
                    
                    <!-- Sub-title Kicker (Persis Referensi) -->
                    <p class="text-xs md:text-sm font-mono uppercase tracking-[0.25em] text-emerald-500 font-semibold mb-2">
                        WELCOME TO MY WORLD
                    </p>

                    <!-- Judul Nama Utama (Styling Serif & Duo-Tone) -->
                    <h1 class="text-5xl sm:text-6xl md:text-7xl font-serif font-semibold text-gray-900 leading-[1.1] tracking-tight mb-6">
                        <span class="block text-gray-900">Fitroh Ahmad</span>
                        <span class="block text-emerald-500 mt-1">Abdul Aziz</span>
                    </h1>

                    <!-- Typing Effect Role -->
                    <h2 class="text-xl md:text-2xl font-bold text-gray-800 mb-6">
                        A <span id="typed" class="text-emerald-500"></span>
                    </h2>

                    <!-- Deskripsi Ringkas -->
                    <p class="text-gray-600 text-base md:text-lg max-w-2xl leading-relaxed mb-8">
                        Passionate about humanitarian work, web development, creative UI/UX design, photography, and videography.
                    </p>
                    
                    <!-- TOMBOL & STATISTIK -->
                    <div class="flex flex-col sm:flex-row sm:items-center gap-8 mb-4 pt-2">
                        <a href="#contact" class="inline-block border-2 border-emerald-500 text-emerald-500 font-semibold px-8 py-3.5 rounded-xl hover:bg-emerald-500 hover:text-white transition-all duration-300 shadow-sm hover:shadow-emerald-200 text-center">
                            Contact Me
                        </a>

                        <!-- STATISTIK (Projects & Tools) -->
                        <div class="flex items-center gap-8 border-t sm:border-t-0 sm:border-l border-gray-200 pt-4 sm:pt-0 sm:pl-8">
                            <div>
                                <p class="text-2xl md:text-3xl font-extrabold text-gray-900 flex items-center">
                                    3<span class="text-emerald-500">+</span>
                                </p>
                                <p class="text-xs font-medium text-gray-500 tracking-wider uppercase">
                                    Web Applications Created
                                </p>
                            </div>

                            <div>
                                <p class="text-2xl md:text-3xl font-extrabold text-gray-900 flex items-center">
                                    10<span class="text-emerald-500">+</span>
                                </p>
                                <p class="text-xs font-medium text-gray-500 tracking-wider uppercase">
                                    Tech & Creative Tools
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Foto Hero -->
                <div class="lg:col-span-5 flex justify-center items-center">
                    <div class="relative group w-64 h-80 sm:w-72 sm:h-96 md:w-80 md:h-[420px] animate-photo-float">
                        <div class="absolute inset-0 border-2 border-emerald-500 rounded-2xl transform translate-x-4 translate-y-4"></div>
                        <div class="relative w-full h-full bg-emerald-500 rounded-2xl overflow-hidden shadow-2xl">
                            <img src="{{ asset('storage/img/hero.png') }}" alt="Fitroh Ahmad" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>