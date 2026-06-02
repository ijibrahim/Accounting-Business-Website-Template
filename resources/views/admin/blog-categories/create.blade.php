@extends('admin.layouts.app')

@section('title', 'Create Blog Category')

@section('content')

    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow border-0">

                    <div class="card-header bg-white">
                        <h4 class="mb-0">
                            Create Blog Category
                        </h4>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin.blog-categories.store') }}" method="POST">

                            @csrf

                            <div class="mb-3">
                                <label class="form-label">
                                    Category Name
                                </label>

                                <input type="text" name="name" class="form-control" placeholder="Enter category name">

                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Description
                                </label>

                                <textarea name="description" rows="4" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">

                                <label class="form-label">
                                    Status
                                </label>

                                <select name="status" class="form-select">

                                    <option value="1">
                                        Active
                                    </option>

                                    <option value="0">
                                        Inactive
                                    </option>

                                </select>

                            </div>

                            <button class="btn btn-primary">
                                Save Category
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
