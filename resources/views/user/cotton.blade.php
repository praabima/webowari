@extends('user.layout.main')


@section('content')


    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>Tshirts Material Yang Dipakai</h2>
                        <ul>
                            <li>By Adit</li>
                            <li>March 30, 2023</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="{{ asset('frontend/img/blog/details/kaos.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <span>share</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog__details__text">
                            <p> Produk unggulan dari Owari Cloth adalah tshirts atau kaos. Untuk material yang digunakan
                                umumnya
                                adalah cotton combed dengan ketebalan 30s, namun tidak menutup kemungkinan untuk
                                menggunakan tingkat
                                ketebalan lain seperti 24s dan lainnya, tentu dengan mematok harga berbeda sesuai
                                kualitas kain
                            </p>
                            <p>Penjelasan singkat mengenai cotton combed. Cotton Combed artinya bahan kaos berjenis
                                katun yang
                                merupakan material paling bagus dan halus, kehalusannya dihasilkan dari proses
                                penyisiran,
                                nah proses tersebut adalah yang dinamakan sebagai combed, maka dari itu, bahan kaos ini
                                disebut dengan Cotton Combed.
                                Untuk tingkat ketebalan ada 30s, 24s, 20s makin kecil angkanya, makin tebal kain
                                tersebut</p>
                        </div>

                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__author">
                                        <div class="blog__details__author__pic">
                                            <img src="{{ asset('frontend/img/blog/details/blog-author.jpg') }}" alt="">
                                        </div>
                                        <div class="blog__details__author__text">
                                            <h5>Adit</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__tags">
                                        <a href="#">#Fashion</a>
                                        <a href="#">#Trending</a>
                                        <a href="#">#2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__btns">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="desain.html" class="blog__details__btns__item">
                                        <p><span class="arrow_left"></span> Previous Pod</p>
                                        <h5>Inspirasi Desain</h5>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="fleece.html"
                                        class="blog__details__btns__item blog__details__btns__item--next">
                                        <p>Next Pod <span class="arrow_right"></span></p>
                                        <h5>Cotton Combed vs Cotton Fleece</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__comment">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

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
