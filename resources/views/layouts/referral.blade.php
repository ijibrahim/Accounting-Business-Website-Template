@extends('layouts.app')
@section('content')

<section id="referral" class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">🥂 Referral Rewards</div>
      <h2 class="section-title">Referral Reward — <span class="gold">Champagne's on Us!</span></h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">Know a business that needs brilliant bookkeeping? Refer them to us and we'll send you a bottle of Moët &amp; Chandon as a thank you. Every time.</p>
    </div>
    <div class="row g-4 mb-5">
      <div class="col-md-4 fade-up fade-up-delay-1">
        <div class="referral-step">
          <div class="referral-step-num">1</div>
          <h5>Refer a Friend or Colleague</h5>
          <p>Tell them about Cain &amp; Co and share their details with us using the simple form below.</p>
        </div>
      </div>
      <div class="col-md-4 fade-up fade-up-delay-2">
        <div class="referral-step">
          <div class="referral-step-num">2</div>
          <h5>They Sign Up With Us</h5>
          <p>Once your referral becomes a Cain &amp; Co client, we get started on making their books beautiful.</p>
        </div>
      </div>
      <div class="col-md-4 fade-up fade-up-delay-3">
        <div class="referral-step">
          <div class="referral-step-num">3</div>
          <h5>We Send You Champagne 🥂</h5>
          <p>A bottle of Moët &amp; Chandon lands on your doorstep. No limits — refer 10 clients, get 10 bottles!</p>
        </div>
      </div>
    </div>
    <!-- Referral Form -->
    <div class="row justify-content-center fade-up">
      <div class="col-lg-7">
        <div style="background:var(--white);border:1px solid rgba(0,0,0,.07);border-radius:16px;padding:40px 36px;box-shadow:0 8px 40px rgba(0,0,0,.06);">
          <h4 style="font-size:1.2rem;margin-bottom:20px;">Submit a Referral</h4>
          <div class="row g-3">
            <div class="col-sm-6">
              <label class="form-label" style="color:#555;">Your Name</label>
              <input type="text" class="form-control" style="background:#f8f6f1;color:var(--navy);border-color:rgba(0,0,0,.1);" placeholder="Rebecca Smith">
            </div>
            <div class="col-sm-6">
              <label class="form-label" style="color:#555;">Referral's Business Name</label>
              <input type="text" class="form-control" style="background:#f8f6f1;color:var(--navy);border-color:rgba(0,0,0,.1);" placeholder="Acme Ltd">
            </div>
            <div class="col-sm-6">
              <label class="form-label" style="color:#555;">Referral's Email</label>
              <input type="email" class="form-control" style="background:#f8f6f1;color:var(--navy);border-color:rgba(0,0,0,.1);" placeholder="info@acme.co.uk">
            </div>
            <div class="col-sm-6">
              <label class="form-label" style="color:#555;">Referral's Phone</label>
              <input type="tel" class="form-control" style="background:#f8f6f1;color:var(--navy);border-color:rgba(0,0,0,.1);" placeholder="07700 900000">
            </div>
            <div class="col-12 mt-2">
              <button class="btn btn-gold w-100">Submit Referral &amp; Claim My Champagne 🥂</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection