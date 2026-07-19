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
                        <li class="mb-3 d-flex align-items-center"><span class="icon-chip"><i class="fas fa-envelope icon-gmail"></i></span> <a
                                href="mailto:info@assistandpromote.com"
                                class="text-decoration-none">info@assistandpromote.com</a></li>
                        <li class="mb-3 d-flex align-items-center"><span class="icon-chip"><i class="fas fa-phone-alt icon-phone"></i></span> +91 99134 47761</li>
                        <li class="mb-3 d-flex align-items-center"><span class="icon-chip"><i class="fas fa-map-marker-alt icon-location"></i></span> Surat, Gujarat, India
                        </li>
                        <li class="mb-3 d-flex align-items-center"><span class="icon-chip"><i class="fab fa-linkedin icon-linkedin"></i></span> <a
                                href="https://www.linkedin.com/in/ajay2210" target="_blank"
                                class="text-decoration-none">LinkedIn</a></li>
                        <li class="mb-3 d-flex align-items-center"><span class="icon-chip"><i class="fab fa-facebook icon-facebook"></i></span> <a
                                href="https://www.facebook.com/assistandpromote/" target="_blank"
                                class="text-decoration-none">Facebook</a></li>
                        <li class="mb-3 d-flex align-items-center"><span class="icon-chip"><i class="fab fa-whatsapp icon-whatsapp"></i></span> <a
                                href="https://wa.me/919913447761?text=Hello%20I%20want%20to%20know%20more%20about%20your%20services"
                                target="_blank" class="text-decoration-none">WhatsApp Us</a></li>
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
