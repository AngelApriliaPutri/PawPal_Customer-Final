<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="/, follow" />
    <title>PawPal</title>
    <meta name="description" content="Jesco - Fashoin eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{asset('images/favicon/favicon.ico')}}" type="image/png">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="{{asset('css/vendor/bootstrap.bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" href="{{asset('css/vendor/font.awesome.css')}}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/venobox.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Top Bar -->

    {{-- <div class="header-to-bar"> HELLO EVERYONE! 25% Off All Products </div> --}}

    <!-- Top Bar -->

    <!-- resources/views/home.blade.php -->
    @extends('app')

    @section('title', 'Home')

    @section('content')

        <!-- Hero/Intro Slider Start -->
        <div class="section ">
            <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
                <!-- Hero slider Active -->
                <div class="swiper-wrapper">
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide d-flex bg-color1">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                    {{-- <div class="hero-slide-content slider-animated-1"> --}}
                                    <div class="hero-slide-content">
                                        <span class="category"></span>
                                        <h2 class="title-1">Welcome🐾</h2>
                                        <h2 class="title-2">to PawPal</h2>
                                        <a href="shop" class="btn btn-lg btn-primary btn-hover-dark"> Shop Now <i
                                                class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="{{asset('storage/slider-1.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single slider item -->
                    <div class="hero-slide-item slider-height swiper-slide d-flex bg-color2">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 align-self-center sm-center-view">
                                    <div class="hero-slide-content slider-animated-1">
                                        <span class="category"></span>
                                        <h2 class="title-1">Welcome🐾</h2>
                                        <h2 class="title-2">to PawPal</h2>
                                        <a href="shop" class="btn btn-lg btn-primary btn-hover-dark"> Shop Now <i
                                                class="fa fa-shopping-basket ml-15px" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div
                                    class="col-xl-7 col-lg-7 col-md-7 col-sm-7 d-flex justify-content-center position-relative">
                                    <div class="show-case">
                                        <div class="hero-slide-image">
                                            <img src="{{asset('storage/slider-2.png')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
                <!-- Add Arrows -->
                <div class="swiper-buttons">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <!-- Hero/Intro Slider End -->

        <!-- Banner Area Start -->
        <div class="banner-area pt-100px pb-100px">
            <div class="container">
                <div class="row">
                    <div class="single-col">
                        <a href="{{ route('index', ['animal' => 'Dog']) }}" class="single-banner">
                            <img src="{{asset('images/banner/1.png')}}" alt="">
                            <div class="item-disc">
                                <span class="item-title">Dog</span>
                                <span class="item-amount">{{ $dogProductCount }} items</span>
                            </div>
                        </a>
                    </div>
                    <div class="single-col center-col">
                        <div class="single-banner">
                            <img src="{{asset('images/banner/2.jpeg')}}" alt="">
                            <div class="item-disc">
                                <h2 class="title">All Products</h2>
                                <a href="{{ route('products.index') }}" class="shop-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-col">
                        <a href="{{ route('index', ['animal' => 'Cat']) }}" class="single-banner">
                            <img src="{{asset('images/banner/3.png')}}" alt="">
                            <div class="item-disc">
                                <span class="item-title">Cat</span>
                                <span class="item-amount">{{ $catProductCount }} items</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
{{--
        <!-- Feature Area Srart -->
        <div class="feature-area pb-100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6  ">
                        <!-- single item -->
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="{{asset('storage/1.png')}}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Up-to-Date</h4>
                                <span class="sub-title">Never Settle for Outdated</span>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-4 col-md-6 mb-md-30px mb-lm-30px mt-lm-30px">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="{{asset('storage/2.png')}}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Quality Guaranteed</h4>
                                <span class="sub-title">Stretch Your Budget Further</span>
                            </div>
                        </div>
                    </div>
                    <!-- single item -->
                    <div class="col-lg-4 col-md-6 ">
                        <div class="single-feature">
                            <div class="feature-icon">
                                <img src="{{asset('storage/3.png')}}" alt="">
                            </div>
                            <div class="feature-content">
                                <h4 class="title">Low Price Guarantee</h4>
                                <span class="sub-title">Peace of Mind with Every Purchase</span>
                            </div>
                        </div>
                        <!-- single item -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Area End --> --}}

        <!-- Product Area Start -->
        <div class="product-area mb-5">
            <div class="container">
                <!-- Section Title & Tab Start -->
                <div class="row">
                    <!-- Section Title Start -->
                    <div class="col-lg col-md col-12">
                        <div class="section-title mb-0">
                            <h2 class="title">products</h2>
                        </div>
                    </div>
                    <!-- Section Title End -->

                    <!-- Tab Start -->
                    <div class="col-lg-auto col-md-auto col-12">
                        <ul class="product-tab-nav nav">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#tab-product-new">New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-product-bestsellers">Bestsellers</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab End -->
                </div>
                <!-- Section Title & Tab End -->

                <div class="tab-content">
                    <!-- 2nd tab start (New Products) -->
                    <div class="tab-pane fade show active" id="tab-product-new">
                        <div class="row">
                            @foreach($newProducts as $product)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Product -->
                                <div class="product">
                                    <!-- Product Thumbnail -->
                                    <div class="thumb">
                                        <a href="{{ route('product.detail', ['productId' => $product->PRODUCT_ID]) }}" class="image">
                                            <img src="{{ asset('storage/' . $product->PRODUCT_ID . '.jpeg') }}" alt="Product" />
                                            <img class="hover-image" src="{{ asset('storage/' . $product->PRODUCT_ID . '.jpeg') }}" alt="Product" />
                                        </a>
                                        <span class="badges">
                                            <span class="new">New</span>
                                        </span>
                                        <div class="actions">
                                            <a href="wishlist" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                        </div>
                                        <a href="cart">
                                            <span class="carts" data-id="{{$product->PRODUCT_ID}}" data-route="{{route('addCart')}}"></span>
                                            <button title="Add To Cart" class="add-to-cart">AddTo Cart</button>
                                        </a>
                                    </div>
                                    <!-- Product Content -->
                                    <div class="content">
                                        <h5 class="title"><a href="{{ route('product.detail', ['productId' => $product->PRODUCT_ID]) }}">{{ $product->PRODUCT_NAME }}</a></h5>
                                        <span class="price">
                                            <span class="new">Rp{{ number_format($product->PRODUCT_PRICE, 0, ',', '.') }}</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- End of Single Product -->
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- 2nd tab end (New Products) -->

                    <!-- 3rd tab start (Bestsellers) -->
                    <div class="tab-pane fade" id="tab-product-bestsellers">
                        <div class="row">
                            @foreach($bestsellers as $product)
                            <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Product -->
                                <div class="product">
                                    <!-- Product Thumbnail -->
                                    <div class="thumb">
                                        <a href="{{ route('product.detail', ['productId' => $product->PRODUCT_ID]) }}" class="image">
                                            <!-- Replace the image source with the actual product image -->
                                            <img src="{{ asset('storage/' . $product->PRODUCT_ID . '.jpeg') }}" alt="Product" />
                                            <img class="hover-image" src="{{ asset('storage/' . $product->PRODUCT_ID . '.jpeg') }}" alt="Product" />
                                        </a>
                                        <!-- Badges (e.g., New) -->
                                        <span class="badges">
                                            <span class="new">Bestseller</span>
                                        </span>
                                        <!-- Product Actions (e.g., Wishlist, Add to Cart) -->
                                        <div class="actions">
                                            <a href="wishlist" class="action wishlist" title="Wishlist"><i class="pe-7s-like"></i></a>
                                            <!-- Quick View Button -->
                                            {{-- <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="pe-7s-search"></i></a> --}}
                                        </div>
                                        <!-- Add to Cart Button -->
                                        <a href="cart">
                                            <span class="carts" data-id="{{$product->PRODUCT_ID}}" data-route="{{route('addCart')}}"></span>
                                            <button title="Add To Cart" class="add-to-cart">AddTo Cart</button>
                                        </a>
                                    </div>
                                    <!-- Product Content (e.g., Product Name, Price) -->
                                    <div class="content">
                                        <h5 class="title"><a href="{{ route('product.detail', ['productId' => $product->PRODUCT_ID]) }}">{{ $product->PRODUCT_NAME }}</a></h5>
                                        <span class="price">
                                            <!-- Format the product price -->
                                            <span class="new">Rp{{ number_format($product->PRODUCT_PRICE, 0, ',', '.') }}</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- End of Single Product -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- 3rd tab end (Bestsellers) -->
