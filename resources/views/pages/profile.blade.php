@extends('layouts.main')

@section('title', 'Profile')

@section('content')

<div class="container-main">
    <section class="about-section">
        <h2><span class="bold-order">ABOUT</span> US</h2>

        <div class="about-content">
            <div class="about-image">
                <img src="{{ asset('asset/profile_pict.jpg') }}" alt="CASPLA BALI">
            </div>

                <div class="about-text-top">
                    <h4>PT. CASPLA BALI</h4>
                    <P>is one of legal company have permitted from Indonesian trade and industry, and have legalized by minister of law.</P>
                    <p><strong>No of register by NPWP : 0749/22-09/pk/XII/2002</strong></p>
                    <p>The Company service shell and seashell raw or material like mother of pearl white, black mop shell, brown pinguin wing mop, conus kinds, yellow cowries shell and many kinds seashell from Asia pacific or Indonesia ocean.</p>
                    <p>The company have direct producing all shell products , seashell kinds manufactures for jewelry, handicrafts, and interior design, mother of pearl is our concern products the company has factory directly for produce crafts,shell jewelry or all desighn products shell the company specialist for seashell jewelry and crafts producer and designer shell and seashell becoming beautyfull products art and inlay, jewelry, seashell crafts and seashell carving.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo earum libero accusamus ducimus molestias at dolorum corrupti eius magni totam! Fuga molestias facilis tempore tempora modi alias repudiandae amet id. Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quo eum, consectetur reprehenderit numquam harum. Iusto tempora maiores minus, adipisci officiis porro corporis excepturi illo ipsum dolorem maxime eos! Explicabo!</p>
                </div>

                <div class="about-text-bottom">
                    <p>Caspla own Head office for sales and marketing, own showroom or shop for retailer,warehouse for stocking, worker for producing and pactory machine for cuting proccessing.</p>
                    <p>Caspla employee all from balinese and some from java for producing manufacturing Caspla Bali have special worker secret from people view, that specialist for designer art carving shell for new product item The Caspla Bali owner 95% by <strong> I PUTU DARMAYA</strong> young boy from Bali,nusa penida and 5 % from his father by <strong>I WAYAN SERGEG</strong> the company build since 2001 starting from small shop year ago by <strong>I PUTU DARMAYA</strong> he allready have better company with professional handling exports.</p>
                    <h4>CASPLA BALI Motto</h4>
                    <p>To making better price and quality for business customer and making practice order by Email to making better cost Value for all customer To making the best partner hold one client satisfied forever till the end.</p>
                </div>
        </div>

                {{-- <h4>For Online Order, We Accept:</h4> --}}
                <div class="payment-logos-about">
                    <h4>For Online Order, We Accept:</h4>
                    <div class="logo-row">
                        <img src="{{ asset('asset/logo_visa.png') }}" alt="Visa">
                        <img src="{{ asset('asset/logo_mastercard.png') }}" alt="Mastercard">
                        <img src="{{ asset('asset/logo_mandiri.png') }}" alt="mandiri"> 
                        <img src="{{ asset('asset/logo_bri.jpg') }}" alt="BRI">
                        <img src="{{ asset('asset/logo_bca.png') }}" alt="BCA">
                        <img src="{{ asset('asset/logo_western.png') }}" alt="Western Union">
                    </div> 
                </div>

                <h2><span class="bold-order">CONTACT</span> US</h2>

                <div class="contact-section">
                    <div class="contact-card">
                        <h3>HEAD OFFICE</h3>
                        <address>Jl. Kerta Dalem Sari I Blok Liva NO. 4. Sidekarya Denpasar - Bali - Indonesia</address>
                        
                        <div class="contact-phone">
                            <div class="phone-item">
                                <span class="label">Phone: </span> 
                                <span class="number">+6218 361 4743897</span>
                            </div>
                            <div class="phone-item indent">
                                <span class="number">+62851 0173 2222</span>
                            </div>
                            <div class="phone-item indent">
                                <span class="number">+6281 3996 66677</span>
                            </div>
                            <div class="phone-item indent">
                            <span class="number">+6281 23754 7775</span>
                            </div>
                        </div>

                        <div class="contact-phone">
                            <div class="phone-item">
                                <span class="label">Mobile: </span>
                                <span class="number"> +621 890 2395 0536</span>
                            </div>
                            <div class="phone-item indent">
                                <span class="number">+6285 1008 42222</span>
                            </div>
                            <div class="phone-item indent">
                                <span class="number">+6281 3996 66677</span>
                            </div>
                            <div class="phone-item indent">
                                <span class="number">+6281 23754 7775</span>
                            </div>
                        </div>

                        <div class="contact-website">
                            <div class="website-item">
                                <span class="label">E-mail:</span>
                                <span class="website"><a href="mailto:director@baliseashell.com">director@baliseashell.com</a></span>
                            </div>
                            <div class="website-item indent">
                                <span class="website"><a href="mailto:casplabalifounder@gmail.com">casplabalifounder@gmail.com</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-card">
                        <h3>WAREHOUSE & FACTORY</h3>
                        <address>Jl. Pulau Moyo. Gg. Cemara NO.4 Denpasar - Bali - Indonesia</address>

                        <div class="contact-phone">
                            <div class="phone-item">
                                <span class="label">Phone: </span>
                                <span class="number">  +62 851 017 32222</span>
                            </div>
                            <div class="phone-item indent">
                                <span class="number">+62 851 004 41680</span>
                            </div>
                        </div>

                        <div class="contact-phone">
                            <div class="phone-item">
                                <span class="label">Website: </span>
                                <span class="number"><a href="www.baliseashell.com" target="_blank">www.baliseashell.com</a></span>
                            </div>
                            <div class="phone-item indent">
                                <span class="number"><a href="www.casplabaliseashell.com" target="_blank">www.casplabaliseashell.com</a></span>
                            </div>
                        </div>
                        
                        <div class="contact-website">
                            <div  class="website-item">
                                <span class="label">E-mail:</span>
                                <span class="website"><a href="mailto:director@baliseashell.com">director@baliseashell.com</a></span>
                            </div>
                            <div class="website-item indent">
                                <span class="website"><a href="mailto:casplabalifounder@gmail.com">casplabalifounder@gmail.com</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="contact-card">
                        <h3>OUR PRODUCT</h3>
                        <ul class="product-list">
                            <li><a href="catalogue" class="catalogue"> Seashell jewelry</a></li>
                            <li><a href="catalogue" class="catalogue"> Seashell Frame</a></li>
                            <li><a href="catalogue" class="catalogue"> Seashell Table Ware</a></li>
                            <li><a href="catalogue" class="catalogue"> Seashell Box</a></li>
                            <li><a href="catalogue" class="catalogue"> Seashell Material</a></li>
                            <li><a href="catalogue" class="catalogue"> Seashell Colecction</a></li>
                            <li><a href="catalogue" class="catalogue"> Seashell Handicrafts</a></li>
                        </ul>
                    </div>
                </div>
    </section>
</div>


@endsection
