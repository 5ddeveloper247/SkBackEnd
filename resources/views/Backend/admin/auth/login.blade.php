{{--
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: #ff0000;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <!-- Display validation errors -->
        @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Display authentication error message -->
        @if (session('error'))
        <div class="error">
            {{ session('error') }}
        </div>
        @endif

        <!-- Login Form -->
        <form action="{{ route('admin.login.view') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>

</html> --}}





@extends('Backend.admin.auth.common-auth')
@push('styles')

@endpush

@section('content')
<section id="logon">
    <div class="side" style="background-image: url({{ asset('/images/cx_mires2-hpbanner_1122x850.jpg')}})">
        <div class="content text-center">
            {{-- <div class="logo">
                <a href="index.php"
                    style="background-image: url({{ asset('/images/logo-light.png')}}),  url('{{ asset('/images/logo.png') }})"></a>
            </div> --}}
            <h1>Please Login to continue</h1>
            <p>A platform with efficient integration of many features and so much more</p>
        </div>
    </div>
    <div class="contain">
        <div class="flex_row">
            <div class="col">
                <div class="in_col">
                    <form action="{{ route('admin.login.view') }} " method="POST">
                        @csrf
                        <div class="log_blk">
                            <div class="txt text-center">
                                <h2>Login</h2>
                                {{-- <p>Don’t have an account? <a href="register.php">Register</a></p> --}}
                            </div>
                            {{-- <div class="social_btn">
                                <button type="button" class="site_btn gm_btn"><img
                                        src="{{ asset('/images/google-icon.svg')}}" alt=""> Login with
                                    google</button>
                                <button type="button" class="site_btn fb_btn"><img
                                        src="{{ asset('/images/facebook-icon.svg')}}" alt=""> Login with
                                    facebook</button>
                            </div> --}}
                            <div class="or">Or</div>
                            <div class="form_row row">
                                <div class="col-xs-12">
                                    <h6>Email Address<sup>*</sup></h6>
                                    <div class="form_blk">
                                        <input type="email" name="email" value="{{ old('email') }}" required id="email" class="text_box"
                                            placeholder="eg: sample@gmail.com">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <h6>Password<sup>*</sup></h6>
                                    <div class="form_blk pass_blk">
                                        <input  type="password" name="password" required id="password" class="text_box"
                                            placeholder="eg: PassLogin%7" autocomplete="new-password">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form_blk">
                                        <div class="lbl_btn">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember">Remember me</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_blk form_btn">
                                <button type="submit" class="site_btn block">Login</button>
                            </div>
                            {{-- <div class="forgot text-center">
                                <a href="forgot-password.php" id="pass">Forgot Password?</a>
                            </div> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')

@endpush