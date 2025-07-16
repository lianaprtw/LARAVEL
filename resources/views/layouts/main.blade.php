<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Seashell Jewelry and Handicraft</title>

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- slick carousel css --}}
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    {{-- custom app css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <script>
    const hamburger = document.getElementById('hamburger');
    const navbarMenu = document.getElementById('navbar-menu');

    hamburger.addEventListener('click', () => {
        navbarMenu.classList.toggle('active');
    });
</script>

{{-- bootstrap bundle --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Slick Carousel JS -->
<script src="{{ asset('js/slick.min.js') }}"></script>


</script>
@stack('scripts')


</body>
</html>
