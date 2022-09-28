
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <form class="p-5 form-float" action="{{ route('login') }}" method="POST" style="width: 30rem">
        @csrf

        <h3 class="head-text text-center pb-5 display-7">Login</h3>

        @if(Session::has('error'))
            <p class="alert alert-danger alert-dismissible fade show">{{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button> 
            </p>
        @endif


        <div class="form-floating mb-3">
            <input type="text" wire:model.lazy="username" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Enter Username"  value="{{ old('username') }}" required autocomplete="username"> 
            <label for="floatingInput" class="form-label">{{ __('Enter Username') }}</label>

            @error('username')
                <span class="error-validation" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="form-floating">
            <input type="password" wire:model.lazy="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password-field" placeholder="Enter Password" class="password" required>
            <i class="uil uil-eye-slash toggle-password" toggle="#password-field"></i>
            <label for="floatingPassword" class="form-label">{{ __('Enter Password') }}</label>

            @error('password')
                <span class="error-validation" role="alert">
                   {{ $message }}
                </span>
            @enderror
        </div>

        @if (Route::has('password.request'))
            <p class="text-right forgot-pass">
                <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
            </p>
        @endif

        <div class="d-grid button">
            <input type="submit" name="btnLogin" value="{{ __('Login') }}">
            

        </div>
    </form>

        
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

        function onButtonPress() {
            $('.alert').alert('close')
        }

    </script>


