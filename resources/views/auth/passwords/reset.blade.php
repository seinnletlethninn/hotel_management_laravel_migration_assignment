@extends('layouts.app')

@section('title', 'Reset Password')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/custom-auth-style.css') }}">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection

@section('content')

<div class="row inner">
  
  <div class="col-lg-4 div-side2 py-5 d-none d-lg-block" data-aos="fade-right" data-aos-duration="1000">
    <img src="{{ asset('backend/img/login.jpg') }}" class="shadow-sm img-fluid w-50 rounded-circle mb-4">
    <h1 class="my-5"><i class="fas fa-map-marker-alt fa-sm mr-2"></i> HOTEL RIZA.</h1>
    <p class="p-contact">
      +95 9129 1299 198 | hotelriza.info@gmail.com <br>
      Pyay Road, Yangon, Myanmar
    </p>
    <p class="p-since">
      <em>- Since 2020 -</em>
    </p>
  </div>

  <div class="col-lg-8 div-login-form py-5">

    <div class="row justify-content-md-center user-login">
      <div class="col-md-10">
        <h2>Reset Password</h2>
        <div class="card" data-aos="zoom-in" data-aos-duration="1000">
          <div class="card-header">
            <h4 class="mb-0">Reset Password Form</h4>
          </div>
          <div class="card-body">

            <form method="POST" action="{{ route('password.update') }}">
              @csrf

              <input type="hidden" name="token" value="{{ $token }}">

              <div class="form-group">
                <label for="email"><small>{{ __('Email Address') }}</small></label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  {{ $message }}
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password"><small>{{ __('Password') }}</small></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="&#10045;&#10045;&#10045;&#10045;&#10045;">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  {{ $message }}
                </span>
                @enderror
              </div>

              <div class="form-group">
                <label for="password-confirm"><small>{{ __('Confirm Password') }}</small></label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="&#10045;&#10045;&#10045;&#10045;&#10045;">
              </div>

              <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary btn-block py-2">{{ __('Reset Password') }}</button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection

@section('script')
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  
  <script>
    AOS.init();
    $(function () {
      $("body").niceScroll({
        cursorwidth: "8px",
        cursorborder: "1px solid rgba(12, 11, 9, 0.6)",
      });
    })
  </script>
@endsection