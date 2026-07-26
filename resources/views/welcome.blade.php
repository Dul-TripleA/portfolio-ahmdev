<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Fitroh Ahmad Abdul Aziz</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- FontAwesome CDN untuk Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Typed.js CDN untuk Animasi Teks Ketik -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap');

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
            background-color: #ffffff;
        }

        .font-serif-title {
            font-family: 'Playfair Display', serif;
        }

        /* Teks vertikal untuk Email di sisi kanan */
        .vertical-text {
            writing-mode: vertical-rl;
        }

        /* ================= BACKGROUND GRID PATTERN ================= */
        .bg-grid-pattern {
            background-size: 40px 40px;
            background-image:
                linear-gradient(to right, rgba(16, 185, 129, 0.05) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(16, 185, 129, 0.05) 1px, transparent 1px);
        }

        /* ================= KEYFRAME ANIMATIONS ================= */
        @keyframes photoFloat {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-12px) rotate(0.8deg);
            }
        }

        @keyframes floatSlow {

            0%,
            100% {
                transform: translateY(0px) translateX(0px) scale(1);
            }

            50% {
                transform: translateY(-30px) translateX(20px) scale(1.1);
            }
        }

        @keyframes floatFast {

            0%,
            100% {
                transform: translateY(0px) translateX(0px) rotate(0deg);
            }

            50% {
                transform: translateY(40px) translateX(-25px) rotate(15deg);
            }
        }

        @keyframes floatReverse {

            0%,
            100% {
                transform: translateY(0px) translateX(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-35px) translateX(-20px) rotate(-15deg);
            }
        }

        @keyframes pulseGlow {

            0%,
            100% {
                opacity: 0.25;
                transform: scale(1);
            }

            50% {
                opacity: 0.55;
                transform: scale(1.2);
            }
        }

        @keyframes cardSwing {

            0%,
            100% {
                transform: rotate(-2deg);
            }

            50% {
                transform: rotate(2deg);
            }
        }

        .animate-photo-float {
            animation: photoFloat 6s ease-in-out infinite;
        }

        .animate-float-1 {
            animation: floatSlow 8s ease-in-out infinite;
        }

        .animate-float-2 {
            animation: floatFast 10s ease-in-out infinite;
        }

        .animate-float-3 {
            animation: floatReverse 9s ease-in-out infinite reverse;
        }

        .animate-pulse-glow-1 {
            animation: pulseGlow 6s ease-in-out infinite;
        }

        .animate-pulse-glow-2 {
            animation: pulseGlow 8s ease-in-out infinite 2s;
        }

        .animate-card-swing {
            animation: cardSwing 5s ease-in-out infinite;
            transform-origin: top center;
        }

        /* Sembunyikan Scrollbar secara sempurna */
        .no-scrollbar::-webkit-scrollbar {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
        }

        .no-scrollbar {
            -ms-overflow-style: none !important;
            scrollbar-width: none !important;
        }

        /* Custom Transition Tab Slider Experience */
        .tab-indicator {
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1), width 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .tab-content {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .tab-content.hidden-tab {
            display: none;
            opacity: 0;
            transform: translateY(12px);
        }

        .tab-content.active-tab {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        /* Style Navbar Active State */
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0%;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #10b981;
            transition: width 0.3s ease;
        }

        .nav-link.active-nav-item {
            color: #10b981 !important;
            font-weight: 700;
        }

        .nav-link.active-nav-item::after {
            width: 100%;
        }

        /* Custom Scrollbar Utama Halaman */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #10b981;
            border-radius: 4px;
        }

        /* Style Filter Portfolio Active Button */
        .portfolio-filter-btn.active-filter {
            background-color: #10b981;
            color: #ffffff;
            border-color: #10b981;
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25);
        }
    </style>
</head>

