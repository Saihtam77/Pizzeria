@extends('layouts.app')
    @section('content')

        <section class="container d-flex flex-column">
            <form method="POST" action="{{ route('login') }}" class="d-flex flex-column align-items-center justify-content-center vh-100">
                @csrf
    
                <!-- Email Address -->
                <div class="mb-3 d-flex flex-column col-6 col-md-4">  
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" type="email" name="email" required autofocus>
                </div>
    
                <!-- Password -->
                <div class="mb-3 d-flex flex-column col-6 col-md-4">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" type="password" name="password" required autocomplete="current-password">
                </div>
    
                <!-- Remember Me -->
                <div class=" form-check mb-3">

                    <label class="form-check-label" for="remember_me">
                        {{ __('Remember Me') }}
                    </label>
                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember">
                    
                    
                </div>
    
                <div class="d-flex justify-content-between col-6 col-md-4">
                    
                    @if (Route::has('password.request'))
                        <a class="text-muted me-3" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button class="btn btn-info">{{ __('Log in') }}</button>
                   
                </div>
            </form>
        </section>
    @endsection
