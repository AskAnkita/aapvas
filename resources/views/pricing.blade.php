@extends('layouts.app')

@section('title', 'Pricing - AAPVAS')

@section('content')

    <!-- 1️⃣ Hero Section -->
    <section class="hero-split hero-full-bleed bg-white">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Left: Text -->
                <div class="col-lg-6" data-aos="fade-right">
                    <p class="section-eyebrow">Transparent, Hourly-Based Pricing</p>
                    <h1 class="fw-bold hero-split-title">Virtual Assistant Service Plans</h1>
                    <p class="hero-split-copy mb-3">
                        We offer flexible plans designed to suit your business needs. The more hours you book,
                        the lower your effective hourly cost.
                    </p>
                    <p class="hero-split-copy">
                        No two businesses run the same way, so no two engagements should look the same either.
                        Pick a plan that matches how much support you need today, then scale up or down as your
                        workload changes — every plan includes a dedicated assistant matched to your workflow,
                        not a rotating pool of strangers.
                    </p>

                    <div class="stat-row" data-aos="fade-up" data-aos-delay="150">
                        <div class="stat">
                            <span class="stat-num">3</span>
                            <span class="stat-label">Flexible Plans</span>
                        </div>
                        <div class="stat">
                            <span class="stat-num">0</span>
                            <span class="stat-label">Long-Term Lock-in</span>
                        </div>
                        <div class="stat">
                            <span class="stat-num">100%</span>
                            <span class="stat-label">Transparent Pricing</span>
                        </div>
                    </div>

                    <a href="{{ route('about') }}" class="btn-primary d-inline-block mt-4" data-aos="fade-up" data-aos-delay="250">
                        Learn More About Us
                    </a>
                </div>

                <!-- Right: Floating image + badge -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="float-media">
                        <span class="float-media-blob"></span>
                        @php
                            $pricingHeroImgPath = public_path('assets/images/pricing-hero-currency.png');
                            $pricingHeroImgVer = file_exists($pricingHeroImgPath) ? filemtime($pricingHeroImgPath) : '1';
                        @endphp
                        <img src="{{ asset('assets/images/pricing-hero-currency.png') }}?v={{ $pricingHeroImgVer }}"
                            alt="Comparing pricing plans across currencies with a dedicated virtual assistant" class="float-media-img"
                            style="object-fit: contain; background: #ffffff;">
                        <div class="float-media-badge">
                            <span class="badge-star">💰 Month-to-Month</span>
                            <span class="badge-text">No contracts, cancel anytime</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2️⃣ Pricing Section -->
    <div class="py-5 bg-light">
        <div class="container text-center">
            <p class="section-eyebrow text-center">Plans</p>
            <h2 class="fw-bold mb-3">Choose Your Plan</h2>
            <div class="underline mx-auto mb-5"></div>

            <div class="row">

                <!-- Plan A – Starter -->
                <div class="col-md-4 mb-4">
                    <div class="card pricing-card border-0 shadow h-100 p-5 rounded-lg"> <!-- p-5 instead of p-4 -->
                        <h4 class="fw-bold mb-3">Plan A – Starter (Minimum Hours)</h4>

                        <p class="fw-bold mb-3" style="line-height: 1.6;">
                            📌 2 Hours/Day | 10 Hours/Week | 40 Hours/Month
                        </p>

                        <p class="small text-muted mb-4" style="line-height: 1.7;">
                            Perfect for entrepreneurs and professionals who need light but consistent support.
                        </p>

                        <ul class="list-unstyled mb-4 text-start space-y-2"> <!-- add spacing between items -->
                            <li>✔ Administrative help</li>
                            <li>✔ Email management</li>
                            <li>✔ Scheduling</li>
                            <li>✔ Light research</li>
                            <li>✔ Basic support</li>
                        </ul>

                        <p class="fw-bold mb-4" style="line-height: 1.6;">
                            💰 Highest hourly rate (Premium flexibility)
                        </p>

                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100 py-3">
                            Get Started
                        </a>
                    </div>
                </div>

                <!-- Plan B – Growth -->
                <div class="col-md-4 mb-4">
                    <div class="card pricing-card popular border-0 shadow h-100 p-5 rounded-lg position-relative"> <!-- p-5 instead of p-4 -->
                        <span class="ribbon-badge">Most Popular</span>
                        <h4 class="fw-bold mb-3">Plan B – Growth (Half Day)</h4>

                        <p class="fw-bold  mb-3" style="line-height: 1.6;">
                            📌 4 Hours/Day | 20 Hours/Week | 80 Hours/Month
                        </p>

                        <p class="small text-muted mb-4" style="line-height: 1.7;">
                            Ideal for growing businesses needing more comprehensive support.
                        </p>

                        <ul class="list-unstyled mb-4 text-start space-y-2"> <!-- add spacing between items -->
                            <li>✔ Extended admin support</li>
                            <li>✔ Social media management</li>
                            <li>✔ Research</li>
                            <li>✔ Customer support</li>
                            <li>✔ Marketing tasks</li>
                        </ul>

                        <p class="fw-bold mb-4" style="line-height: 1.6;">
                            💰 Lower hourly rate (Cost-effective balance)
                        </p>

                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100 py-3">
                            Get Started
                        </a>
                    </div>
                </div>


                <!-- Plan C – Enterprise -->
                <div class="col-md-4 mb-4">
                    <div class="card pricing-card border-0 shadow h-100 p-5 rounded-lg"> <!-- p-5 instead of p-4 -->
                        <h4 class="fw-bold mb-3">Plan C – Enterprise (Full Day)</h4>

                        <p class="fw-bold  mb-3" style="line-height: 1.6;">
                            📌 8 Hours/Day | 40 Hours/Week | 160 Hours/Month
                        </p>

                        <p class="small text-muted mb-4" style="line-height: 1.7;">
                            A dedicated virtual assistant working full-time to manage your daily operations.
                        </p>

                        <ul class="list-unstyled mb-4 text-start space-y-2"> <!-- add spacing between items -->
                            <li>✔ Full administrative management</li>
                            <li>✔ Customer support</li>
                            <li>✔ Lead generation</li>
                            <li>✔ Project coordination</li>
                            <li>✔ Tailored business support</li>
                        </ul>

                        <p class="fw-bold mb-4" style="line-height: 1.6;">
                            💰 Lowest hourly rate (Best value per hour)
                        </p>

                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary w-100 py-3">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