<script>
       $(document).ready(function(){
    $('.add-to-cart').click(function(){
        var id = $(this).prev().data('id');
        var route = $(this).prev().data("route");
        var token = $('meta[name="csrf-token"]').attr("content");
        console.log(id);
        $.ajax({
            url: route,
            type: "POST",
            data: {
                id: id,
                _token: token,
            },
            success: function (response) {
                alert(response.message);
                // Handle success, e.g., display a success message
            },
            error: function (error) {
                console.error('Error placing order:', error);
                // Handle errors
            },
        });
    });
});


    </script>
                </div>
            </div>
        </div>
        <!-- Product Area End -->
        {{-- <!-- Search Modal Start -->
        <div class="modal popup-search-style" id="searchActive">
            <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            <div class="modal-overlay">
                <div class="modal-dialog p-0" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2>Search Your Product</h2>
                            <form class="navbar-form position-relative" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search here...">
                                </div>
                                <button type="submit" class="submit-btn"><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End --> --}}

        <!-- Login Modal Start -->
        <div class="modal popup-login-style" id="loginActive">
            <button type="button" class="close-btn" data-bs-dismiss="modal"><span aria-hidden="true">&times;</span></button>
            <div class="modal-overlay">
                <div class="modal-dialog p-0" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="login-content">
                                <h2>Log in</h2>
                                <h3>Log in to your account</h3>
                                <form action="{{ route('login.submit') }}" method="POST" autocomplete="off">
                                    @csrf
                                    <input type="text" id="USER_USERNAME"  name="USER_USERNAME" placeholder="Username" autocomplete="new-username" required />
                                    <input type="password" id="USER_PASSWORD" name="USER_PASSWORD" placeholder="Password" autocomplete="new-password" required />
                                    <div class="remember-forget-wrap">
                                        <div class="remember-wrap">
                                            <input type="checkbox" name="remember_me">
                                            <p>Remember me</p>
                                        </div>
                                        <div class="forget-wrap">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <button type="submit">Log in</button>
                                </form>
                                <div class="member-register">
                                    <p class="mt-2" style="color: white">Not a member? <a href="register" class="mt-2" style="color: #ff9f48">Register now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Login Modal End -->

        <!-- Modal -->
        <div class="modal modal-2 fade" id="exampleModal" tab="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                                <!-- Swiper -->
                                <div class="swiper-container zoom-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{asset('storage/p0001.jpeg')}}" alt="">
                                        </div>
                                        {{-- <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{asset('images/product-image/zoom-image/2.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{asset('images/product-image/zoom-image/3.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{asset('images/product-image/zoom-image/4.jpg')}}" alt="">
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="swiper-container zoom-thumbs mt-3 mb-3">
                                    <div class="swiper-wrapper">
                                        {{-- <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{asset('images/product-image/small-image/1.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{asset('images/product-image/small-image/2.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{asset('images/product-image/small-image/3.jpg')}}" alt="">
                                        </div>
                                        <div class="swiper-slide">
                                            <img class="img-responsive m-auto"
                                                src="{{asset('images/product-image/small-image/4.jpg')}}" alt="">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="product-details-content quickview-content">
                                    <h2>Pedigree Adult Lamb & Vegetables</h2>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">Rp73.000</li>
                                        </ul>
                                    </div>
                                    <p class="mt-30px mb-0">Pedigree Dewasa Nutrisi Lengkap untuk Anjing telah dirumuskan untuk memberikan anjing dewasa semua energi dan nutrisi yang mereka butuhkan untuk terus menjalani hidup sepenuh-penuhnya. Ini dikemas dengan vitamin, seng dan Omega 6 untuk membantu menjaga anjing dewasa tampak seperti pemenang terbaik-di-show, dan telah memimpin tingkat Vitamin E untuk menjaga sistem kekebalan tubuh muda di jantung. Bersama-sama dengan campuran khusus serat yang mempromosikan pencernaan yang sehat, dan kibbles perawatan mulut untuk membersihkan gigi.</p>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart">
                                            <button class="add-cart" href="#"> Add To
                                                Cart</button>
                                        </div>
                                        <div class="pro-details-compare-wishlist pro-details-wishlist ">
                                            <a href="wishlist"><i class="pe-7s-like"></i></a>
                                        </div>
                                    </div>
                                    <div class="pro-details-sku-info pro-details-same-style  d-flex">
                                        <span>SKU: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a>P0001</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-categories-info pro-details-same-style d-flex">
                                        <span>Categories: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a>Food.</a>
                                            </li>
                                            <li>
                                                <a>Dog</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-social-info pro-details-same-style d-flex">
                                        <span>Share: </span>
                                        <ul class="d-flex">
                                            <li>
                                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://x.com/"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            {{-- <li>
                                                <a href="#"><i class="fa fa-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-youtube"></i></a>
                                            </li> --}}
                                            <li>
                                                <a href="https://instagram.com/"><i class="fa fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

    @endsection
        <div class="offcanvas-overlay"></div>
</body>

</html>
