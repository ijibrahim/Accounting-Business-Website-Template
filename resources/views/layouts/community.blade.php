@extends('layouts.app')
@section('content')

<section class="page-hero">
  <div class="container">
    <div class="row align-items-center gy-5">
      <div class="col-lg-7 fade-up">
        <div class="label-pill light">Supporting the Community</div>
        <h1 class="section-title light">Giving Back Through Personal Challenges</h1>
        <div class="divider-gold"></div>
        <p class="section-subtitle light">Paul regularly takes on walking challenges to raise money for children’s hospital wards, diabetes charities and causes that matter to the local community.</p>
        <a href="{{ route('contacts') }}" class="btn btn-gold mt-3">Help Support Paul</a>
      </div>
      <div class="col-lg-5 fade-up fade-up-delay-2">
        <div class="hero-card">
          <div class="row g-3">
            <div class="col-6"><div class="hero-stat"><span class="hero-stat-num">Charity</span><span class="hero-stat-label">Fundraising</span></div></div>
            <div class="col-6"><div class="hero-stat"><span class="hero-stat-num">Walks</span><span class="hero-stat-label">Personal Challenges</span></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-pad bg-offwhite">
  <div class="container">
    <div class="row g-4">
      @foreach ([
        ['Children’s Wards', 'Supporting hospital wards that help children and families through difficult moments.'],
        ['Diabetes Charities', 'Raising awareness and funds for causes connected to diabetes care and support.'],
        ['Wellbeing & Purpose', 'Using personal challenges as a way to stay healthy while helping others.'],
      ] as [$title, $copy])
        <div class="col-md-4 fade-up">
          <div class="feature-card">
            <div class="feature-icon"><i class="bi bi-heart-fill"></i></div>
            <h5>{{ $title }}</h5>
            <p>{{ $copy }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
