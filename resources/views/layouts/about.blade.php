@extends('layouts.app')
@section('content')

<section class="page-hero">
  <div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About</li>
      </ol>
    </nav>
    <div class="row align-items-center gy-5">
      <div class="col-lg-7 fade-up">
        <div class="label-pill light">About {{ $setting->site_name }} Co</div>
        <h1 class="section-title light" style="font-size:clamp(2.2rem,4.5vw,3.5rem);">One of the Few ISO 9001 Certified Bookkeepers in the UK</h1>
        <div class="divider-gold"></div>
        <p class="section-subtitle light">{{ $setting->site_name }} Co was built to help business owners understand where they stand, stay compliant and get their time back.</p>
        <div class="hero-badge-row">
          <div class="hero-badge"><i class="bi bi-award-fill"></i> ISO 9001 Certified</div>
          <div class="hero-badge"><i class="bi bi-chat-dots-fill"></i> Plain-English Advice</div>
          <div class="hero-badge"><i class="bi bi-shield-check"></i> Fixed-Fee Support</div>
        </div>
      </div>
      <div class="col-lg-5 fade-up fade-up-delay-2">
        <div class="hero-card">
          <div class="hero-price-box">
            <div class="from">Trusted support from</div>
            <div class="price">£299</div>
            <div class="mo">per month + VAT</div>
          </div>
          <div class="mt-3">
            <div class="contact-info-item"><div class="contact-info-icon"><i class="bi bi-telephone-fill"></i></div><div><div class="contact-info-label">Call</div><div class="contact-info-val">020 8087 1341</div></div></div>
            <div class="contact-info-item"><div class="contact-info-icon"><i class="bi bi-envelope-fill"></i></div><div><div class="contact-info-label">Email</div><div class="contact-info-val">takecontrol@cainandco.co.uk</div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 fade-up">
        <div class="label-pill">Meet Paul {{ $setting->site_name }} The Team</div>
        <h2 class="section-title">Built for Business Owners Who Need Clarity</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle">Founder Paul Cain started in finance in the early 1990s and saw the same problem again and again: capable business owners were overwhelmed by deadlines and unsure whether their numbers were right.</p>
        <p style="color:#555;font-size:.95rem;line-height:1.9;">{{ $setting->site_name }} Co exists to provide a clearer way forward. The team is friendly, experienced, responsive and focused on making bookkeeping, payroll and reporting feel calm instead of chaotic.</p>
        <a href="{{ route('team') }}" class="btn btn-gold mt-3">Meet the Team</a>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-2">
        <div class="row g-3">
          @foreach ([['Clarity', 'Numbers explained without jargon.'], ['Commitment', 'Support when your business needs answers.'], ['Care', 'A team that treats your stress level as part of the work.'], ['Consistency', 'Repeatable ISO-led processes for reliable service.']] as [$title, $copy])
            <div class="col-sm-6">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-check-circle-fill"></i></div>
                <h5>{{ $title }}</h5>
                <p>{{ $copy }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Our Story</div>
      <h2 class="section-title">From Local Support to UK-Wide Confidence</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4">
      @foreach ([
        ['The Beginning', 'Cain & Co began with one person helping local businesses stay organised, compliant and ahead of HMRC deadlines.'],
        ['The Lessons', 'Over time, the team learned that clarity, communication and consistency matter just as much as accurate data entry.'],
        ['Today', 'Cain & Co supports clients across the UK, from ambitious start-ups to larger firms that need dependable fixed-fee bookkeeping.'],
      ] as [$title, $copy])
        <div class="col-md-4 fade-up">
          <div class="problem-card">
            <div class="problem-icon"><i class="bi bi-building-check"></i></div>
            <h4>{{ $title }}</h4>
            <p>{{ $copy }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="section-pad contact-why-section">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">7-Point Promise</div>
      <h2 class="section-title light">The Reasons Businesses Trust {{ $setting->site_name }} Co</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4">
      @foreach ([
        'No HMRC fines when requested information is supplied on time',
        'Organised records that reduce month-end and year-end chaos',
        'Fast answers with most bookkeeping queries resolved quickly',
        'Reports explained clearly in plain English',
        'Proactive support before small issues become expensive',
        'Clear fixed fees with no hidden costs',
        'Support throughout the year, including busy periods',
      ] as $reason)
        <div class="col-md-6 col-lg-4 fade-up">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-patch-check-fill"></i></div>
            <h5>{{ $reason }}</h5>
            <p>Reliable process, responsive communication and calm financial support.</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
