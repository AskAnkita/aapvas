{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAPVAS</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind (if you still need it) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- CORRECT Animate.css link (note the filename: animate.min.css) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" />
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}" crossorigin="anonymous"></script>
</head>

<body class="bg-cover bg-center bg-fixed">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg {{ request()->routeIs('home') ? 'transparent' : 'bg-dark text-white' }} fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"
                style="color: {{ request()->routeIs('home') ? '#1a2a44' : '#fff' }};"><b>AAPVAS</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold' : '' }}"
                            href="{{ route('about') }}" style="color: #1a2b49;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active fw-bold' : '' }}"
                            href="{{ route('services') }}" style="color: #1a2b49;">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pricing') ? 'active fw-bold' : '' }}"
                            href="{{ route('pricing') }}" style="color: #1a2b49;">Pricing</a>
                    </li>
                    <!-- Chat Now button for mobile, inside the menu -->
                    <li class="nav-item d-block d-lg-none mt-2">
                        <a href="https://wa.me/919913447761?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
                            target="_blank" class="btn btn-call w-100 text-center">
                            Chat Now
                        </a>
                    </li>
                </ul>
                <!-- Chat Now button for desktop, outside the menu -->
                <a href="https://wa.me/919913447761?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
                    target="_blank" class="btn btn-call ms-3 d-none d-lg-inline-block">
                    Chat Now
                </a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container-fluid my-5 pt-5" style="min-height: 100vh;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-8 bg-gray-800 text-white">
        <div class="container mx-auto px-4 text-center">
            <p class="mb-4">&copy; {{ date('Y') }} AAPVAS | All Rights Reserved</p>
            <div class="flex justify-center space-x-4 mb-4">
                <a href="{{ route('home') }}" class="hover:text-purple-400">Home</a>
                <a href="{{ route('about') }}" class="hover:text-purple-400">About</a>
                <a href="{{ route('services') }}" class="hover:text-purple-400">Services</a>
                <a href="{{ route('contact') }}" class="hover:text-purple-400">Contact</a>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="#" class="hover:text-purple-400"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-purple-400"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-purple-400"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <a href="tel:+911234567890"
                class="btn inline-block mt-4 text-white font-semibold py-2 px-4 rounded-full">Call Now</a>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const navbarBrand = document.querySelector('.navbar-brand');
            const navLinks = document.querySelectorAll('.nav-link:not(.btn-call)');
            if (window.scrollY > 10 && navbar.classList.contains('transparent')) {
                navbar.classList.remove('transparent');
                navbar.classList.add('bg-dark', 'text-white');
                navbarBrand.style.color = '#fff';
                navLinks.forEach(link => {
                    link.style.color = '#fff';
                    if (link.classList.contains('active')) link.style.color = '#d8b4fe';
                });
            } else if (window.scrollY <= 10 && "{{ request()->routeIs('home') }}" === "1") {
                navbar.classList.remove('bg-dark', 'text-white');
                navbar.classList.add('transparent');
                navbarBrand.style.color = '#1a2a44';
                navLinks.forEach(link => {
                    link.style.color = '#6c757d';
                    if (link.classList.contains('active')) link.style.color = '#d8b4fe';
                });
            }
        });
    </script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000, // animation duration in ms
            once: true, // whether animation should happen only once - while scrolling down
        });
    </script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAPVAS - Assist And Promote Virtual Assistant Services</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tailwind (if you still need it) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- CORRECT Animate.css link (note the filename: animate.min.css) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" />
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Font Awesome for WhatsApp icon -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom JS -->
    <script src="{{ asset('js/custom.js') }}" crossorigin="anonymous"></script>
</head>

