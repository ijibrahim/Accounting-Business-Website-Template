@extends('layouts.app')
@section('content')

<section class="page-hero">
  <div class="container">
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Bookkeeping</li>
      </ol>
    </nav>
    <div class="row align-items-center gy-5">
      <div class="col-lg-7 fade-up">
        <div class="label-pill light">Bookkeeping Services</div>
        <h1 class="section-title light" style="font-size:clamp(2.2rem,4.5vw,3.5rem);">Bookkeeping Services for <span class="gold">Growing Businesses</span></h1>
        <div class="divider-gold"></div>
        <p class="section-subtitle light">Free up your time, avoid costly bookkeeping mistakes and stay compliant with Cain &amp; Co handling your books properly, month after month.</p>
        <div class="hero-badge-row">
          <div class="hero-badge"><i class="bi bi-award-fill"></i> ISO 9001 Certified</div>
          <div class="hero-badge"><i class="bi bi-shield-check"></i> HMRC Compliant</div>
          <div class="hero-badge"><i class="bi bi-lock-fill"></i> Fixed Fees</div>
          <div class="hero-badge"><i class="bi bi-calendar-check"></i> 3-Month Trial</div>
        </div>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="{{ route('contacts') }}" class="btn btn-gold">Try Us for 3 Months</a>
          <a href="tel:02080871341" class="btn btn-outline-gold"><i class="bi bi-telephone me-2"></i>020 8087 1341</a>
        </div>
      </div>
      <div class="col-lg-5 fade-up fade-up-delay-2">
        <div class="hero-card">
          <div class="row g-3 mb-3">
            <div class="col-4"><div class="hero-stat"><span class="hero-stat-num">VAT</span><span class="hero-stat-label">Returns</span></div></div>
            <div class="col-4"><div class="hero-stat"><span class="hero-stat-num">P&amp;L</span><span class="hero-stat-label">Reports</span></div></div>
            <div class="col-4"><div class="hero-stat"><span class="hero-stat-num">MTD</span><span class="hero-stat-label">Ready</span></div></div>
          </div>
          <div class="hero-price-box">
            <div class="from">Starting from</div>
            <div class="price">&pound;299</div>
            <div class="mo">+ VAT per month</div>
          </div>
          <a href="{{ route('contacts') }}" class="btn btn-gold w-100 mt-3">Book Free Consultation</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 fade-up">
        <div class="label-pill">Our Bookkeeping Services</div>
        <h2 class="section-title">Accurate Records, Clear Reporting and Full Compliance</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle">Managing bookkeeping can be one of the most time-consuming and stressful parts of running a business.</p>
        <p style="color:#555;font-size:.95rem;line-height:1.9;">At Cain &amp; Co, we remove that pressure by handling your bookkeeping properly and consistently. Our experienced team keeps your records accurate, compliant and up to date, with monthly fees from just &pound;299 per month.</p>
        <p style="color:#555;font-size:.95rem;line-height:1.9;">You focus on running your business while we take care of the books. Call 020 8087 1341 or email takecontrol@cainandco.co.uk to get started.</p>
        <a href="{{ route('contacts') }}" class="btn btn-gold mt-3">Try Us for 3 Months</a>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-2">
        <div class="row g-3">
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Sales and supplier invoices</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Bank reconciliation</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> VAT returns and MTD support</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Monthly management reports</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Year-end ready records</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Cash flow and P&amp;L clarity</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Industries We Work With</div>
      <h2 class="section-title">Bookkeeping Support Across Key Sectors</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">We support businesses across London, the South East and nationwide with accurate fixed-fee bookkeeping.</p>
    </div>
    <div class="row g-4">
      @foreach ([
        ['egg-fried', 'Restaurants', 'Busy hospitality operators need clean weekly records, VAT clarity and payroll support.'],
        ['building', 'Hospitality', 'Reliable numbers help teams plan staffing, stock, cash flow and supplier payments.'],
        ['hammer', 'Construction', 'Support for transaction-heavy bookkeeping, CIS, payroll and reconciliations.'],
        ['calculator', 'Accountants', 'Dependable bookkeeping support for practices and their clients.'],
        ['briefcase', 'Consultants', 'Fixed-fee records and reporting for service-led businesses.'],
        ['shop', 'Retail', 'Sales, suppliers, reconciliations and VAT kept organised and current.'],
      ] as [$icon, $title, $copy])
        <div class="col-md-6 col-lg-4 fade-up">
          <div class="industry-svc-card">
            <i class="isc-icon bi bi-{{ $icon }}"></i>
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
      <div class="label-pill">Common Problems</div>
      <h2 class="section-title">Is Poor Bookkeeping Holding You Back?</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4">
      @foreach ([
        ['question-circle', 'Can’t Trust Your Numbers?', 'When bookkeeping falls behind, reports become unreliable and decisions are made on guesswork. We keep your records accurate and up to date.'],
        ['folder-x', 'Drowning in Financial Chaos?', 'Missing paperwork and inconsistent records make bookkeeping messy. We maintain clean, structured records that are easy to review.'],
        ['calendar2-x', 'Dreading VAT & Year-End?', 'Poor bookkeeping leads to rushed deadlines. Our team keeps everything in order throughout the year so nothing comes as a surprise.'],
      ] as [$icon, $title, $copy])
        <div class="col-md-4 fade-up">
          <div class="problem-card">
            <div class="problem-icon"><i class="bi bi-{{ $icon }}"></i></div>
            <h4>{{ $title }}</h4>
            <p>{{ $copy }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section id="trial" class="section-pad">
  <div class="container position-relative">
    <div class="row align-items-center gy-4">
      <div class="col-lg-7 fade-up">
        <div class="trial-badge"><i class="bi bi-star-fill"></i> RISK-FREE OFFER</div>
        <h2 class="section-title" style="color:var(--navy);font-size:clamp(2rem,4vw,3rem);">Try Us for 3 Months - Pay Nothing If We Don’t Deliver</h2>
        <div style="width:56px;height:3px;background:rgba(13,27,42,.3);border-radius:2px;margin:18px 0 22px;"></div>
        <p style="color:rgba(13,27,42,.75);font-size:1rem;line-height:1.9;max-width:560px;">We are so confident in the quality of our bookkeeping that we offer a full three-month, risk-free trial. If you are not completely happy with the service, you will not be charged anything.</p>
        <a href="{{ route('contacts') }}" class="btn btn-outline-navy">Try Us for 3 Months</a>
      </div>
      <div class="col-lg-5 text-center fade-up fade-up-delay-2">
        <div style="background:rgba(13,27,42,.12);border-radius:20px;padding:40px;display:inline-block;">
          <div style="font-family:var(--head-font);font-size:7rem;font-weight:900;color:var(--navy);line-height:1;">3</div>
          <div style="font-size:1.5rem;font-weight:700;color:var(--navy);margin-top:-10px;">MONTHS</div>
          <div style="color:rgba(13,27,42,.6);font-size:.88rem;margin-top:8px;">risk-free trial</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill">Fixed-Fee Packages</div>
      <h2 class="section-title">Clear Bookkeeping Packages</h2>
      <div class="divider-gold mx-auto"></div>
      <p class="section-subtitle mx-auto text-center">Every package includes our 7-point guarantee and a 3-month risk-free trial.</p>
    </div>
    <div class="row g-4">
      @foreach ([
        ['Entry', '&pound;299', 'Perfect if you just need the essentials covered.', ['VAT, CIS and payroll support', 'Weekly or monthly bank reconciliations', 'Year-end ready books', 'Questions answered within 24 hours', 'Digital record keeping support'], false],
        ['Full', '&pound;499', 'Most popular for growing businesses.', ['Everything in Entry', 'Monthly management reports', 'Cash flow, P&L and forecasts', 'Proactive advice before issues cost money', 'Monthly review call'], true],
        ['Premium', '&pound;699', 'For busy owners who want deeper financial clarity.', ['Everything in Full', 'Advanced KPI tracking', 'Bespoke sales and cash flow forecasting', 'Priority support', 'Dedicated senior bookkeeper'], false],
      ] as [$tier, $price, $summary, $features, $featured])
        <div class="col-md-6 col-lg-4 fade-up">
          <div class="price-card {{ $featured ? 'featured' : '' }}">
            @if ($featured)
              <div class="price-badge">Most Popular</div>
            @endif
            <div class="price-tier">{{ $tier }}</div>
            <div class="price-amount">{!! $price !!}</div>
            <div class="price-mo">+ VAT / month</div>
            <p style="{{ $featured ? 'color:rgba(255,255,255,.62);' : 'color:var(--muted);' }}font-size:.88rem;line-height:1.7;">{{ $summary }}</p>
            <div class="price-divider"></div>
            @foreach ($features as $feature)
              <div class="price-feature"><i class="bi bi-check-circle-fill"></i> {{ $feature }}</div>
            @endforeach
            <div class="mt-auto">
              <a href="{{ route('contacts') }}" class="btn {{ $featured ? 'btn-gold' : 'btn-outline-navy' }} w-100">Choose {{ $tier }} Package</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="section-pad contact-why-section">
  <div class="container">
    <div class="text-center mb-5 fade-up">
      <div class="label-pill light">7 Reasons</div>
      <h2 class="section-title light">The 7 Reasons You Can Trust Cain &amp; Co</h2>
      <div class="divider-gold mx-auto"></div>
    </div>
    <div class="row g-4">
      @foreach ([
        ['No HMRC Fines, Guaranteed', 'Provide the information we request on time and you will not face late filing penalties. If a penalty is issued due to our error, we cover it.'],
        ['No More Bookkeeping Chaos', 'We keep your records organised, up to date and accurate, removing month-end and year-end stress.'],
        ['Fast Answers, Every Time', 'Most bookkeeping questions are answered quickly, with all queries responded to promptly.'],
        ['Your Numbers Explained Clearly', 'We explain your figures, reports and records in plain English without jargon.'],
        ['Proactive Bookkeeping Support', 'Our team identifies issues early, helping prevent errors, compliance problems and last-minute surprises.'],
        ['Clear Fixed Fees', 'Our fees are simple and transparent with no hidden costs.'],
        ['Support Whenever You Need It', 'Our support team is available year-round, including during busy periods.'],
      ] as [$title, $copy])
        <div class="col-md-6 col-lg-4 fade-up">
          <div class="why-card">
            <div class="why-icon"><i class="bi bi-patch-check-fill"></i></div>
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
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 fade-up">
        <div class="label-pill">Detailed Support</div>
        <h2 class="section-title">Your Outsourced Bookkeeping Partner</h2>
        <div class="divider-gold"></div>
        <p style="color:#555;font-size:.95rem;line-height:1.9;">We take care of the full bookkeeping function, from recording day-to-day transactions and reconciling bank accounts to managing VAT returns, producing management reports and keeping your records compliant and up to date.</p>
        <p style="color:#555;font-size:.95rem;line-height:1.9;">With ISO 9001 certification, ICB membership and a strong reputation for reliability, you can trust Cain &amp; Co to maintain accurate records, support better decisions and remove the stress from your bookkeeping.</p>
        <a href="{{ route('contacts') }}" class="btn btn-gold mt-3">Book Free Consultation</a>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-2">
        <div class="row g-3">
          @foreach ([
            ['Day-to-Day Bookkeeping', 'Sales invoices, supplier invoices, receipts, payments, ledger records and reconciliations.'],
            ['Management Accounts', 'Profit and loss, balance sheet, trial balance, aged debtors and aged creditors.'],
            ['VAT & Reviews', 'VAT returns, prepayments, accruals, depreciation, fixed assets and regular financial reviews.'],
          ] as [$title, $copy])
            <div class="col-12">
              <div class="feature-card">
                <div class="feature-icon"><i class="bi bi-journal-check"></i></div>
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

<section class="cta-banner">
  <div class="container text-center position-relative fade-up">
    <div class="label-pill light">Start Today</div>
    <h2 class="section-title light">Ready for Clear, Correct Records?</h2>
    <div class="divider-gold mx-auto"></div>
    <p class="section-subtitle light mx-auto text-center">Let Cain &amp; Co handle your bookkeeping so you can focus on running and growing your business.</p>
    <div class="d-flex justify-content-center flex-wrap gap-3 mt-4">
      <a href="{{ route('contacts') }}" class="btn btn-gold">Try Us for 3 Months</a>
      <a href="{{ route('testimonials') }}" class="btn btn-outline-gold">See Testimonials</a>
    </div>
  </div>
</section>

@endsection
