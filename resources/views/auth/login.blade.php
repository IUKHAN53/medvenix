@php
  $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Login')

@section('vendor-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}"/>
@endsection

@section('page-style')
  <link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
  <script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
  <script src="{{asset('assets/js/pages-auth.js')}}"></script>
@endsection

@section('content')
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-4">
        <!-- Login -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center mb-4 mt-2">
              <img
                src="{{asset('assets/img/logo.png')}}"
                alt=""
                style="width: 250px"
                data-app-light-img="logo.png"
                data-app-dark-img="logo-light.png"
              >
            </div>
            <!-- /Logo -->
            <h4 class="mb-1 pt-2">Welcome to {{config('variables.templateName')}}! 👋</h4>
            <p class="mb-4">Please sign in to your account</p>

            <form id="formAuthentication" class="mb-3" action="{{route('login')}}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}"
                       name="email" placeholder="Enter your email or username" autofocus>
                @error('email')
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                  <div data-field="formValidationName" data-validator="notEmpty">{{$message}}</div>
                </div>
                @enderror
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
{{--                  <a href="javascript:void(0);">--}}
{{--                    <small>Forgot Password?</small>--}}
{{--                  </a>--}}
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password"
                         class="form-control {{$errors->has('password')?'is-invalid':''}}"
                         name="password"
                         placeholder="********"
                         aria-describedby="password"/>
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me">
                  <label class="form-check-label" for="remember-me">
                    Remember Me
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>
            <p class="text-center">
              <span>New on our platform?</span>
              <a href="{{route('register')}}">
                <span>Create an account</span>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
