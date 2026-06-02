@extends('layouts.app')
@section('content')

<section class="page-hero">
  <div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('services') }}">Services</a></li>
        <li class="breadcrumb-item active" aria-current="page">Payroll</li>
      </ol>
    </nav>
    <div class="row align-items-center gy-5">
      <div class="col-lg-7 fade-up">
        <div class="label-pill light">Payroll Services</div>
        <h1 class="section-title light" style="font-size:clamp(2.2rem,4.5vw,3.5rem);">Stress-Free Payroll Services <span class="gold">for UK Businesses</span></h1>
        <div class="divider-gold"></div>
        <p class="section-subtitle light">Weekly, monthly or annual payroll processing, payslips, summaries, RTI submissions and pension support handled accurately by Cain &amp; Co.</p>
        <div class="hero-badge-row">
          <div class="hero-badge"><i class="bi bi-send-check-fill"></i> RTI Submissions</div>
          <div class="hero-badge"><i class="bi bi-receipt-cutoff"></i> Digital Payslips</div>
          <div class="hero-badge"><i class="bi bi-shield-check"></i> HMRC Compliant</div>
          <div class="hero-badge"><i class="bi bi-lock-fill"></i> Fixed Fees</div>
        </div>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#payroll-contact" class="btn btn-gold">Book Free Consultation</a>
          <a href="tel:02080871341" class="btn btn-outline-gold"><i class="bi bi-telephone me-2"></i>020 8087 1341</a>
        </div>
      </div>
      <div class="col-lg-5 fade-up fade-up-delay-2">
        <div class="hero-visual">
          <div class="hero-visual-top">
            <div class="hv-box"><i class="bi bi-people-fill"></i><span>Employees</span></div>
            <div class="hv-box"><i class="bi bi-calendar-check-fill"></i><span>Pay Runs</span></div>
            <div class="hv-box"><i class="bi bi-bank"></i><span>PAYE &amp; NI</span></div>
            <div class="hv-box"><i class="bi bi-person-check-fill"></i><span>Starters &amp; Leavers</span></div>
          </div>
          <div class="hv-banner">
            <div>
              <div class="hv-banner-label">Payroll Run</div>
              <div class="hv-banner-sub">Processed, checked and submitted on time</div>
            </div>
            <div class="hv-banner-num">100%</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-5 fade-up">
        <div class="intro-graphic">
          <div class="label-pill light">Why Outsource?</div>
          <h3 style="color:var(--white);font-size:1.7rem;position:relative;z-index:1;">Payroll should not steal your time or create compliance worry.</h3>
          <div class="intro-graphic-badge">
            <div class="igb-icon"><i class="bi bi-clock-history"></i></div>
            <div><div class="igb-title">Time Back Every Month</div><div class="igb-sub">No more wrestling with payroll admin.</div></div>
          </div>
          <div class="intro-graphic-badge">
            <div class="igb-icon"><i class="bi bi-patch-check-fill"></i></div>
            <div><div class="igb-title">Compliant Submissions</div><div class="igb-sub">PAYE, NI and RTI handled properly.</div></div>
          </div>
          <div class="intro-graphic-badge">
            <div class="igb-icon"><i class="bi bi-file-earmark-lock-fill"></i></div>
            <div><div class="igb-title">Secure Records</div><div class="igb-sub">Payslips, reports and summaries kept organised.</div></div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 fade-up delay-2">
        <div class="label-pill">What We Do</div>
        <h2 class="section-title">Payroll Management Made Simple</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle">Our payroll services cover weekly, monthly and annual processing for businesses with a handful of employees or a much larger team.</p>
        <p style="color:#555;font-size:.95rem;line-height:1.9;">Cain &amp; Co manages calculations, payslips, payroll summaries, PAYE and NI reporting, starters, leavers, P45s, P60s and pension administration. You get clear records, reliable deadlines and a payroll process your staff can depend on.</p>
        <div class="row g-3 mt-3">
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Weekly and monthly payroll</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Digital payslips and reports</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> RTI submissions to HMRC</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Auto enrolment support</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Payroll Support</div>
      <h2 class="section-title">Everything Your Payroll Cycle Needs</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">A complete payroll service built for accuracy, clarity and confidence.</p>
    </div>
    <div class="row g-4">
      @foreach ([
        ['calendar-week-fill', 'Payroll Processing', 'Weekly, fortnightly and monthly pay runs prepared accurately and on schedule.'],
        ['receipt-cutoff', 'Payslips & Summaries', 'Clear payslips, employer summaries and records issued securely for each pay cycle.'],
        ['send-check-fill', 'PAYE & RTI Filing', 'Real Time Information submissions sent to HMRC with PAYE and NI handled correctly.'],
        ['person-plus-fill', 'Starters & Leavers', 'New employees, leavers, P45s, P60s and employee changes kept tidy and compliant.'],
        ['shield-lock-fill', 'Pensions Support', 'Auto enrolment assessments, contribution calculations and pension reports supported.'],
        ['bar-chart-line-fill', 'Payroll Reporting', 'Useful payroll reports that help you understand staff costs and plan ahead.'],
      ] as [$icon, $title, $copy])
        <div class="col-md-6 col-lg-4 fade-up">
          <div class="payroll-svc-card">
            <div class="psvc-icon"><i class="bi bi-{{ $icon }}"></i></div>
            <h5>{{ $title }}</h5>
            <p>{{ $copy }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Why Cain &amp; Co</div>
      <h2 class="section-title">Payroll With the Same 7-Point Promise</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4">
      @foreach ([
        'Clear fixed fees with no surprise extras',
        'Fast answers from a responsive support team',
        'Plain-English explanations of payroll figures',
        'Proactive checks before errors become costly',
        'Organised records for year-end confidence',
        'Support for bookkeeping, payroll and auto enrolment together',
      ] as $reason)
        <div class="col-md-6 col-lg-4 fade-up">
          <div class="reason-card">
            <div class="reason-num"><i class="bi bi-check-lg"></i></div>
            <div><h5>{{ $reason }}</h5><p>Built around dependable process, accurate records and stress-free support.</p></div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section id="payroll-contact" class="section-pad contact-why-section">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 fade-up">
        <div class="label-pill light">Start Today</div>
        <h2 class="section-title light">Ready to Make Payroll Easier?</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle light">Try Cain &amp; Co risk-free and speak with a team that can manage payroll alongside your bookkeeping and auto enrolment.</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="{{ route('contacts') }}" class="btn btn-gold">Book a Free Consultation</a>
          <a href="mailto:takecontrol@cainandco.co.uk" class="btn btn-outline-gold">Email Us</a>
        </div>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-2">
        <div class="row g-3">
          <div class="col-6"><div class="stat-box"><span class="stat-num">RTI</span><div class="stat-label">Submissions</div></div></div>
          <div class="col-6"><div class="stat-box"><span class="stat-num">P60</span><div class="stat-label">Year-End Records</div></div></div>
          <div class="col-6"><div class="stat-box"><span class="stat-num">PAYE</span><div class="stat-label">HMRC Support</div></div></div>
          <div class="col-6"><div class="stat-box"><span class="stat-num">AE</span><div class="stat-label">Pension Support</div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
