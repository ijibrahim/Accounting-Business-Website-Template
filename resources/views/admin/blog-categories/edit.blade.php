@extends('admin.layouts.app')

@section('title', 'Edit Blog Category')

@section('content')

    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow border-0">

                    <div class="card-header bg-white">
                        <h4 class="mb-0">
                            Edit Blog Category
                        </h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin.blog-categories.update', $blog_category->id) }}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="mb-3">

                                <label class="form-label">
                                    Category Name
                                </label>

                                <input type="text" name="name" value="{{ old('name', $blog_category->name) }}"
                                    class="form-control">

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Description
                                </label>

                                <textarea name="description" rows="4" class="form-control">{{ old('description', $blog_category->description) }}</textarea>

                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Status
                                </label>

                                <select name="status" class="form-select">

                                    <option value="1" {{ $blog_category->is_active == 1 ? 'selected' : '' }}>
                                        Active
                                    </option>

                                    <option value="0" {{ $blog_category->is_active == 0 ? 'selected' : '' }}>
                                        Inactive
                                    </option>

                                </select>

                            </div>

                            <button class="btn btn-primary">
                                Update Category
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
