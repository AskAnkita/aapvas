@extends('layouts.app')

@section('content')
    <!-- 1️⃣ Hero Section -->
    <div class="relative bg min-h-screen flex items-center overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center text-center md:text-left">
                <div class="md:w-1/2">
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-800 mb-6" data-aos="fade-up">
                        Smart Virtual Assistance to Help Your Business Grow
                    </h1>
                    <p class="text-xl text-gray-600 mb-8" data-aos="fade-up" data-aos-delay="200">
                        Save time, cut costs, and boost productivity with our professional virtual assistant services
                        tailored for entrepreneurs, startups, and growing businesses.
                    </p>
                    <a href="{{ route('contact') }}" class="btn-primary transition duration-300" data-aos="fade-up"
                        data-aos-delay="400">
                        Book a Call
                    </a>
                </div>
                <div class="md:w-1/2 hidden md:block">
                    <img src="{{ asset('assets/images/banner-removebg.png') }}" alt="Virtual Assistant"
                        class="w-3/4 bg-transparent mx-auto animate__animated animate__fadeIn" data-aos="zoom-in"
                        data-aos-delay="600">
                </div>
            </div>
        </div>
    </div>

    <!-- 2️⃣ About Section -->

    <div class="py-16 bg">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2" data-aos="fade-right">
                <img src="{{ asset('assets/images/What-Does-a-Virtual-Assistant-Do.jpg') }}"
                    class="w-3/4 rounded-lg shadow-md" alt="About Us">
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0 md:pl-8" data-aos="fade-left" data-aos-delay="200">
                <h2 class="text-4xl font-bold text-gray-800 mb-6">Who We Are</h2>
                <p class="text-lg text-gray-600 mb-8">
                    We are a team of dedicated professionals providing top-tier virtual assistance to help businesses
                    thrive.
                    From administrative support to strategic planning, we handle the details so you can focus on growth.
                </p>
                <a href="{{ route('about') }}"
                    class="btn-primary inline-block bg-orange-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-orange-600">
                    Learn More About Us
                </a>
            </div>
        </div>
    </div>

    <!-- 3️⃣ Services Section -->
    <div class="py-16 bg">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">Our Services</h2>
            <p class="text-lg text-gray-600 mb-10" data-aos="fade-up" data-aos-delay="200">
                Tailored solutions to meet your business needs.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up">
                    <h3 class="text-2xl font-semibold text-orange-500 mb-4">Administrative Support</h3>
                    <p class="text-gray-600">Manage emails, schedules, and tasks efficiently with our expert assistants.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3 class="text-2xl font-semibold text-orange-500 mb-4">Customer Service</h3>
                    <p class="text-gray-600">Deliver exceptional customer experiences with our dedicated support team.</p>
                </div>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="fade-up"
                    data-aos-delay="400">
                    <h3 class="text-2xl font-semibold text-orange-500 mb-4">Marketing Assistance</h3>
                    <p class="text-gray-600">Boost your brand with social media management and content creation.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- 4️⃣ client Section -->
    <div class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">Trusted Clients</h2>
            <p class="text-lg text-gray-600 mb-10" data-aos="fade-up" data-aos-delay="200">
                We partner with businesses worldwide to deliver exceptional results.
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 justify-center" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{ asset('assets/images/clients/dv-survivors.png') }}" class="h-20 object-contain" alt="Client 1">
                <img src="{{ asset('assets/images/clients/theconversationscoach.png') }}" class="h-20 object-contain"
                    alt="Client 2">
                <img src="{{ asset('assets/images/clients/meenaoverseas.png') }}" class="h-20 object-contain"
                    alt="Client 3">
                <img src="{{ asset('assets/images/clients/theconversationscoach.png') }}" class="h-20 object-contain"
                    alt="Client 4">
            </div>
        </div>
    </div>


    <!-- 5️⃣ Testimonials Section -->
    <div class="py-16 bg">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6" data-aos="fade-up">What Our Clients Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in">
                    <p class="text-gray-600 italic">"BizBud transformed our workflow with their seamless support!"</p>
                    <p class="mt-6 font-semibold text-gray-800">Jane Doe, CEO</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in"
                    data-aos-delay="200">
                    <p class="text-gray-600 italic">"Their assistants are professional and incredibly efficient."</p>
                    <p class="mt-6 font-semibold text-gray-800">John Smith, Founder</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md hover:shadow-lg transition duration-300" data-aos="zoom-in"
                    data-aos-delay="400">
                    <p class="text-gray-600 italic">"I can focus on my business while BizBud handles the rest."</p>
                    <p class="mt-6 font-semibold text-gray-800">Emily Brown, Entrepreneur</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Animate.css for animations -->
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animation.min.css" rel="stylesheet">
    <!-- Include Font Awesome for social icons -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css" rel="stylesheet">
@endsection
