@extends('dashboard.layout.main')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="m-0 font-weight-bold text-dark fw-bold">Post: {{ $post->title }}</h3>
                        </div>
                        <div class="col-12 my-2">
                            <form action="/dashboard/allblogs/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><i
                                        class="fa-solid fa-trash text-light"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col p-2 m-2">
                        <div class="card-body d-flex justify-content-center align-items-center flex-column">
                            @if ($post->image)
                                <div style="overflow: hidden; object-fit: contain; width=100%;">
                                    <img src="{{ $post->image }}" class="card-img-top img-thumbnail"
                                        alt="{{ $post->title }}">
                                </div>
                            @else
                                <div style="overflow: hidden; object-fit: contain; width=100%;">
                                    <img src="https://source.unsplash.com/500x400?{{ $post->title }}"
                                        class="card-img-top img-fluid col-sm-8" alt="{{ $post->title }}">
                                </div>
                            @endif
                            <div class="card-body">
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
                                <a href="/dashboard/blogs" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
