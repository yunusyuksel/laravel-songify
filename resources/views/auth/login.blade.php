@extends('layouts.user')






@section('leftSection')
<form id="login-form" class="form-box" action="{{route('login')}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="email">Email: </label> <br>
        <input name="email" place="Email" type="email">
        @error('email')
        <span class="error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password: </label> <br>
        <input name="password" type="password" place="Email">
        @error('password')
        <span class="error-message" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group text-center">
        <button class="btn btn-success btn-bg">Login</button>
    </div>

    <div class="form-group text-center">
        <a class="btn" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    </div>

    <div class="form-group text-center">
        <a class="btn" href="{{ route('register') }}">
            {{ __('Dont Have Any Account Yet?') }}
        </a>
    </div>




</form>
@endsection