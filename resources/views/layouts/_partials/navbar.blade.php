<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ $setting->site_name }}</a>
        <div class="d-flex align-items-center gap-2 ms-auto d-lg-none">
            <button id="darkToggle" aria-label="Toggle dark mode"><i class="bi bi-moon-stars"></i></button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('about') }}" data-bs-toggle="dropdown">About</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('team') }}">Meet the Team</a></li>
                        <li><a class="dropdown-item" href="{{ route('testimonials') }}">Testimonials</a></li>
                        <li><a class="dropdown-item" href="{{ route('consultants') }}">Client Coverage</a></li>
                        <li><a class="dropdown-item" href="{{ route('referral') }}">Referral Offer</a></li>
                        <li><a class="dropdown-item" href="{{ route('community') }}">Community</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('services') }}"
                        data-bs-toggle="dropdown">Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('services') }}">Bookkeeping</a></li>
                        <li><a class="dropdown-item" href="{{ route('payroll') }}">Payroll</a></li>
                        <li><a class="dropdown-item" href="{{ route('services') }}#auto-enrolment">Auto Enrolment</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blogs') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/#brochure') }}">Brochure</a></li>
            </ul>
            <div class="d-flex align-items-center gap-2">
                <button id="darkToggle" class="d-none d-lg-block" aria-label="Toggle dark mode"><i
                        class="bi bi-moon-stars"></i></button>
                <a href="{{ route('contacts') }}" class="nav-link nav-cta-btn">Free Consultation</a>
            </div>
        </div>
    </div>
</nav>
