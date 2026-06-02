@extends('admin.layouts.app')

@section('title', 'Dashboard')
@section('eyebrow', 'Overview')

@section('content')
    <section class="metric-grid" aria-label="User metrics">
        <article class="admin-card metric-card">
            <i class="bi bi-people"></i>
            <div class="metric-label">Total Users</div>
            <div class="metric-value">{{ number_format($totalUsers) }}</div>
        </article>
        <article class="admin-card metric-card">
            <i class="bi bi-person-check"></i>
            <div class="metric-label">Verified Users</div>
            <div class="metric-value">{{ number_format($verifiedUsers) }}</div>
        </article>
        <article class="admin-card metric-card">
            <i class="bi bi-calendar2-plus"></i>
            <div class="metric-label">New This Month</div>
            <div class="metric-value">{{ number_format($newUsersThisMonth) }}</div>
        </article>
    </section>

    <section class="admin-card">
        <div class="d-flex align-items-center justify-content-between gap-3 border-bottom p-3">
            <div>
                <h2 class="h5 mb-1">Latest Users</h2>
                <p class="mb-0 text-secondary">Recently created admin accounts.</p>
            </div>
            <a href="{{ route('admin.users.index') }}" class="btn btn-success btn-sm">
                <i class="bi bi-arrow-right"></i>
                View Users
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-admin">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Created</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($latestUsers as $user)
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
                            <td>{{ $user->created_at?->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-4 text-center text-secondary">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
