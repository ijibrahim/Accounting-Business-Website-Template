@extends('admin.layouts.app')

@section('title', 'Blog Posts')

@section('content')

    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">

            <div>
                <h1 class="h3 mb-0 text-gray-800">
                    Blog Posts
                </h1>

                <p class="mb-0 text-muted">
                    Manage all blog posts
                </p>
            </div>

            <a href="{{ route('admin.blog-posts.create') }}" class="btn btn-primary">

                <i class="fas fa-plus"></i>
                Add Blog

            </a>

        </div>

        <div class="card shadow border-0">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead class="table-light">

                            <tr>
                                <th>#</th>
                                <th>Thumbnail</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Visitors</th>
                                <th>Status</th>
                                <th width="150">Action</th>
                            </tr>

                        </thead>

                        <tbody>

                            @forelse($posts as $key => $post)
                                <tr>

                                    <td>
                                        {{ $posts->firstItem() + $key }}
                                    </td>

                                    <td>

                                        <img src="{{ asset('storage/' . $post->thumbnail) }}" width="70"
                                            class="rounded">

                                    </td>

                                    <td>
                                        {{ Str::limit($post->title, 40) }}
                                    </td>

                                    <td>
                                        {{ $post->category->name ?? '-' }}
                                    </td>

                                    <td>
                                        {{ number_format($post->page_views_count) }}
                                    </td>

                                    <td>
                                        {!! $post->status->badgeHtml() !!}
                                    </td>

                                    <td>

                                        <a href="{{ route('blogs.show', $post->slug) }}" class="btn btn-warning btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>

                                        <a href="{{ route('admin.blog-posts.edit', $post->id) }}"
                                            class="btn btn-warning btn-sm">
                                            <i class="bi bi-pen"></i>
                                        </a>

                                        <form action="{{ route('admin.blog-posts.destroy', $post->id) }}" method="POST"
                                            class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Delete this post?')">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="7" class="text-center text-muted">
                                        No Blog Posts Found
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

                <div class="mt-3">
                    {{ $posts->links() }}
                </div>

            </div>

        </div>

    </div>

@endsection