<body class="bg-gradient-to-br from-gray-50 to-white font-poppins">
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg {{ request()->routeIs('home') ? 'bg-white bg-opacity-90' : 'bg-gray-50' }} fixed-top shadow-md">
        <div class="container mx-auto px-4"> <!-- Use mx-auto and px-4 for consistent padding -->
            <a class="navbar-brand" href="{{ route('home') }}"><b>AAPVAS</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold' : '' }}"
                            href="{{ route('about') }}" style="color: #1a2b49;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active fw-bold' : '' }}"
                            href="{{ route('services') }}" style="color: #1a2b49;">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pricing') ? 'active fw-bold' : '' }}"
                            href="{{ route('pricing') }}" style="color: #1a2b49;">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active fw-bold' : '' }}"
                            href="{{ route('contact') }}" style="color: #1a2b49;">Contact Us</a>
                    </li>
                    <!-- Chat Now button for mobile, inside the menu -->
                    <li class="nav-item d-block d-lg-none mt-2 ">
                        <buton {{-- <a href="https://wa.me/919913447761?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services" --}} target="_blank" class="btn btn-call w-100 text-center">
                            Book a Call
                            {{-- </a> --}}
                        </buton>
                    </li>
                </ul>
                <!-- Chat Now button for desktop, outside the menu -->
                {{-- <a href="https://wa.me/919913447761?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services" --}}
                <button target="_blank" class="btn btn-call ms-3 d-none d-lg-inline-block text-nowrap">
                    Book a Call
                </button>
                {{-- </a> --}}

            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="container-fluid my-5 pt-5" style="min-height: 100vh;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-8 bg-gray-50 text-gray-800">
        <div class="container mx-auto px-4 text-center">
            <p class="mb-4">&copy; {{ date('Y') }} AAPVAS | All Rights Reserved</p>
            <div class="flex justify-center space-x-4 mb-4">
                <a href="{{ route('home') }}" class="hover:text-orange-500">Home</a>
                <a href="{{ route('about') }}" class="hover:text-orange-500">About</a>
                <a href="{{ route('services') }}" class="hover:text-orange-500">Services</a>
                <a href="{{ route('contact') }}" class="hover:text-orange-500">Contact</a>
                <a href="{{ route('privacy.policy') }}" class="hover:text-orange-500">Privacy Policy</a>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="#" class="hover:text-orange-500"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-orange-500"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-orange-500"><i class="fab fa-linkedin-in"></i></a>
            </div>
            {{-- <a href="tel:+911234567890"
                class="btn inline-block mt-4 text-white font-semibold py-2 px-4 rounded-full bg-orange-500 hover:bg-orange-600">Call
                Now</a> --}}
        </div>
    </footer>

    <div class="quick-chat-wrap" aria-live="polite">
        <div id="quickChatTooltip" class="quick-chat-tooltip" role="status">
            <div class="tooltip-text">How can I help you?</div>
            <button id="quickChatClose" class="tooltip-close" aria-label="Close tooltip">&times;</button>
        </div>

        <button id="quickChatBtn" class="quick-chat-btn" aria-label="Chat now on WhatsApp" title="Chat now">
            <i class="fab fa-whatsapp" aria-hidden="true"></i>
        </button>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const navbarBrand = document.querySelector('.navbar-brand');
            const navLinks = document.querySelectorAll('.nav-link:not(.btn-call)');
            if (window.scrollY > 10 && navbar.classList.contains('transparent')) {
                navbar.classList.remove('transparent');
                navbar.classList.add('bg-gray-50', 'shadow');
                navbarBrand.style.color = '#1a2b49';
                navLinks.forEach(link => {
                    link.style.color = '#1a2b49';
                    if (link.classList.contains('active')) link.style.color = '#ff6200';
                });
            } else if (window.scrollY <= 10 && "{{ request()->routeIs('home') }}" === "1") {
                navbar.classList.remove('bg-gray-50', 'shadow');
                navbar.classList.add('transparent');
                navbarBrand.style.color = '#1a2b49';
                navLinks.forEach(link => {
                    link.style.color = '#1a2b49';
                    if (link.classList.contains('active')) link.style.color = '#ff6200';
                });
            }
        });
    </script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
        (function() {
            const waNumber = '919913447761';
            const defaultMessage = 'Hello I want to know more about your services';
            const chatBtn = document.getElementById('quickChatBtn');
            const tooltip = document.getElementById('quickChatTooltip');
            const closeBtn = document.getElementById('quickChatClose');

            function openWhatsApp() {
                const url = `https://wa.me/${waNumber}?text=${encodeURIComponent(defaultMessage)}`;
                window.open(url, '_blank');
            }

            // Click WhatsApp button -> open chat
            if (chatBtn) chatBtn.addEventListener('click', function(e) {
                e.preventDefault();
                openWhatsApp();
            });

            // Close tooltip (hide)
            if (closeBtn) closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                tooltip.classList.add('hidden');
            });

            // Clicking tooltip (not close) opens chat
            if (tooltip) tooltip.addEventListener('click', function(e) {
                if (e.target === closeBtn) return;
                openWhatsApp();
            });

            // Auto-hide tooltip after 6s
            // setTimeout(() => {
            //     if (tooltip) tooltip.classList.add('hidden');
            // }, 6000);
        })();
    </script>
    @stack('scripts')
</body>

</html>
