@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 shadow">
            <form class="form-signin" method="POST" action="{{ route('login') }}" align="center" style="border-radius: 6px; width: 100%; background: #FFF !important; padding: 10%; position: absolute; margin-top: 35%;">
            @csrf
                <h1 class="h3 mb-3 font-weight-bold">Login</h1>
                <input style="margin-top: 10% !important;" id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <input style="margin-top: 5% !important;" id="inputPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <div class="form-check" style="margin-top: 5% !important;" >
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button style="width: 100% !important; padding: 2% 2%; margin-top: 5%" type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
