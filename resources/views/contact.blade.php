@extends('layouts.app')

@section('title', 'Contact Us - AAPVAS')

@section('content')

    <!-- 1️⃣ Contact Form + Info -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Contact Info -->
                <div class="col-md-5 mb-4">
                    <p class="section-eyebrow">Contact Us</p>
                    <h3 class="fw-bold mb-3">Get In Touch</h3>
                    <p class="text-muted">We’d love to hear from you! Reach out through any of the following ways:</p>

                    <div class="stat-row mb-4">
                        <div class="stat">
                            <span class="stat-num">&lt;2h</span>
                            <span class="stat-label">Avg. Response Time</span>
                        </div>
                        <div class="stat">
                            <span class="stat-num">7/7</span>
                            <span class="stat-label">Days Available</span>
                        </div>
                        <div class="stat">
                            <span class="stat-num">100%</span>
                            <span class="stat-label">Reply Rate</span>
                        </div>
                    </div>

                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-center">
                            <span class="icon-chip">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="52 26 88 66" class="w-5 h-5 min-w-[20px]">
                                <!-- Left Blue Column -->
                                <path fill="#4285f4" d="M58 108h14V74L52 59v43c0 3.32 2.69 6 6 6"/>
                                <!-- Right Green Column -->
                                <path fill="#34a853" d="M120 108h14c3.32 0 6-2.69 6-6V59l-20 15"/>
                                <!-- Top Right Corner / Yellow Shoulder -->
                                <path fill="#fbbc04" d="M120 48v26l20-15v-8c0-7.42-8.47-11.65-14.4-7.2"/>
                                <!-- Center Red Valley / Roof -->
                                <path fill="#ea4335" d="M72 74V48l24 18 24-18v26L96 92"/>
                                <!-- Top Left Corner / Dark Red Shoulder -->
                                <path fill="#c5221f" d="M52 51v8l20 15V48l-5.6-4.2c-5.94-4.45-14.4-.22-14.4 7.2"/>
                            </svg>
                            </span>
                            <a href="mailto:info@assistandpromote.com" class="text-decoration-none">info@assistandpromote.com</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="icon-chip"><i class="fas fa-phone-alt icon-phone"></i></span>
                            +91 99134 47761
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="icon-chip"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5 min-w-[20px]">
                            <!-- Red Top Loop -->
                            <path fill="#EA4335" d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                            <!-- Green Bottom Shadow/Base -->
                            <path fill="#34A853" d="M12 22s-7-7.75-7-13c0-.34.03-.67.08-1L12 16.5l6.92-8.5c.05.33.08.66.08 1 0 5.25-7 13-7 13z" opacity="0.15" />
                            <!-- Yellow Left Accent -->
                            <path fill="#FBBC05" d="M5.08 8C5.61 5.39 7.89 3.5 10.7 3.12L5.08 8z" opacity="0.2" />
                            <!-- Blue Center Dot -->
                            <path fill="#4285F4" d="M12 6.5c-1.38 0-2.5 1.12-2.5 2.5s1.12 2.5 2.5 2.5 2.5-1.12 2.5-2.5-1.12-2.5-2.5-2.5z" />
                            </svg></span>
                            Surat, Gujarat, India
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="icon-chip"><i class="fab fa-linkedin icon-linkedin"></i></span>
                            <a href="https://www.linkedin.com/in/ajay2210" target="_blank" class="text-decoration-none">LinkedIn</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="icon-chip"><i class="fab fa-facebook icon-facebook"></i></span>
                            <a href="https://www.facebook.com/assistandpromote/" target="_blank" class="text-decoration-none">Facebook</a>
                        </li>
                        <li class="mb-3 d-flex align-items-center">
                            <span class="icon-chip"><i class="fab fa-whatsapp icon-whatsapp"></i></span>
                            <a href="https://wa.me/919913447761?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
                                target="_blank" class="text-decoration-none">WhatsApp Us</a>
                        </li>
                    </ul>

                </div>

                <!-- Right: Contact Form -->
                <div class="col-md-7 position-relative">
                    <span class="float-media-blob blob-static" style="top:-24px; right:-24px;"></span>
                    <div class="card border-0 shadow p-4 position-relative">
                        <h4 class="fw-bold mb-3">Send Us a Message</h4>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea name="message" rows="5" class="form-control" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
