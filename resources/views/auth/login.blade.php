<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>BRSBD :: ADMIN</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Style -->

    <link rel="stylesheet" href="{{asset('/')}}/css/styleadmin.css" type="text/css" media="all" />
</head>

<body>
<!-- login form -->
<section class="w3l-login-form">
    <div id="form-section">
        <div class="wrapper">

            <!-- logo -->
            <div class="logo">
                <a class="brand-logo" href="{{ route('dashboard') }}">Admin {{ __('Login') }} </a>
            </div>
            <div class="logo">
                    @error('email')
                    <span class="invalid-feedback align-content-center mx-auto" role="alert" style="font-weight: bold; color: tomato ; font-size: x-large  ">
                                        <strong class="pl-lg-5 text-center align-content-center">{{ $message }}</strong>
                        </span>
                    @enderror
                    @error('password')
                    <span class="invalid-feedback align-content-center mx-auto" role="alert">
                                        <strong class="pl-lg-5 text-center align-content-center" >{{ $message }}</strong>
                                    </span>
                    @enderror
            </div>

            <!-- //logo -->

            <!-- form -->
            <div class="login-form">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-fields d-grid">

                        <input id="email" placeholder="Email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>


                        <input id="password" placeholder="Password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    </div>

                    <button name="btn" type="submit">{{ __('Login') }}</button>

                </form>
            </div>
            <div class="new-signup">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
            <!-- //form -->


            <div class="copy-right">
                <p>&copy; 2020 BRSBD . All rights reserved | Developed by Sabbir Alom Shuvo</p>
            </div>


        </div>
    </div>
</section>
<!-- /login form -->
</body>

</html>
