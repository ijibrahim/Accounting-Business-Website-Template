@extends('layouts.app')
@section('content')

<section id="about" class="section-pad" style="background:var(--navy);">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 fade-up">
        <div class="label-pill light">About Cain &amp; Co</div>
        <h2 class="section-title light">London's Most Trusted <br/>Bookkeeping Practice</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle light" style="margin-bottom:22px;">Founded with a mission to make professional bookkeeping accessible to every London business, Cain &amp; Co has grown from a two-person practice to one of the capital's most respected financial support firms.</p>
        <p style="color:rgba(255,255,255,.6);font-size:.92rem;line-height:1.9;">We believe every business — from a Hackney restaurant to a City consultancy — deserves accurate books, proactive financial guidance, and the peace of mind that comes with HMRC compliance. Our ISO 9001-certified processes guarantee consistent, high-quality service every month.</p>
        <div class="row g-3 mt-4">
          <div class="col-6"><div style="padding:18px;background:rgba(255,255,255,.04);border-radius:10px;border:1px solid rgba(201,168,76,.15)"><div style="color:var(--gold);font-family:var(--head-font);font-size:1.8rem;font-weight:700;">2012</div><div style="color:rgba(255,255,255,.5);font-size:.82rem;">Founded in London</div></div></div>
          <div class="col-6"><div style="padding:18px;background:rgba(255,255,255,.04);border-radius:10px;border:1px solid rgba(201,168,76,.15)"><div style="color:var(--gold);font-family:var(--head-font);font-size:1.8rem;font-weight:700;">ISO 9001</div><div style="color:rgba(255,255,255,.5);font-size:.82rem;">Quality Certified</div></div></div>
          <div class="col-6"><div style="padding:18px;background:rgba(255,255,255,.04);border-radius:10px;border:1px solid rgba(201,168,76,.15)"><div style="color:var(--gold);font-family:var(--head-font);font-size:1.8rem;font-weight:700;">AAT</div><div style="color:rgba(255,255,255,.5);font-size:.82rem;">Qualified Bookkeepers</div></div></div>
          <div class="col-6"><div style="padding:18px;background:rgba(255,255,255,.04);border-radius:10px;border:1px solid rgba(201,168,76,.15)"><div style="color:var(--gold);font-family:var(--head-font);font-size:1.8rem;font-weight:700;">4.9★</div><div style="color:rgba(255,255,255,.5);font-size:.82rem;">Average Client Rating</div></div></div>
        </div>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-2">
        <!-- Timeline -->
        <div style="position:relative;padding-left:32px;border-left:2px solid rgba(201,168,76,.3)">
          <div style="margin-bottom:32px;position:relative;">
            <div style="position:absolute;left:-41px;top:4px;width:18px;height:18px;border-radius:50%;background:var(--gold);border:3px solid var(--navy);"></div>
            <div style="font-size:.78rem;color:var(--gold);font-weight:700;letter-spacing:1px;margin-bottom:4px;">2012</div>
            <h5 style="color:var(--white);font-size:.95rem;margin-bottom:6px;">Founded in Canary Wharf</h5>
            <p style="color:rgba(255,255,255,.5);font-size:.85rem;line-height:1.7;">Started with a vision to modernise bookkeeping for London SMEs. First 20 clients onboarded.</p>
          </div>
          <div style="margin-bottom:32px;position:relative;">
            <div style="position:absolute;left:-41px;top:4px;width:18px;height:18px;border-radius:50%;background:var(--gold);border:3px solid var(--navy);"></div>
            <div style="font-size:.78rem;color:var(--gold);font-weight:700;letter-spacing:1px;margin-bottom:4px;">2016</div>
            <h5 style="color:var(--white);font-size:.95rem;margin-bottom:6px;">ISO 9001 Certification</h5>
            <p style="color:rgba(255,255,255,.5);font-size:.85rem;line-height:1.7;">Achieved ISO 9001 quality management certification, cementing our commitment to excellence.</p>
          </div>
          <div style="margin-bottom:32px;position:relative;">
            <div style="position:absolute;left:-41px;top:4px;width:18px;height:18px;border-radius:50%;background:var(--gold);border:3px solid var(--navy);"></div>
            <div style="font-size:.78rem;color:var(--gold);font-weight:700;letter-spacing:1px;margin-bottom:4px;">2020</div>
            <h5 style="color:var(--white);font-size:.95rem;margin-bottom:6px;">Payroll &amp; Auto Enrolment Launch</h5>
            <p style="color:rgba(255,255,255,.5);font-size:.85rem;line-height:1.7;">Expanded into full payroll management and workplace pension auto enrolment services.</p>
          </div>
          <div style="position:relative;">
            <div style="position:absolute;left:-41px;top:4px;width:18px;height:18px;border-radius:50%;background:var(--gold);border:3px solid var(--navy);"></div>
            <div style="font-size:.78rem;color:var(--gold);font-weight:700;letter-spacing:1px;margin-bottom:4px;">Today</div>
            <h5 style="color:var(--white);font-size:.95rem;margin-bottom:6px;">200+ Active Clients Across London</h5>
            <p style="color:rgba(255,255,255,.5);font-size:.85rem;line-height:1.7;">Serving businesses across every London borough and beyond, with a 97% client retention rate.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection