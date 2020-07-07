@extends('layouts.themeauth')

@section('content')

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="row">
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
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    @endif
                </div>
            </div>
            <div class="col-lg-12 no-pdd">
                <button type="submit" value="submit">{{ __('Register') }}</button>
            </div>
        </div>
    </form>


@endsection
