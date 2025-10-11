@extends('layouts.app')

@section('title', 'Our Services - AAPVAS')
@section('content')

    <!-- 1️⃣ Hero Section -->
    <div class="service-banner flex flex-col md:flex-row justify-between px-4 sm:px-6 md:px-12 py-6 sm:py-8 md:py-12 relative overflow-hidden">
        <!-- Left Content -->
        <div class="relative z-10 md:w-1/2 text-white flex flex-col justify-center pl-4 sm:pl-6 md:pl-12">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold">OUR SERVICES</h2>
            <div class="underline w-16 sm:w-20 md:w-24 h-1 bg-[#ff6200] my-2 sm:my-3 md:my-4"></div>
            <h4 class="text-sm sm:text-base md:text-lg leading-relaxed">
                We offer a wide range of <span class="text-[#ff6200]">Virtual Assistant Services</span>
                tailored to meet the needs of busy entrepreneurs, startups, and growing businesses.
                Our skilled team ensures accuracy, efficiency, and professionalism so you can focus on scaling your business.
            </h4>
        </div>

         <!-- Right Floating Services -->
        <div class="relative z-10 md:w-1/2 min-h-[500px] flex justify-center">
            <div class="floating-services grid grid-cols-2 gap-6">
                <span class="service" data-target="admin-support">Administrative Support</span>
                <span class="service" data-target="email-calendar">Email Management</span>
                <span class="service" data-target="data-entry">Data Entry</span>
                <span class="service" data-target="social-media">Social Media Management</span>
                <span class="service" data-target="web-dev">Web Development</span>
                <span class="service" data-target="online-marketing">Online Marketing</span>
            </div>
        </div>
    </div>

    <!-- 2️⃣ Services Grid -->
    <section class="py-4 sm:py-5 md:py-8 bg-light">
        <div class="container">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-center mb-2 sm:mb-3 md:mb-5">What We Offer</h2>
            <div class="underline mx-auto w-16 sm:w-20 md:w-24 h-1 bg-[#ff6200] mb-2 sm:mb-3 md:mb-5"></div>
            <div class="row g-4 text-center">

                <!-- Administrative Support -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="admin-support" class="card border-0 shadow h-100 p-3 sm:p-4 service-card">
                        <div class="mb-2 sm:mb-3"><i class="bi bi-clipboard-check display-5 sm:display-4 text-primary"></i></div>
                        <h5 class="text-lg sm:text-xl">Administrative Support</h5>
                        <p class="text-muted text-sm sm:text-base">From scheduling meetings to managing documents, our assistants handle daily admin tasks so you can stay focused on your core business.</p>
                    </div>
                </div>

                <!-- Email & Calendar Management -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="email-calendar" class="card border-0 shadow h-100 p-3 sm:p-4 service-card">
                        <div class="mb-2 sm:mb-3"><i class="bi bi-envelope-open display-5 sm:display-4 text-primary"></i></div>
                        <h5 class="text-lg sm:text-xl">Email Management</h5>
                        <p class="text-muted text-sm sm:text-base">Keep your inbox organized and your schedule on track with our email and calendar management services.</p>
                    </div>
                </div>

                <!-- Data Entry -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="data-entry" class="card border-0 shadow h-100 p-3 sm:p-4 service-card">
                        <div class="mb-2 sm:mb-3"><i class="bi bi-keyboard display-5 sm:display-4 text-primary"></i></div>
                        <h5 class="text-lg sm:text-xl">Data Entry</h5>
                        <p class="text-muted text-sm sm:text-base">Fast and accurate data entry, database management, and organization to keep your information accessible and secure.</p>
                    </div>
                </div>

                <!-- Social Media Management -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="social-media" class="card border-0 shadow h-100 p-3 sm:p-4 service-card">
                        <div class="mb-2 sm:mb-3"><i class="bi bi-share display-5 sm:display-4 text-primary"></i></div>
                        <h5 class="text-lg sm:text-xl">Social Media Management</h5>
                        <p class="text-muted text-sm sm:text-base">Create, schedule, and manage social media content to increase engagement and grow your online presence.</p>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="web-dev" class="card border-0 shadow h-100 p-3 sm:p-4 service-card">
                        <div class="mb-2 sm:mb-3"><i class="bi bi-code-slash display-5 sm:display-4 text-primary"></i></div>
                        <h5 class="text-lg sm:text-xl">Web Development</h5>
                        <p class="text-muted text-sm sm:text-base">Custom website and web application development tailored to your business needs, fully responsive and user-friendly.</p>
                    </div>
                </div>

                <!-- Online Marketing -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="online-marketing" class="card border-0 shadow h-100 p-3 sm:p-4 service-card">
                        <div class="mb-2 sm:mb-3"><i class="bi bi-bullseye display-5 sm:display-4 text-primary"></i></div>
                        <h5 class="text-lg sm:text-xl">Online Marketing</h5>
                        <p class="text-muted text-sm sm:text-base">Boost your brand online through SEO, PPC, email campaigns, and other digital marketing strategies.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.floating-services .service').forEach(item => {
                item.addEventListener('click', () => {
                    const targetId = item.getAttribute('data-target');
                    const targetCard = document.getElementById(targetId);
                    if (targetCard) {
                        // Add zoom-in effect
                        targetCard.style.transition = 'transform 0.5s ease';
                        targetCard.style.transform = 'scale(1.1)';
                        // Scroll to the card
                        setTimeout(() => {
                            targetCard.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });
                            // Return to normal size after zoom
                            setTimeout(() => {
                                targetCard.style.transform = 'scale(1)';
                                targetCard.classList.add('highlight');
                                setTimeout(() => targetCard.classList.remove('highlight'), 1000);
                            }, 500); // Match scroll duration
                        }, 100); // Slight delay for zoom effect
                    }
                });
            });
        });
        // Optional: Remove or adjust auto-scroll if not needed on load
        // $('html, body').animate({
        //     scrollTop: $("#admin-support").offset().top - 100
        // }, 600);
    </script>
@endpush