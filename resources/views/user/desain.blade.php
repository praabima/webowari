@extends('user.layout.main')

@section('content')


    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>Desain Dari Produk OWARI</h2>
                        <ul>
                            <li>By Yoga</li>
                            <li>March 17, 2023</li>

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
                        <img src="{{ asset('frontend/img/blog/details/des.jpg') }}" alt="">
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
                            <p> Desain dari produk OWARI sebenarnya terinspirasi dari genre film.Owner ingin
                                mengaplikasikan
                                beberapa genre film tersebut pada sebuah produk clothing, sehingga nanti produk yang
                                dihadirkan
                                memiliki genrenya masing-masing.
                            </p>
                            <p> Untuk sementara genre yang dihadirkan terdapat empat genre, yaitu music, anime, game,
                                dan movie.
                                Tidak menutup kemungkinan jika di masa yang akan mendatang genre tersebut akan
                                ditambahkan demi
                                melengkapi variasi produk </p>
                        </div>


                    </div>
                    <div class="blog__details__text">


                    </div>
                    <div class="blog__details__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__pic">
                                        <img src="{{ asset('frontend/img/blog/details/blog-author.jpg') }}" alt="">
                                    </div>
                                    <div class="blog__details__author__text">
                                        <h5>Yoga</h5>
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
                                <a href="filosofi.html" class="blog__details__btns__item">
                                    <p><span class="arrow_left"></span> Previous Pod</p>
                                    <h5>Filosofi Nama Brand OWARI</h5>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <a href="cotton.html" class="blog__details__btns__item blog__details__btns__item--next">
                                    <p>Next Pod <span class="arrow_right"></span></p>
                                    <h5>Tshirts Material</h5>
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
