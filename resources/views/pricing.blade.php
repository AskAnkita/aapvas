@extends('layouts.app')

@section('title', 'Pricing - AAPVAS')

@section('content')

    <!-- 1️⃣ Hero Section -->
    <div class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2" data-aos="fade-right">
                <img src="{{ asset('assets/images/pricing-banner-removebg.png') }}" class="w-1/2 price-banner rounded-lg"
                    alt="Pricing">
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0 md:pl-8" data-aos="fade-left" data-aos-delay="200">
                <h2 class="fw-bold display-5">Virtual Assistant Service Plans</h2>
                <h4 class="mb-3">
                    We offer flexible plans designed to suit your business needs.
                    The more hours you book, the lower your effective hourly cost.
                </h4>
                <a href="{{ route('about') }}"
                    class="btn btn-primary">
                    Learn More About Us
                </a>
            </div>
        </div>
    </div>

    <!-- 2️⃣ Pricing Section -->
    <div class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="fw-bold mb-3">Choose Your Plan</h2>
            <div class="underline mx-auto mb-5"></div>

            <div class="row">

                <!-- Plan A – Starter -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow h-100 p-5 rounded-lg"> <!-- p-5 instead of p-4 -->
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
                    <div class="card border-0 shadow h-100 p-5 rounded-lg"> <!-- p-5 instead of p-4 -->
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
                    <div class="card border-0 shadow h-100 p-5 rounded-lg"> <!-- p-5 instead of p-4 -->
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
