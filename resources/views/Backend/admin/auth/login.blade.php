@extends('Backend.admin.auth.common-auth')
@push('styles')
<style>
   
    .validation-failed {
        border: 2px solid red;
    }
</style>
@endpush
@section('content')
<section id="logon">
    <div class="side" style="background-image: url({{ asset('/images/SK-logo.png')}})">
        <div class="content text-center">
            <h1>Please Login to continue</h1>
            <p>A platform with efficient integration of many features and so much more</p>
        </div>
    </div>
    <div class="contain">
        <div class="flex_row">
            <div class="col">
                <div class="in_col">
                    <form id="loginForm" action="{{ route('admin.login.view') }}" method="POST">
                        @csrf
                        <div class="log_blk">
                            <div class="txt text-center">
                                <h2>Admin Login</h2>
                            </div>
                            <div class="or"></div>
                            <div class="form_row row">
                                <div class="col-xs-12">
                                    <h6>Email Address<sup>*</sup></h6>
                                    <div class="form_blk">
                                        <input type="email" name="email" value="{{ old('email') }}"  id="email"
                                            class="text_box" placeholder="eg: sample@gmail.com">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <h6>Password<sup>*</sup></h6>
                                    <div class="form_blk pass_blk">
                                        <input type="password" name="password"  id="password" class="text_box"
                                            placeholder="eg: PassLogin%7" autocomplete="new-password">
                                        <i class="icon-eye" id="eye"></i>
                                    </div>
                                </div>
                                {{-- <div class="col-xs-12">
                                    <div class="form_blk">
                                        <div class="lbl_btn">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember">Remember me</label>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="btn_blk form_btn">
                                <button type="submit" class="site_btn block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        var isValid = true;
        var emailField = document.getElementById('email');
        var passwordField = document.getElementById('password');

        // Remove previous validation failed class
        emailField.classList.remove('validation-failed');
        passwordField.classList.remove('validation-failed');

        // Validate email field
        if (!emailField.value.trim()) {
            emailField.classList.add('validation-failed');
            isValid = false;
        }

        // Validate password field
        if (!passwordField.value.trim()) {
            passwordField.classList.add('validation-failed');
            isValid = false;
        }

        // Submit the form if valid
        if (isValid) {
            this.submit();
        } else {
            alert('Please fill out all fields.');
        }
    });

    document.getElementById('eye').addEventListener('click', function() {
        var passwordField = document.getElementById('password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            this.classList.add('visible');
        } else {
            passwordField.type = 'password';
            this.classList.remove('visible');
        }
    });
</script>
<script>
    $(document).ready(() => {
        $('html, body').animate({ scrollBottom: 0 }, 'fast');
    });
</script>

@endpush
