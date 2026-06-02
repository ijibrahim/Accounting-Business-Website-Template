@extends('admin.layouts.app')

@section('title', 'Edit Blog Post')

@section('content')

    <div class="container-fluid">

        <form action="{{ route('admin.blog-posts.update', $blog_post->id) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">

                {{-- LEFT SIDE --}}
                <div class="col-lg-8">

                    {{-- BASIC INFO --}}
                    <div class="admin-card p-4 mb-4">

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Blog Title
                            </label>

                            <input type="text" name="title" value="{{ old('title', $blog_post->title) }}"
                                class="form-control form-control-lg">

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Blog Category
                            </label>

                            <select name="blog_category_id" class="form-select">

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $blog_post->blog_category_id == $category->id ? 'selected' : '' }}>

                                        {{ $category->name }}

                                    </option>
                                @endforeach

                            </select>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Short Excerpt
                            </label>

                            <textarea name="excerpt" rows="4" class="form-control">{{ old('excerpt', $blog_post->excerpt) }}</textarea>

                        </div>

                        <div>

                            <label class="form-label fw-semibold">
                                Blog Content
                            </label>

                            <textarea name="contents" rows="14" class="form-control editor">{{ old('contents', $blog_post->content) }}</textarea>

                        </div>

                    </div>

                    {{-- SEO --}}
                    <div class="admin-card p-4">

                        <h5 class="mb-4 fw-bold">
                            SEO Information
                        </h5>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Meta Title
                            </label>

                            <input type="text" name="meta_title" value="{{ old('meta_title', $blog_post->meta_title) }}"
                                class="form-control">

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Meta Keywords
                            </label>

                            <textarea name="meta_keywords" rows="3" class="form-control">{{ old('meta_keywords', $blog_post->meta_keywords) }}</textarea>

                        </div>

                        <div>

                            <label class="form-label fw-semibold">
                                Meta Description
                            </label>

                            <textarea name="meta_description" rows="4" class="form-control">{{ old('meta_description', $blog_post->meta_description) }}</textarea>

                        </div>

                    </div>

                </div>

                {{-- RIGHT SIDE --}}
                <div class="col-lg-4">

                    {{-- PUBLISH --}}
                    <div class="admin-card p-4 mb-4">

                        <h5 class="mb-4 fw-bold">
                            Publish
                        </h5>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Status
                            </label>

                            <select name="status" class="form-select">

                                @foreach (App\Enums\BlogPostStatus::cases() as $status)
                                    <option value="{{ $status->value }}"
                                        {{ $blog_post->status == $status->value ? 'selected' : '' }}>

                                        {{ $status->label() }}

                                    </option>
                                @endforeach

                            </select>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Published At
                            </label>

                            <input type="datetime-local" name="published_at"
                                value="{{ optional($blog_post->published_at)->format('Y-m-d\\TH:i') }}"
                                class="form-control">

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Author Name
                            </label>

                            <input type="text" name="author_name"
                                value="{{ old('author_name', $blog_post->author_name) }}" class="form-control">

                        </div>

                        <button class="btn btn-primary w-100 py-2">
                            <i class="bi bi-check-circle"></i>
                            Update Blog
                        </button>

                    </div>

                    {{-- FEATURED IMAGE --}}
                    <div class="admin-card p-4 mb-4">

                        <h5 class="mb-4 fw-bold">
                            Featured Image
                        </h5>

                        @if ($blog_post->featured_image)
                            <img src="{{ asset('storage/' . $blog_post->featured_image) }}" class="img-fluid rounded mb-3">
                        @endif

                        <input type="file" name="featured_image" class="form-control">

                    </div>

                    {{-- OG IMAGE --}}
                    <div class="admin-card p-4">

                        <h5 class="mb-4 fw-bold">
                            Open Graph Image
                        </h5>

                        @if ($blog_post->og_image)
                            <img src="{{ asset('storage/' . $blog_post->og_image) }}" class="img-fluid rounded mb-3">
                        @endif

                        <input type="file" name="og_image" class="form-control">

                    </div>

                </div>

            </div>

        </form>

    </div>

@endsection
