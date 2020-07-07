@extends('layouts.themeauth')

@section('content')
            
    <form  method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row">
            <div class="col-lg-12 no-pdd">
                <div class="sn-field">
                    <input id="email" type="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <i class="la la-user"></i>
                </div>
                @error('email')
                    {{-- <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span> --}}
                    <div class="sn-field primary">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-lg-12 no-pdd">
                <div class="sn-field">
                    <input id="password" type="password" placeholder="Mot de passe" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <i class="la la-lock"></i>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-12 no-pdd">
                <div class="checky-sec">
                    <div class="fgt-sec">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="c1">
                            <span></span>
                        </label>
                        <small>Remember me</small>
                    </div><!--fgt-sec end-->
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    @endif
                </div>
            </div>
            <div class="col-lg-12 no-pdd">
                <button type="submit" value="submit">Se connecter</button>
            </div>
        </div>
    </form>
    <div class="login-resources">
        <a href="{{ route('register') }}"><h4>Vous n'avez pas de compte, creer un compte</h4></a>
    </div>

@endsection
