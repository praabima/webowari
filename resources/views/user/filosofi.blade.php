@extends('user.layout.main')


@section('content')


    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>Dibalik Sebuah Nama Brand 'OWARI'</h2>
                        <ul>
                            <li>By Fenca</li>
                            <li>March 3, 2023</li>

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
                        <img src="{{ asset('frontend/img/blog/details/filo.jp') }}g" alt="">
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
                            <p> Owari Cloth. Owari dapat diartikan sebagai akhir atau kesudahan dalam bahasa Jepang,
                                yang menunjukkan sebuah kesimpulan atau klimaks dari sesuatu. Dalam konteks clothing
                                brand, Owari dapat dimaknai sebagai suatu titik akhir dari pencarian identitas melalui
                                fashion, di mana orang dapat menemukan pakaian yang sesuai dengan kepribadian mereka.
                            </p>
                            <p> Logo pada brand Owari memiliki beberapa makna yang terkandung di dalamnya. Kata
                                ‘Owari’ mempresentasikan nama brand. Lingkaran mempresentasikan sesuatu yang tidak
                                memiliki ujung atau batasan, dalam hal ini Owari tidak akan berhenti berkarya untuk
                                menciptakan sebuah desain baru ataupun gaya baru dalam industri clothing. Huruf W dan
                                R yang dilalui lingkaran merupakan singkatan dari kata WeaR yang artinya pakai atau
                                memakai dalam bahasa Inggris, sedangkan huruf A yang berada di tengah lingkaran
                                mempresentasikan kualitas produk, jadi dapat diartikan bahwa pemakai sedang
                                menggenakan suatu produk dengan kualitas A atau berkualitas tinggi</p>
                        </div>
                        <div class="blog__details__quote">
                            <i class="fa fa-quote-left"></i>
                            <p>“Choose to be the last, with fashion that will Outlast.”</p>
                            <h6>_ Fenca _</h6>
                        </div>
                        <div class="blog__details__text">
                            <p>Slogan ini memiliki arti "Pilih untuk menjadi yang terakhir, dengan gaya yang akan
                                bertahan lebih lama"
                                Pilihan terakhir yang akan meenjaga kualitas lebih lama.
                            </p>

                        </div>
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__author">
                                        <div class="blog__details__author__pic">
                                            <img src="{{ asset('frontend/img/blog/details/blog-author.jpg') }}" alt="">
                                        </div>
                                        <div class="blog__details__author__text">
                                            <h5>Fenca</h5>
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
                                    <a href="product.html" class="blog__details__btns__item">
                                        <p><span class="arrow_left"></span> Previous Pod</p>
                                        <h5>Perkembangan Produk OWARI</h5>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="desain.html"
                                        class="blog__details__btns__item blog__details__btns__item--next">
                                        <p>Next Pod <span class="arrow_right"></span></p>
                                        <h5>Inspirasi Desain</h5>
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
