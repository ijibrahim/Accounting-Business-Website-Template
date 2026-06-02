@extends('frontend.layouts.app')

@section('title', $blog->meta_title ?? $blog->title)

@section('meta_description', $blog->meta_description)

@section('content')

    {{-- HERO --}}
    <section class="py-5 bg-light border-bottom">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-9 text-center">

                    @if ($blog->category)
                        <span class="badge bg-primary px-3 py-2 mb-3">

                            {{ $blog->category->name }}

                        </span>
                    @endif

                    <h1 class="display-5 fw-bold mb-3">

                        {{ $blog->title }}

                    </h1>

                    <div class="d-flex justify-content-center flex-wrap gap-3 text-muted">

                        <span>
                            <i class="bi bi-person"></i>
                            {{ $blog->author_name ?? 'Admin' }}
                        </span>

                        <span>
                            <i class="bi bi-calendar"></i>
                            {{ optional($blog->published_at)->format('d M, Y') }}
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- BLOG CONTENT --}}
    <section class="py-5">

        <div class="container">

            <div class="row">

                {{-- MAIN CONTENT --}}
                <div class="col-lg-8">

                    {{-- FEATURED IMAGE --}}
                    @if ($blog->featured_image)
                        <div class="mb-4">

                            <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                                class="img-fluid rounded-4 shadow-sm w-100">

                        </div>
                    @endif

                    {{-- EXCERPT --}}
                    @if ($blog->excerpt)
                        <div class="p-4 bg-light rounded-4 mb-4">

                            <p class="mb-0 fs-5 text-muted">

                                {{ $blog->excerpt }}

                            </p>

                        </div>
                    @endif

                    {{-- CONTENT --}}
                    <div class="blog-content">

                        {!! $blog->content !!}

                    </div>

                    {{-- SHARE --}}
                    <div class="border-top mt-5 pt-4">

                        <h5 class="fw-bold mb-3">
                            Share This Article
                        </h5>

                        <div class="d-flex gap-2 flex-wrap">

                            <a href="#" class="btn btn-primary btn-sm">

                                <i class="bi bi-facebook"></i>
                                Facebook

                            </a>

                            <a href="#" class="btn btn-info btn-sm text-white">

                                <i class="bi bi-twitter-x"></i>
                                Twitter

                            </a>

                            <a href="#" class="btn btn-success btn-sm">

                                <i class="bi bi-whatsapp"></i>
                                WhatsApp

                            </a>

                        </div>

                    </div>

                </div>

                {{-- SIDEBAR --}}
                <div class="col-lg-4">

                    {{-- AUTHOR --}}
                    <div class="card border-0 shadow-sm rounded-4 mb-4">

                        <div class="card-body p-4">

                            <h5 class="fw-bold mb-3">

                                About Author

                            </h5>

                            <div class="d-flex align-items-center gap-3">

                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center"
                                    style="width:60px;height:60px;">

                                    <i class="bi bi-person fs-4"></i>

                                </div>

                                <div>

                                    <h6 class="mb-1">

                                        {{ $blog->author_name ?? 'Admin' }}

                                    </h6>

                                    <small class="text-muted">

                                        Content Writer

                                    </small>

                                </div>

                            </div>

                        </div>

                    </div>

                    {{-- RELATED POSTS --}}
                    <div class="card border-0 shadow-sm rounded-4">

                        <div class="card-body p-4">

                            <h5 class="fw-bold mb-4">

                                Related Posts

                            </h5>

                            @forelse($relatedPosts as $related)
                                <div class="d-flex gap-3 mb-4">

                                    @if ($related->featured_image)
                                        <img src="{{ asset('storage/' . $related->featured_image) }}" width="90"
                                            height="70" class="rounded object-fit-cover">
                                    @endif

                                    <div>

                                        <h6 class="mb-1">

                                            <a href="{{ route('blogs.show', $related->slug) }}"
                                                class="text-dark text-decoration-none">

                                                {{ Str::limit($related->title, 50) }}

                                            </a>

                                        </h6>

                                        <small class="text-muted">

                                            {{ optional($related->published_at)->format('d M, Y') }}

                                        </small>

                                    </div>

                                </div>

                            @empty

                                <p class="text-muted mb-0">
                                    No Related Posts Found
                                </p>
                            @endforelse

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection
