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
                            <a href="/dashboard/blog/{{ $post->slug }}/edit" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i> Edit</a>
                            <form action="/dashboard/blog/{{ $post->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('are you sure?')"><i
                                        class="fa-solid fa-trash text-light"></i> Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if ($post->image)
                        <div style="max-height: 400px; overflow: hidden;">
                            <img src="{{ $post->image }}" class="card-img-top img-thumbnail" alt="{{ $post->title }}">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/500x400?{{ $post->title }}"
                            class="card-img-top img-thumbnail" alt="{{ $post->title }}">
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
                        <a href="/dashboard/blog" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
