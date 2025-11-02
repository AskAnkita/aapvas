@extends('layouts.app')

@section('title', 'Privacy Policy | AAPVAS')

@section('content')
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 md:max-w-4xl bg-white shadow-lg rounded-lg p-10">

            <h1 class="text-4xl font-bold text-tertiary mb-6">Privacy Policy</h1>
            <p class="text-gray-500 text-sm mb-8">Last Updated: {{ date('F d, Y') }}</p>

            <p class="text-gray-700 mb-6">
                At <strong>AAPVAS</strong>, we value your privacy and are committed to protecting your personal data.
                This policy explains how we collect, use, and safeguard your information when you visit our website
                or use our services.
            </p>

            <h2 class="text-2xl font-semibold text-tertiary mt-8 mb-3">1. Information We Collect</h2>
            <ul class="list-disc pl-5 text-gray-700 space-y-2 mb-6">
                <li>Personal details (name, email, phone)</li>
                <li>Business information you choose to provide</li>
                <li>Payment information (processed securely via third-party platforms)</li>
                <li>IP address, browser type, device data</li>
                <li>Cookies and usage data</li>
            </ul>

            <h2 class="text-2xl font-semibold text-tertiary mt-8 mb-3">2. How We Use Your Information</h2>
            <ul class="list-disc pl-5 text-gray-700 space-y-2 mb-6">
                <li>To provide our virtual assistant services</li>
                <li>To respond to inquiries and support requests</li>
                <li>To send important notifications or service updates</li>
                <li>To improve website experience and performance</li>
                <li>For security and legal compliance</li>
            </ul>

            <h2 class="text-2xl font-semibold text-tertiary mt-8 mb-3">3. Cookies & Tracking</h2>
            <p class="text-gray-700 mb-6">
                We use cookies and analytics tools to improve user experience, analyze traffic, and personalize content.
                You may disable cookies through your browser settings.
            </p>

            <h2 class="text-2xl font-semibold text-tertiary mt-8 mb-3">4. Data Security</h2>
            <p class="text-gray-700 mb-6">
                We implement industry-standard security measures including encrypted connections and secure storage.
                However, no online system is 100% secure.
            </p>

            <h2 class="text-2xl font-semibold text-tertiary mt-8 mb-3">5. Your Rights</h2>
            <p class="text-gray-700 mb-4">
                You have the right to request access, update, or deletion of your personal information.
            </p>
            <p class="text-gray-700 mb-6">
                To request changes, contact us at <strong>info@aapvas.com</strong>.
            </p>

            <h2 class="text-2xl font-semibold text-tertiary mt-8 mb-3">6. Third-Party Services</h2>
            <p class="text-gray-700 mb-6">
                We may use third-party tools such as payment processors, analytics services, or email providers.
                These services operate under their own privacy policies.
            </p>

            <h2 class="text-2xl font-semibold text-tertiary mt-8 mb-3">7. Changes to This Policy</h2>
            <p class="text-gray-700 mb-6">
                We may update this Privacy Policy when necessary. Changes will be posted on this page with a revised date.
            </p>

            <h2 class="text-2xl font-semibold text-tertiary mt-8 mb-3">8. Contact Us</h2>
            <p class="text-gray-700 mb-3">
                If you have any questions about this Privacy Policy, contact us at:
            </p>
            <p class="text-gray-700 mb-6">
                📧 <strong>info@aapvas.com</strong><br>
                🌐 <strong>aapvas.com</strong>
            </p>

            <a href="{{ url()->previous() }}" class="inline-block text-orange-500 hover:underline mt-6">
                ← Back
            </a>
        </div>
    </div>
@endsection
