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
    <link rel="stylesheet" href="{{asset('/css/vendor/font.awesome.css')}}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('css/plugins/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('css/plugins/venobox.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>
    <!-- resources/views/home.blade.php -->
    @extends('app')

    @section('title', 'Home')

    @section('content')

     <div class="offcanvas-overlay"></div>

    <!-- OffCanvas Wishlist Start -->
    <div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
        <div class="inner">
            <div class="head">
                <span class="title">Wishlist</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/1.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$21.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/2.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$13.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/3.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Cool Man Wearing Leather</a>
                            <span class="quantity-price">1 x <span class="amount">$17.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons">
                    <a href="wishlist" class="btn btn-dark btn-hover-primary mt-30px">view wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Wishlist End -->
    <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Cart</span>
                <button class="offcanvas-close">×</button>
            </div>
            <div class="body customScroll">
                <ul class="minicart-product-list">
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/1.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Women's Elizabeth Coat</a>
                            <span class="quantity-price">1 x <span class="amount">$18.86</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/2.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Long sleeve knee length</a>
                            <span class="quantity-price">1 x <span class="amount">$43.28</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="single-product" class="image"><img src="{{asset('images/product-image/3.jpg')}}"
                                alt="Cart product Image"></a>
                        <div class="content">
                            <a href="single-product" class="title">Cool Man Wearing Leather</a>
                            <span class="quantity-price">1 x <span class="amount">$37.34</span></span>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="foot">
                <div class="buttons mt-30px">
                    <a href="cart" class="btn btn-dark btn-hover-primary mb-30px">view cart</a>
                    <a href="checkout" class="btn btn-outline-dark current-btn">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- OffCanvas Cart End -->

    <!-- OffCanvas Menu Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
        <button class="offcanvas-close"></button>

        <div class="inner customScroll">

            <div class="offcanvas-menu mb-4">
                <ul>
                    <li><a href="#"><span class="menu-text">Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="/"><span class="menu-text">Home 1</span></a></li>
                            <li><a href="/-2"><span class="menu-text">Home 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Shop</span></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"><span class="menu-text">Shop Page</span></a>
                                <ul class="sub-menu">
                                    <li class="title"><a href="#">Shop Page</a></li>
                                    <li><a href="shop-3-column">Shop 3 Column</a></li>
                                    <li><a href="shop-4-column">Shop 4 Column</a></li>
                                    <li><a href="shop-left-sidebar">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-left-sidebar">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar">Shop List Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">product Details Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product">Product Single</a></li>
                                    <li><a href="product-detail">Product Variable</a></li>
                                    <li><a href="single-product-affiliate">Product Affiliate</a></li>
                                    <li><a href="single-product-group">Product Group</a></li>
                                    <li><a href="single-product-tabstyle-2">Product Tab 2</a></li>
                                    <li><a href="single-product-tabstyle-3">Product Tab 3</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Single Product Page</span></a>
                                <ul class="sub-menu">
                                    <li><a href="single-product-slider">Product Slider</a></li>
                                    <li><a href="single-product-gallery-left">Product Gallery Left</a>
                                    </li>
                                    <li><a href="single-product-gallery-right">Product Gallery Right</a>
                                    </li>
                                    <li><a href="single-product-sticky-left">Product Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right">Product Sticky Right</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Other Shop Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="cart">Cart Page</a></li>
                                    <li><a href="checkout">Checkout Page</a></li>
                                    <li><a href="compare">Compare Page</a></li>
                                    <li><a href="wishlist">Wishlist Page</a></li>
                                    <li><a href="my-account">Account Page</a></li>
                                    <li><a href="login">Login & Register Page</a></li>
                                    <li><a href="empty-cart">Empty Cart Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><span class="menu-text">Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a href="404">404 Page</a></li>
                                    <li><a href="privacy-policy">Privacy Policy</a></li>
                                    <li><a href="faq">Faq Page</a></li>
                                    <li><a href="coming-soon">Coming Soon Page</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="menu-text">Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid">Blog Grid Page</a></li>
                            <li><a href="blog-grid-left-sidebar">Grid Left Sidebar</a></li>
                            <li><a href="blog-grid-right-sidebar">Grid Right Sidebar</a></li>
                            <li><a href="blog-single">Blog Single Page</a></li>
                            <li><a href="blog-single-left-sidebar">Single Left Sidebar</a></li>
                            <li><a href="blog-single-right-sidebar">Single Right Sidbar</a>
                        </ul>
                    </li>
                    <li><a href="about">About Us</a></li>
                    <li><a href="contact">Contact Us</a></li>
                </ul>
            </div>
            <!-- OffCanvas Menu End -->
            <div class="offcanvas-social mt-auto">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- OffCanvas Menu End -->


    {{-- <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="breadcrumb-title">Shop</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div> --}}

    <!-- breadcrumb-area end -->

    <!-- Cart Area Start -->
    <div class="cart-main-area pt-5 pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Your cart items</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datacart as $cart)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="product-detail"><img class="img-responsive ml-15px"
                                                    src="{{ asset('storage/' . $cart->PRODUCT_ID . '.jpeg') }}" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">{{$cart->PRODUCT_NAME}}</a></td>
                                        <td class="product-price-cart">Rp<span class="amount"> {{ number_format($cart->PRODUCT_PRICE, 0, ',', '.') }}</span></td>
                                        <td class="product-quantity" style="justify-content:center">

                                                @csrf


                                                <input type="number" style="width:80px" min=1 max= 10  data-id="{{ $cart->PRODUCT_ID }}" data-harga = "{{ $cart->PRODUCT_PRICE }}" name="qty" id="sst-{{ $cart->PRODUCT_ID }}" maxlength="2" value="{{ $cart->CART_QTY }}" title="Quantity:" class="input-text cart-qty">


                                        </td>

                                        <td class="product-subtotal">Rp {{ number_format($cart->SUBTOTAL, 0, ',', '.') }}</td>
                                        <td class="product-remove">
                                            <a href="#"><i class="fa fa-times" data-id="{{ $cart->PRODUCT_ID }}"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <script>
                              $(".cart-qty").on("change", function () {
            var harga = $(this).data("harga");
            var qty = $(this).val();
            var total = harga * qty;
            console.log(harga)
            $(this)
                .closest("tr")
                .find(".product-subtotal")
                .text("Rp " + total.toLocaleString("id-ID"));
        });

        $(".fa-times").click(function(){
            var id = $(this).data('id');
            var route = '{{route('deleteItem')}}'
            var token = $('meta[name="csrf-token"]').attr("content");
            $.ajax({
                url: route, // Assuming your deleteCart route is '/cart/delete'
        method: 'POST', // Use POST for deleting data
        data: { _token:token, produkid: id}, // Send user ID as data
        success: function(response){
          if (response.success) {
            // Cart deletion successful
            alert('Item deleted successfully');
            window.location.href = "/cart";

            // Update cart display on frontend (remove cart items, update total, etc.)
            // Your specific cart display update logic here
          } else {
            alert('Item deleted successfully');
            window.location.href = "/cart";
          }
        },
        error: function(error){
          console.error('Error:', error); // Log the error for debugging
          alert('An error occurred while deleting item.');
        }
            });
        });

                                </script>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="shop">Continue Shopping</a>
                                    </div>
                                    <div class="cart-clear">
                                        @csrf
                                        <button type="submit" class="upd">Update Shopping Cart</button>

                                        <a href="cart" class="delcart" data-route="{{route('deleteCart')}}" type="submit">Clear Shopping Cart</a>
                                    </div>
                                    <script>
                                         $(document).ready(function(){
    $('.delcart').click(function(event){
      event.preventDefault(); // Prevent default form submission

      // Get user ID from cookie or session (same as in deleteCart function)
      
      var token = $('meta[name="csrf-token"]').attr("content");
      var route = $(this).data('route');
      // Send AJAX request to deleteCart route
      $.ajax({
        url: route, // Assuming your deleteCart route is '/cart/delete'
        method: 'POST', // Use POST for deleting data
        data: { _token:token}, // Send user ID as data
        dataType: 'json', // Expect JSON response
        success: function(response){
          if (response.success) {
            // Cart deletion successful
            alert('Shopping cart cleared successfully');
            window.location.href = "/cart";

            // Update cart display on frontend (remove cart items, update total, etc.)
            // Your specific cart display update logic here
          } else {
            alert('Error clearing shopping cart: ' + response.message);
          }
        },
        error: function(error){
          console.error('Error:', error); // Log the error for debugging
          alert('An error occurred while clearing the cart.');
        }
      });
    });
  });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-md-30px">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                                </div>
                                @php
                                $userId = Cookie::get('user');

