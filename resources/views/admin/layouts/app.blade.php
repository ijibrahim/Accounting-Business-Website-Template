<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') | Cain & Co</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --admin-bg: #f4f6f8;
            --admin-surface: #ffffff;
            --admin-border: #dfe5eb;
            --admin-ink: #15202b;
            --admin-muted: #667789;
            --admin-primary: #0f766e;
            --admin-primary-dark: #115e59;
        }

        body {
            min-height: 100vh;
            margin: 0;
            background: var(--admin-bg);
            color: var(--admin-ink);
            font-family: "DM Sans", sans-serif;
        }

        .admin-shell {
            display: grid;
            grid-template-columns: 260px minmax(0, 1fr);
            min-height: 100vh;
        }

        .admin-sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
            border-right: 1px solid var(--admin-border);
            background: var(--admin-surface);
            padding: 22px 18px;
        }

        .admin-brand {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--admin-ink);
            font-size: 17px;
            font-weight: 700;
            text-decoration: none;
        }

        .admin-brand-icon {
            display: grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border-radius: 8px;
            background: var(--admin-primary);
            color: #fff;
        }

        .admin-nav {
            display: grid;
            gap: 6px;
            margin-top: 28px;
        }

        .admin-nav a {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 42px;
            border-radius: 8px;
            color: var(--admin-muted);
            font-weight: 600;
            text-decoration: none;
            padding: 0 12px;
        }

        .admin-nav a.active,
        .admin-nav a:hover {
            background: #e7f5f3;
            color: var(--admin-primary-dark);
        }

        .admin-main {
            min-width: 0;
            padding: 26px;
        }

        .admin-topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 22px;
        }

        .admin-eyebrow {
            margin-bottom: 4px;
            color: var(--admin-muted);
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .admin-title {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }

        .admin-card {
            border: 1px solid var(--admin-border);
            border-radius: 8px;
            background: var(--admin-surface);
        }

        .metric-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-bottom: 18px;
        }

        .metric-card {
            padding: 18px;
        }

        .metric-card i {
            color: var(--admin-primary);
            font-size: 22px;
        }

        .metric-label {
            margin-top: 12px;
            color: var(--admin-muted);
            font-size: 13px;
            font-weight: 600;
        }

        .metric-value {
            margin-top: 4px;
            font-size: 30px;
            font-weight: 700;
        }

        .table-admin {
            margin: 0;
            vertical-align: middle;
        }

        .table-admin th {
            color: var(--admin-muted);
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .user-avatar {
            display: grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border-radius: 50%;
            background: #e7f5f3;
            color: var(--admin-primary-dark);
            font-weight: 700;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            min-height: 26px;
            border-radius: 999px;
            padding: 0 10px;
            font-size: 12px;
            font-weight: 700;
        }

        .status-pill.verified {
            background: #dcfce7;
            color: #166534;
        }

        .status-pill.pending {
            background: #fff7ed;
            color: #9a3412;
        }

        @media (max-width: 900px) {
            .admin-shell {
                grid-template-columns: 1fr;
            }

            .admin-sidebar {
                position: static;
                height: auto;
            }

            .admin-nav {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .metric-grid {
                grid-template-columns: 1fr;
            }
        }

        .admin-menu-group {
            margin-top: 6px;
        }

        .admin-dropdown-btn {
            width: 100%;
            border: 0;
            background: transparent;
            min-height: 42px;
            border-radius: 8px;
            padding: 0 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--admin-muted);
            font-weight: 600;
            transition: .2s;
        }

        .admin-dropdown-btn:hover {
            background: #e7f5f3;
            color: var(--admin-primary-dark);
        }

        .admin-submenu {
            display: none;
            padding-left: 16px;
            margin-top: 6px;
        }

        .admin-submenu a {
            display: flex;
            align-items: center;
            min-height: 38px;
            border-radius: 8px;
            padding: 0 12px;
            color: var(--admin-muted);
            text-decoration: none;
            font-size: 14px;
            transition: .2s;
        }

        .admin-submenu a:hover,
        .admin-submenu a.active {
            background: #e7f5f3;
            color: var(--admin-primary-dark);
        }
    </style>
</head>

<body>
    @php
        $setting = App\Models\SiteSetting::first();
    @endphp
    <div class="admin-shell">
        <aside class="admin-sidebar">
            <a href="{{ route('admin.dashboard') }}" class="admin-brand">
                <span class="admin-brand-icon"><i class="bi bi-calculator"></i></span>
                <span>Cain & Co Admin</span>
            </a>

            <nav class="admin-nav" aria-label="Admin navigation">

                {{-- DASHBOARD --}}
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>

                </a>

                <a href="{{ route('admin.analytics.index') }}"
                    class="{{ request()->routeIs('admin.analytics.index') ? 'active' : '' }}">

                    <i class="bi bi-graph-up-arrow"></i>
                    <span>Analytics</span>

                </a>


                {{-- USERS --}}
                <a href="{{ route('admin.users.index') }}"
                    class="{{ request()->routeIs('admin.users.*') ? 'active' : '' }}">

                    <i class="bi bi-people"></i>
                    <span>Users</span>

                </a>

                {{-- SITE CONTENT --}}
                <div class="admin-menu-group">

                    <button class="admin-dropdown-btn" type="button" onclick="toggleMenu('siteContentMenu')">

                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-grid"></i>
                            Site Content
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div id="siteContentMenu" class="admin-submenu">

                        {{-- <a href="{{ route('admin.hero-sections.index') }}"
                            class="{{ request()->routeIs('admin.hero-sections.*') ? 'active' : '' }}">

                            Hero Section

                        </a> --}}

                        <a href="{{ route('admin.about-us.index') }}"
                            class="{{ request()->routeIs('admin.about-us.*') ? 'active' : '' }}">

                            About Us

                        </a>

                        {{-- <a href="{{ route('admin.services.index') }}"
                            class="{{ request()->routeIs('admin.services.*') ? 'active' : '' }}">

                            Services

                        </a> --}}

                        {{-- <a href="{{ route('admin.coverage-areas.index') }}"
                            class="{{ request()->routeIs('admin.coverage-areas.*') ? 'active' : '' }}">

                            Coverage Areas

                        </a> --}}

                        {{-- <a href="{{ route('admin.testimonials.index') }}"
                            class="{{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">

                            Testimonials

                        </a> --}}

                        <a href="{{ route('admin.faqs.index') }}"
                            class="{{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">

                            FAQ

                        </a>

                    </div>

                </div>

                {{-- BLOG MANAGEMENT --}}
                <div class="admin-menu-group">

                    <button class="admin-dropdown-btn" type="button" onclick="toggleMenu('blogMenu')">

                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-journal-text"></i>
                            Blog Management
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div id="blogMenu" class="admin-submenu">

                        <a href="{{ route('admin.blog-categories.index') }}"
                            class="{{ request()->routeIs('admin.blog-categories.*') ? 'active' : '' }}">

                            Categories

                        </a>

                        <a href="{{ route('admin.blog-posts.index') }}"
                            class="{{ request()->routeIs('admin.blog-posts.*') ? 'active' : '' }}">

                            Blog Posts

                        </a>

                    </div>

                </div>

                {{-- CONSULTANTS --}}
                {{-- <div class="admin-menu-group">

                    <button class="admin-dropdown-btn" type="button" onclick="toggleMenu('consultantMenu')">

                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-person-workspace"></i>
                            Consultants
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div id="consultantMenu" class="admin-submenu">

                        <a href="{{ route('admin.consultants.index') }}"
                            class="{{ request()->routeIs('admin.consultants.*') ? 'active' : '' }}">

                            Consultant List

                        </a>

                        <a href="{{ route('admin.consultant-categories.index') }}"
                            class="{{ request()->routeIs('admin.consultant-categories.*') ? 'active' : '' }}">

                            Specialities

                        </a>

                    </div>

                </div> --}}

                {{-- LEADS --}}
                <div class="admin-menu-group">

                    <button class="admin-dropdown-btn" type="button" onclick="toggleMenu('leadMenu')">

                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-envelope-paper"></i>
                            Leads & Contacts
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div id="leadMenu" class="admin-submenu">

                        {{-- <a href="{{ route('admin.contact-submissions.index') }}"
                            class="{{ request()->routeIs('admin.contact-submissions.*') ? 'active' : '' }}">

                            Contact Messages

                        </a> --}}

                        {{-- <a href="{{ route('admin.newsletters.index') }}"
                            class="{{ request()->routeIs('admin.newsletters.*') ? 'active' : '' }}">

                            Newsletter Subscribers

                        </a> --}}

                    </div>

                </div>

                {{-- LEGAL --}}
                <div class="admin-menu-group">

                    <button class="admin-dropdown-btn" type="button" onclick="toggleMenu('legalMenu')">

                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-file-earmark-text"></i>
                            Legal Pages
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div id="legalMenu" class="admin-submenu">

                        {{-- <a href="{{ route('admin.privacy-policies.index') }}"
                            class="{{ request()->routeIs('admin.privacy-policies.*') ? 'active' : '' }}">

                            Privacy Policy

                        </a>

                        <a href="{{ route('admin.terms-conditions.index') }}"
                            class="{{ request()->routeIs('admin.terms-conditions.*') ? 'active' : '' }}">

                            Terms & Conditions

                        </a> --}}

                    </div>

                </div>

                {{-- SETTINGS --}}
                <div class="admin-menu-group">

                    <button class="admin-dropdown-btn" type="button" onclick="toggleMenu('settingsMenu')">

                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-gear"></i>
                            Settings
                        </span>

                        <i class="bi bi-chevron-down"></i>

                    </button>

                    <div id="settingsMenu" class="admin-submenu">

                        {{-- <a href="{{ route('admin.settings.general') }}"
                            class="{{ request()->routeIs('admin.settings.general') ? 'active' : '' }}">

                            General Settings

                        </a> --}}

                        {{-- <a href="{{ route('admin.settings.seo') }}"
                            class="{{ request()->routeIs('admin.settings.seo') ? 'active' : '' }}">

                            SEO Settings

                        </a> --}}

                        {{-- <a href="{{ route('admin.settings.social') }}"
                            class="{{ request()->routeIs('admin.settings.social') ? 'active' : '' }}">

                            Social Links

                        </a> --}}

                        {{-- <a href="{{ route('admin.settings.footer') }}"
                            class="{{ request()->routeIs('admin.settings.footer') ? 'active' : '' }}">

                            Footer Settings

                        </a> --}}

                    </div>

                </div>

            </nav>
        </aside>

        <main class="admin-main">
            <header class="admin-topbar">
                <div>
                    <div class="admin-eyebrow">@yield('eyebrow', 'Admin')</div>
                    <h1 class="admin-title">@yield('title', 'Dashboard')</h1>
                </div>
                <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-box-arrow-up-right"></i>
                    View Site
                </a>
            </header>

            @yield('content')
        </main>
    </div>
</body>
<script>
    function toggleMenu(menuId) {
        let menu = document.getElementById(menuId);

        if (menu.style.display === 'block') {
            menu.style.display = 'none';
        } else {
            menu.style.display = 'block';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {

        const menus = {

            siteContentMenu: "{{ request()->routeIs('admin.hero-sections.*') ||
                request()->routeIs('admin.about-us.*') ||
                request()->routeIs('admin.services.*') ||
                request()->routeIs('admin.coverage-areas.*') ||
                request()->routeIs('admin.testimonials.*') ||
                request()->routeIs('admin.faqs.*') }}",

            blogMenu: "{{ request()->routeIs('admin.blog-categories.*') || request()->routeIs('admin.blog-posts.*') }}",

            consultantMenu: "{{ request()->routeIs('admin.consultants.*') || request()->routeIs('admin.consultant-categories.*') }}",

            leadMenu: "{{ request()->routeIs('admin.contact-submissions.*') || request()->routeIs('admin.newsletters.*') }}",

            legalMenu: "{{ request()->routeIs('admin.privacy-policies.*') || request()->routeIs('admin.terms-conditions.*') }}",

            settingsMenu: "{{ request()->routeIs('admin.settings.*') }}",

        };

        Object.entries(menus).forEach(([id, active]) => {

            if (active == 1) {
                document.getElementById(id).style.display = 'block';
            }

        });

    });
</script>

</html>
