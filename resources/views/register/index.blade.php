@extends('layouts.main')

@section('container')
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <main class="form-registration w-100 m-auto">
                <form action="/register" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name') is-invalid
                        @enderror"
                            id="name" placeholder="name" name="name" required value="{{ old('name') }}">
                        <label for="floatingInput">Full Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text"
                            class="form-control @error('username') is-invalid
                        @enderror"
                            id="username" placeholder="username" name="username" required value="{{ old('username') }}">
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email"
                            class="form-control @error('email') is-invalid
                        @enderror" id="email"
                            placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password"
                            class="form-control @error('password') is-invalid
                        @enderror"
                            id="password" placeholder="Password" name="password" required>
                        <label for="floatingPassword">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-danger w-100 py-2" type="submit">Register</button>
                    <small class="d-block text-center mt-3">Have an Account? <a href="/login"> Login Now!</a></small>
                </form>
            </main>
        </div>
    </div>
@endsection
