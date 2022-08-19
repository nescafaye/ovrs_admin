@extends('layouts.app')

@section('auth')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('admin_fname') is-invalid @enderror" name="admin_fname" value="{{ old('admin_fname') }}" required autocomplete="fullname" autofocus>

                                @error('admin_fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('admin_un') is-invalid @enderror" name="admin_un" value="{{ old('admin_un') }}" required autocomplete="username" autofocus>

                                @error('admin_un')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('admin_mail') is-invalid @enderror" name="admin_mail" value="{{ old('admin_mail') }}" required autocomplete="email">

                                @error('admin_mail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('User role') }}</label>

                            <div class="col-md-6">

                                <div class="user-role">

                                    <div class="role user-admin">
                    
                                        <input type="radio" class="btn-check" name="is_admin" id="admin" autocomplete="off" value="1">
                                        <label class="btn btn-outline-success" for="admin"><span class="iconify" data-icon="eos-icons:admin" data-width="22" data-height="22"></span>Admin</label>
                    
                                    </div>
                    
                                    <div class="role user-driver">
                                        
                                        <input type="radio" class="btn-check" name="is_admin" id="driver" autocomplete="off" value="0">
                                        <label class="btn btn-outline-success" for="driver"><span class="iconify" data-icon="mdi:steering" data-width="22" data-height="22"></span>Driver</label>
                    
                                    </div>
                    
                                </div>

                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
