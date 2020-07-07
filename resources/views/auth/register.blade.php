@extends('layouts.themeauth')

@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <div class="col-lg-12 no-pdd">
                <div class="sn-field">
                    <input id="firstname" type="text" placeholder="Prenom" class="@error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                    <i class="la la-user"></i>
                </div><!--sn-field end-->
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-12 no-pdd">
                <div class="sn-field">
                    <input id="lastname" type="text" placeholder="Nom" class="@error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                    <i class="la la-user"></i>
                </div><!--sn-field end-->
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-12 no-pdd">
                <div class="sn-field">
                    <input id="phone" type="text" placeholder="Telephone" class="@error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                    <i class="la la-user"></i>
                </div><!--sn-field end-->
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-lg-12 no-pdd">
                <div class="sn-field">
                    <input id="email" type="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <i class="la la-user"></i>
                </div><!--sn-field end-->
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
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
                <div class="sn-field">
                    <input id="password-confirm" type="password" placeholder="Confirmez mot de passe" name="password_confirmation" required autocomplete="new-password">
                    <i class="la la-lock"></i>
                </div>
            </div>
            <div class="col-lg-12 no-pdd">
                <div class="checky-sec st2">
                    <div class="fgt-sec">
                        <input type="checkbox" name="cc" id="c2">
                        <label for="c2">
                            <span></span>
                        </label>
                        <small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
                    </div><!--fgt-sec end-->
                </div>
            </div>
            <div class="col-lg-12 no-pdd">
                <button type="submit" value="submit">{{ __('Register') }}</button>
            </div>
        </div>
    </form>
    <div class="login-resources">
        <a href="{{ route('login') }}"><h4>Vous etes deja inscrit, se connecter</h4></a>
    </div>

@endsection
