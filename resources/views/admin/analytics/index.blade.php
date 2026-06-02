@extends('admin.layouts.app')

@section('title', 'Analytics')
@section('eyebrow', 'Traffic Overview')

@section('content')

    <section class="metric-grid">

        <article class="admin-card metric-card">
            <i class="bi bi-graph-up-arrow"></i>
            <div class="metric-label">Total Visits</div>
            <div class="metric-value">{{ number_format($totalVisits) }}</div>
        </article>

        <article class="admin-card metric-card">
            <i class="bi bi-calendar-day"></i>
            <div class="metric-label">Today Visits</div>
            <div class="metric-value">{{ number_format($todayVisits) }}</div>
        </article>

        <article class="admin-card metric-card">
            <i class="bi bi-people"></i>
            <div class="metric-label">Unique Visitors</div>
            <div class="metric-value">{{ number_format($uniqueVisitors) }}</div>
        </article>

        <article class="admin-card metric-card">
            <i class="bi bi-calendar3"></i>
            <div class="metric-label">Last 30 Days</div>
            <div class="metric-value">{{ number_format($monthVisits) }}</div>
        </article>

        <article class="admin-card metric-card">
            <i class="bi bi-journal-text"></i>
            <div class="metric-label">Blog Visits</div>
            <div class="metric-value">{{ number_format($totalBlogVisits) }}</div>
        </article>

    </section>

    <div class="row g-4">

        <div class="col-12">

            <section class="admin-card">

                <div class="border-bottom p-3">
                    <h2 class="h5 mb-0">Top Blog Posts</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-admin mb-0">
                        <thead>
                            <tr>
                                <th>Post</th>
                                <th class="text-end">Visitors</th>
                                <th class="text-end">Open</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topBlogPosts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td class="text-end">{{ number_format($post->page_views_count) }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('blogs.show', $post->slug) }}" class="btn btn-outline-secondary btn-sm">
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-4">
                                        No blog visitor data found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </section>

        </div>

        <div class="col-lg-6">

            <section class="admin-card h-100">

                <div class="border-bottom p-3">
                    <h2 class="h5 mb-0">Top Pages</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-admin mb-0">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th class="text-end">Visits</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topPages as $page)
                                <tr>
                                    <td>{{ $page->path }}</td>
                                    <td class="text-end">{{ number_format($page->visits) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center py-4">
                                        No data found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </section>

        </div>

        <div class="col-lg-6">

            <section class="admin-card h-100">

                <div class="border-bottom p-3">
                    <h2 class="h5 mb-0">Top Referrers</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-admin mb-0">
                        <thead>
                            <tr>
                                <th>Referrer</th>
                                <th class="text-end">Visits</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topReferrers as $referrer)
                                <tr>
                                    <td class="text-break">
                                        {{ $referrer->referrer }}
                                    </td>
                                    <td class="text-end">
                                        {{ number_format($referrer->visits) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center py-4">
                                        No data found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </section>

        </div>

        <div class="col-lg-6">

            <section class="admin-card h-100">

                <div class="border-bottom p-3">
                    <h2 class="h5 mb-0">Browsers</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-admin mb-0">
                        <thead>
                            <tr>
                                <th>Browser</th>
                                <th class="text-end">Visits</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topBrowsers as $browser)
                                <tr>
                                    <td>{{ $browser->browser }}</td>
                                    <td class="text-end">
                                        {{ number_format($browser->visits) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center py-4">
                                        No data found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </section>

        </div>

        <div class="col-lg-6">

            <section class="admin-card h-100">

                <div class="border-bottom p-3">
                    <h2 class="h5 mb-0">Devices</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-admin mb-0">
                        <thead>
                            <tr>
                                <th>Device</th>
                                <th class="text-end">Visits</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($topDevices as $device)
                                <tr>
                                    <td>{{ $device->device }}</td>
                                    <td class="text-end">
                                        {{ number_format($device->visits) }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-center py-4">
                                        No data found.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </section>

        </div>

    </div>

@endsection
