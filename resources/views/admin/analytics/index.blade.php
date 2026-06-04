@extends('admin.layouts.app')

@section('title', 'Analytics')
@section('eyebrow', 'Traffic Overview')

@section('content')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
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

        <div class="col-lg-6">

            <section class="admin-card h-100">

                <div class="border-bottom p-3">
                    <h2 class="h5 mb-0">Top Countries</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-admin mb-0">
                        <thead>
                            <tr>
                                <th>Country</th>
                                <th class="text-end">Visits</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($topCountries as $country)
                                <tr>
                                    <td>{{ $country->country ?? 'Unknown' }}</td>
                                    <td class="text-end">
                                        {{ number_format($country->visits) }}
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
                    <h2 class="h5 mb-0">Top Cities</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-admin mb-0">
                        <thead>
                            <tr>
                                <th>City</th>
                                <th class="text-end">Visits</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse($topCities as $city)
                                <tr>
                                    <td>{{ $city->city ?? 'Unknown' }}</td>
                                    <td class="text-end">
                                        {{ number_format($city->visits) }}
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

        <div class="col-12">

            <section class="admin-card">

                <div class="border-bottom p-3">
                    <h2 class="h5 mb-0">Recent Visitors</h2>
                </div>

                <div class="table-responsive">
                    <table class="table table-admin mb-0">

                        <thead>
                            <tr>
                                <th>Country</th>
                                <th>City</th>
                                <th>IP</th>
                                <th>Browser</th>
                                <th>Device</th>
                                <th>Visited UK Time</th>
                                <th>Visited BD Time</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($recentVisitors as $visit)
                                <tr>

                                    <td>{{ $visit->country }}</td>

                                    <td>{{ $visit->city }}</td>

                                    <td>
                                        <code>{{ $visit->ip }}</code>
                                    </td>

                                    <td>{{ $visit->browser }}</td>

                                    <td>{{ $visit->device }}</td>

                                    <td>
                                        {{ $visit->created_at->timezone('Europe/London')->diffForHumans() }}
                                    </td>
                                    <td>
                                        {{ $visit->created_at->timezone('Asia/Dhaka')->format('d M Y h:i A') }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        No visitors found.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>
                </div>

            </section>

        </div>

        <div class="col-12">

            <section class="admin-card">

                <div class="border-bottom p-3">
                    <h2 class="h5 mb-0">Visitor Map</h2>
                </div>

                <div id="visitor-map" style="height:600px;width:100%;">
                </div>

            </section>

        </div>


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
                                        <a href="{{ route('blogs.show', $post->slug) }}"
                                            class="btn btn-outline-secondary btn-sm">
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

@push('scripts')
    <script>
        const visitors = @json($mapVisitors);

        const map = L.map('visitor-map').setView([20, 0], 2);

        L.tileLayer(
            'https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18
            }
        ).addTo(map);

        visitors.forEach(visitor => {

            L.circleMarker(
                    [
                        visitor.latitude,
                        visitor.longitude
                    ], {
                        radius: Math.min(
                            25,
                            5 + visitor.visitors
                        )
                    }
                )
                .addTo(map)
                .bindPopup(`
        <strong>
            ${visitor.city}
        </strong><br>

        ${visitor.country}<br>

        Visitors:
        ${visitor.visitors}
    `);

        });
    </script>
@endpush
