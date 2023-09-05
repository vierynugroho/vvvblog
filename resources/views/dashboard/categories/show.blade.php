@extends('dashboard.layout.main')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="m-0 font-weight-bold text-dark fw-bold">Category: {{ $category->name }}</h3>
                        </div>
                        <div class="col-12 my-2">
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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
                        <h3>{{ $category->title }}</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-danger">
                                    <tr class="text-center align-middle">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Post in Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center align-middle">
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>{{ $blog_count }} Posts</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/dashboard/categories" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
