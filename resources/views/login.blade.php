<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="robots" content="/, follow" />
    <title>PawPal</title>
    <meta name="description" content="Jesco - Fashion eCommerce HTML Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Add site Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon/favicon.ico') }}" type="image/png">

    <!-- vendor css (Icon Font) -->
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/vendor/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/vendor/font.awesome.css') }}" />

    <!-- plugins css (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/plugins/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/plugins/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/plugins/venobox.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
</head>

<script>
    function clearInputs() {
        document.getElementById("username").value = "";
        document.getElementById("password").value = "";
    }

    function handleSubmit(event) {
        event.preventDefault(); // Prevent form from submitting the traditional way
        clearInputs(); // Clear the inputs immediately after form submission
        event.target.submit(); // Submit the form
    }

    document.querySelector('form').addEventListener('submit', function(event) {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        if (!username || !password) {
            alert('Please enter both username and password');
            event.preventDefault(); // Prevent form submission if fields are empty
        }
    });

</script>

<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Top Bar -->
    {{-- <div class="header-to-bar"> HELLO EVERYONE! 25% Off All Products </div> --}}
    <!-- Top Bar -->
    <!-- resources/views/home.blade.php -->
    @extends('app')

    @section('title', 'Home')

    @section('content')
    <div class="offcanvas-overlay"></div>

    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" href="/login">
                                <h4>Login</h4>
                            </a>
                            <a href="/register">
                                <h4>Register</h4>
                            </a>
                        </div>
                        {{-- <form class="tab-content" autocomplete="off" onsubmit="handleSubmit(event)">
                            <div class="tab-pane active"> --}}
                                <!-- Login Form Start-->
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="{{ route('login.submit') }}" method="POST" autocomplete="off">
                                            @csrf
                                            <input type="text" id="USER_USERNAME" name="USER_USERNAME" placeholder="Username" autocomplete="new-username" required />
                                            <input type="password" id="USER_PASSWORD" name="USER_PASSWORD" placeholder="Password" autocomplete="new-password" required />
                                            <div class="button-box">
                                                <div class="login-toggle-btn">
                                                    <input type="checkbox" name="remember_me" />
                                                    <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                    <a href="#">Forgot Password?</a>
                                                </div>
                                                <button type="submit">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Login Form End-->
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
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
    <script src="{{ asset('js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/plugins/countdown.js') }}"></script>
    <script src="{{ asset('js/plugins/scrollup.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/plugins/venobox.min.js') }}"></script>
    <script src="{{ asset('js/plugins/ajax-mail.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
