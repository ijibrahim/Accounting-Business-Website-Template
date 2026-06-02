@extends('admin.layouts.app')

@section('title', 'Site Settings')
@section('eyebrow', 'Configuration')

@section('content')

    <div class="admin-card p-4">
        <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-4">

                {{-- Basic Information --}}
                <div class="col-12">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">
                        <i class="bi bi-gear"></i>
                        Basic Information
                    </h5>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Site Name</label>
                    <input type="text" name="site_name" value="{{ old('site_name', $setting->site_name ?? '') }}"
                        class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{ old('phone', $setting->phone ?? '') }}"
                        class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Secondary Phone</label>
                    <input type="text" name="secondary_phone"
                        value="{{ old('secondary_phone', $setting->secondary_phone ?? '') }}" class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ old('email', $setting->email ?? '') }}"
                        class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Secondary Email</label>
                    <input type="email" name="secondary_email"
                        value="{{ old('secondary_email', $setting->secondary_email ?? '') }}" class="form-control">
                </div>

                <div class="col-12">
                    <label class="form-label">Address</label>
                    <textarea name="address" rows="3" class="form-control">{{ old('address', $setting->address ?? '') }}</textarea>
                </div>

                {{-- Logo & Images --}}
                <div class="col-12 mt-4">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">
                        <i class="bi bi-image"></i>
                        Branding
                    </h5>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Logo</label>
                    <input type="file" name="logo" class="form-control">

                    @if (!empty($setting->logo))
                        <img src="{{ asset($setting->logo) }}" class="img-thumbnail mt-2" width="120">
                    @endif
                </div>

                <div class="col-md-4">
                    <label class="form-label">Favicon</label>
                    <input type="file" name="favicon" class="form-control">

                    @if (!empty($setting->favicon))
                        <img src="{{ asset($setting->favicon) }}" class="img-thumbnail mt-2" width="70">
                    @endif
                </div>

                <div class="col-md-4">
                    <label class="form-label">OG Image</label>
                    <input type="file" name="og_image" class="form-control">

                    @if (!empty($setting->og_image))
                        <img src="{{ asset($setting->og_image) }}" class="img-thumbnail mt-2" width="120">
                    @endif
                </div>

                {{-- Social Links --}}
                <div class="col-12 mt-4">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">
                        <i class="bi bi-share"></i>
                        Social Links
                    </h5>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Facebook URL</label>
                    <input type="url" name="facebook_url"
                        value="{{ old('facebook_url', $setting->facebook_url ?? '') }}" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">LinkedIn URL</label>
                    <input type="url" name="linkedin_url"
                        value="{{ old('linkedin_url', $setting->linkedin_url ?? '') }}" class="form-control">
                </div>

                <div class="col-md-4">
                    <label class="form-label">Instagram URL</label>
                    <input type="url" name="instagram_url"
                        value="{{ old('instagram_url', $setting->instagram_url ?? '') }}" class="form-control">
                </div>

                {{-- SEO Settings --}}
                <div class="col-12 mt-4">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">
                        <i class="bi bi-search"></i>
                        SEO Settings
                    </h5>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ old('meta_title', $setting->meta_title ?? '') }}"
                        class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Viewport</label>
                    <input type="text" name="viewport"
                        value="{{ old('viewport', $setting->viewport ?? 'width=device-width, initial-scale=1.0') }}"
                        class="form-control">
                </div>

                <div class="col-12">
                    <label class="form-label">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="2" class="form-control">{{ old('meta_keywords', $setting->meta_keywords ?? '') }}</textarea>
                </div>

                <div class="col-12">
                    <label class="form-label">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{ old('meta_description', $setting->meta_description ?? '') }}</textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label">OG Title</label>
                    <input type="text" name="og_title" value="{{ old('og_title', $setting->og_title ?? '') }}"
                        class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Canonical URL</label>
                    <input type="url" name="canonical_url"
                        value="{{ old('canonical_url', $setting->canonical_url ?? '') }}" class="form-control">
                </div>

                <div class="col-12">
                    <label class="form-label">OG Description</label>
                    <textarea name="og_description" rows="3" class="form-control">{{ old('og_description', $setting->og_description ?? '') }}</textarea>
                </div>

                {{-- Analytics --}}
                <div class="col-12 mt-4">
                    <h5 class="fw-bold border-bottom pb-2 mb-3">
                        <i class="bi bi-bar-chart"></i>
                        Analytics
                    </h5>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Google Analytics ID</label>
                    <input type="text" name="google_analytics_id"
                        value="{{ old('google_analytics_id', $setting->google_analytics_id ?? '') }}"
                        class="form-control">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Google Tag Manager ID</label>
                    <input type="text" name="google_tag_manager_id"
                        value="{{ old('google_tag_manager_id', $setting->google_tag_manager_id ?? '') }}"
                        class="form-control">
                </div>

                {{-- Submit --}}
                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-check-circle"></i>
                        Save Settings
                    </button>
                </div>

            </div>
        </form>
    </div>

@endsection
