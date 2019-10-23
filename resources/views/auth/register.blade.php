@extends('layouts.login_signup')

@section('content')
<div class="wrapper">
    <section class="signup-screen-sec">
        <div class="container">
            <div class="signup-screen">
            <a href="index.html"><img src="img/logo.png" class="img-responsive" alt=""></a>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <input placeholder="Please enter your name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input placeholder="Please enter email addresss" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input placeholder="Please enter password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input placeholder="Please enter confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">    
                    
                    <button class="btn btn-login" type="submit" >Sign Up</button>
                    <span>Have You Account? <a href="{{ route('login') }}"> Login</a></span>
            </form>
            </div>
        </div>
    </section>
</div>
@endsection
