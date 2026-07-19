@extends('layouts.app')

@section('title', 'About Us - AAPVAS')

@section('content')

<!-- 1️⃣ Hero / Intro Section -->
<section class="hero-split hero-full-bleed bg-white">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Left: Text -->
      <div class="col-lg-6" data-aos="fade-right">
        <p class="section-eyebrow">Who We Are</p>
        <h1 class="fw-bold hero-split-title">About Assist and Promote</h1>
        <div class="underline mb-4" style="background: #ff6200;"></div>
        <p class="hero-split-copy">
          At <strong style="color: #ff6200;">Assist and Promote</strong>, we provide dedicated Virtual Assistant
          Services designed to make your business run smoothly. Whether you’re an entrepreneur, small business
          owner, or growing enterprise, our skilled assistants help you save time, stay organized, and focus on
          what truly matters — growing your business.
        </p>

        <div class="stat-row" data-aos="fade-up" data-aos-delay="150">
          <div class="stat">
            <span class="stat-num">150+</span>
            <span class="stat-label">Businesses Supported</span>
          </div>
          <div class="stat">
            <span class="stat-num">&lt;24h</span>
            <span class="stat-label">Avg. VA Match Time</span>
          </div>
          <div class="stat">
            <span class="stat-num">4.9/5</span>
            <span class="stat-label">Client Satisfaction</span>
          </div>
        </div>

        <a href="{{ route('contact') }}" class="btn-primary d-inline-block mt-4" data-aos="fade-up" data-aos-delay="250">
          Book a Call
        </a>
      </div>

      <!-- Right: Floating image + badge -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
        <div class="float-media">
          <span class="float-media-blob"></span>
          <img src="{{ asset('assets/images/about-us-banner.jpg') }}"
            alt="The Assist and Promote team supporting clients remotely" class="float-media-img">
          <div class="float-media-badge">
            <span class="badge-star">⭐ 4.9 / 5</span>
            <span class="badge-text">Trusted by 150+ businesses</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- 2️⃣ Why Choose Us -->
<section class="py-5 bg-gray-50">
  <div class="container">
    <h2 class="fw-bold text-center mb-3" style="color: #1a2b49;">Why Choose Us?</h2>
    <div class="underline mx-auto mb-5" style="background: #ff6200;"></div>
    <div class="row text-center">
      <div class="col-md-3 mb-4">
        <span class="bullet" style="background: #ff6200;"></span>
        <h5 style="color: #1a2b49;">Skilled Assistants</h5>
        <p class="text-muted">Trained professionals ready to handle your business tasks with precision.</p>
      </div>
      <div class="col-md-3 mb-4">
        <span class="bullet" style="background: #ff6200;"></span>
        <h5 style="color: #1a2b49;">Flexible Support</h5>
        <p class="text-muted">Hourly, weekly, or monthly support tailored to your needs.</p>
      </div>
      <div class="col-md-3 mb-4">
        <span class="bullet" style="background: #ff6200;"></span>
        <h5 style="color: #1a2b49;">Affordable Pricing</h5>
        <p class="text-muted">Transparent pricing plans with no hidden costs.</p>
      </div>
      <div class="col-md-3 mb-4">
        <span class="bullet" style="background: #ff6200;"></span>
        <h5 style="color: #1a2b49;">Trusted by Clients</h5>
        <p class="text-muted">Serving businesses across industries with reliability and care.</p>
      </div>
    </div>
  </div>
</section>

<!-- 3️⃣ Mission Section -->
<section class="py-5 bg-gray-50">
  <div class="container text-center">
    <h2 class="fw-bold mb-3" style="color: #1a2b49;">Our Mission</h2>
    <div class="underline mx-auto mb-4" style="background: #ff6200;"></div>
    <p class="lead text-muted" style="color: #4b5563;">
      To empower businesses by providing cost-effective, professional, and flexible virtual support.
      We believe every business deserves the right assistance to thrive without unnecessary overheads.
    </p>
  </div>
</section>

<!-- 4️⃣ Steps Section -->
  <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-3">How it works</h2>
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
