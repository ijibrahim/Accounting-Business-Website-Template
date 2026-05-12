@extends('layouts.app')
@section('content')
<section id="blog" class="section-pad" style="background:var(--navy);">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">Insights &amp; Guides</div>
      <h2 class="section-title light">From the Cain &amp; Co Blog</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 fade-up fade-up-delay-1">
        <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:14px;overflow:hidden;transition:all .3s;" onmouseover="this.style.transform='translateY(-5px)';this.style.borderColor='var(--gold)'" onmouseout="this.style.transform='';this.style.borderColor='rgba(201,168,76,.15)'">
          <div style="height:140px;background:linear-gradient(135deg,var(--navy-light),#2a4a7a);display:flex;align-items:center;justify-content:center;"><i class="bi bi-journal-text" style="font-size:3rem;color:rgba(201,168,76,.4);"></i></div>
          <div style="padding:24px 22px;">
            <div style="display:flex;gap:10px;margin-bottom:14px;"><span style="background:rgba(201,168,76,.12);color:var(--gold);font-size:.72rem;font-weight:700;padding:4px 12px;border-radius:50px;letter-spacing:.5px;">HMRC</span><span style="color:rgba(255,255,255,.35);font-size:.78rem;">May 2025</span></div>
            <h5 style="color:var(--white);font-size:.97rem;margin-bottom:10px;line-height:1.5;">Making Tax Digital: What Every London SME Must Know Before July 2025</h5>
            <p style="color:rgba(255,255,255,.5);font-size:.83rem;line-height:1.7;">HMRC's MTD rollout is expanding. Here's exactly what changes and how to ensure your business is fully compliant without disruption.</p>
            <a href="#" style="color:var(--gold);font-size:.83rem;font-weight:600;margin-top:14px;display:inline-flex;align-items:center;gap:6px;">Read Article <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up fade-up-delay-2">
        <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:14px;overflow:hidden;transition:all .3s;" onmouseover="this.style.transform='translateY(-5px)';this.style.borderColor='var(--gold)'" onmouseout="this.style.transform='';this.style.borderColor='rgba(201,168,76,.15)'">
          <div style="height:140px;background:linear-gradient(135deg,#1a2d50,var(--navy-mid));display:flex;align-items:center;justify-content:center;"><i class="bi bi-currency-pound" style="font-size:3rem;color:rgba(201,168,76,.4);"></i></div>
          <div style="padding:24px 22px;">
            <div style="display:flex;gap:10px;margin-bottom:14px;"><span style="background:rgba(201,168,76,.12);color:var(--gold);font-size:.72rem;font-weight:700;padding:4px 12px;border-radius:50px;letter-spacing:.5px;">PAYROLL</span><span style="color:rgba(255,255,255,.35);font-size:.78rem;">April 2025</span></div>
            <h5 style="color:var(--white);font-size:.97rem;margin-bottom:10px;line-height:1.5;">5 Payroll Mistakes London Restaurants Make (and How to Fix Them)</h5>
            <p style="color:rgba(255,255,255,.5);font-size:.83rem;line-height:1.7;">From incorrect NI calculations to missed auto enrolment deadlines — here are the most common and costly payroll errors we see in hospitality.</p>
            <a href="#" style="color:var(--gold);font-size:.83rem;font-weight:600;margin-top:14px;display:inline-flex;align-items:center;gap:6px;">Read Article <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-6 offset-md-3 offset-lg-0 col-lg-4 fade-up fade-up-delay-3">
        <div style="background:rgba(255,255,255,.05);border:1px solid rgba(201,168,76,.15);border-radius:14px;overflow:hidden;transition:all .3s;" onmouseover="this.style.transform='translateY(-5px)';this.style.borderColor='var(--gold)'" onmouseout="this.style.transform='';this.style.borderColor='rgba(201,168,76,.15)'">
          <div style="height:140px;background:linear-gradient(135deg,#162840,#1a3050);display:flex;align-items:center;justify-content:center;"><i class="bi bi-graph-up-arrow" style="font-size:3rem;color:rgba(201,168,76,.4);"></i></div>
          <div style="padding:24px 22px;">
            <div style="display:flex;gap:10px;margin-bottom:14px;"><span style="background:rgba(201,168,76,.12);color:var(--gold);font-size:.72rem;font-weight:700;padding:4px 12px;border-radius:50px;letter-spacing:.5px;">CASHFLOW</span><span style="color:rgba(255,255,255,.35);font-size:.78rem;">March 2025</span></div>
            <h5 style="color:var(--white);font-size:.97rem;margin-bottom:10px;line-height:1.5;">How to Build a 12-Month Cash Flow Forecast for Your Small Business</h5>
            <p style="color:rgba(255,255,255,.5);font-size:.83rem;line-height:1.7;">A step-by-step guide to creating a reliable cashflow forecast that helps you plan investments, manage lean months, and grow with confidence.</p>
            <a href="#" style="color:var(--gold);font-size:.83rem;font-weight:600;margin-top:14px;display:inline-flex;align-items:center;gap:6px;">Read Article <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection