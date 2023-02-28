<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="3sdcl Admin Code Challenge">
    <meta name="keywords" content="3sdcl, Admin, Code, Challenge">
    <meta name="author" content="chuksDev">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - 3sdcl Admin Code Challenge</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <style>
        .left{
            float: left;
        }
        .right{
            float: right;
        }
    </style>
</head>
<body class="account-page">

<div class="main-wrapper">
    <div class="account-content">
        <div class="login-wrapper">
            <div class="login-content">
                <div class="login-userset">
                    <div class="login-logo logo-normal">
                        <img src="{{ asset('assets/img/e-ADAPP-logo-23.png') }}" alt="img">
                    </div>
                    <a href="#" class="login-logo logo-white">
                        <img src="{{ asset('assets/img/e-ADAPP-logo-23.png') }}" alt="">
                    </a>
                    <div class="login-userheading">
                        <h2 style="color: #33ab77; font-weight: bolder">Sign In</h2>
                    </div>
                    <form method="post">
                        @csrf
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="text" value="chuksdeveloper@gmail.com" placeholder="Enter your email address">
                                <img src="{{ asset('assets/img/icons/mail.svg') }}" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" value="password" class="pass-input" placeholder="Enter your password">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                        <div class="form-login">
                            <div class="alreadyuser left">
                                <label class="">
                                    <input style="width: 20px !important; height: 20px !important;" type="checkbox" autocomplete="off"><span class="mx-2">Remember me</span>
                                </label>
                                {{--                            <input style="width: 20px !important; height: 20px !important;" type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>--}}
                            </div>
                            <div class="alreadyuser right">
                                <h4><a href="#" class="hover-a">Forgot Password?</a></h4>
                            </div>
                        </div>
                        <div class="form-login">
                            <button type="submit" class="btn btn-login">Login</button>
                        </div>
                    </form>
                    <div class="signinform text-center">
                        <h4>Don’t have an account? <a href="#" class="hover-a">Sign Up</a></h4>
                    </div>
                    <div class="form-setlogin">
                        <h4>Or continue with</h4>
                    </div>
                    <div class="form-sociallink">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/img/icons/google.png') }}" class="me-2" alt="google">
                                    Sign Up using Google
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/img/icons/facebook.png') }}" class="me-2" alt="google">
                                    Sign Up using Facebook
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <label class="pt-3">
                    By clicking the button above, you agree to our <a href="#">terms of use</a> and <a href="#">privacy policy</a>
                </label>
            </div>
            <div class="login-img">
                <img src="{{ asset('assets/img/login.svg') }}" style="width: 899px !important; height: 785px !important;" alt="img">
            </div>
        </div>
    </div>
</div>


<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script src="{{ asset('assets/js/feather.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
