@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col">
            <h1><i class="fa fa-podcast" aria-hidden="true"></i> Halaman User: {{ $name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col p-2 m-2">
            <a href="/categories" class="btn btn-danger">Show Category</a>
        </div>
    </div>
    <div class="row">
        <div class="col p-2 m-2">
            @foreach ($posts as $post)
                <div class="card shadow m-2 p-2 rounded">
                    <div class="card-body">
                        <h3>{{ $post->title }}</h3>
                        <p class="text-muted text-small"> <i> <strong>By. <a
                                        href="/author/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                                </strong> in
                                <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                                    {{ $post->category->name }}</a></i>
                        </p>
                        <p class="d-inline-block text-truncate" style="max-width: 100%">{{ $post->excerpt }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="/blog/{{ $post->slug }}" class="btn btn-danger">Lihat Selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col p-2 m-2">
            <a href="/blog" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
@endsection
