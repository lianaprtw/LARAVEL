{{-- resources/views/home.blade.php --}}
@extends('layouts.main')

@section('content')
<div class="container-main">
    <div class="main-content">
        {{-- Bagian Slider Gambar --}}
        <div class="slider-container">
            <div class="main-slider">
                <div class="slider-item">
                    <img src="{{ asset('asset/banner1.jpg') }}" alt="Banner 1">
                </div>
                <div class="slider-item">
                    <img src="{{ asset('asset/banner2.jpg') }}" alt="Banner 2">
                </div>
                <div class="slider-item">
                    <img src="{{ asset('asset/banner3.jpg') }}" alt="Banner 3">
                </div>
                <div class="slider-item">
                    <img src="{{ asset('asset/banner4.jpg') }}" alt="Banner 4">
                </div>
            </div>
        </div>

        {{-- Slogan dibawah slider --}}
        <h2 class="slogan">"Getting good quality in big quantity and making cheaper in the better service offering" </h2>
        <p class="description">PT Caspla Bali is seashell jewelry & handicrafts manufactures, Bali Seashell producer & supplier, Bali seashell silver arts, Bali Seashell Exports, Mother of Pearl shell inlay design products.  </p>

        <div class="company-info">
          <p> The company specialist produce all kinds seashell &crafts maker. </p>
        </div>

        <div class="contact-section">
          <div class="head-office-info">
            <h3>Head Office</h3>
            <p>Jl. Kerta Dalem Sari</p>
            <p>Blok Liva No. 4, Sidakarya</p>
            <p>Denpasar Selatan - Bali - Indonesia</p>
            <p>Mobile & WhatsApp: +6281 2395 0536</p>
            <p>+6285 1008 42222</p>
            <p>+6281 3996 66677</p>
            <p>+62812 3754 7775</p>
            <p>E-mail: <a href="mailto:director@baliseashell.com">director@baliseashell.com</a></p>
            <p><a href="mailto:casplabalifounder@gmail.com">casplabalifounder@gmail.com</a></p>
          </div>

          <div class="factory-info">
            <h3>Warehouse & Factory</h3>
            <p>Jl. Pulau Moyo,  Gg. Cemara No.4</p>
            <p>Denpasar - Bali - Indonesia</p>
            <p>Mobile & WhatsApp: +6281 2395 0536</p>
            <p>+62811 383 4444</p>
            <p>Website: <a href="http://www.baliseashell.com/" target="_blank">www.baliseashell.com</a></p>
            <p>E-mail: <a href="mailto:director@baliseashell.com">director@baliseashell.com</a></p>
            <p><a href="mailto:casplabalifounder@gmail.com">casplabalifounder@gmail.com</a></p>
          </div>
        </div>

        <div class="tv-program-section">
            <h2><span class="bold-order">CASPLA ON</span> LOCAL TV PROGRAM</h2>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/crri9hA45V8?si=TR5rkT3M18pWxKpq"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
          <a href="our-video" class="see-more-video">SEE MORE VIDEO</a>
        </div>
    </div>

    <div class="sidebar">
        <div class="order-info">
            <h2><span class="bold-order">ORDER</span> INFO</h2>
            <p>For Online Order, We Accept:</p>
            <div class="payment-logos">
                <img src="{{ asset('asset/logo_visa.png') }}" alt="Visa">
                <img src="{{ asset('asset/logo_mastercard.png') }}" alt="Mastercard">
                <img src="{{ asset('asset/logo_mandiri.png') }}" alt="mandiri"> {{-- Ganti logo_manndiri.png jadi logo_mandiri.png --}}
                <img src="{{ asset('asset/logo_bri.jpg') }}" alt="BRI">
                <img src="{{ asset('asset/logo_bca.png') }}" alt="BCA">
                <img src="{{ asset('asset/logo_western.png') }}" alt="Western Union"> {{-- Ganti logo_western.png jadi logo_western_union.png --}}
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts') {{-- JavaScript khusus halaman ini akan dimasukkan di sini --}}
<script>
    $(document).ready(function(){
        $('.main-slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            // fade: true, // Ini bisa diaktifkan jika ingin efek fade
            slidesToShow: 1, // Pastikan 'slideToShow' adalah 'slidesToShow' (huruf S di awal)
            adaptiveHeight: true,
            // cssEase: 'linear', // Ini bisa diaktifkan jika ingin efek transisi linear
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true, // Ada koma yang hilang di sini sebelumnya

            // Pengaturan responsif untuk slick carousel
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });
    });
</script>
@endpush