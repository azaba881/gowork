@extends('layouts.form')

@section('content')
<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-5">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-2">
                            <a class="" href="{{route('home')}}"> <h4>CONNECTEZ VOUS</h4></a>

                    <form method="POST" class=" mb-5 login-input" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>  

                            <div class="col-md-12 pt-5">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-12 offset-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            
                                <button  type="submit" class="btn login-form__btn submit" style="width: 100%">
                                    {{ __('Login') }}
                                </button>
                        </div>
                        <p style="margin-bottom:-50px;margin-top:10px" class="text-center login-form__footer">Dont have account? <a href="page-register.html" class="text-primary">Sign Up</a> now</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
