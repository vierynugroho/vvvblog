@extends('dashboard.layout.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="m-0 font-weight-bold text-dark fw-bold">User: {{ $user->name }}</h3>
                        </div>
                        <div class="col-12 my-2">
                            <a href="/dashboard/users/{{ $user->username }}/edit" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form action="/dashboard/users/{{ $user->username }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><i
                                        class="fa-solid fa-trash text-light"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <h3>{{ $user->name }}</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-danger">
                                    <tr class="text-center align-middle">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Admin</th>
                                        <th>Post by User</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center align-middle">
                                        <td>{{ $user->id }}</td>
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
                                        <td>{{ $blog_count }} Posts</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/dashboard/users" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
