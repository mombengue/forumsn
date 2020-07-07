@extends('layouts.themeauth')

@section('content')

    @if (session('resent'))
    <div class="alert alert-success" role="alert">
        {{ __('A fresh verification link has been sent to your email address.') }}
    </div>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }},
    <form  method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <div class="row">
            <div class="col-lg-12 no-pdd">
                <button type="submit" value="submit">{{ __('click here to request another') }}</button>
            </div>
        </div>
    </form>

@endsection
