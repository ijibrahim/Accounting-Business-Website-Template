@extends('admin.layouts.app')

@section('title', 'About')
@section('eyebrow', 'Management')

@section('content')
    <section class="admin-card">
        <div class="d-flex align-items-center justify-content-between gap-3 border-bottom p-3">
            <div>
                <h2 class="h5 mb-1">Faq Table</h2>
                <p class="mb-0 text-secondary">View registered dashboard Faq.</p>
            </div>
            <span class="badge text-bg-light">{{ $faqs->total() }} total</span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-admin">
                <thead>
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Page</th>
                        <th>Sort Order</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($faqs as $faq)
                        <tr>
                            <td>
                                {{ $faq->question }}
                            </td>
                            <td>{{ $faq->answer }}</td>
                            <td>
                                {{ $faq->page }}
                            </td>
                            <td>{{ $faq->sort_order }}</td>
                            <td>{{ $faq->is_active }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-4 text-center text-secondary">No Faqs found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($faqs->hasPages())
            <div class="border-top px-3 py-2">
                {{ $faqs->links('pagination::bootstrap-5') }}
            </div>
        @endif
    </section>
@endsection
