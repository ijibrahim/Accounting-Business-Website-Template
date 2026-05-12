<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts._partials.head');
</head>
<body>

<!-- ===========================
     NAVBAR
=========================== -->

@include('layouts._partials.navbar');

@yield('content')

<!-- ===========================
     FOOTER
=========================== -->
@include('layouts._partials.footer')

<!-- ===== FLOATING BUTTONS ===== -->
<a href="#contact" class="float-consult">
  <i class="bi bi-calendar-check"></i>
  <span>Free Consultation</span>
</a>
<button id="backToTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
