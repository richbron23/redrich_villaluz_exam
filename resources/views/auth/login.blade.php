<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in </title>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('login') }}" id="signup-form" class="signup-form">
                        @csrf
                        <h2 class="form-title">Login</h2>
                        <div class="form-group">
                            <input type="text" value="{{ old('email') }}" class="form-input{{ $errors->has('email') ? ' is-invalid': '' }}" name="email"  placeholder="Username"/>
                            @if ($errors->has('email'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" value="{{ old('password') }}" class="form-input{{ $errors->has('password') ? ' is-invalid': '' }}"  name="password" id="password" placeholder="Password"/>
                            @if ($errors->has('password'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('password') }}</strong>
                                </div>
                            @endif{{-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> --}}
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Don't have an account ? <a href="{{ route('register') }}" class="loginhere-link">Register Here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>