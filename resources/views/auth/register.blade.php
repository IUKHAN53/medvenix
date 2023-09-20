@php
  $customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Register')

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
            <h4 class="mb-1 pt-2">Adventure starts here 🚀</h4>
            <p class="mb-4">Register using email!</p>

            <form id="formAuthentication" class="mb-3" action="{{route('register')}}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control {{$errors->has('email')?'is-invalid':''}}"
                       name="email" placeholder="Enter your email" autofocus>
                @error('email')
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                  <div data-field="formValidationName" data-validator="notEmpty">{{$message}}</div>
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control {{$errors->has('name')?'is-invalid':''}}"
                       name="name" placeholder="Enter your name" autofocus>
                @error('name')
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                  <div data-field="formValidationName" data-validator="notEmpty">{{$message}}</div>
                </div>
                @enderror
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password"
                         class="form-control {{$errors->has('password')?'is-invalid':''}}"
                         name="password"
                         placeholder="********"
                         aria-describedby="password"/>
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
                @error('password')
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                  <div data-field="formValidationName" data-validator="notEmpty">{{$message}}</div>
                </div>
                @enderror
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password_confirmation"
                         class="form-control {{$errors->has('password_confirmation')?'is-invalid':''}}"
                         name="password_confirmation"
                         placeholder="********"
                         aria-describedby="password_confirmation"/>
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
                @error('password_confirmation')
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                  <div data-field="formValidationName" data-validator="notEmpty">{{$message}}</div>
                </div>
                @enderror
              </div>

              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                  <label class="form-check-label" for="terms-conditions">
                    I agree to
                    <a href="javascript:void(0);">privacy policy & terms</a>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary d-grid w-100">
                Sign up
              </button>
            </form>

            <p class="text-center">
              <span>Already have an account?</span>
              <a href="{{route('login')}}">
                <span>Sign in instead</span>
              </a>
            </p>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
@endsection
