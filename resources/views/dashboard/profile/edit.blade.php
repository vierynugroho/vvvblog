@extends('dashboard.layout.main')
@section('content')
    {{-- @dd($user->is_admin) --}}
    <div class="my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-sm-12">
                <div class="card shadow mb-4 p-4">
                    <form action="/dashboard/profile/{{ auth()->user()->username }}" method="post">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name"
                                class="form-control @error('name')
                                is-invalid
                            @enderror"
                                id="fullname" placeholder="fullname" value="{{ old('name', auth()->user()->name) }}"
                                autofocus>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username"
                                class="form-control @error('username')
                                is-invalid
                            @enderror"
                                id="username" placeholder="username"
                                value="{{ old('username', auth()->user()->username) }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text"
                                class="form-control @error('email')
                                is-invalid                    
                            @enderror"
                                value="{{ old('email', auth()->user()->email) }}" id="email" placeholder="username"
                                name="email" readonly>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="is_admin" class="form-label">Is Admin</label>
                            <br>
                            @if ($user->is_admin)
                                <p class="badge bg-success p-2">Admin</p>
                            @else
                                <p class="badge bg-danger p-2">Not Admin</p>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-floppy-disk"></i> Update
                            User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
@endsection
