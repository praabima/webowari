@extends('user.layout.main')

<<<<<<< HEAD
@section('content')
=======
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owari Store | Official</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="login/login.html">Log in</a>

            </div>

        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="{{ asset('frontend/img/icon/search.png') }}" alt=""></a>
            <a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a>
            <a href="#"><img src="{{ asset('frontend/mg/icon/cart.png') }}" alt=""> <span>0</span></a>
            <div class="price">Rp0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">

        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">
                                <a href="login/login.html">Log in</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('frontend/img/lo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li class="active"><a href="./shop.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('frontend/img/icon/cart.png') }}" alt="">
                            <span>0</span></a>
                        <div class="price">Rp0.00</div>
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>
    <!-- Header Section End -->
>>>>>>> a09911e24cee037014aacbd41aa90cd46f3f5ce5

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="#">Music</a></li>
                                                    <li><a href="#">Anime</a></li>
                                                    <li><a href="#">Game</a></li>
                                                    <li><a href="#">Movie</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseSix">Tags</a>
                                    </div>
                                    <div id="collapseSix" class="collapse show" data-parent="#accordionExample">
                                        <div class="shop__sidebar__size">
                                            <div class="shop__sidebar__tags">
                                                <label for="ts">Tshirts
                                                    <input type="radio" id="ts">
                                                </label>
                                                <label for="Hoodie">Hoodie
                                                    <input type="radio" id="Hoodie">
                                                </label>
                                                <label for="tote">Totebag
                                                    <input type="radio" id="tote">
                                                </label>
                                                <label for="tbr">Tumblr
                                                    <input type="radio" id="tbr">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">High To Low</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-2.jpg') }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Piqué Biker Jacket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp67.24</h5>
                                    <div class="product__color__select">
                                        <label for="pc-4">
                                            <input type="radio" id="pc-4">
                                        </label>
                                        <label class="active black" for="pc-5">
                                            <input type="radio" id="pc-5">
                                        </label>
                                        <label class="grey" for="pc-6">
                                            <input type="radio" id="pc-6">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-3.jpg') }}">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/mg/icon/heart.png') }}" alt=""></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/mg/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi-pocket Chest Bag</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp43.48</h5>
                                    <div class="product__color__select">
                                        <label for="pc-7">
                                            <input type="radio" id="pc-7">
                                        </label>
                                        <label class="active black" for="pc-8">
                                            <input type="radio" id="pc-8">
                                        </label>
                                        <label class="grey" for="pc-9">
                                            <input type="radio" id="pc-9">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-4.jpg') }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('rontend/img/icon/search.png') }}f"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Diagonal Textured Cap</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp60.9</h5>
                                    <div class="product__color__select">
                                        <label for="pc-10">
                                            <input type="radio" id="pc-10">
                                        </label>
                                        <label class="active black" for="pc-11">
                                            <input type="radio" id="pc-11">
                                        </label>
                                        <label class="grey" for="pc-12">
                                            <input type="radio" id="pc-12">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-6.jpg') }}">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Ankle Boots</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp98.49</h5>
                                    <div class="product__color__select">
                                        <label for="pc-16">
                                            <input type="radio" id="pc-16">
                                        </label>
                                        <label class="active black" for="pc-17">
                                            <input type="radio" id="pc-17">
                                        </label>
                                        <label class="grey" for="pc-18">
                                            <input type="radio" id="pc-18">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-7.jpg') }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('rontend/img/icon/heart.png') }}f"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>T-shirt Contrast Pocket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp49.66</h5>
                                    <div class="product__color__select">
                                        <label for="pc-19">
                                            <input type="radio" id="pc-19">
                                        </label>
                                        <label class="active black" for="pc-20">
                                            <input type="radio" id="pc-20">
                                        </label>
                                        <label class="grey" for="pc-21">
                                            <input type="radio" id="pc-21">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-8.jpg') }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp26.28</h5>
                                    <div class="product__color__select">
                                        <label for="pc-22">
                                            <input type="radio" id="pc-22">
                                        </label>
                                        <label class="active black" for="pc-23">
                                            <input type="radio" id="pc-23">
                                        </label>
                                        <label class="grey" for="pc-24">
                                            <input type="radio" id="pc-24">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-9.jpg') }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Piqué Biker Jacket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp67.24</h5>
                                    <div class="product__color__select">
                                        <label for="pc-25">
                                            <input type="radio" id="pc-25">
                                        </label>
                                        <label class="active black" for="pc-26">
                                            <input type="radio" id="pc-26">
                                        </label>
                                        <label class="grey" for="pc-27">
                                            <input type="radio" id="pc-27">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-10.jpg') }}">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Multi-pocket Chest Bag</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp43.48</h5>
                                    <div class="product__color__select">
                                        <label for="pc-28">
                                            <input type="radio" id="pc-28">
                                        </label>
                                        <label class="active black" for="pc-29">
                                            <input type="radio" id="pc-29">
                                        </label>
                                        <label class="grey" for="pc-30">
                                            <input type="radio" id="pc-30">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-11.jpg') }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Diagonal Textured Cap</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp60.9</h5>
                                    <div class="product__color__select">
                                        <label for="pc-31">
                                            <input type="radio" id="pc-31">
                                        </label>
                                        <label class="active black" for="pc-32">
                                            <input type="radio" id="pc-32">
                                        </label>
                                        <label class="grey" for="pc-33">
                                            <input type="radio" id="pc-33">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-12.jpg') }}">
                                    <span class="label">Sale</span>
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Ankle Boots</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp98.49</h5>
                                    <div class="product__color__select">
                                        <label for="pc-34">
                                            <input type="radio" id="pc-34">
                                        </label>
                                        <label class="active black" for="pc-35">
                                            <input type="radio" id="pc-35">
                                        </label>
                                        <label class="grey" for="pc-36">
                                            <input type="radio" id="pc-36">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-13.jpg') }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/mg/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>T-shirt Contrast Pocket</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp49.66</h5>
                                    <div class="product__color__select">
                                        <label for="pc-37">
                                            <input type="radio" id="pc-37">
                                        </label>
                                        <label class="active black" for="pc-38">
                                            <input type="radio" id="pc-38">
                                        </label>
                                        <label class="grey" for="pc-39">
                                            <input type="radio" id="pc-39">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg"
                                    data-setbg="{{ asset('frontend/img/product/product-14.jpg') }}">
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/heart.png') }}"
                                                    alt=""></a></li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/compare.png') }}" alt="">
                                                <span>Compare</span></a>
                                        </li>
                                        <li><a href="#"><img src="{{ asset('frontend/img/icon/search.png') }}"
                                                    alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6>Basic Flowing Scarf</h6>
                                    <a href="#" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">

                                    </div>
                                    <h5>Rp26.28</h5>
                                    <div class="product__color__select">
                                        <label for="pc-40">
                                            <input type="radio" id="pc-40">
                                        </label>
                                        <label class="active black" for="pc-41">
                                            <input type="radio" id="pc-41">
                                        </label>
                                        <label class="grey" for="pc-42">
                                            <input type="radio" id="pc-42">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset('frontend/img/logow.pn') }}g" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="{{ asset('frontend/img/payment.png') }}" alt=""></a>
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
                        <p>Copyright © Owari.cloth
                            <script>
                            document.write(new Date().getFullYear());
                            </script>2023
                            All rights reserved |
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
<<<<<<< HEAD
@endsection
=======

    <!-- Js Plugins -->
    <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('frontend/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
>>>>>>> a09911e24cee037014aacbd41aa90cd46f3f5ce5
