@extends('dashboard.layout.main')
@section('content')
    {{-- @dd($user->is_admin) --}}
    <div class="my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-sm-12">
                <div class="card shadow mb-4 p-4">
                    <form action="/dashboard/users/{{ $user->username }}" method="post">
                        @method('put')
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name"
                                class="form-control @error('name')
                                is-invalid
                            @enderror"
                                id="fullname" placeholder="fullname" value="{{ old('name', $user->name) }}" autofocus>
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
                                id="username" placeholder="username" value="{{ old('username', $user->username) }}">
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
                                value="{{ old('email', $user->email) }}" id="email" placeholder="username"
                                name="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="is_admin" class="form-label">Is Admin</label>
                            <br>
                            <select
                                class="form-select is_admin d-block w-100 @error('is_admin')
                                is-invalid
                            @enderror"
                                name="is_admin" id="is_admin">
                                <option value="1" {{ $user->is_admin === 1 ? 'selected' : '' }}>Admin</option>
                                <option value="0" {{ $user->is_admin === 0 ? 'selected' : '' }}>Bukan
                                    Admin</option>
                            </select>
                            @error('is_admin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-floppy-disk"></i> Update
                            User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        // slug
        const name = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        name.addEventListener("keyup", function() {
            let preslug = name.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
    </script>
@endsection
