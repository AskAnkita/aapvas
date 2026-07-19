@extends('layouts.app')

@section('content')
    <!-- 1️⃣ Hero Section -->
    <div class="video-hero-wrap hero-full-bleed">
        <video class="video-hero-video" id="homeHeroVideo" autoplay muted loop playsinline
            poster="{{ asset('assets/images/home-hero-poster.jpg') }}">
            <source src="{{ asset('assets/videos/home-hero.mp4') }}" type="video/mp4">
        </video>
        <div class="video-hero-overlay"></div>

        <div class="relative z-10 container mx-auto px-4">
            <div class="lg:w-1/2 text-left lg:text-left">
                <p class="section-eyebrow" data-aos="fade-up">Virtual Assistant Services</p>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4" style="color:#fff;" data-aos="fade-up">
                    Smart Virtual Assistance to Help Your Business Grow<br>
                    <span style="color:#ff6200;">for Your Business</span>
                </h1>
                <p class="text-lg mb-6" style="color:#e5e7eb;" data-aos="fade-up" data-aos-delay="200">
                    Save time, cut costs, and boost productivity with our professional virtual assistant services
                    tailored for entrepreneurs, startups, and <strong>growing businesses.</strong>.
                </p>
                <a href="{{ route('contact') }}" class="btn-primary" data-aos="fade-up" data-aos-delay="400">
                    Book a Call
                </a>
            </div>
        </div>
    </div>

    <!-- 2️⃣ About Section -->
    <div class="hero-split bg-orange-50">

        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">

            <!-- Image -->
            <div class="md:w-1/2" data-aos="fade-right">
                <div class="float-media">
                    <span class="float-media-blob"></span>
                    <img src="{{ asset('assets/images/What-Does-a-Virtual-Assistant-Do.jpg') }}"
                        class="float-media-img" alt="A virtual assistant supporting a client on a video call">
                    <div class="float-media-badge">
                        <span class="badge-star">150+</span>
                        <span class="badge-text">Businesses helped so far</span>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="md:w-1/2 mt-6 md:mt-0 md:pl-8" data-aos="fade-left" data-aos-delay="200">
                <p class="section-eyebrow">Who We Are</p>
                <h2 class="hero-split-title fw-bold">A team that runs your busywork, not just tasks</h2>

                <p class="hero-split-copy mb-4">
                    We are a passionate team of virtual support professionals dedicated to helping entrepreneurs,
                    coaches, and small businesses operate smoothly and scale effectively. Our mission is to remove your
                    administrative, operational, and digital burden so you can focus on what truly matters — growing
                    your business.
                </p>

                <div class="stat-row mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat">
                        <span class="stat-num">10+</span>
                        <span class="stat-label">Service Areas</span>
                    </div>
                    <div class="stat">
                        <span class="stat-num">4.9/5</span>
                        <span class="stat-label">Client Rating</span>
                    </div>
                </div>

                <a href="{{ route('about') }}"
                    class="btn-primary inline-block bg-orange-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-orange-600">
                    Learn More About Us
                </a>
            </div>

        </div>
    </div>
    <!-- 3️⃣ Services Section -->
    <div class="flex items-center py-12 md:py-16 bg-white">

        <div class="container mx-auto px-4 text-center">
            <p class="section-eyebrow" data-aos="fade-up">What We Do</p>
            <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">Our Services</h2>
            <p class="text-lg mb-12" data-aos="fade-up" data-aos-delay="200">
                High-quality professional assistance tailored to support your business growth and productivity.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

                @php
                    $services = [
                        [
                            'icon' => 'fab fa-linkedin',
                            'title' => 'LinkedIn Support',
                            'description' => 'Optimize your LinkedIn presence and generate leads.',
                            'features' => [
                                'Profile optimization',
                                'Content creation & scheduling',
                                'Lead generation & outreach',
                                'Personal branding support',
                                'Inbox & connection management',
                            ],
                        ],
                        [
                            'icon' => 'fas fa-headset',
                            'title' => 'Customer Service',
                            'description' => 'Deliver exceptional support to your customers.',
                            'features' => [
                                'Email & live chat management',
                                'CRM handling & support ticketing',
                                'Customer follow-ups & feedback handling',
                                'Inquiry resolution & workflow support',
                            ],
                        ],
                        [
                            'icon' => 'fas fa-chart-line',
                            'title' => 'Marketing Assistance',
                            'description' => 'Boost your digital presence with creative marketing support.',
                            'features' => [
                                'Social media management & content creation',
                                'Scheduling & engagement tracking',
                                'Email campaign management',
                                'Branding & basic design assistance',
                            ],
                        ],
                    ];
                @endphp

                @foreach ($services as $service)
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300 icon-box justify-center mx-auto"
                        data-aos="fade-up">
                        <i class="{{ $service['icon'] }} text-4xl text-primary mb-4"></i>
                        <h3 class="text-2xl font-semibold text-primary mb-4">{{ $service['title'] }}</h3>
                        <p class="mb-4">
                            {{ $service['description'] }}
                        </p>
                        <ul class="text-left space-y-2">
                            @foreach ($service['features'] as $feature)
                                <li>✔ {{ $feature }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Clients & Testimonials Section -->
    <div class="flex flex-col justify-center py-12 md:py-16 bg-gray-50">

        <div class="container mx-auto px-4 text-center">

            <!-- Clients -->
            <p class="section-eyebrow" data-aos="fade-up">Client Love</p>
            <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">Trusted Clients</h2>
            <p class="text-lg mb-10" data-aos="fade-up" data-aos-delay="200">
                Proudly supporting global entrepreneurs, coaches, and businesses.
            </p>

            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 mb-20" data-aos="zoom-in" data-aos-delay="400">
                <div class="client-logo-tile">
                    <img src="{{ asset('assets/images/clients/dv-survivors.png') }}"
                        class="grayscale hover:grayscale-0 transition" alt="Client 1">
                </div>
                <div class="client-logo-tile">
                    <img src="{{ asset('assets/images/clients/theconversationscoach.png') }}"
                        class="grayscale hover:grayscale-0 transition" alt="Client 2">
                </div>
                <div class="client-logo-tile">
                    <img src="{{ asset('assets/images/clients/meenaoverseas.png') }}"
                        class="grayscale hover:grayscale-0 transition" alt="Client 3">
                </div>
            </div>

            <!-- Testimonials -->
            <h3 class="text-3xl font-bold mb-10" data-aos="fade-up">What Our Clients Say</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in">
                    <p class="italic mb-6">
                        "I've worked with with them in the past many times and I can tell you that Ajay is someone you want on your team and has a skill set way beyond the description in this post..."
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        {{-- <img src="https://via.placeholder.com/60" class="w-12 h-12 rounded-full" alt="Jane"> --}}
                        <div class="text-center">
                            <p class="font-semibold">Adam J Clarke</p>
                            <span class="text-sm">Macropay [Founder]</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in"
                    data-aos-delay="200">
                    <p class="italic mb-6">
                        "Their service is afable, fluent in English, smart and motivated. Highly recommended."
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        {{-- <img src="https://via.placeholder.com/60" class="w-12 h-12 rounded-full" alt="John"> --}}
                        <div class="text-center">
                            <p class="font-semibold">Ludwig Haskins</p>
                            <span class="text-sm">
                                The Sam Haskins Estate [Owner]]</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in"
                    data-aos-delay="400">
                    <p class="italic mb-6">
                        "Very helpful. You are definitely very motivated and helpful."
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        {{-- <img src="https://via.placeholder.com/60" class="w-12 h-12 rounded-full" alt="Emily"> --}}
                        <div class="text-center">
                            <p class="font-semibold">Mia Forbes Pirie</p>
                            <span class="text-sm">
                                Lares Partners [Co-founder]</span>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

    <!-- Include Animate.css for animations -->
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animation.min.css" rel="stylesheet">
    <!-- Include Font Awesome for social icons -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroVideo = document.getElementById('homeHeroVideo');
            if (heroVideo && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                heroVideo.pause();
                heroVideo.removeAttribute('autoplay');
            }
        });
    </script>
@endpush
