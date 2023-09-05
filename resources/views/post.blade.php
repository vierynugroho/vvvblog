@extends('layouts.main')
@section('container')
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-10">
            <div class="row">
                <div class="col">
                    <h1><i class="fa fa-podcast" aria-hidden="true"></i> Halaman Post Detail</h1>
                </div>
            </div>
            <div class="row">
                <div class="col p-2 m-2">
                    <div class="card shadow m-2 p-2 rounded">
                        <div class="card-body">
                            @if ($post->image)
                                <div style="overflow: hidden; object-fit: contain; width=100%;">
                                    <img src="{{ $post->image }}" class="card-img-top img-fluid" alt="{{ $post->title }}">
                                </div>
                            @else
                                <div style=" overflow: hidden; object-fit: contain; width=100%;">
                                    <img src="https://source.unsplash.com/500x400?{{ $post->title }}"
                                        class="card-img-top img-fluid" alt="{{ $post->title }}">
                                </div>
                            @endif
                            <h3>{{ $post->title }}</h3>
                            <p class="text-muted text-small"> <i> <strong>By. <a
                                            href="/blog?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                                    </strong> in
                                    <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">
                                        {{ $post->category->name }}</a></i>
                                <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                            </p>
                            {!! $post->body !!}
                        </div>
                        <div class="card-footer">
                            <a href="/blog" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
