    <!-- ================= SECTION PORTFOLIO ================= -->
    <section id="portfolio" class="min-h-screen flex items-center justify-center relative px-6 md:px-24 py-20 z-10">
        <div class="max-w-6xl w-full mx-auto">

            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 flex items-center">
                <span class="text-emerald-500 font-mono mr-2">&gt; 03.</span> Portfolio
            </h2>

            <!-- Portfolio Category Filter Buttons (Tanpa 'All') -->
            <div class="flex flex-wrap gap-3 mb-12">
                <button onclick="filterPortfolio('webdev', this)" class="portfolio-filter-btn active-filter px-6 py-2.5 rounded-xl text-sm font-semibold border transition-all duration-300">
                    <i class="fa-solid fa-code mr-2"></i>Web Dev
                </button>
                <button onclick="filterPortfolio('design', this)" class="portfolio-filter-btn px-6 py-2.5 rounded-xl text-sm font-semibold border border-gray-200 text-gray-600 hover:text-emerald-500 hover:border-emerald-500 transition-all duration-300">
                    <i class="fa-solid fa-wand-magic-sparkles mr-2"></i>Design
                </button>
                <button onclick="filterPortfolio('photography', this)" class="portfolio-filter-btn px-6 py-2.5 rounded-xl text-sm font-semibold border border-gray-200 text-gray-600 hover:text-emerald-500 hover:border-emerald-500 transition-all duration-300">
                    <i class="fa-solid fa-camera mr-2"></i>Photography
                </button>
            </div>

            <!-- ================= 1. KATEGORI WEB DEV (STYLE TAMPILAN SHOWCASE) ================= -->
            <div id="category-webdev" class="portfolio-category-container space-y-20 md:space-y-28">

                <!-- WEB DEV ITEM 1 -->
                <div class="relative grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
                    <div class="lg:col-span-7 relative z-10 group">
                        <a href="#" target="_blank" class="block overflow-hidden rounded-xl shadow-xl border border-gray-100 bg-gray-900">
                            <img src="{{ asset('storage/img/website-sekolah-alkhair.png') }}"
                                alt="Galeri KKN Salam 21/22"
                                class="w-full h-auto object-cover filter grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500 opacity-90 group-hover:opacity-100">
                        </a>
                    </div>
                    <div class="lg:col-span-7 lg:col-start-6 lg:row-start-1 z-20 flex flex-col items-start lg:items-end text-left lg:text-right mt-4 lg:mt-0">
                        <p class="text-emerald-500 font-mono text-sm font-semibold tracking-wider">AL KHAIR SCHOOL</p>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mt-1 mb-4">Official Website</h3>
                        <div class="bg-gray-800/85 backdrop-blur-md text-gray-200 text-sm md:text-base p-6 rounded-xl shadow-2xl leading-relaxed border border-gray-700/50 my-2">
                            Developed the official public website for Al-Khair School as a key marketing platform to attract prospective students, featuring latest student news, event galleries, and detailed profiles on facilities, curriculum, and teaching staff.
                        </div>
                        <div class="flex flex-wrap gap-3 mt-4 text-xs md:text-sm font-mono text-gray-600 font-semibold">
                            <span>CodeIgniter 4</span>
                            <span>Bootstrap</span>
                            <span>Java Script</span>
                            <span>MySQL</span>
                        </div>
                        <div class="flex items-center space-x-4 mt-4 text-lg text-gray-700">
                            <a href="https://github.com/Dul-TripleA/Profile-Sekolah-CI4" class="hover:text-emerald-500 transition-colors"><i class="fa-brands fa-github"></i></a>
                            <a href="https://alkhairsekolah.sch.id/" class="hover:text-emerald-500 transition-colors"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                </div>

                <!-- WEB DEV ITEM 2 -->
                <div class="relative grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
                    <div class="lg:col-span-7 relative z-10 group">
                        <a href="#" target="_blank" class="block overflow-hidden rounded-xl shadow-xl border border-gray-100 bg-gray-900">
                            <img src="{{ asset('storage/img/hris-alkhair.png') }}"
                                alt="Sistem Monitoring Emisi Karbon"
                                class="w-full h-auto object-cover filter grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500 opacity-90 group-hover:opacity-100">
                        </a>
                    </div>
                    <div class="lg:col-span-7 lg:col-start-6 lg:row-start-1 z-20 flex flex-col items-start lg:items-end text-left lg:text-right mt-4 lg:mt-0">
                        <p class="text-emerald-500 font-mono text-sm font-semibold tracking-wider">HRIS Alkhair</p>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mt-1 mb-4">Intrenal Sistem HRIS</h3>
                        <div class="bg-gray-800/85 backdrop-blur-md text-gray-200 text-sm md:text-base p-6 rounded-xl shadow-2xl leading-relaxed border border-gray-700/50 my-2">
                            A modern HR management system that integrates mobile-based employee attendance tracking with a centralized web-based reporting system. Designed to boost operational efficiency, attendance data accuracy, and transparency in corporate human resource management.
                        </div>
                        <div class="flex flex-wrap gap-3 mt-4 text-xs md:text-sm font-mono text-gray-600 font-semibold">
                            <span>Laravel</span>
                            <span>Tailwind CSS</span>
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>Java Script</span>
                        </div>
                        <div class="flex items-center space-x-4 mt-4 text-lg text-gray-700">
                            <a href="https://github.com/Dul-TripleA/Absensi-Karyawan-Photo-and-Location" class="hover:text-emerald-500 transition-colors"><i class="fa-brands fa-github"></i></a>
                            <a href="https://alkhairsite.alkhairsekolah.sch.id/" class="hover:text-emerald-500 transition-colors"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ================= 2. KATEGORI DESIGN (STYLE GALERI GRID DESIGN) ================= -->
            <div id="category-design" class="portfolio-category-container hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- DESIGN ITEM 1 -->
                <a href="{{ route('detailPortfolio', ['id' => 1]) }}" class="group relative bg-white/70 backdrop-blur-sm rounded-2xl overflow-hidden shadow-md hover:shadow-2xl border border-gray-100 transition-all duration-300 hover:-translate-y-2 flex flex-col cursor-pointer">
                    <div class="relative h-64 overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?auto=format&fit=crop&w=800&q=80"
                            alt="Branding Al-Khair"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <!-- Overlay Hover Badge -->
                        <div class="absolute inset-0 bg-emerald-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="bg-white text-emerald-600 px-4 py-2 rounded-full text-xs font-bold shadow-lg group-hover:bg-emerald-50 transition-colors">
                                Figma & Illustrator
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-mono text-emerald-500 font-semibold uppercase tracking-wider">Social Media & Visual Identity</span>
                            <h4 class="text-xl font-bold text-gray-900 mt-1 mb-2 group-hover:text-emerald-600 transition-colors">Social Media Branding Al-Khair</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Perancangan konten feeds Instagram, banner event, dan panduan visual untuk publikasi Al-Khair Indonesia.
                            </p>
                        </div>
                    </div>
                </a>

                <!-- DESIGN ITEM 2 -->
                <a href="{{ route('detailPortfolio', ['id' => 2]) }}" class="group relative bg-white/70 backdrop-blur-sm rounded-2xl overflow-hidden shadow-md hover:shadow-2xl border border-gray-100 transition-all duration-300 hover:-translate-y-2 flex flex-col cursor-pointer">
                    <div class="relative h-64 overflow-hidden bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?auto=format&fit=crop&w=800&q=80"
                            alt="UI/UX Mobile App Design"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <!-- Overlay Hover Badge -->
                        <div class="absolute inset-0 bg-emerald-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <span class="bg-white text-emerald-600 px-4 py-2 rounded-full text-xs font-bold shadow-lg group-hover:bg-emerald-50 transition-colors">
                                UI/UX Design
                            </span>
                        </div>
                    </div>
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-mono text-emerald-500 font-semibold uppercase tracking-wider">Mobile App UI/UX</span>
                            <h4 class="text-xl font-bold text-gray-900 mt-1 mb-2 group-hover:text-emerald-600 transition-colors">Donation App Redesign</h4>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Konsep antarmuka aplikasi donasi digital dengan pendekatan user-centered design yang bersih & intuitif.
                            </p>
                        </div>
                    </div>
                </a>

            </div>

            <!-- ================= 3. KATEGORI PHOTOGRAPHY & MEDIA (AUTO MASONRY GALLERY) ================= -->
            <div id="category-photography" class="portfolio-category-container hidden columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-4 space-y-4">

                @foreach($portfolios ?? [] as $item)
                @if($item['type'] === 'image')
                <!-- ITEM FOTO -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg bg-gray-900 break-inside-avoid cursor-pointer"
                    onclick="openModal('image', '{{ asset('storage/img/' . $item['media_url']) }}', '{{ e($item['title']) }}', '{{ e($item['category']) }} • {{ e($item['subtitle']) }}')">

                    <img src="{{ asset('storage/img/' . $item['media_url']) }}"
                        alt="{{ $item['title'] }}"
                        class="w-full h-auto object-cover filter grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-500 opacity-80 group-hover:opacity-100"
                        loading="lazy">

                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/30 to-transparent opacity-90 p-5 flex flex-col justify-end pointer-events-none">
                        <span class="text-emerald-400 font-mono text-xs font-semibold">{{ $item['category'] }}</span>
                        <h4 class="text-white text-base font-bold">{{ $item['title'] }}</h4>
                        <p class="text-gray-300 text-xs mt-1">{{ $item['subtitle'] }}</p>
                    </div>
                </div>

                @elseif($item['type'] === 'video')
                <!-- ITEM VIDEO -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg bg-gray-900 break-inside-avoid">
                    <video id="video-item-{{ $item['id'] }}" loop muted playsinline
                        class="w-full h-auto object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500 opacity-80 group-hover:opacity-100 cursor-pointer"
                        onclick="openModal('video', '{{ $item['media_url'] }}', '{{ e($item['title']) }}', '{{ e($item['category']) }} • {{ e($item['subtitle']) }}')">
                        <source src="{{ asset('storage/img/' . $item['media_url']) }}" type="video/mp4">
                    </video>

                    <!-- Tombol Play/Pause Pojok Kanan Atas -->
                    <button onclick="toggleInlineVideo('video-item-{{ $item['id'] }}', this, event)"
                        class="absolute top-4 right-4 bg-gray-900/80 hover:bg-emerald-500 text-emerald-400 hover:text-white backdrop-blur-md p-3 rounded-full border border-gray-700 transition-all duration-300 z-10 shadow-lg"
                        title="Putar Video">
                        <svg class="play-icon w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                        <svg class="pause-icon w-4 h-4 fill-current hidden" viewBox="0 0 24 24">
                            <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                        </svg>
                    </button>

                    <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/30 to-transparent opacity-90 p-5 flex flex-col justify-end pointer-events-none">
                        <span class="text-emerald-400 font-mono text-xs font-semibold">{{ $item['category'] }}</span>
                        <h4 class="text-white text-base font-bold">{{ $item['title'] }}</h4>
                        <p class="text-gray-300 text-xs mt-1">{{ $item['subtitle'] }}</p>
                    </div>
                </div>
                @endif
                @endforeach

            </div>


            <!-- ================= MODAL / POPUP MEDIA PREVIEW ================= -->
            <div id="media-modal" class="fixed inset-0 z-50 bg-black/90 backdrop-blur-md hidden flex items-center justify-center p-4 transition-all duration-300">
                <div class="relative max-w-4xl w-full bg-gray-900 rounded-2xl overflow-hidden border border-gray-800 shadow-2xl">

                    <button onclick="closeModal()" class="absolute top-4 right-4 bg-black/60 hover:bg-emerald-500 text-white p-2 rounded-full z-20 transition">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="max-h-[75vh] bg-black flex items-center justify-center overflow-hidden">
                        <img id="modal-img" class="max-h-[75vh] w-auto object-contain hidden" src="" alt="Modal Preview">
                        <video id="modal-video" class="max-h-[75vh] w-full hidden" controls>
                            <source id="modal-video-src" src="" type="video/mp4">
                        </video>
                    </div>

                    <div class="p-6 bg-gray-900">
                        <h3 id="modal-title" class="text-white text-xl font-bold"></h3>
                        <p id="modal-desc" class="text-emerald-400 text-sm mt-1 font-mono"></p>
                    </div>
                </div>
            </div>

        </div>
    </section>