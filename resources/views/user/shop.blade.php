@extends('user.layout.main')


@section('content')

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

