@extends('user.layout.main')

@section('content')

    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>Cotton Combed vs Cotton Fleece</h2>
                        <ul>
                            <li>By Dennis</li>
                            <li>April 3, 2023</li>

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
                        <img src="{{ asset('frontend/img/blog/details/kaen.jpg') }}" alt="">
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
                            <p> Kain Fleece terbuat dari campuran kain katun dengan polyester tapi Fleece tidak bisa
                                disebut sebagai kain katun.
                                Penambahan kandungan katun ke dalam bahan dasar pembuatan kain Fleece merupakan salah
                                satu cara agar menambahkan
                                kenyamanan dari kandungan katun ke dalam kain Fleece itu sendiri.
                            </p>
                            <p> Cotton fleece adalah jenis kain yang terbuat dari serat katun yang sangat halus dan
                                lembut, sehingga memberikan rasa nyaman
                                dan hangat ketika dikenakan. Kain ini sering digunakan sebagai bahan untuk membuat
                                pakaian kasual seperti hoodie, sweater, jaket,
                                dan celana panjang. Cotton fleece memiliki permukaan yang halus dan tidak berbulu,
                                sehingga lebih mudah dijaga kebersihannya dan
                                memiliki daya tahan yang baik. Selain itu, cotton fleece juga mudah menyerap keringat,
                                sehingga cocok untuk digunakan sebagai pakaian
                                olahraga atau aktivitas fisik.</p>
                        </div>

                        <div class="blog__details__text">
                            <p>Cotton fleece dan cotton combed keduanya terbuat dari serat kapas, namun memiliki
                                perbedaan dalam sifat dan penggunaannya. Cotton fleece terbuat
                                dari serat kapas yang sangat halus dan lembut, sehingga memberikan rasa nyaman dan
                                hangat ketika dikenakan. Kain ini sering digunakan sebagai bahan
                                untuk membuat pakaian kasual seperti hoodie, sweater, jaket, dan celana panjang. Di sisi
                                lain, cotton combed adalah jenis kain katun yang telah
                                melalui proses pemrosesan khusus untuk menghilangkan serat-serat kasar dan menghasilkan
                                serat yang lebih halus dan kuat.
                                Cotton combed sering digunakan untuk membuat pakaian yang lebih halus dan ramping
                                seperti kemeja dan dress. Keduanya memiliki kelebihan masing-masing
                                tergantung pada penggunaannya, namun cotton fleece lebih cocok untuk pakaian kasual dan
                                hangat, sedangkan cotton combed lebih cocok untuk
                                pakaian yang lebih halus dan ramping..
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
                                    <a href="cotton.html" class="blog__details__btns__item">
                                        <p><span class="arrow_left"></span> Previous Pod</p>
                                        <h5>Tshirts Material</h5>
                                    </a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="sablon.html"
                                        class="blog__details__btns__item blog__details__btns__item--next">
                                        <p>Next Pod <span class="arrow_right"></span></p>
                                        <h5>Jenis Sablon</h5>
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