<body class="bg-white text-gray-800 relative min-h-screen selection:bg-emerald-500 selection:text-white bg-grid-pattern">

    <!-- ================= DYNAMIC BACKGROUND ANIMATIONS ================= -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">

        <!-- Glowing Ambient Lights (Soft Color Blurs) -->
        <div class="absolute -top-20 -left-20 w-[500px] h-[500px] bg-emerald-200/40 rounded-full blur-[120px] animate-pulse-glow-1"></div>
        <div class="absolute top-1/3 -right-20 w-[450px] h-[450px] bg-teal-200/30 rounded-full blur-[120px] animate-pulse-glow-2"></div>
        <div class="absolute top-2/3 -left-20 w-[500px] h-[500px] bg-sky-200/30 rounded-full blur-[130px] animate-pulse-glow-1"></div>
        <div class="absolute -bottom-20 right-10 w-[550px] h-[550px] bg-emerald-100/50 rounded-full blur-[140px] animate-pulse-glow-2"></div>

        <!-- Interactive Mouse Follower Light Glow (Ubah 'absolute' jadi 'fixed') -->
        <div id="cursor-glow" class="fixed top-0 left-0 w-[350px] h-[350px] bg-emerald-300/20 rounded-full blur-[80px] pointer-events-none transition-transform duration-75 ease-out transform -translate-x-1/2 -translate-y-1/2 hidden md:block z-0"></div>

        <!-- Animated Floating Tech & Creative Icons -->
        <div class="absolute top-20 left-[12%] text-emerald-400/30 text-2xl animate-float-1"><i class="fa-solid fa-code"></i></div>
        <div class="absolute top-1/4 right-[15%] text-teal-400/30 text-3xl animate-float-2"><i class="fa-solid fa-layer-group"></i></div>
        <div class="absolute top-1/2 left-[8%] text-emerald-500/25 text-3xl animate-float-3"><i class="fa-solid fa-camera"></i></div>
        <div class="absolute top-2/3 right-[10%] text-sky-400/30 text-2xl animate-float-1"><i class="fa-solid fa-laptop-code"></i></div>
        <div class="absolute top-[85%] left-[18%] text-emerald-400/30 text-2xl animate-float-2"><i class="fa-solid fa-wand-magic-sparkles"></i></div>

        <!-- Floating Geometric Colorful Dots & Rings -->
        <div class="absolute top-28 left-[25%] w-4 h-4 bg-emerald-400/60 rounded-full animate-float-1"></div>
        <div class="absolute top-72 right-[28%] w-6 h-6 border-2 border-emerald-400/50 rounded-full animate-float-3"></div>
        <div class="absolute top-[45%] right-[22%] w-3 h-3 bg-sky-400/60 rounded-full animate-float-2"></div>
        <div class="absolute top-[60%] left-[30%] w-5 h-5 border-2 border-teal-400/40 rounded-lg animate-float-1"></div>
        <div class="absolute top-[80%] right-[35%] w-4 h-4 bg-emerald-500/50 rounded-full animate-float-3"></div>

    </div>

    <!-- ================= NAVBAR ================= -->
    <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 py-5 px-6 md:px-16">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#" class="text-xl font-bold tracking-wide text-gray-900 hover:text-emerald-500 transition-colors">AHMD</a>

            <div class="hidden md:flex items-center space-x-8 text-sm font-medium">
                <a href="#about" class="nav-link text-gray-700 hover:text-emerald-500">
                    <span class="text-emerald-500 font-mono mr-1">&gt; 01.</span> About
                </a>
                <a href="#experience" class="nav-link text-gray-700 hover:text-emerald-500">
                    <span class="text-emerald-500 font-mono mr-1">&gt; 02.</span> Experience
                </a>
                <a href="#portfolio" class="nav-link text-gray-700 hover:text-emerald-500">
                    <span class="text-emerald-500 font-mono mr-1">&gt; 03.</span> Portfolio
                </a>
                <a href="#contact" class="nav-link text-gray-700 hover:text-emerald-500">
                    <span class="text-emerald-500 font-mono mr-1">&gt; 04.</span> Contact
                </a>
                <a href="{{ asset('storage/doc/Fitroh Ahmad Abdul Aziz.pdf') }}"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="border-2 border-emerald-500 text-emerald-500 px-5 py-2 rounded-xl hover:bg-emerald-500 hover:text-white transition-all duration-300 shadow-sm hover:shadow-emerald-200 inline-flex items-center gap-2">
                    Resume
                </a>
            </div>

            <button id="menu-btn" class="md:hidden text-2xl text-gray-800 focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md px-6 py-4 shadow-xl rounded-b-2xl mt-3 flex flex-col space-y-4">
            <a href="#about" class="nav-link-mobile text-gray-700 font-medium py-1"><span class="text-emerald-500 font-mono">&gt; 01.</span> About</a>
            <a href="#experience" class="nav-link-mobile text-gray-700 font-medium py-1"><span class="text-emerald-500 font-mono">&gt; 02.</span> Experience</a>
            <a href="#portfolio" class="nav-link-mobile text-gray-700 font-medium py-1"><span class="text-emerald-500 font-mono">&gt; 03.</span> Portfolio</a>
            <a href="#contact" class="nav-link-mobile text-gray-700 font-medium py-1"><span class="text-emerald-500 font-mono">&gt; 04.</span> Contact</a>
            <a href="#" class="inline-block border-2 border-emerald-500 text-emerald-500 text-center py-2 rounded-xl font-semibold">Resume</a>
        </div>
    </nav>

    <!-- ================= FIXED SIDEBAR ================= -->
    <div class="fixed left-6 md:left-12 bottom-0 hidden md:flex flex-col items-center space-y-6 z-30">
        <div class="flex flex-col space-y-5 text-xl text-emerald-500">
            <a href="#" class="hover:-translate-y-1 hover:text-emerald-600 transition-all"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="hover:-translate-y-1 hover:text-emerald-600 transition-all"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="hover:-translate-y-1 hover:text-emerald-600 transition-all"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" class="hover:-translate-y-1 hover:text-emerald-600 transition-all"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <div class="w-1 bg-emerald-500 h-28 rounded-t-full"></div>
    </div>

    <div class="fixed right-6 md:right-12 bottom-0 hidden md:flex flex-col items-center space-y-6 z-30">
        <a href="mailto:Fitrohahmad8@gmail.com" class="vertical-text text-gray-400 hover:text-emerald-500 text-xs tracking-widest font-medium transition-colors">
            Fitrohahmad8@gmail.com
        </a>
        <div class="w-3 h-3 bg-red-500 rounded-full animate-ping"></div>
        <div class="w-1 bg-emerald-500 h-28 rounded-t-full"></div>
    </div>


    @include('components.heroSection')

    @include('components.aboutSection')

    @include('components.experienceSection')

    @include('components.portfolioSection', ['portfolios' => $portfolios])

    @include('components.clientSection')

    @include('components.contactSection')


    <!-- ================= JAVASCRIPT ================= -->
    <script>
        let currentActiveIndex = 0;

        // 1. Typed.js
        document.addEventListener('DOMContentLoaded', function() {
            new Typed('#typed', {
                strings: ['Humanitarian Worker',
                    'Web Developer',
                    'UI/UX Designer',
                    'Photographer & Videographer'
                ],
                typeSpeed: 80,
                backSpeed: 50,
                backDelay: 2000,
                loop: true
            });

            setTimeout(() => {
                updateTabIndicator(0);
            }, 150);
        });

        // 2. Interactive Cursor Glow Effect (Aktif di Semua Section)
        const cursorGlow = document.getElementById('cursor-glow');

        window.addEventListener('mousemove', (e) => {
            if (cursorGlow) {
                // Gunakan clientX & clientY langsung karena posisi div sudah fixed
                cursorGlow.style.left = `${e.clientX}px`;
                cursorGlow.style.top = `${e.clientY}px`;
            }
        });

        // 3. Tab Switcher Experience dengan Animasi Smooth
        function switchTab(index) {
            currentActiveIndex = index;
            const buttons = document.querySelectorAll('.tab-btn');
            const contents = document.querySelectorAll('.tab-content');

            updateTabIndicator(index);

            buttons.forEach((btn, i) => {
                if (i === index) {
                    btn.classList.add('text-emerald-500');
                    btn.classList.remove('text-gray-400');
                } else {
                    btn.classList.remove('text-emerald-500');
                    btn.classList.add('text-gray-400');
                }
            });

            contents.forEach((content, i) => {
                if (i === index) {
                    content.classList.remove('hidden-tab');
                    content.classList.add('active-tab');
                } else {
                    content.classList.remove('active-tab');
                    content.classList.add('hidden-tab');
                }
            });

            const activeBtn = buttons[index];
            activeBtn.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'center'
            });
        }

        function updateTabIndicator(index) {
            const buttons = document.querySelectorAll('.tab-btn');
            const indicator = document.getElementById('tab-indicator');
            const targetBtn = buttons[index];

            if (targetBtn && indicator) {
                indicator.style.width = `${targetBtn.offsetWidth}px`;
                indicator.style.transform = `translateX(${targetBtn.offsetLeft}px)`;
            }
        }

        window.addEventListener('resize', () => {
            updateTabIndicator(currentActiveIndex);
        });

        // 4. Glassmorphism Scroll Navbar & Active Scrollspy Link
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');
        const navLinksMobile = document.querySelectorAll('.nav-link-mobile');

        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const scrollY = window.pageYOffset;

            // Efek Navbar Glassmorphism
            if (scrollY > 30) {
                navbar.classList.add('bg-white/80', 'backdrop-blur-md', 'shadow-sm', 'py-3.5');
                navbar.classList.remove('py-5');
            } else {
                navbar.classList.remove('bg-white/80', 'backdrop-blur-md', 'shadow-sm', 'py-3.5');
                navbar.classList.add('py-5');
            }

            // Scrollspy logic untuk mendeteksi section aktif saat discroll
            sections.forEach(current => {
                const sectionHeight = current.offsetHeight;
                const sectionTop = current.offsetTop - 120;
                const sectionId = current.getAttribute('id');

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    // Update Desktop Nav
                    navLinks.forEach(link => {
                        link.classList.remove('active-nav-item');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('active-nav-item');
                        }
                    });

                    // Update Mobile Nav
                    navLinksMobile.forEach(link => {
                        link.classList.remove('text-emerald-500', 'font-bold');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('text-emerald-500', 'font-bold');
                        }
                    });
                }
            });
        });

        // 5. Toggle Mobile Menu & Smooth Hide when Link Clicked
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        navLinksMobile.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // 6. Filtering Portfolio Categories (Web Dev, Design, Photography)
        function filterPortfolio(category, clickedBtn) {
            const buttons = document.querySelectorAll('.portfolio-filter-btn');
            const containers = document.querySelectorAll('.portfolio-category-container');

            // Toggle Class Active Button
            buttons.forEach(btn => {
                btn.classList.remove('active-filter');
                btn.classList.add('border-gray-200', 'text-gray-600');
            });

            clickedBtn.classList.add('active-filter');
            clickedBtn.classList.remove('border-gray-200', 'text-gray-600');

            // Toggle Tampilan Kontainer Kategori
            containers.forEach(container => {
                container.classList.add('hidden');
            });

            const targetContainer = document.getElementById(`category-${category}`);
            if (targetContainer) {
                targetContainer.classList.remove('hidden');
            }
        }

        // FVPortfolio
        function toggleInlineVideo(videoId, btn, event) {
            event.stopPropagation();
            const video = document.getElementById(videoId);
            const playIcon = btn.querySelector('.play-icon');
            const pauseIcon = btn.querySelector('.pause-icon');

            if (video.paused) {
                video.play();
                playIcon.classList.add('hidden');
                pauseIcon.classList.remove('hidden');
            } else {
                video.pause();
                playIcon.classList.remove('hidden');
                pauseIcon.classList.add('hidden');
            }
        }

        function openModal(type, src, title, desc) {
            const modal = document.getElementById('media-modal');
            const modalImg = document.getElementById('modal-img');
            const modalVideo = document.getElementById('modal-video');
            const modalVideoSrc = document.getElementById('modal-video-src');
            const modalTitle = document.getElementById('modal-title');
            const modalDesc = document.getElementById('modal-desc');

            modalTitle.innerText = title;
            modalDesc.innerText = desc;

            if (type === 'image') {
                modalVideo.classList.add('hidden');
                modalVideo.pause();
                modalImg.src = src;
                modalImg.classList.remove('hidden');
            } else if (type === 'video') {
                modalImg.classList.add('hidden');
                modalVideoSrc.src = src;
                modalVideo.load();
                modalVideo.classList.remove('hidden');
                modalVideo.play();
            }

            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            const modal = document.getElementById('media-modal');
            const modalVideo = document.getElementById('modal-video');

            modalVideo.pause();
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        document.getElementById('media-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
</body>

</html>