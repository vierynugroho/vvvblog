@extends('dashboard.layout.main')

@section('content')
    <div class="row">
        <div class="col">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
                </div>
            @endif
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered display table-hover" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table-danger">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Is Admin</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="text-center align-middle">
                                            @if ($user->is_admin)
                                                <p class="badge bg-success">Admin</p>
                                            @else
                                                <p class="badge bg-danger">Not Admin</p>
                                            @endif
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="/dashboard/users/{{ $user->username }}" class="badge bg-info"><i
                                                    class="fa-solid fa-circle-info text-light"></i></a>
                                            <a href="/dashboard/users/{{ $user->username }}/edit"
                                                class="badge bg-warning"><i
                                                    class="fa-solid fa-pen-to-square text-dark"></i></a>
                                            <form action="/dashboard/users/{{ $user->username }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('are you sure?')"><i
                                                        class="fa-solid fa-trash text-light"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
