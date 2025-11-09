@extends('layouts.app')

@section('content')
    <!-- 1️⃣ Hero Section -->
    <div class="hero-section relative bg-white h-[90vh] flex items-center overflow-hidden pt-0 pb-0">
        <div class="container mx-auto py-4 px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center text-center md:text-left">
                {{-- <div class="md:w-1/2">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6" data-aos="fade-up">
                       
                    </h1>
                    <p class="text-xl mb-8" data-aos="fade-up" data-aos-delay="200">
                       
                    </p>
                    <a href="{{ route('contact') }}" class="btn-primary transition duration-300" data-aos="fade-up"
                        data-aos-delay="400">
                        
                    </a>
                </div> --}}
                <div class="lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-dark mb-4" data-aos="fade-up">
                        Smart Virtual Assistance to Help Your Business Grow<br>
                        <span class="text-primary">for Your Business</span>
                    </h1>
                    <p class="text-lg mb-6 text-tertiary" data-aos="fade-up" data-aos-delay="200">
                        Save time, cut costs, and boost productivity with our professional virtual assistant services
                        tailored for entrepreneurs, startups, and <strong>growing businesses.</strong>.
                    </p>
                    <a href="{{ route('contact') }}" class="btn-primary" data-aos="fade-up" data-aos-delay="400">
                        Book a Call
                    </a>
                </div>
                <div class="md:w-1/2 hidden md:block">
                    <img src="{{ asset('assets/images/service-banner-removebg.png') }}" alt="Virtual Assistant"
                        class="banner-image bg-transparent mx-auto animate__animated animate__fadeIn" data-aos="zoom-in"
                        data-aos-delay="600">
                </div>
            </div>
        </div>
    </div>

    <!-- 2️⃣ About Section -->
    <div class="min-h-screen bg-orange-50 flex items-center py-16">

        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">

            <!-- Image -->
            <div class="md:w-1/2" data-aos="fade-right">
                <img src="{{ asset('assets/images/What-Does-a-Virtual-Assistant-Do.jpg') }}"
                    class="w-full md:w-3/4 rounded-lg shadow-md mx-auto" alt="About Us">
            </div>

            <!-- Content -->
            <div class="md:w-1/2 mt-6 md:mt-0 md:pl-8" data-aos="fade-left" data-aos-delay="200">
                <h2 class="text-4xl font-bold mb-6">Who We Are</h2>

                <p class="text-lg mb-4">
                    We are a passionate team of virtual support professionals dedicated to helping entrepreneurs,
                    coaches, and small businesses operate smoothly and scale effectively. Our mission is to remove your
                    administrative, operational, and digital burden so you can focus on what truly matters — growing
                    your business.
                </p>
                <p class="text-lg mb-6">
                    With years of experience in business support, customer operations, and digital productivity, we
                    bring structure, organization, and strategy to your daily workflow. Whether you are a startup founder,
                    a busy executive, or a solopreneur, we tailor our assistance to fit your systems, your goals, and your
                    pace.
                </p>
                <a href="{{ route('about') }}"
                    class="btn-primary inline-block bg-orange-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-orange-600">
                    Learn More About Us
                </a>
            </div>

        </div>
    </div>
    <!-- 3️⃣ Services Section -->
    <div class="min-h-screen flex items-center py-20 bg-white">

        <div class="container mx-auto px-4 text-center">
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
                        <i class="{{ $service['icon'] }} text-4xl text-orange-500 mb-4"></i>
                        <h3 class="text-2xl font-semibold text-orange-500 mb-4">{{ $service['title'] }}</h3>
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
    <div class="min-h-screen flex flex-col justify-center py-20 bg-gray-50">

        <div class="container mx-auto px-4 text-center">

            <!-- Clients -->
            <h2 class="text-4xl font-bold mb-6" data-aos="fade-up">Trusted Clients</h2>
            <p class="text-lg mb-10" data-aos="fade-up" data-aos-delay="200">
                Proudly supporting global entrepreneurs, coaches, and businesses.
            </p>

            <div class="grid grid-cols-3 md:grid-cols-3 gap-8 justify-between mb-20" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{ asset('assets/images/clients/dv-survivors.png') }}"
                    class="h-20 object-contain grayscale hover:grayscale-0 transition" alt="Client 1">
                <img src="{{ asset('assets/images/clients/theconversationscoach.png') }}"
                    class="h-20 object-contain grayscale hover:grayscale-0 transition" alt="Client 2">
                <img src="{{ asset('assets/images/clients/meenaoverseas.png') }}"
                    class="h-20 object-contain grayscale hover:grayscale-0 transition" alt="Client 3">
                {{-- <img src="{{ asset('assets/images/clients/theconversationscoach.png') }}"
                    class="h-20 object-contain grayscale hover:grayscale-0 transition" alt="Client 4"> --}}
            </div>

            <!-- Testimonials -->
            <h3 class="text-3xl font-bold mb-10" data-aos="fade-up">What Our Clients Say</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in">
                    <p class="italic mb-6">
                        "BizBud has been a game-changer for managing my coaching business. Highly recommend!"
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        {{-- <img src="https://via.placeholder.com/60" class="w-12 h-12 rounded-full" alt="Jane"> --}}
                        <div class="text-left">
                            <p class="font-semibold">Jane Doe</p>
                            <span class="text-sm">Business
                                Coach</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in"
                    data-aos-delay="200">
                    <p class="italic mb-6">
                        "Their virtual assistants are highly professional and proactive. Amazing support!"
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        {{-- <img src="https://via.placeholder.com/60" class="w-12 h-12 rounded-full" alt="John"> --}}
                        <div class="text-left">
                            <p class="font-semibold">John Smith</p>
                            <span class="text-sm">
                                Founder</span>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in"
                    data-aos-delay="400">
                    <p class="italic mb-6">
                        "They take care of operations so I can focus on scaling my business."
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        {{-- <img src="https://via.placeholder.com/60" class="w-12 h-12 rounded-full" alt="Emily"> --}}
                        <div class="text-left">
                            <p class="font-semibold">Emily Brown</p>
                            <span class="text-sm">
                                Entrepreneur</span>
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
