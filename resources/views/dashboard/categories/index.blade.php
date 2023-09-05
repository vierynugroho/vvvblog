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
                <div class="card-header py-3">
                    <div class="row d-flex justify-content-between">
                        <div class="col">
                            <a href="/dashboard/categories/create" class="btn btn-danger"><i class="fa-solid fa-plus"></i>
                                Add Category</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered display table-hover" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead class="table-danger align-middle text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td class="text-center align-middle">
                                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><i
                                                    class="fa-solid fa-circle-info text-light"></i></a>
                                            <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                                class="badge bg-warning"><i
                                                    class="fa-solid fa-pen-to-square text-dark"></i></a>
                                            <form action="/dashboard/categories/{{ $category->slug }}" method="post"
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
