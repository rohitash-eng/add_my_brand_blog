@extends('layouts.login_signup')
<div class="wrapper">
    <section class="lost-ps-screen-sec">
        <div class="container">
             @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="lost-ps-screen">
                <a href="index.html"><img src="img/logo.png" class="img-responsive" alt=""></a>
                <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <input placeholder="Enter email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror    
                <button class="btn btn-login" type="submit">Submit</button>
                <span><a href="{{ route('login') }}"> Back To Login</a></span>
                </form>
            </div>
        </div>
    </section>
</div>
