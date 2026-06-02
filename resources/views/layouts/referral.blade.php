@extends('layouts.app')
@section('content')

<section class="page-hero">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-7 fade-up">
        <div class="label-pill light">Referral Offer</div>
        <h1 class="section-title light">Referral Reward - Champagne’s on Us</h1>
        <div class="divider-gold"></div>
        <p class="section-subtitle light">If you know a business that would benefit from better bookkeeping, introduce them to Cain &amp; Co. When they join us, we send you a bottle of champagne as a thank you.</p>
        <a href="{{ route('contacts') }}" class="btn btn-gold mt-3">Refer Cain &amp; Co</a>
      </div>
      <div class="col-lg-5 fade-up fade-up-delay-2">
        <div class="hero-card text-center">
          <div style="font-family:var(--head-font);font-size:5rem;font-weight:900;color:var(--gold);line-height:1;">£</div>
          <h4 style="color:var(--white);">Simple Introductions</h4>
          <p style="color:rgba(255,255,255,.62);">No complicated scheme. Just a warm introduction and a proper thank you.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">How It Works</div>
      <h2 class="section-title">Three Simple Steps</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4">
      @foreach ([['1', 'Introduce', 'Send us the details of a business that needs bookkeeping, payroll or reporting support.'], ['2', 'We Help', 'We speak with them, understand their needs and recommend the right fixed-fee support.'], ['3', 'Thank You', 'When they become a client, we send your referral reward as a thank you.']] as [$num, $title, $copy])
        <div class="col-md-4 fade-up">
          <div class="referral-step">
            <div class="referral-step-num">{{ $num }}</div>
            <h5>{{ $title }}</h5>
            <p>{{ $copy }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
