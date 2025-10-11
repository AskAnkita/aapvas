@extends('layouts.app')

@section('title', 'Contact Us - AAPVAS')

@section('content')

<!-- 1️⃣ Contact Form + Info -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      
      <!-- Left: Contact Info -->
      <div class="col-md-5 mb-4">
        <h3 class="fw-bold mb-3">Get In Touch</h3>
        <p class="text-muted">We’d love to hear from you! Reach out through any of the following ways:</p>
        <ul class="list-unstyled">
          <li class="mb-3"><i class="bi bi-envelope text-primary me-2"></i> support@aapvas.com</li>
          <li class="mb-3"><i class="bi bi-telephone text-primary me-2"></i> +91 98765 43210</li>
          <li class="mb-3"><i class="bi bi-geo-alt text-primary me-2"></i> Surat, Gujarat, India</li>
        </ul>
      </div>

      <!-- Right: Contact Form -->
      <div class="col-md-7">
        <div class="card border-0 shadow p-4">
          <h4 class="fw-bold mb-3">Send Us a Message</h4>
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
