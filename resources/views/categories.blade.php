@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col">
            <h1><i class="fa fa-podcast" aria-hidden="true"></i> {{ $title }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col p-2 m-2">
            <div class="card shadow m-2 p-2 rounded">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-6 col-md-3 col-sm-4">
                            <div class="card mb-3">
                                <img src="https://source.unsplash.com/500x400?{{ $category->name }}"
                                    class="card-img-top img-thumbnail" alt="{{ $category->name }}">
                                <div class="card-body text-center">
                                    <h4>{{ $category->name }}</h4>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="/blog?category={{ $category->slug }}" class="btn btn-danger d-block">Lihat
                                        Post</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $categories->links('pagination::bootstrap-5') }}
                <a href="/blog" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
