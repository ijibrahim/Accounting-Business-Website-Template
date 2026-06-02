@extends('admin.layouts.app')

@section('title', 'Create Blog Post')

@section('content')

    <div class="container-fluid">

        <form action="{{ route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">

                {{-- LEFT SIDE --}}
                <div class="col-lg-8">

                    {{-- BASIC INFO --}}
                    <div class="admin-card p-4 mb-4">

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Blog Title
                            </label>

                            <input type="text" name="title" value="{{ old('title') }}"
                                class="form-control form-control-lg" placeholder="Enter blog title">

                            @error('title')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Blog Category
                            </label>

                            <select name="blog_category_id" class="form-select">

                                <option value="">
                                    Select Category
                                </option>

                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach

                            </select>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Short Excerpt
                            </label>

                            <textarea name="excerpt" rows="4" class="form-control" placeholder="Short blog summary...">{{ old('excerpt') }}</textarea>

                        </div>

                        <div>

                            <label class="form-label fw-semibold">
                                Blog Content
                            </label>

                            <textarea name="contents" rows="14" class="form-control editor" placeholder="Write full blog content...">{{ old('content') }}</textarea>

                        </div>

                    </div>

                    {{-- SEO --}}
                    <div class="admin-card p-4 mb-4">

                        <h5 class="mb-4 fw-bold">
                            SEO Information
                        </h5>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Meta Title
                            </label>

                            <input type="text" name="meta_title" value="{{ old('meta_title') }}" class="form-control">

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Meta Keywords
                            </label>

                            <textarea name="meta_keywords" rows="3" class="form-control"></textarea>

                        </div>

                        <div>

                            <label class="form-label fw-semibold">
                                Meta Description
                            </label>

                            <textarea name="meta_description" rows="4" class="form-control"></textarea>

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
                                    <option value="{{ $status->value }}">
                                        {{ $status->label() }}
                                    </option>
                                @endforeach

                            </select>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Published At
                            </label>

                            <input type="datetime-local" name="published_at" class="form-control">

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Author Name
                            </label>

                            <input type="text" name="author_name" class="form-control"
                                value="{{ old('author_name', auth()->user()->name ?? '') }}">

                        </div>

                        <button class="btn btn-primary w-100 py-2">
                            <i class="bi bi-check-circle"></i>
                            Publish Blog
                        </button>

                    </div>

                    {{-- FEATURED IMAGE --}}
                    <div class="admin-card p-4 mb-4">

                        <h5 class="mb-4 fw-bold">
                            Featured Image
                        </h5>

                        <input type="file" name="featured_image" class="form-control">

                    </div>

                    {{-- OG IMAGE --}}
                    <div class="admin-card p-4">

                        <h5 class="mb-4 fw-bold">
                            Open Graph Image
                        </h5>

                        <input type="file" name="og_image" class="form-control">

                    </div>

                </div>

            </div>

        </form>

    </div>

@endsection
