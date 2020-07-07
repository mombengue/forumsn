@extends('layouts.themeauth')

@section('content')

    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="row">
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
                <button type="submit" value="submit">{{ __('Register') }}</button>
            </div>
        </div>
    </form>

@endsection
