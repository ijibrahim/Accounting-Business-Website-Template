@extends('admin.layouts.app')

@section('title', 'Users')
@section('eyebrow', 'Management')

@section('content')
    <section class="admin-card">
        <div class="d-flex align-items-center justify-content-between gap-3 border-bottom p-3">
            <div>
                <h2 class="h5 mb-1">Users Table</h2>
                <p class="mb-0 text-secondary">View registered dashboard users.</p>
            </div>
            <span class="badge text-bg-light">{{ $users->total() }} total</span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-admin">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="user-avatar">{{ str($user->name)->substr(0, 1)->upper() }}</span>
                                    <strong>{{ $user->name }}</strong>
                                </div>
                            </td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->email_verified_at)
                                    <span class="status-pill verified">Verified</span>
                                @else
                                    <span class="status-pill pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $user->created_at?->format('d M Y, h:i A') }}</td>
                            <td>{{ $user->updated_at?->diffForHumans() }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 text-center text-secondary">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($users->hasPages())
            <div class="border-top px-3 py-2">
                {{ $users->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </section>
@endsection
