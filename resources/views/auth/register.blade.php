<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Registration System</title>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="{{ route('register') }}" class="signup-form">
                        @csrf
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input {{ $errors->has('firstname') ? ' is-invalid': '' }}"  value="{{ old('firstname') }}" name="firstname"  placeholder="First Name"/>
                            @if ($errors->has('firstname'))
                                <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('firstname') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input {{ $errors->has('lastname') ? ' is-invalid': '' }}"  value="{{ old('lastname') }}" name="lastname"  placeholder="Last Name"/>
                            @if ($errors->has('lastname'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('lastname') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input {{ $errors->has('email') ? ' is-invalid': '' }}" value="{{ old('email') }}" name="email" placeholder="Email Address"/>
                            @if ($errors->has('email'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input {{ $errors->has('age') ? ' is-invalid': '' }}"  value="{{ old('age') }}" name="age"  placeholder="Age"/>
                            @if ($errors->has('age'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('age') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-input {{ $errors->has('birthdate') ? ' is-invalid': '' }}" value="{{ old('birthdate') }}" name="birthdate" />
                            @if ($errors->has('birthdate'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('birthdate') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input {{ $errors->has('job_title') ? ' is-invalid': '' }}" value="{{ old('job_title') }}" name="job_title"   placeholder="Job Title"/>
                            @if ($errors->has('job_title'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('job_title') }}</strong>
                                </div>
                            @endif
                        </div>
            
                        <div class="form-group">
                            {{-- <label  for="exampleFormControlSelect1">Gender</label> --}}
                            <select class="form-input {{ $errors->has('access_level_id') ? ' is-invalid': '' }}" value="{{ old('access_level_id') }}" name="access_level_id">
                                <option value="">Select Access of Level</option>
                                @foreach($posts as $post)
                                <option value="{{ $post->access_level_id }}">{{ $post->description}}</option>
                                 @endforeach 
                            </select>
                            @if ($errors->has('access_level_id'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('access_level_id') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-input {{ $errors->has('password') ? ' is-invalid': '' }}" value="{{ old('password') }}" name="password" id="password" placeholder="Password"/>
                            {{-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> --}}
                            @if ($errors->has('password'))
                            <div style="margin-top: 15px" class="invalid-feedback">
                                <strong style="margin-top:2px ">{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation" id="re_password" placeholder="Confirm Password"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="{{ route('login') }}" class="loginhere-link">Login here</a>
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