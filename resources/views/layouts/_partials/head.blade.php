<meta charset="UTF-8" />
<meta name="viewport" content="{{ $setting->viewport }}" />
<meta name="description" content="{{ $setting->meta_description }}" />
<meta name="keywords" content="{{ $setting->meta_keywords }}" />
<title>{{ $setting->meta_title }}</title>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&display=swap"
    rel="stylesheet" />

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

@if (!empty($setting->google_analytics_id))
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ $setting->google_analytics_id }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', '{{ $setting->google_analytics_id }}');
    </script>
@endif
