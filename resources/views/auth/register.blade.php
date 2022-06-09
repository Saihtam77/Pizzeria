    @extends('layouts.app')
    @section('content')
        <section class="container ">
            
            <form method="POST" action="{{ route('register') }}" class="d-flex flex-column align-items-center justify-content-center vh-100">
                @csrf

                <!-- Name -->
                <div class="mb-3 col-6 col-md-4">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" type="text" name="name" required autofocus>
                </div>

                <!-- Email Address -->
                <div class="mb-3 col-6 col-md-4">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" name="email" required>
                </div>

                <!-- Password -->
                <div class="mb-3 col-6 col-md-4">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" name="password" required autocomplete="">
                </div>

                <!-- Confirm Password -->
                <div class="mb-3 col-6 col-md-4">
                    <label class="form-label" for="password_confirmation">Confirm password</label>
                    <input class="form-control" type="password" name="password_confirmation" required="">
                </div>

                <div class="d-flex justify-content-between col-6 col-md-4">
                    
                    <a class="text-muted me-3 text-decoration-none" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                    <button class="btn btn-info">{{ __('Register') }}</button>
                    
                </div>
            </form>
        </section>
    @endsection
