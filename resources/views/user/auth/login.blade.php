<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<!-- Mirrored from uomo-html.flexkitux.com/Demo1/login_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Dec 2023 12:08:08 GMT -->

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="flexkit" />

    <link rel="shortcut icon" href="https://uomo-html.flexkitux.com/images/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <!------------------ Fonts ------------------>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&amp;display=swap" rel="stylesheet">

    <!--------------- Stylesheets --------------->
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/swiper.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/plugins/jquery.fancybox.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}" type="text/css" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->

    <!------------- Document Title -------------->
    <title>Uomo | Modern & Multipurpose eCommerce HTML5 Template</title>

</head>

<body>
    <main>
        <div class="mb-4 pb-4"></div>
        <section class="login-register container">
            <ul class="nav nav-tabs mb-5" id="login_register" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link nav-link_underscore active" id="login-tab" data-bs-toggle="tab"
                        href="#tab-item-login" role="tab" aria-controls="tab-item-login"
                        aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link nav-link_underscore" id="register-tab" data-bs-toggle="tab"
                        href="#tab-item-register" role="tab" aria-controls="tab-item-register"
                        aria-selected="false">Register</a>
                </li>
            </ul>
            <div class="tab-content pt-2" id="login_register_tab_content">
                <div class="tab-pane fade show active" id="tab-item-login" role="tabpanel" aria-labelledby="login-tab">
                    <div class="login-form">
                        <form name="login-form" class="needs-validation" novalidate>
                            <div class="form-floating mb-3">
                                <input name="login_email" type="email" class="form-control form-control_gray"
                                    id="customerNameEmailInput" placeholder="Email address *" required>
                                <label for="customerNameEmailInput">Email address *</label>
                            </div>

                            <div class="pb-3"></div>

                            <div class="form-floating mb-3">
                                <input name="login_password" type="password" class="form-control form-control_gray"
                                    id="customerPasswodInput" placeholder="Password *" required>
                                <label for="customerPasswodInput">Password *</label>
                            </div>

                            <div class="d-flex align-items-center mb-3 pb-2">
                                <div class="form-check mb-0">
                                    <input name="remember" class="form-check-input form-check-input_fill"
                                        type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label text-secondary" for="flexCheckDefault">Remember
                                        me</label>
                                </div>
                                <a href="reset_password.html" class="btn-text ms-auto">Lost password?</a>
                            </div>

                            <button class="btn btn-primary w-100 text-uppercase" type="submit">Log In</button>

                            <div class="customer-option mt-4 text-center">
                                <span class="text-secondary">No account yet?</span>
                                <a href="#register-tab" class="btn-text js-show-register">Create Account</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-item-register" role="tabpanel" aria-labelledby="register-tab">
                    <div class="register-form">
                        <form name="register-form" class="needs-validation" novalidate>
                            <div class="form-floating mb-3">
                                <input name="register_username" type="text" class="form-control form-control_gray"
                                    id="customerNameRegisterInput" placeholder="Username" required>
                                <label for="customerNameRegisterInput">Username</label>
                            </div>

                            <div class="pb-3"></div>

                            <div class="form-floating mb-3">
                                <input name="register_email" type="email" class="form-control form-control_gray"
                                    id="customerEmailRegisterInput" placeholder="Email address *" required>
                                <label for="customerEmailRegisterInput">Email address *</label>
                            </div>

                            <div class="pb-3"></div>

                            <div class="form-floating mb-3">
                                <input name="register_password" type="password"
                                    class="form-control form-control_gray" id="customerPasswodRegisterInput"
                                    placeholder="Password *" required>
                                <label for="customerPasswodRegisterInput">Password *</label>
                            </div>

                            <div class="d-flex align-items-center mb-3 pb-2">
                                <p class="m-0">Your personal data will be used to support your experience throughout
                                    this website, to manage access to your account, and for other purposes described in
                                    our privacy policy.</p>
                            </div>

                            <button class="btn btn-primary w-100 text-uppercase" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!----------- External JavaScripts ---------->
    <script src="{{ asset('user/assets/js/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/bootstrap-slider.min.js') }}"></script>

    <script src="{{ asset('user/assets/js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/countdown.js') }}"></script>
    <script src="{{ asset('user/assets/js/plugins/jquery.fancybox.js') }}"></script>

    <!-------------- Footer Scripts ------------->
    <script src="{{ asset('user/assets/js/theme.js') }}"></script>

</body>

<!-- Mirrored from uomo-html.flexkitux.com/Demo1/login_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Dec 2023 12:08:08 GMT -->

</html>
