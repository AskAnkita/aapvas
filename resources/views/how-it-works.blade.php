@extends('layouts.app')

@section('title', 'How It Works - AAPVAS')

@section('content')

    <!-- 1️⃣ Hero Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2" data-aos="fade-right">
                <img src="{{ asset('assets/images/What-Does-a-Virtual-Assistant-Do.jpg') }}"
                    class="w-3/4 rounded-lg shadow-md" alt="About Us">
            </div>
            <div class="md:w-1/2 mt-6 md:mt-0 md:pl-8" data-aos="fade-left" data-aos-delay="200">
              <h2 class="fw-bold display-5">HOW IT WORKS</h2>
                <h4 class="mb-3">
                    Getting started with <strong>Assist and Promote</strong> is easy.
                    In just a few simple steps, you’ll have a dedicated virtual assistant supporting your business.
                </h4>
                <a href="{{ route('about') }}"
                    class="btn inline-block bg-orange-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-orange-600">
                    Learn More About Us
                </a>
            </div>
        </div>
    </section>

    <!-- 2️⃣ Steps Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-3">Our Process</h2>
            <div class="underline mx-auto mb-5"></div>

            <div class="row text-center">

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
