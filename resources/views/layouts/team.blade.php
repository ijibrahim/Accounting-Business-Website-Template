@extends('layouts.app')
@section('content')
    <section class="page-hero">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Meet the Team</li>
                </ol>
            </nav>
            <div class="text-center fade-up">
                <div class="label-pill light">Our Team</div>
                <h1 class="section-title light">Meet The {{ $setting->site_name }} Team</h1>
                <div class="divider-gold mx-auto"></div>
                <p class="section-subtitle light mx-auto text-center">Friendly bookkeeping specialists providing clear
                    advice, dependable support and calm financial control.</p>
            </div>
        </div>
    </section>

    <section class="section-pad bg-offwhite">
        <div class="container">
            <div class="row g-4">
                @foreach ([['Mohammed Omar Faruq', 'Director', 'PC'], ['Md Masud Forkan', 'Senior Accountant', 'MF'], ['Grant Dye', 'Bookkeeper', 'GD'], ['Sam Warwick-Rolf', 'Bookkeeper', 'SW'], ['Luke Iles', 'Marketing Partner - HandL Agency', 'LI'], ['Bailey Wilshire', 'Marketing Partner - HandL Agency', 'BW'], ['Ryder', 'Head of Debt Collection', 'RY']] as [$name, $role, $initials])
                    <div class="col-sm-6 col-lg-4 fade-up">
                        <div class="team-card">
                            <div class="team-avatar">
                                <img src="{{ asset('assets/images/faruq.jpeg') }}" alt="">
                            </div>
                            <h5>{{ $name }}</h5>
                            <p>{{ $role }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta-banner">
        <div class="container text-center position-relative fade-up">
            <div class="label-pill light">Work With Us</div>
            <h2 class="section-title light">Let Us Take the Stress Off Your Plate</h2>
            <div class="divider-gold mx-auto"></div>
            <p class="section-subtitle light mx-auto text-center">Try {{ $setting->site_name }} risk-free for 3 months and
                speak with a team that keeps your books organised.</p>
            <a href="{{ route('contacts') }}" class="btn btn-gold mt-3">Try Us for 3 Months</a>
        </div>
    </section>
@endsection
