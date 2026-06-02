@extends('layouts.app')
@section('content')

<section class="page-hero">
  <div class="container text-center fade-up">
    <div class="label-pill light">Client Coverage</div>
    <h1 class="section-title light">Trusted by Businesses Across London and the South East</h1>
    <div class="divider-gold mx-auto"></div>
    <p class="section-subtitle light mx-auto text-center">We support restaurants, hospitality firms, construction businesses, accountants, consultants and retailers with reliable bookkeeping.</p>
  </div>
</section>

<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="row g-4">
      @foreach ([
        ['Restaurants', 'Busy hospitality businesses need payroll, VAT and clean weekly records.'],
        ['Hospitality', 'Clear numbers help operators plan staffing, stock and cash flow.'],
        ['Construction', 'Support with CIS, payroll and transaction-heavy bookkeeping.'],
        ['Accountants', 'Reliable bookkeeping support for practices and their clients.'],
        ['Consultants', 'Fixed-fee records and reporting for service-led businesses.'],
        ['Retail', 'Sales, supplier invoices and reconciliations kept current.'],
      ] as [$title, $copy])
        <div class="col-md-6 col-lg-4 fade-up">
          <div class="industry-svc-card">
            <i class="isc-icon bi bi-briefcase-fill"></i>
            <h5>{{ $title }}</h5>
            <p>{{ $copy }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

<section class="section-pad">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-6 fade-up">
        <div class="label-pill">Consultants</div>
        <h2 class="section-title">Financial Clarity for Advisory Businesses</h2>
        <div class="divider-gold"></div>
        <p class="section-subtitle">Consultants need accurate records, clear reports and predictable support without losing billable time to admin.</p>
      </div>
      <div class="col-lg-6 fade-up fade-up-delay-2">
        <div class="row g-3">
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Management reports</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Bank reconciliation</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> VAT return support</div></div>
          <div class="col-sm-6"><div class="mini-check"><i class="bi bi-check-circle-fill"></i> Fixed monthly fees</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
