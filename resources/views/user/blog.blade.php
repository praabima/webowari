@extends('user.layout.main')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-blog set-bg" data-setbg="{{ asset('frontend/img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our Blog</h2>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/img/blog/filo.jpg') }}">
                    </div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('frontend/img/icon/calendar.png') }}" alt=""> 3 March
                            2023</span>
                        <h5>Filosofi Nama Brand</h5>
                        <a href="filosofi.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/img/blog/des.jpg') }}">
                    </div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('frontend/img/icon/calendar.png') }}" alt=""> 17 March
                            2023</span>
                        <h5>Inspirasi Desain</h5>
                        <a href="desain.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/img/blog/ct.jpg') }}">
                    </div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('frontend/img/icon/calendar.png') }}" alt=""> 30 March
                            2023</span>
                        <h5>Tshirts Material</h5>
                        <a href="cotton.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/img/blog/kain.jpg') }}">
                    </div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('frontend/img/icon/calendar.png') }}" alt=""> 3 April
                            2023</span>
                        <h5>Cotton Combed vs Cotton Fleece</h5>
                        <a href="fleece.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('') }}frontend/img/blog/blon.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('frontend/img/icon/calendar.png') }}" alt=""> 10 April
                            2023</span>
                        <h5>Jenis Sablon Yang Digunakan Pada Produk</h5>
                        <a href="sablon.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="{{ asset('frontend/img/blog/tot.jpg') }}">
                    </div>
                    <div class="blog__item__text">
                        <span><img src="{{ asset('frontend/img/icon/calendar.png') }}" alt=""> 28 April
                            2023</span>
                        <h5>Perkembangan Produk Owari Cloth</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Blog Section End -->



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