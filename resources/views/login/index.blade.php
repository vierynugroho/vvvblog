@extends('layouts.main')

@section('container')
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin w-100 m-auto">
                <form action="/login" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Please LogIn</h1>

                    <div class="form-floating">
                        <input type="email"
                            class="form-control @error('email')
                            is-invalid
                        @enderror"
                            id="email" placeholder="name@example.com" name="email" autofocus required
                            value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password"
                            required>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="btn btn-danger w-100 py-2" type="submit">Login</button>
                    <small class="d-block text-center mt-3">Not Registered? <a href="/register"> Register Now!</a></small>
                </form>
                <p class="text-center"><small>or</small></p>
                <p class="text-center" style="margin-top: -25px"><small>Login With</small></p>
                <div class="d-flex justify-items-center justify-content-between mt-4">

                    <a href="/auth/google" class="nav-link">
                        Login Google
                    </a>
                    <br>
                    <a href="/auth/github" class="nav-link">
                        Login GitHub
                    </a>
                </div>
            </main>
        </div>
    </div>
@endsection
