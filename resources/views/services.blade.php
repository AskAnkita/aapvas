@extends('layouts.app')

@section('title', 'Our Services - AAPVAS')
@section('content')

    <!-- 1️⃣ Hero Section -->
    <div class="video-hero-wrap hero-full-bleed">
        <video class="video-hero-video" id="servicesHeroVideo" autoplay muted loop playsinline
            poster="{{ asset('assets/images/virtual-assistant-services-hero.jpg') }}">
            <source src="{{ asset('assets/videos/services-hero.mp4') }}" type="video/mp4">
        </video>
        <div class="video-hero-overlay"></div>

        <div class="relative z-10 container mx-auto px-4 sm:px-6 md:px-12 text-white">
            <p class="fw-semibold mb-2" style="color:#ff6200; letter-spacing:0.14em; text-transform:uppercase; font-size:0.85rem;">
                What We Do
            </p>
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-4" style="max-width: 640px; color: white;">
                Every task off your plate, one dedicated assistant at a time.
            </h1>
            <p class="text-base md:text-lg mb-6 text-gray-100" style="max-width: 560px;">
                From LinkedIn outreach to inbox zero, social content to full-stack builds — your virtual
                assistant handles the operational grind so you can spend your hours on the parts of the
                business only you can run.
            </p>
            <div class="d-flex flex-wrap gap-3 mb-4">
                <a href="{{ route('pricing') }}" class="btn-primary">See Pricing</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-light">Book a Call</a>
            </div>

            <!-- Quick nav to service cards below -->
            <div class="service-quicknav mt-4">
                <span class="service" data-target="linked-in">LinkedIn Support</span>
                <span class="service" data-target="admin-support">Admin Support</span>
                <span class="service" data-target="email-calendar">Email Management</span>
                <span class="service" data-target="social-media">Social Media</span>
                <span class="service" data-target="web-dev">Web & Software</span>
                <span class="service" data-target="online-marketing">Online Marketing</span>
                <span class="service" data-target="book-keeping">Book Keeping</span>
                <span class="service" data-target="real-estate">Real Estate</span>
                <span class="service" data-target="virtual-receptionist">Virtual Receptionist</span>
                <span class="service" data-target="recruitment">Recruitment</span>
                <span class="service" data-target="medical-transcription">Medical Billing</span>
                <span class="service" data-target="personal-assistance">Personal Assistance</span>
            </div>
        </div>
    </div>

    <!-- 2️⃣ Services Grid -->
    <section class="py-4 sm:py-5 md:py-8 bg-light">
        <div class="container">
            <p class="section-eyebrow text-center">What We Do</p>
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-center mb-2 sm:mb-3 md:mb-5">What We Offer</h2>
            <div class="underline mx-auto w-16 sm:w-20 md:w-24 h-1 bg-[#ff6200] mb-6 sm:mb-8 md:mb-12"></div>
            <div class="row g-4 text-center">


                <!-- LinkedIn Support -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="linked-in" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/linkedin-support.jpg') }}" class="service-card-img" alt="LinkedIn Support">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-linkedin service-card-icon"></i></div>
                            <h5 class="service-card-title">LinkedIn Support</h5>
                            <p class="service-card-desc">
                                From optimizing your
                                profile and managing
                                connections to creating engaging posts and lead generation, we help you build credibility and
                                grow your network
                                strategically on LinkedIn.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Administrative Support -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="admin-support" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/administrative-support.jpg') }}" class="service-card-img" alt="Administrative Support">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-clipboard-check service-card-icon"></i>
                            </div>
                            <h5 class="service-card-title">Administrative Support</h5>
                            <p class="service-card-desc">From scheduling meetings to managing documents, our
                                assistants handle daily admin tasks so you can stay focused on your core business.</p>
                        </div>
                    </div>
                </div>

                <!-- Email & Calendar Management -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="email-calendar" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/email-management.jpg') }}" class="service-card-img" alt="Email Management">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-envelope-open service-card-icon"></i>
                            </div>
                            <h5 class="service-card-title">Email Management</h5>
                            <p class="service-card-desc">Keep your inbox organized and your schedule on track with
                                our email and calendar management services.</p>
                        </div>
                    </div>
                </div>

                <!-- Social Media Management -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="social-media" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/social-media-management.png') }}" class="service-card-img" alt="Social Media Management">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-share service-card-icon"></i></div>
                            <h5 class="service-card-title">Social Media Management</h5>
                            <p class="service-card-desc">Create, schedule, and manage social media content to
                                increase engagement and grow your online presence.</p>
                        </div>
                    </div>
                </div>

                <!-- Web & Software Development -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="web-dev" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/web-development.jpg') }}" class="service-card-img" alt="Web & Software Development">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-code-slash service-card-icon"></i></div>
                            <h5 class="service-card-title">Web & Software Development</h5>
                            <p class="service-card-desc">From e-commerce stores and hosting setup to custom
                                web development and full software builds, we handle the technical side so your
                                business runs smoothly online.</p>
                        </div>
                    </div>
                </div>

                <!-- Online Marketing -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="online-marketing" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/online-marketing.png') }}" class="service-card-img" alt="Online Marketing">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-bullseye service-card-icon"></i></div>
                            <h5 class="service-card-title">Online Marketing</h5>
                            <p class="service-card-desc">Boost your brand online through SEO, PPC, email
                                campaigns, and other digital marketing strategies.</p>
                        </div>
                    </div>
                </div>

                <!-- Book Keeping -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="book-keeping" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/bookkeeping.jpg') }}" class="service-card-img" alt="Book Keeping">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-journal-check service-card-icon"></i></div>
                            <h5 class="service-card-title">Book Keeping</h5>
                            <p class="service-card-desc">Accurate, up-to-date financial records — invoices,
                                expenses, and reconciliation handled so your books are always audit-ready.</p>
                        </div>
                    </div>
                </div>

                <!-- Real Estate Backend Management -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="real-estate" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/real-estate-management.jpg') }}" class="service-card-img" alt="Real Estate Backend Management">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-building service-card-icon"></i></div>
                            <h5 class="service-card-title">Real Estate Backend Management</h5>
                            <p class="service-card-desc">Listings, documentation, client follow-ups, and
                                transaction paperwork managed behind the scenes for busy real estate professionals.</p>
                        </div>
                    </div>
                </div>

                <!-- Virtual Receptionist -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="virtual-receptionist" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/virtual-receptionist.jpg') }}" class="service-card-img" alt="Virtual Receptionist">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-telephone-fill service-card-icon"></i></div>
                            <h5 class="service-card-title">Virtual Receptionist</h5>
                            <p class="service-card-desc">A professional, welcoming voice for every call —
                                answering, screening, and routing so no client is ever left waiting.</p>
                        </div>
                    </div>
                </div>

                <!-- Recruitment Backend Management -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="recruitment" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/recruitment-management.jpg') }}" class="service-card-img" alt="Recruitment Backend Management">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-person-plus-fill service-card-icon"></i></div>
                            <h5 class="service-card-title">Recruitment Backend Management</h5>
                            <p class="service-card-desc">Resume screening, interview scheduling, and
                                candidate coordination — we keep your hiring pipeline moving without the busywork.</p>
                        </div>
                    </div>
                </div>

                <!-- Medical Transcription and Billing -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="medical-transcription" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/medical-transcription-billing.jpg') }}" class="service-card-img" alt="Medical Transcription and Billing">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-file-earmark-medical-fill service-card-icon"></i></div>
                            <h5 class="service-card-title">Medical Transcription & Billing</h5>
                            <p class="service-card-desc">Accurate transcription and billing support for
                                healthcare practices, handled with care and strict attention to detail.</p>
                        </div>
                    </div>
                </div>

                <!-- Personal Assistance -->
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div id="personal-assistance" class="card border-0 shadow h-100 p-0 service-card overflow-hidden">
                        <img src="{{ asset('assets/images/cards/personal-assistance.jpg') }}" class="service-card-img" alt="Personal Assistance">
                        <div class="p-3 sm:p-4 text-center">
                            <div class="mb-2 sm:mb-3"><i class="bi bi-person-check-fill service-card-icon"></i></div>
                            <h5 class="service-card-title">Personal Assistance</h5>
                            <p class="service-card-desc">Calendar management, travel planning, and day-to-day
                                organization so you can focus on what only you can do.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroVideo = document.getElementById('servicesHeroVideo');
            if (heroVideo && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                heroVideo.pause();
                heroVideo.removeAttribute('autoplay');
            }

            document.querySelectorAll('.service-quicknav .service').forEach(function(item) {
                item.style.pointerEvents = 'auto';
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = item.getAttribute('data-target');
                    const targetCard = document.getElementById(targetId);

                    if (!targetCard) {
                        console.warn('Target card not found:', targetId);
                        return;
                    }

                    // Account for fixed navbar
                    const navbar = document.querySelector('.navbar');
                    const navbarHeight = navbar ? navbar.offsetHeight : 0;
                    const elementTop = targetCard.getBoundingClientRect().top + window.scrollY;
                    const scrollTo = elementTop - navbarHeight - 16;

                    window.scrollTo({
                        top: scrollTo,
                        behavior: 'smooth'
                    });

                    setTimeout(function() {
                        targetCard.classList.add('zoom-highlight');
                        setTimeout(function() {
                            targetCard.classList.remove('zoom-highlight');
                        }, 1000);
                    }, 600);
                });
            });
        });
    </script>
@endpush
