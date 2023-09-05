@extends('layouts.main')
@section('container')
    {{-- @dd($blogs) --}}

    <div class="row">
        <div class="col">
            <h1><i class="fa fa-podcast" aria-hidden="true"></i> Post Category: {{ $category_name }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col m-2">
            <div class="card shadow m-2 p-2 rounded">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-md-6">
                            <div class="card shadow m-2 p-2 rounded">
                                <div class="card-body">
                                    <img src="https://source.unsplash.com/500x400?{{ $post->title }}"
                                        class="card-img-top img-thumbnail" alt="{{ $post->title }}">
                                    <h3>{{ $post->title }}</h3>
                                    <p class="text-muted text-small"> <i> <strong>By. <a
                                                    href="/author/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                                            </strong>
                                            in
                                            <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">
                                                {{ $post->category->name }}</a></i>
                                    </p>
                                    <p class="d-inline-block text-truncate" style="max-width: 100%">{{ $post->excerpt }}</p>
                                    <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                                </div>
                                <div class="card-footer">
                                    <a href="/blog/{{ $post->slug }}" class="btn btn-danger">Lihat Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <a href="/blog" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
