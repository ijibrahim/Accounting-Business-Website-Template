@extends('admin.layouts.app')

@section('title', 'Blog Categories')

@section('content')

    <div class="container-fluid">

        {{-- PAGE HEADER --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-0 text-gray-800">
                    Blog Categories
                </h1>
                <p class="mb-0 text-muted">
                    Manage all blog categories
                </p>
            </div>

            <a href="{{ route('admin.blog-categories.create') }}" class="btn btn-primary shadow-sm">
                <i class="fas fa-plus"></i>
                Add Category
            </a>
        </div>

        {{-- CARD --}}
        <div class="card shadow mb-4 border-0">

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered align-middle">

                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($categories as $key => $category)
                                <tr>
                                    <td> {{ $categories->firstItem() + $key }}</td>
                                    <td>
                                        {{ $category->name }}
                                    </td>
                                    <td>
                                        {{ $category->slug }}
                                    </td>
                                    <td>
                                        @if ($category->is_active)
                                            <span class="badge bg-success">
                                                Active
                                            </span>
                                        @else
                                            <span class="badge bg-danger">
                                                Inactive
                                            </span>
                                        @endif
                                    </td>

                                    <td>

                                        <a href="{{ route('admin.blog-categories.edit', $category->id) }}"
                                            class="btn btn-sm btn-warning">
                                            <i class="bi bi-pen"></i>
                                        </a>

                                        <form action="{{ route('admin.blog-categories.destroy', $category->id) }}"
                                            method="POST" class="d-inline">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this category?')">
                                                <i class="bi bi-trash"></i>
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="5" class="text-center text-muted">
                                        No Categories Found
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

                <div class="mt-3">
                    {{ $categories->links() }}
                </div>

            </div>

        </div>

    </div>

@endsection
