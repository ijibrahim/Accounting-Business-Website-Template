@extends('layouts.app')

@section('title', $blog->meta_title ?? $blog->title)

@section('meta_description', $blog->meta_description)

@section('content')

    {{-- HERO --}}
    <section class="page-hero">

        <div class="container">

            {{-- BREADCRUMB --}}
            <nav aria-label="breadcrumb" class="mb-4">

                <ol class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="{{ route('blogs') }}">
                            Blog
                        </a>
                    </li>

                    @if ($blog->category)
                        <li class="breadcrumb-item">
                            {{ $blog->category?->name }}
                        </li>
                    @endif

                    <li class="breadcrumb-item active">

                        {{ Str::limit($blog->title, 40) }}

                    </li>

                </ol>

            </nav>

            <div class="row justify-content-center">

                <div class="col-lg-9 text-center fade-up">

                    {{-- CATEGORY --}}
                    @if ($blog->category)
                        <div class="label-pill light">

                            {{ $blog->category->name }}

                        </div>
                    @endif

                    {{-- TITLE --}}
                    <h1 class="section-title light">

                        {{ $blog->title }}

                    </h1>

                    <div class="divider-gold mx-auto"></div>

                    {{-- EXCERPT --}}
                    @if ($blog->excerpt)
                        <p class="section-subtitle light mx-auto text-center">

                            {{ $blog->excerpt }}

                        </p>
                    @endif

                    {{-- META --}}
                    <div class="d-flex justify-content-center gap-4 flex-wrap text-light mt-4">

                        <span>

                            <i class="bi bi-person"></i>

                            {{ $blog->author_name ?? $setting->site_name }}

                        </span>

                        <span>

                            <i class="bi bi-calendar"></i>

                            {{ optional($blog->published_at)->format('d M Y') }}

                        </span>

                        <span>

                            <i class="bi bi-eye"></i>

                            {{ number_format($visitorCount) }} visitors

                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- BLOG CONTENT --}}
    <section class="section-pad bg-offwhite">

        <div class="container">

            <div class="row justify-content-center">

                <article class="col-lg-8 blog-article fade-up">

                    {{-- FEATURED IMAGE --}}
                    @if ($blog->featured_image)
                        <div class="mb-5">

                            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                                class="img-fluid rounded-4 shadow-sm w-100">

                        </div>
                    @endif

                    {{-- CONTENT --}}
                    <div class="blog-content">

                        {!! $blog->content !!}

                    </div>

                    {{-- CTA --}}
                    <div class="article-cta">

                        <h3>

                            Need Professional Bookkeeping Support?

                        </h3>

                        <p>

                            Speak with {{ $setting->site_name }} and discover
                            how we can simplify your bookkeeping and reporting.

                        </p>

                        <a href="{{ route('contacts') }}" class="btn btn-gold">

                            Book Free Consultation

                        </a>

                    </div>

                </article>

            </div>

        </div>

    </section>

    {{-- RELATED POSTS --}}
    @if ($relatedPosts->count())

        <section class="section-pad">

            <div class="container">

                <div class="text-center mb-5 fade-up">

                    <div class="label-pill">
                        Related Insights
                    </div>

                    <h2 class="section-title">

                        Related Articles

                    </h2>

                    <div class="divider-gold mx-auto"></div>

                </div>

                <div class="row g-4">

                    @foreach ($relatedPosts as $related)
                        <div class="col-lg-4 col-md-6 fade-up">

                            <div class="service-card h-100">

                                @if ($related->featured_image)
                                    <img src="{{ asset('storage/' . $related->featured_image) }}"
                                        alt="{{ $related->title }}" class="img-fluid rounded-4 mb-4">
                                @endif

                                <div class="label-pill mb-3">

                                    {{ $related->category->name ?? 'Blog' }}

                                </div>

                                <h4 class="mb-3">

                                    <a href="{{ route('blogs.show', $related->slug) }}"
                                        class="text-decoration-none text-dark">

                                        {{ Str::limit($related->title, 60) }}

                                    </a>

                                </h4>

                                <p class="mb-4">

                                    {{ Str::limit($related->excerpt, 120) }}

                                </p>

                                <a href="{{ route('blogs.show', $related->slug) }}" class="btn-link-custom">

                                    Read More

                                </a>

                            </div>

                        </div>
                    @endforeach

                </div>

            </div>

        </section>

    @endif

@endsection
