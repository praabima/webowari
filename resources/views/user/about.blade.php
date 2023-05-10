@extends('user.layout.main')


@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>About Us</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <img src="{{ asset('frontend/img/about/us.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Who We Are ?</h4>
                        <p> Owari dapat diartikan sebagai sebuah perjalanan yang terus berlanjut, yang
                            mencerminkan dinamika fashion yang selalu berubah dan berkembang seiring waktu.
                            Sebagai brand, Owari dapat menjadi panduan bagi individu untuk mengeksplorasi dan
                            mengekspresikan diri melalui fashion yang tetap relevan dengan tren dan kebutuhan
                            zaman.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>What We Do ?</h4>
                        <p>Kami menawarkan beberapa jenis produk clothing dengan berbagai genre yang berbeda, mulai dari
                            music, anime,
                            dan masih banyak lagi. Produk kami tidak terpaku pada tshirts dan hoodie tapi juga kebutuhan
                            lain seperti totebag,
                            juga tidak menutup kemungkinan penambahan produk yang terjadi pada masa mendatang
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="about__item">
                        <h4>Why Choose Us</h4>
                        <p>Owari Cloth menawarkan produk dengan kualitas terbaik. Menggunakan bahan-bahan premium tapi
                            harga tetap ramah di kantong</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="testimonial__text">
                        <span class="icon_quotations"></span>
                        <p>“Choose to be the last, with fashion that will Outlast.”
                        </p>
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="{{ asset('frontend/img/about/testimonial-author.jpg') }}" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Yoga</h5>
                                <p>Project Leader</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="testimonial__pic set-bg"
                        data-setbg="{{ asset('frontend/img/about/testimonial-pic.jpg') }}"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Counter Section Begin -->
    <section class="counter spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="cn_num">102</h2>
                        </div>
                        <span>Our <br />Clients</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="cn_num">30</h2>
                        </div>
                        <span>Total <br />Categories</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="cn_num">102</h2>
                        </div>
                        <span>In <br />Country</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter__item">
                        <div class="counter__item__number">
                            <h2 class="cn_num">98</h2>
                            <strong>%</strong>
                        </div>
                        <span>Happy <br />Customer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Meet Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{ asset('frontend/img/about/team-1.jpg') }}" alt="">
                        <h4>John Smith</h4>
                        <span>Fashion Design</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{ asset('frontend/img/about/team-2.jpg') }}" alt="">
                        <h4>Christine Wise</h4>
                        <span>C.E.O</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{ asset('frontend/img/about/team-3.jpg') }}" alt="">
                        <h4>Sean Robbins</h4>
                        <span>Manager</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="{{ asset('frontend/img/about/team-4.jpg') }}" alt="">
                        <h4>Lucy Myers</h4>
                        <span>Delivery</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Client Section Begin -->
    <section class="clients spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Partner</span>
                        <h2>Happy Clients</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-1.png') }}"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-2.png') }}"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-3.png') }}"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-4.png') }}"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-5.png') }}"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-6.png') }}"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-7.png') }}"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-6">
                    <a href="#" class="client__item"><img src="{{ asset('frontend/img/clients/client-8.png') }}"
                            alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset('frontend/img/logow.png') }}" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="{{ asset('frontend/frontend/img/payment.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                            document.write(new Date().getFullYear());
                            </script>2020
                            Owari Store | Official <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Owari</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    @endsection

