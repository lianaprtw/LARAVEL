@extends('layouts.main')

@section('title', 'Bank Account')

@section('content')
<div class="container-main">
    <section class="bank-section">
        <h2><span class="bold-order">BANK</span> ACCOUNT</h2>

        <div class="bank-content">
            <div class="warning">
                <h3>WARNING !!!</h3>
                <p>Our company only responsibility order purchased. If customer paid direct to company account below :</p>
            </div>

            <div class="bank">
                <h3>BANK ACCOUNT DETAILS</h3>
                <p>US$ (Dollar Account)</p>
                <p>On Name : PT Caspla Bali</p>
                <p>Account No : 1002598074</p>
                <p>Bank Name : Bank Bukopin</p>
                <p>Swift Bank : BBUKIDJA</p>
            </div>
            
            <div class="or">
                <h3>OR</h3>
                <p>IDR (Indonesian Rupiah Account)</p>
                <p>On Name : PT Caspla Bali</p>
                <p>Account No : 1002597078</p>
                <p>Bank Name : Bank Bukopin</p>
                <p>Swift Bank : BBUKIDJA</p>
            </div>

            <div class="or">
                <h3>OR</h3>
                <p>US$ (Dollar Account)</p>
                <p>On Name : PT Caspla Bali</p>
                <p>Account No : 145 000 5023532</p>
                <p>Bank Name : Bank Mandiri</p>
                <p>Swift Bank : BMRIIDJA</p>
            </div>

            <div class="or">
                <h3>OR</h3>
                <p>WESTERN UNION</p>
                <p>NIK : 510501021075004</p>
                <p>Name : I Putu Darmajaya</p>
                <p>Address : Dusun Telaga Desa Kutampi Kaler</p>
                <p>Phone Number : +6281 2395 0536</p>
            </div>

            <div class="img-ktp">
                <img src="{{ asset('asset/ktp.jpg') }}" alt="ktp owner">
                <p>PT CASPLA BALI not responsibility if transaction via internet not used direct email :</p>
                <p><a href="mailto:director@casplabaliseashell.com">director@casplabaliseashell.com</a></p>
                <p>Be carefull if someone else used name CASPLA BALI</p>
            </div>
        </div>
    </section>
</div>
@endsection
