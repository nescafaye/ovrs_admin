@extends('layouts.app')

@section('auth')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid">

    <div class="form-container d-flex justify-content-center align-items-center" style="min-height: 100vh;">

        <!-- <img src="../assets/vango-logo.png" width="90" height="60" class="logo-head rounded mx-auto d-block" alt="VanGo logo"> -->

        <form class="p-5 form-float" action="{{ route('login') }}" method="POST" style="width: 30rem">
            @csrf

            <h3 class="head-text text-center pb-5 display-7">Login</h3>

            @error('password')

                <span>{{ $message }}</span>
                
            @enderror

            <input type="radio" name="user_role" id="admin">
            <label for="admin">Admin</label>
            <input type="radio" name="user_role" id="driver">
            <label for="driver">Driver</label>

            <br><br>

            <div class="form-floating mb-3">
                <input type="text" name="admin_un" class="form-control" id="floatingInput" placeholder="name@example.com" class="is-invalid" value="{{ old('admin_un') }}" required autocomplete="username"> 
                <span class="invalid-feedback"></span>
                <label for="floatingInput" class="form-label">{{ __('Enter Username') }}</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password-field" placeholder="Password" class="password <?php echo (!empty($pass_err)) ? 'is-invalid' : ''; ?>" required>
                <span class="invalid-feedback"></span>
                <i class="uil uil-eye-slash toggle-password" toggle="#password-field"></i>
                <label for="floatingPassword" class="form-label">{{ __('Enter Password') }}</label>
            </div>

            @if (Route::has('password.request'))
                <p class="text-right forgot-pass">
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                </p>
            @endif

            <div class="d-grid button">
                <input type="submit" name="btnLogin" value="{{ __('Login') }}">
                <!-- <button type="submit" name="btnLogin" class="btn">Login</button> -->
            </div>
        </form>
    </div>

</div>

<!-- Show password function -->

<script>
    $(".toggle-password").click(function() {

        $(this).toggleClass("uil-eye uil-eye-slash");

        var input = $($(this).attr("toggle"));

        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }

    });
</script>

@endsection
