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
                    <div id="linked-in" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="admin-support" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="email-calendar" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="social-media" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="web-dev" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="online-marketing" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="book-keeping" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="real-estate" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="virtual-receptionist" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="recruitment" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="medical-transcription" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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
                    <div id="personal-assistance" class="card border-0 shadow h-100 p-0 service-card overflow-hidden" role="button" tabindex="0" data-bs-toggle="modal" data-bs-target="#serviceDetailModal">
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

    <!-- Service Detail Modal -->
    <div class="modal fade" id="serviceDetailModal" tabindex="-1" aria-labelledby="serviceDetailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered service-modal-dialog">
            <div class="modal-content service-modal-content">
                <button type="button" class="service-modal-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>
                <div class="modal-body service-modal-body">
                    <!-- Hero: text left, image right -->
                    <div class="service-modal-hero">
                        <div class="service-modal-hero-text">
                            <p class="service-modal-eyebrow">What We Offer</p>
                            <h3 class="service-modal-title" id="serviceDetailModalLabel"><span id="serviceDetailTitle"></span></h3>
                            <p id="serviceDetailDesc" class="service-modal-desc"></p>
                            <a href="{{ route('contact') }}" class="service-modal-cta">Get Started</a>
                        </div>
                        <div class="service-modal-hero-media">
                            <img id="serviceDetailImg" src="" alt="">
                        </div>
                    </div>

                    <!-- One-liner services -->
                    <div id="serviceDetailItems" class="service-modal-items"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const serviceDetails = {
            'linked-in': {
                title: 'LinkedIn Support',
                img: "{{ asset('assets/images/cards/linkedin-support.jpg') }}",
                desc: 'From optimizing your profile and managing connections to creating engaging posts and lead generation, we help you build credibility and grow your network strategically on LinkedIn.',
                items: [
                    { title: 'Profile Optimization & Branding', desc: 'Positioning your profile to reflect your expertise and credibility.' },
                    { title: 'Connection Requests & Outreach', desc: 'Growing your network with relevant, targeted connections.' },
                    { title: 'Content Creation & Post Scheduling', desc: 'Planned posts that keep your profile active and visible.' },
                    { title: 'Lead Generation & Follow-Ups', desc: 'Turning conversations into qualified business opportunities.' },
                    { title: 'Personalized InMail Messaging', desc: 'Tailored outreach messages that get responses.' },
                    { title: 'Engagement With Target Accounts', desc: 'Building visibility with the people who matter to your business.' },
                    { title: 'Group & Community Participation', desc: 'Joining relevant conversations to expand your reach.' },
                    { title: 'Article & Newsletter Writing', desc: 'Long-form content that builds authority over time.' },
                    { title: 'Content Calendar Planning', desc: 'A consistent publishing rhythm mapped out in advance.' },
                    { title: 'Hashtag & Keyword Strategy', desc: 'Making sure the right audience finds your content.' },
                    { title: 'Post Engagement Monitoring', desc: 'Tracking likes, comments, and shares to refine what works.' },
                    { title: 'Headline & Summary Copywriting', desc: 'A profile that communicates your value in seconds.' },
                    { title: 'Analytics & Performance Tracking', desc: 'Clear visibility into what\'s driving growth.' },
                    { title: 'Competitor Benchmarking', desc: 'Understanding how you stack up in your industry.' }
                ]
            },
            'admin-support': {
                title: 'Administrative Support',
                img: "{{ asset('assets/images/cards/administrative-support.jpg') }}",
                desc: 'From scheduling meetings to managing documents, our assistants handle daily admin tasks so you can stay focused on your core business.',
                items: [
                    { title: 'Meeting & Calendar Scheduling', desc: 'Coordinating meetings so your calendar never conflicts.' },
                    { title: 'Travel & Logistics Coordination', desc: 'Booking travel and handling the details around it.' },
                    { title: 'Document Preparation & Filing', desc: 'Keeping your paperwork organized and easy to find.' },
                    { title: 'Data Entry & Record Keeping', desc: 'Accurate records maintained without eating into your day.' },
                    { title: 'Phone & Email Correspondence', desc: 'Professional responses handled on your behalf.' },
                    { title: 'Meeting Minutes & Follow-Ups', desc: 'Notes captured and action items tracked after every call.' },
                    { title: 'Vendor & Supplier Coordination', desc: 'Managing communication with the people who keep you running.' },
                    { title: 'To-Do List & Deadline Tracking', desc: 'Nothing falls through the cracks.' },
                    { title: 'Project Status Reporting', desc: 'Regular updates so you always know where things stand.' },
                    { title: 'CRM & Task Tool Updates', desc: 'Your systems kept current without the manual upkeep.' },
                    { title: 'Process Documentation', desc: 'Clear steps written down so nothing depends on memory.' },
                    { title: 'Expense Report Preparation', desc: 'Expenses tracked and submitted on time.' },
                    { title: 'Supply Ordering & Inventory', desc: 'Office essentials restocked before you run out.' },
                    { title: 'Onboarding Paperwork Support', desc: 'New hire documents handled start to finish.' }
                ]
            },
            'email-calendar': {
                title: 'Email Management',
                img: "{{ asset('assets/images/cards/email-management.jpg') }}",
                desc: 'Keep your inbox organized and your schedule on track with our email and calendar management services.',
                items: [
                    { title: 'Inbox Triage & Cleanup', desc: 'A clutter-free inbox sorted by what actually matters.' },
                    { title: 'Drafting & Responding to Routine Emails', desc: 'Common replies handled promptly in your voice.' },
                    { title: 'Calendar Management & Reminders', desc: 'Your schedule kept accurate and conflict-free.' },
                    { title: 'Priority Flagging for Important Messages', desc: 'Urgent messages surfaced so nothing slips by.' },
                    { title: 'Drafting Outbound Emails', desc: 'Clear, professional emails written on your behalf.' },
                    { title: 'Follow-Up Reminders', desc: 'Timely nudges so conversations don\'t go cold.' },
                    { title: 'Unsubscribe & Spam Cleanup', desc: 'Less noise, fewer distractions in your inbox.' },
                    { title: 'Meeting Conflict Resolution', desc: 'Overlapping bookings sorted out before they become a problem.' },
                    { title: 'Time-Zone Coordination', desc: 'Scheduling across time zones without the confusion.' },
                    { title: 'Recurring Event Setup', desc: 'Standing meetings set up once, maintained automatically.' },
                    { title: 'Buffer Time Management', desc: 'Breathing room built into your day.' },
                    { title: 'Email Folder & Label Organization', desc: 'A filing system that makes messages easy to find.' },
                    { title: 'Auto-Response Setup', desc: 'Automatic replies configured for when you\'re away.' },
                    { title: 'VIP Sender Flagging', desc: 'Your most important contacts never go unnoticed.' }
                ]
            },
            'social-media': {
                title: 'Social Media Management',
                img: "{{ asset('assets/images/cards/social-media-management.png') }}",
                desc: 'Create, schedule, and manage social media content to increase engagement and grow your online presence.',
                items: [
                    { title: 'Content Creation & Graphics', desc: 'Scroll-stopping visuals made for your brand.' },
                    { title: 'Post Scheduling Across Platforms', desc: 'Consistent posting without the daily manual work.' },
                    { title: 'Community Engagement & Replies', desc: 'Comments and messages answered promptly and on-brand.' },
                    { title: 'Performance Tracking & Reporting', desc: 'Clear reporting on what\'s actually working.' },
                    { title: 'Caption Writing & Hashtag Research', desc: 'Copy and tags that help posts get discovered.' },
                    { title: 'Graphic & Carousel Design', desc: 'Multi-slide visuals built to hold attention.' },
                    { title: 'Short-Form Video Editing', desc: 'Reels and shorts edited for maximum engagement.' },
                    { title: 'Follower Engagement & DMs', desc: 'Building relationships through timely, genuine responses.' },
                    { title: 'Influencer Outreach', desc: 'Connecting with voices that can amplify your brand.' },
                    { title: 'Contest & Giveaway Coordination', desc: 'Campaigns planned and run start to finish.' },
                    { title: 'Trend Monitoring', desc: 'Staying current with what\'s resonating right now.' },
                    { title: 'Content Calendar Planning', desc: 'A publishing schedule mapped out weeks ahead.' },
                    { title: 'Platform-Specific Strategy', desc: 'Content tailored to how each platform actually performs.' },
                    { title: 'Monthly Performance Reports', desc: 'A clear picture of growth, month over month.' }
                ]
            },
            'web-dev': {
                title: 'Web & Software Development',
                img: "{{ asset('assets/images/cards/web-development.jpg') }}",
                desc: 'From e-commerce stores and hosting setup to custom web development and full software builds, we handle the technical side so your business runs smoothly online.',
                items: [
                    { title: 'Website & E-Commerce Development', desc: 'Custom sites and stores built to convert.' },
                    { title: 'Hosting & Domain Setup', desc: 'Technical setup handled so you\'re live without the hassle.' },
                    { title: 'Custom Software Builds', desc: 'Tools built around exactly how your business works.' },
                    { title: 'Ongoing Maintenance & Support', desc: 'Updates and fixes so your site stays reliable.' },
                    { title: 'Wireframing & UI Design', desc: 'Layouts planned before a single line of code is written.' },
                    { title: 'Responsive & Mobile Optimization', desc: 'A site that looks great on every device.' },
                    { title: 'Brand-Consistent Styling', desc: 'Design that matches your brand, not a template.' },
                    { title: 'Payment Gateway Integration', desc: 'Secure, seamless checkout built in.' },
                    { title: 'Third-Party API Integration', desc: 'Connecting the tools you already rely on.' },
                    { title: 'Form & Workflow Automation', desc: 'Repetitive tasks automated so nothing gets missed.' },
                    { title: 'CRM & ERP Connections', desc: 'Your systems talking to each other, automatically.' },
                    { title: 'Cross-Browser Testing', desc: 'A consistent experience no matter how visitors arrive.' },
                    { title: 'Page Speed Optimization', desc: 'Faster load times that keep visitors from bouncing.' },
                    { title: 'Bug Fixing & QA', desc: 'Issues caught and resolved before they reach your users.' }
                ]
            },
            'online-marketing': {
                title: 'Online Marketing',
                img: "{{ asset('assets/images/cards/online-marketing.png') }}",
                desc: 'Boost your brand online through SEO, PPC, email campaigns, and other digital marketing strategies.',
                items: [
                    { title: 'Search Engine Optimization (SEO)', desc: 'Ranking higher for the searches that matter to you.' },
                    { title: 'Pay-Per-Click (PPC) Campaigns', desc: 'Paid ads managed to get the most from every dollar.' },
                    { title: 'Email Marketing Campaigns', desc: 'Campaigns that turn subscribers into customers.' },
                    { title: 'Analytics & Performance Reporting', desc: 'Clear numbers behind every marketing decision.' },
                    { title: 'Keyword Research & On-Page SEO', desc: 'Finding and targeting the terms your customers actually search.' },
                    { title: 'Blog & Landing Page Copy', desc: 'Content written to inform and convert.' },
                    { title: 'Backlink Outreach', desc: 'Building authority through quality link placements.' },
                    { title: 'Ad Creative Design', desc: 'Scroll-stopping ad visuals built to perform.' },
                    { title: 'Audience Targeting & A/B Testing', desc: 'Reaching the right people, refined through testing.' },
                    { title: 'Budget & Bid Optimization', desc: 'Getting more results from the same ad spend.' },
                    { title: 'Retargeting Campaigns', desc: 'Bringing back visitors who didn\'t convert the first time.' },
                    { title: 'Conversion Tracking Setup', desc: 'Knowing exactly which efforts drive results.' },
                    { title: 'Monthly Marketing Reports', desc: 'A clear, regular view of what\'s working.' },
                    { title: 'Competitor Analysis', desc: 'Understanding the market you\'re competing in.' }
                ]
            },
            'book-keeping': {
                title: 'Book Keeping',
                img: "{{ asset('assets/images/cards/bookkeeping.jpg') }}",
                desc: 'Accurate, up-to-date financial records — invoices, expenses, and reconciliation handled so your books are always audit-ready.',
                items: [
                    { title: 'Invoice & Expense Tracking', desc: 'Every invoice and expense logged accurately.' },
                    { title: 'Bank & Account Reconciliation', desc: 'Your books matched against real account activity.' },
                    { title: 'Financial Reporting', desc: 'Clear reports that show where your business stands.' },
                    { title: 'Audit-Ready Record Keeping', desc: 'Records organized and ready whenever they\'re needed.' },
                    { title: 'Payroll Processing Support', desc: 'Payroll run accurately and on schedule.' },
                    { title: 'Vendor Payment Scheduling', desc: 'Bills paid on time, every time.' },
                    { title: 'Accounts Receivable Follow-Up', desc: 'Chasing down payments so you don\'t have to.' },
                    { title: 'Categorizing Transactions', desc: 'Every transaction sorted correctly for clean books.' },
                    { title: 'Receipt & Document Management', desc: 'Financial paperwork organized and easy to retrieve.' },
                    { title: 'Multi-Account Reconciliation', desc: 'Multiple accounts kept balanced and accurate.' },
                    { title: 'Software Setup (QuickBooks/Xero)', desc: 'Your accounting tools set up and maintained properly.' },
                    { title: 'Tax Document Preparation', desc: 'Paperwork organized ahead of tax season.' },
                    { title: 'Year-End Closing Support', desc: 'Books closed out cleanly at year end.' },
                    { title: 'Budget vs. Actual Tracking', desc: 'Seeing how spending compares to plan.' }
                ]
            },
            'real-estate': {
                title: 'Real Estate Backend Management',
                img: "{{ asset('assets/images/cards/real-estate-management.jpg') }}",
                desc: 'Listings, documentation, client follow-ups, and transaction paperwork managed behind the scenes for busy real estate professionals.',
                items: [
                    { title: 'Listing Creation & Updates', desc: 'Listings published and kept current across platforms.' },
                    { title: 'Transaction Paperwork Handling', desc: 'Contracts and paperwork managed from offer to close.' },
                    { title: 'Client Follow-Ups & Scheduling', desc: 'Timely check-ins that keep deals moving.' },
                    { title: 'Document & Compliance Management', desc: 'Paperwork kept accurate and audit-ready.' },
                    { title: 'MLS Listing Updates', desc: 'Listings kept accurate across every MLS platform.' },
                    { title: 'Property Photo & Video Coordination', desc: 'Media scheduled and organized for every listing.' },
                    { title: 'Social Media Property Promotion', desc: 'Listings promoted to the right audience online.' },
                    { title: 'Showing Scheduling', desc: 'Property viewings coordinated without the back-and-forth.' },
                    { title: 'Offer & Counteroffer Tracking', desc: 'Every offer tracked and communicated clearly.' },
                    { title: 'Closing Checklist Management', desc: 'Nothing missed on the way to closing.' },
                    { title: 'CRM Updates for Leads', desc: 'Your pipeline kept current and organized.' },
                    { title: 'Contract & Disclosure Filing', desc: 'Required documents filed correctly and on time.' },
                    { title: 'Commission Tracking', desc: 'Clear visibility into what\'s owed and when.' },
                    { title: 'Licensing Renewal Reminders', desc: 'Deadlines tracked so credentials never lapse.' }
                ]
            },
            'virtual-receptionist': {
                title: 'Virtual Receptionist',
                img: "{{ asset('assets/images/cards/virtual-receptionist.jpg') }}",
                desc: 'A professional, welcoming voice for every call — answering, screening, and routing so no client is ever left waiting.',
                items: [
                    { title: 'Call Answering & Screening', desc: 'Every call answered professionally and routed correctly.' },
                    { title: 'Message Taking & Routing', desc: 'Messages captured accurately and delivered promptly.' },
                    { title: 'Appointment Scheduling', desc: 'Bookings managed so your calendar stays organized.' },
                    { title: 'Professional Customer Greeting', desc: 'A polished first impression on every call.' },
                    { title: 'Voicemail Management', desc: 'Voicemails checked and actioned promptly.' },
                    { title: 'Live Chat Responses', desc: 'Website visitors answered in real time.' },
                    { title: 'After-Hours Call Coverage', desc: 'Calls covered even outside business hours.' },
                    { title: 'Calendar Booking & Reminders', desc: 'Appointments booked and confirmed automatically.' },
                    { title: 'Reschedule & Cancellation Handling', desc: 'Changes managed smoothly, without the hassle.' },
                    { title: 'Client Intake Forms', desc: 'New client information collected upfront.' },
                    { title: 'Follow-Up Call Scheduling', desc: 'Timely check-ins that keep clients engaged.' },
                    { title: 'Custom Greeting Scripts', desc: 'Calls answered exactly the way you want.' },
                    { title: 'Multi-Language Support', desc: 'Serving a wider range of callers comfortably, where available.' },
                    { title: 'Call Escalation Protocols', desc: 'Urgent calls routed to the right person immediately.' }
                ]
            },
            'recruitment': {
                title: 'Recruitment Backend Management',
                img: "{{ asset('assets/images/cards/recruitment-management.jpg') }}",
                desc: 'Resume screening, interview scheduling, and candidate coordination — we keep your hiring pipeline moving without the busywork.',
                items: [
                    { title: 'Resume Screening & Shortlisting', desc: 'Only the most relevant candidates reach your desk.' },
                    { title: 'Interview Scheduling & Coordination', desc: 'Interviews booked without the scheduling back-and-forth.' },
                    { title: 'Candidate Communication', desc: 'Candidates kept informed at every stage.' },
                    { title: 'Hiring Pipeline Tracking', desc: 'A clear view of where every candidate stands.' },
                    { title: 'Job Posting Distribution', desc: 'Openings shared across the boards that matter.' },
                    { title: 'Candidate Sourcing', desc: 'Actively finding candidates on LinkedIn and job boards, not just waiting for applications.' },
                    { title: 'Passive Candidate Outreach', desc: 'Reaching qualified people who aren\'t actively job hunting.' },
                    { title: 'Multi-Round Interview Scheduling', desc: 'Complex interview loops coordinated without the headache.' },
                    { title: 'Reference Checks', desc: 'Backgrounds verified before an offer goes out.' },
                    { title: 'Offer Letter Preparation', desc: 'Offers drafted accurately and sent promptly.' },
                    { title: 'Interview Feedback Collection', desc: 'Feedback gathered and organized after every round.' },
                    { title: 'New Hire Paperwork', desc: 'Onboarding documents handled before day one.' },
                    { title: 'Onboarding Checklist Tracking', desc: 'Every onboarding step completed on schedule.' },
                    { title: 'ATS Data Entry & Updates', desc: 'Your hiring system kept accurate and current.' }
                ]
            },
            'medical-transcription': {
                title: 'Medical Transcription & Billing',
                img: "{{ asset('assets/images/cards/medical-transcription-billing.jpg') }}",
                desc: 'Accurate transcription and billing support for healthcare practices, handled with care and strict attention to detail.',
                items: [
                    { title: 'Medical Transcription', desc: 'Accurate, timely transcription of clinical notes.' },
                    { title: 'Insurance & Billing Processing', desc: 'Claims processed correctly the first time.' },
                    { title: 'Claims Follow-Up', desc: 'Outstanding claims chased down until resolved.' },
                    { title: 'HIPAA-Conscious Data Handling', desc: 'Patient data handled with strict confidentiality.' },
                    { title: 'Chart Note Transcription', desc: 'Clinical notes transcribed accurately and promptly.' },
                    { title: 'Referral Letter Preparation', desc: 'Referral documentation prepared correctly and on time.' },
                    { title: 'EHR Data Entry', desc: 'Patient records kept accurate in your EHR system.' },
                    { title: 'Coding Verification (ICD/CPT)', desc: 'Codes checked for accuracy before claims go out.' },
                    { title: 'Patient Invoicing', desc: 'Clear, accurate invoices sent to patients.' },
                    { title: 'Payment Posting', desc: 'Payments recorded accurately and promptly.' },
                    { title: 'Denial Management', desc: 'Denied claims reviewed, corrected, and resubmitted.' },
                    { title: 'Insurance Eligibility Verification', desc: 'Coverage confirmed before appointments happen.' },
                    { title: 'Prior Authorization Tracking', desc: 'Authorizations tracked so care isn\'t delayed.' },
                    { title: 'Patient Billing Inquiries', desc: 'Billing questions answered clearly and promptly.' }
                ]
            },
            'personal-assistance': {
                title: 'Personal Assistance',
                img: "{{ asset('assets/images/cards/personal-assistance.jpg') }}",
                desc: 'Calendar management, travel planning, and day-to-day organization so you can focus on what only you can do.',
                items: [
                    { title: 'Personal Calendar Management', desc: 'Your schedule kept organized and conflict-free.' },
                    { title: 'Travel Planning & Booking', desc: 'Trips planned and booked down to the details.' },
                    { title: 'Errand & Task Coordination', desc: 'Day-to-day tasks handled so you don\'t have to.' },
                    { title: 'General Day-to-Day Organization', desc: 'The small things managed so you can focus on the big ones.' },
                    { title: 'Appointment Booking', desc: 'Medical and personal appointments scheduled without the phone tag.' },
                    { title: 'Gift & Event Shopping', desc: 'Thoughtful gifts sourced and sent on time.' },
                    { title: 'Subscription & Bill Management', desc: 'Recurring payments tracked so nothing\'s forgotten.' },
                    { title: 'Itinerary Research & Booking', desc: 'Trip details planned and organized end to end.' },
                    { title: 'Restaurant Reservations', desc: 'Tables booked exactly where and when you want.' },
                    { title: 'Event Planning Support', desc: 'Occasions planned and coordinated from start to finish.' },
                    { title: 'Packing & Travel Checklists', desc: 'Nothing forgotten before you head out the door.' },
                    { title: 'Correspondence & Form Filling', desc: 'Paperwork and messages handled on your behalf.' },
                    { title: 'Document Organization', desc: 'Personal documents kept organized and easy to find.' },
                    { title: 'Research & Price Comparisons', desc: 'Legwork done so you can make quick decisions.' }
                ]
            }
        };

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

            const detailModalEl = document.getElementById('serviceDetailModal');
            const detailModal = new bootstrap.Modal(detailModalEl);
            const detailTitle = document.getElementById('serviceDetailTitle');
            const detailImg = document.getElementById('serviceDetailImg');
            const detailDesc = document.getElementById('serviceDetailDesc');
            const detailItems = document.getElementById('serviceDetailItems');

            document.querySelectorAll('.service-card').forEach(function(card) {
                const info = serviceDetails[card.id];
                if (!info) return;

                function openDetail() {
                    detailTitle.textContent = info.title;
                    detailImg.src = info.img;
                    detailImg.alt = info.title;
                    detailDesc.textContent = info.desc;
                    detailItems.innerHTML = '';
                    info.items.forEach(function(item) {
                        const itemEl = document.createElement('div');
                        itemEl.className = 'service-modal-item';

                        const icon = document.createElement('span');
                        icon.className = 'service-modal-item-icon';
                        icon.innerHTML = '<i class="bi bi-check-lg"></i>';
                        itemEl.appendChild(icon);

                        const body = document.createElement('div');
                        body.className = 'service-modal-item-body';

                        const title = document.createElement('p');
                        title.className = 'service-modal-item-title';
                        title.textContent = item.title;
                        body.appendChild(title);

                        const desc = document.createElement('p');
                        desc.className = 'service-modal-item-desc';
                        desc.textContent = item.desc;
                        body.appendChild(desc);

                        itemEl.appendChild(body);
                        detailItems.appendChild(itemEl);
                    });
                    detailModal.show();
                }

                card.addEventListener('click', openDetail);
                card.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        openDetail();
                    }
                });
            });
        });
    </script>
@endpush
