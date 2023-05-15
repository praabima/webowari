@extends('user.layout.main')

@section('content')

    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>Jenis Sablon Yang Dipakai</h2>
                        <ul>
                            <li>By Ell</li>
                            <li>April 10, 2023</li>

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
                        <img src="{{ asset('frontend/img/blog/details/blon.jpg') }}" alt="">
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
                            <p> DTF atau Direct-to-Film adalah metode sablon digital yang menggunakan teknologi
                                pencetakan langsung pada
                                film transfer khusus yang kemudian dapat diaplikasikan pada berbagai jenis kain dengan
                                bantuan mesin pemanas.
                                Pada proses DTF, desain dicetak menggunakan tinta khusus pada film transfer yang
                                kemudian ditransfer
                                ke kain menggunakan mesin pemanas.</p>
                            <p> Selain DTF, kami juga menggunakan sablon rubber yaitu salah satu metode sablon yang
                                menggunakan karet sebagai media cetaknya.
                                Dalam proses sablon rubber, gambar atau desain dicetak pada lembaran karet yang kemudian
                                dipotong-potong untuk membentuk pola sablon.
                                Lembaran karet yang telah dipotong ini kemudian diaplikasikan pada permukaan kain atau
                                bahan lainnya dan dicetak dengan menggunakan tinta khusus. </p>
                        </div>



                    </div>
                    <div class="blog__details__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="{{ asset('frontend/img/blog/details/blog-author.jpg') }}"
                                            alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h5>Ell</h5>
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
                                <a href="fleece.html" class="blog__details__btns__item">
                                    <p><span class="arrow_left"></span> Previous Pod</p>
                                    <h5>Cotton Combed vs Cotton Fleece</h5>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <a href="product.html"
                                    class="blog__details__btns__item blog__details__btns__item--next">
                                    <p>Next Pod <span class="arrow_right"></span></p>
                                    <h5>Perkembangan Produk OWARI</h5>
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
