@extends('layouts.app')





@section('content')


<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">{{ __('Login') }}</p>
            
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                placeholder="Enter a valid email address" />
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              <label class="form-label" for="form3Example3">{{ __('Email Address') }}</label>
            </div>
           
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                placeholder="Enter password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <label class="form-label" for="form3Example4">{{ __('Password') }}</label>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
              </div>

            @if (Route::has('password.request'))
                <a class="btn btn-link" class="text-body" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif 
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{ route('register') }}"
                  class="link-danger">Register</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>
    
  </section>

@endsection
