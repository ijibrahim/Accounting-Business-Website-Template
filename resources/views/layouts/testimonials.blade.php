@extends('layouts.app')
@section('content')
    <section class="page-hero">
        <div class="container text-center fade-up">
            <div class="label-pill light">Client Testimonials</div>
            <h1 class="section-title light">What Our Clients Have To Say</h1>
            <div class="divider-gold mx-auto"></div>
            <p class="section-subtitle light mx-auto text-center">Business owners and accountants share how Cain &amp; Co
                helped them save time, stay compliant and feel in control.</p>
        </div>
    </section>

    <section class="section-pad bg-offwhite">
        <div class="container">
            <div class="row g-4">
                @foreach ([['Amanda Hill', 'AH Social Media', 'Professional, knowledgeable, switched on and passionate about the industry.'], ['Joanne Bell', 'Bells Accounting', 'Fast turnaround, excellent value for money and accurate, well-presented work.'], ['Sarah French', 'IT4Automation', 'Knowledgeable on Sage, helpful and patient. No query is too much trouble.'], ['Julien Upson', 'Hartley Fowler', 'Cain & Co helped at very short notice when a client needed urgent financial control support.'], ['Mike Newton-Woof', 'Ventura Yachts', 'Exemplary care and attention with our primary bookkeeping data. Wholly recommended.'], ['Bryan Downs', 'B.D Accountants', 'Helpful, friendly and easy to deal with. A professional bookkeeping and VAT service.'], ['Stuart Baxter', 'Baxter’s Battlefield Tours', 'Transparent, personal and professional, with outstanding bookkeeping support.'], ['Claire Hayman', 'Lifestyle', 'Introduced us to Xero and helped us bring bookkeeping, payroll and CIS in-house.']] as [$name, $company, $quote])
                    <div class="col-md-6 col-lg-4 fade-up">
                        <div class="testi-card">
                            <div class="testi-stars">★★★★★</div>
                            <p class="testi-text">"{{ $quote }}"</p>
                            <div class="testi-author">
                                <div class="testi-avatar">
                                    {{ collect(explode(' ', $name))->map(fn($part) => $part[0])->join('') }}</div>
                                <div>
                                    <div class="testi-name">{{ $name }}</div>
                                    <div class="testi-role">{{ $company }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="cta-banner">
        <div class="container text-center position-relative fade-up">
            <div class="label-pill light">Your Turn</div>
            <h2 class="section-title light">Work With {{ $setting->site_name }} Today</h2>
            <div class="divider-gold mx-auto"></div>
            <p class="section-subtitle light mx-auto text-center">The businesses on this page trusted us with their numbers
                and have not looked back.</p>
            <a href="{{ route('contacts') }}" class="btn btn-gold mt-3">Book a Free Consultation</a>
        </div>
    </section>
@endsection
