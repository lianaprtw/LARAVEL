<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Seashell Jewelry and Handicraft</title>

    @vite('resources/css/app.css')

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Slick Carousel CSS --}}
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Custom App CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('components.navbar')

    {{-- Start layout konten utama --}}
    <div class="container d-flex my-4">
        @hasSection('components.sidebar')
            <aside class="sidebar me-4">
                @yield('components.sidebar')
            </aside>
        @endif

        <main class="flex-grow-1">
            @yield('content')
        </main>
    </div>

    @include('components.footer')

    {{-- Hamburger Menu Script --}}
    <script>
        const hamburger = document.getElementById('hamburger');
        const navbarMenu = document.getElementById('navbar-menu');

        if (hamburger && navbarMenu) {
            hamburger.addEventListener('click', () => {
                navbarMenu.classList.toggle('active');
            });
        }
    </script>

    {{-- Bootstrap Bundle --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- Slick Carousel JS --}}
    <script src="{{ asset('js/slick.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
