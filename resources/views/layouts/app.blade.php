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
                <ul class="navbar-nav ms-auto flex-auto justify-center ">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active fw-bold' : '' }}"
                            href="{{ route('home') }}"
                            style="color: {{ request()->routeIs('home') ? '#6c757d' : '#fff' }};">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active fw-bold' : '' }}"
                            href="{{ route('about') }}"
                            style="color: {{ request()->routeIs('home') ? '#6c757d' : '#fff' }};">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active fw-bold' : '' }}"
                            href="{{ route('services') }}"
                            style="color: {{ request()->routeIs('home') ? '#6c757d' : '#fff' }};">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('how-it-works') ? 'active fw-bold' : '' }}"
                            href="{{ route('how-it-works') }}"
                            style="color: {{ request()->routeIs('home') ? '#6c757d' : '#fff' }};">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pricing') ? 'active fw-bold' : '' }}"
                            href="{{ route('pricing') }}"
                            style="color: {{ request()->routeIs('home') ? '#6c757d' : '#fff' }};">Pricing</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <a href="{{ route('contact') }}" class="nav-link btn btn-call w-100 text-center"
                            style="background-color: #ff6600; color: #fff; border-radius: 50px;">Call Now</a>
                    </li>
                </ul>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-call d-none d-lg-inline-block"
                style="background-color: #ff6600; color: #fff; border-radius: 50px;">Call Now</a>
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
                <ul class="navbar-nav mx-auto"> <!-- Centered with mx-auto -->
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
                </ul>
                <a href="https://wa.me/919913447761?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
                    target="_blank" class="btn btn-call ms-3 mt-3 d-block d-lg-none">
                    Chat Now
                </a>
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
    <footer class="py-8 bg-gray-50 text-gray-800">
        <div class="container mx-auto px-4 text-center">
            <p class="mb-4">&copy; {{ date('Y') }} AAPVAS | All Rights Reserved</p>
            <div class="flex justify-center space-x-4 mb-4">
                <a href="{{ route('home') }}" class="hover:text-orange-500">Home</a>
                <a href="{{ route('about') }}" class="hover:text-orange-500">About</a>
                <a href="{{ route('services') }}" class="hover:text-orange-500">Services</a>
                <a href="{{ route('contact') }}" class="hover:text-orange-500">Contact</a>
            </div>
            <div class="flex justify-center space-x-4">
                <a href="#" class="hover:text-orange-500"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="hover:text-orange-500"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-orange-500"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <a href="tel:+911234567890"
                class="btn inline-block mt-4 text-white font-semibold py-2 px-4 rounded-full bg-orange-500 hover:bg-orange-600">Call
                Now</a>
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
    <script>
        AOS.init({
            duration: 1000,
            once: true,
        });
    </script>
</body>

</html>