// Jika tidak ada di cookie, ambil dari session
if (!$userId) {
    $user = Session::get('user');

    // Jika tidak ada user di session, redirect ke halaman login atau lakukan tindakan lain


    $userId = $user->USER_ID;
}
                                    $total = DB::table('Cart')
                                    ->join('PRODUK','PRODUK.PRODUCT_ID','=','CART.PRODUCT_ID')
                                    ->select(DB::raw('SUM(PRODUK.PRODUCT_PRICE * CART.CART_QTY) AS TOTAL_AMOUNT'))
                                    ->where('CART.USER_ID', '=',$userId)
                                    ->where('CART.STATUS_DEL' ,'=', 0)
                                    ->first()
                                @endphp
                                <h5>Total products <span>Rp {{ number_format($total->TOTAL_AMOUNT, 0, ',', '.') }}</span></h5>
                                <div class="total-shipping">
                                    <h5>Total shipping</h5>
                                    <ul>
                                        
                                        <li><input type="radio" name="shipping" value="30000"/> Standard <span>Rp30.000</span></li>
                                        <li><input type="radio" name="shipping" value="50000"/> Express <span>Rp50.000</span></li>

                                    </ul>
                                </div>
                                <h4 class="grand-totall-title">Grand Total <span id="totalamount">Rp {{ number_format($total->TOTAL_AMOUNT, 0, ',', '.') }}</span></h4>
                                <a href="checkout">Proceed to Checkout</a>
                            </div>
                            <script>
                               document.addEventListener('DOMContentLoaded', (event) => {
    // Mendapatkan elemen total amount
    let totalAmountElement = document.getElementById('totalamount');
    let totalAmount = {{ $total->TOTAL_AMOUNT }}; // Pastikan ini adalah nilai numerik

    // Menambahkan event listener ke setiap radio button
    document.querySelectorAll('input[name="shipping"]').forEach((radio) => {
        radio.addEventListener('change', (event) => {
            let shippingCost = event.target.value; // Mengambil nilai dari radio button yang dipilih
            let grandTotal = totalAmount + parseInt(shippingCost); // Menambahkan biaya pengiriman ke total produk
            // Memperbarui total amount di halaman
            totalAmountElement.textContent = 'Rp ' + grandTotal.toLocaleString('id-ID', { minimumFractionDigits: 0, maximumFractionDigits: 0 });

    });
    
});
});

    $("input[type='radio'][name='shipping']").click(function(){
        var selectedValue = 0
        selectedValue = $(this).val();
        console.log(selectedValue);
        $.ajax({
            url: '{{ route('getShipping') }}', // Ganti dengan path ke fungsi getShipping Anda
            type: 'post',
            data: { 
                "_token": "{{ csrf_token() }}", 
                "shipping": selectedValue 
            },
            success: function(response){
                // Update tampilan shipping di sini jika diperlukan
            }
        });
    });

$('.upd').on('click', function() {
    var product = [];
  $('.cart-qty').each(function() {
    product.push({
         productId : $(this).data('id'),
         newQty : parseInt($(this).val())
    })
  });
  console.log(product);
  $.ajax({
    url: '{{route('updateCart')}}',
    type: 'POST',
   
    data: { products: product,  _token:  $('meta[name="csrf-token"]').attr("content") },
    success: function(response) {
      console.log("Server Response:", response); // Log response after receiving it
    },
    error: function(xhr, status, error) {
      console.error("Error:", xhr);  // Log error details in case of issues
    }
  });
});





                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->



    <!-- Search Modal Start -->
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
    <!-- Search Modal End -->

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
    @endsection

    <!-- Vendor JS -->
    <script src="{{asset('js/vendor/modernizr-3.11.2.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/plugins/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/plugins/countdown.js')}}"></script>
    <script src="{{asset('js/plugins/scrollup.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/plugins/venobox.min.js')}}"></script>
    <script src="{{asset('js/plugins/ajax-mail.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
