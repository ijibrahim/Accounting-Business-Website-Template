@extends('admin.layouts.app')

@section('title', 'About')
@section('eyebrow', 'Management')

@section('content')
    <section class="admin-card">
        <div class="d-flex align-items-center justify-content-between gap-3 border-bottom p-3">
            <div>
                <h2 class="h5 mb-1">About Table</h2>
                <p class="mb-0 text-secondary">View registered dashboard users.</p>
            </div>
            <span class="badge text-bg-light">{{ $about->total() }} total</span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-admin">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Mission Title</th>
                        <th>Vision Title</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($about as $ab)
                        <tr>
                            <td>
                                {{ $ab->about_title }}
                            </td>
                            <td>{{ $ab->mission_title }}</td>
                            <td>
                                {{ $ab->vision_title }}
                            </td>
                            <td>{{ $ab->created_at?->format('d M Y, h:i A') }}</td>
                            <td>{{ $ab->updated_at?->diffForHumans() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 text-center text-secondary">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($about->hasPages())
            <div class="border-top px-3 py-2">
                {{ $about->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </section>
@endsection
