@extends('layouts.app')
@section('content')
    <section class="page-hero">
        <div class="container text-center fade-up">
            <div class="label-pill light">Insights &amp; Guides</div>
            <h1 class="section-title light">From the {{ $setting->site_name }} Blog</h1>
            <div class="divider-gold mx-auto"></div>
            <p class="section-subtitle light mx-auto text-center">Practical bookkeeping, payroll and business finance
                guidance for owners who want clearer numbers.</p>
        </div>
    </section>
    @php
        $blogs = App\Models\BlogPost::query()->active()->get();
    @endphp
    <section class="section-pad bg-offwhite">
        <div class="container">
            <div class="row g-4">
                @foreach ($blogs as $blog)
                    <div class="col-md-6 col-lg-4 fade-up">
                        <div class="blog-card">
                            <div class="blog-card-media"><i class="bi bi-journal-text"></i></div>
                            <div class="blog-card-body">
                                <div class="blog-meta"><span>{{ $blog->category?->name }}</span>
                                    {{-- <span>{{ $blog->tag }}</span> --}}
                                </div>
                                <h5>{{ $blog->title }}</h5>
                                <p>{{ $blog->excerpt ?? ($blog->summary ?? $blog->description) }}</p>
                                <a href="{{ route('blogs.show', $blog->slug) }}">Read Article <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
