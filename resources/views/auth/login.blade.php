@extends('layouts.login_signup')
<div class="wrapper">
    <section class="login-screen-sec">
        <div class="container">
            <div class="login-screen">
            <a href="index.html"><img src="img/logo.png" class="img-responsive" alt=""></a>
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror    
            
                <button class="btn btn-login" type="submit">{{ __('Login')}}</button>
                <span>You Have No Account? <a href="{{ route('register') }}"> {{__('Create An Account')}}</a></span>
                <span><a href="{{ route('password.request') }}"> Forget Password</a></span>
            </form>
            </div>
        </div>
    </section>
</div>