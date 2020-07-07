@extends('layouts.themeauth')

@section('content')

    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="row">
            <div class="col-lg-12 no-pdd">
                <div class="sn-field">
                    <input id="email" type="email" placeholder="Email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
                <button type="submit" value="submit">{{ __('Register') }}</button>
            </div>
        </div>
    </form>

@endsection
