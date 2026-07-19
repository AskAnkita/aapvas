@extends('layouts.app')

@section('title', 'How It Works - AAPVAS')

@section('content')

    <!-- 1️⃣ Hero Section -->
    <section class="hero-split hero-full-bleed bg-gray-100">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Left: Text -->
                <div class="col-lg-6" data-aos="fade-right">
                    <p class="section-eyebrow">How It Works</p>
                    <h1 class="fw-bold hero-split-title">Up and running in four simple steps</h1>
                    <p class="hero-split-copy">
                        Getting started with <strong>Assist and Promote</strong> is easy. In just a few simple
                        steps, you’ll have a dedicated virtual assistant supporting your business.
                    </p>

                    <div class="stat-row" data-aos="fade-up" data-aos-delay="150">
                        <div class="stat">
                            <span class="stat-num">4</span>
                            <span class="stat-label">Simple Steps</span>
                        </div>
                        <div class="stat">
                            <span class="stat-num">48h</span>
                            <span class="stat-label">Avg. Onboarding</span>
                        </div>
                        <div class="stat">
                            <span class="stat-num">100%</span>
                            <span class="stat-label">Match Guarantee</span>
                        </div>
                    </div>

                    <a href="{{ route('about') }}"
                        class="btn-primary d-inline-block mt-4" data-aos="fade-up" data-aos-delay="250">
                        Learn More About Us
                    </a>
                </div>

                <!-- Right: Floating image + badge -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="float-media">
                        <span class="float-media-blob"></span>
                        <img src="{{ asset('assets/images/What-Does-a-Virtual-Assistant-Do.jpg') }}"
                            class="float-media-img" alt="A dedicated virtual assistant getting started with a client">
                        <div class="float-media-badge">
                            <span class="badge-star">Step 1 of 4</span>
                            <span class="badge-text">Choose a plan to get started</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2️⃣ Steps Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <p class="section-eyebrow text-center">The Process</p>
            <h2 class="fw-bold text-center mb-3">Our Process</h2>
            <div class="underline mx-auto mb-5"></div>

            <div class="row steps-row text-center">

                <!-- Step 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow h-100 p-4">
                        <div class="step-number display-4 fw-bold text-primary mb-3">1</div>
                        <h5>Choose a Plan</h5>
                        <p class="text-muted">
                            Select a pricing plan that best suits your business needs and budget.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow h-100 p-4">
                        <div class="step-number display-4 fw-bold text-primary mb-3">2</div>
                        <h5>Tell Us Your Requirements</h5>
                        <p class="text-muted">
                            Share your tasks, goals, and expectations so we can align perfectly with your workflow.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow h-100 p-4">
                        <div class="step-number display-4 fw-bold text-primary mb-3">3</div>
                        <h5>We Assign a VA</h5>
                        <p class="text-muted">
                            A skilled and dedicated Virtual Assistant is assigned to you for seamless support.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 shadow h-100 p-4">
                        <div class="step-number display-4 fw-bold text-primary mb-3">4</div>
                        <h5>Save Time & Grow</h5>
                        <p class="text-muted">
                            Focus on scaling your business while we handle the tasks that slow you down.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
