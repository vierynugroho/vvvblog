@extends('layouts.main')
@section('container')
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-10 col-md-12">
            <div class="row my-3">
                <div class="col-md-6">
                    <h1><i class="fa fa-podcast" aria-hidden="true"></i> {{ $title }} </h1>
                </div>

                {{-- Search --}}
                <div class="col-md-6">
                    <form action="/blog">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <div class="input-group mb-3">
                            <input type="text" name="search" id="search" placeholder="search" class="form-control"
                                value="{{ request('search') }}">
                            <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- Search --}}

            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">All Posts <strong>{{ $sub_title }}</strong></h1>
                </div>
            </div>
            @if ($posts->count())
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            @if ($posts[0]->image)
                                <div style="max-height: 400px; overflow: hidden;">
                                    <img src="{{ $posts[0]->image }}" class="card-img-top img-thumbnail"
                                        alt="{{ $posts[0]->title }}">
                                </div>
                            @else
                                <div style="max-height: 400px; overflow: hidden;">
                                    <img src="https://source.unsplash.com/500x400?{{ $posts[0]->title }}"
                                        class="card-img-top img-thumbnail" alt="{{ $posts[0]->title }}">
                                </div>
                            @endif
                            <div class="card-body">
                                <h4><a href="/blog/{{ $posts[0]->slug }}"
                                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h4>
                                <p class="text-muted text-small"> <small class="text-muted"> <i> <strong>By. <a
                                                    href="/blog?author={{ $posts[0]->author->username }}"class="text-decoration-none">{{ $posts[0]->author->name }}</a>
                                            </strong> in
                                            <a href="/blog?category={{ $posts[0]->category->slug }}"
                                                class="text-decoration-none">
                                                {{ $posts[0]->category->name }}</a></i></small>
                                </p>
                                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                                <p class="card-text"><small
                                        class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="/blog/{{ $posts[0]->slug }}" class="btn btn-danger d-block">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col p-2 m-2">
                        <a href="/categories" class="btn btn-danger">Show Category</a>
                    </div>
                </div>
                <div class="row">
                    @foreach ($posts->skip(1) as $post)
                        <div class="col col-md-4 col-sm-6">
                            <div class="card shadow m-2 p-2 rounded">
                                @if ($post->image)
                                    <div style="max-height: 300px; overflow: hidden;">
                                        <img src="{{ $post->image }}" class="card-img-top img-thumbnail"
                                            alt="{{ $post->title }}">
                                    </div>
                                @else
                                    <div style="max-height: 300px; overflow: hidden;">
                                        <img src="https://source.unsplash.com/500x400?{{ $post->title }}"
                                            class="card-img-top img-thumbnail" alt="{{ $post->title }}">
                                    </div>
                                @endif
                                <div class="card-body">
                                    <h5 class="text-truncate" style="max-width: 100%"><a href="/blog/{{ $post->slug }}"
                                            class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                                    <small>
                                        <p class="text-muted text-small text-truncate" style="max-width: 100%"> <i>
                                                <strong>By.
                                                    <a
                                                        href="/blog?author={{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>
                                                </strong> in
                                                <a href="/blog?category={{ $post->category->slug }}"
                                                    class="text-decoration-none">
                                                    {{ $post->category->name }}</a></i>
                                        </p>
                                    </small>
                                    <p class="d-inline-block text-truncate" style="max-width: 100%">{{ $post->excerpt }}
                                    </p>
                                    <p class="card-text"><small
                                            class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="/blog/{{ $post->slug }}" class="btn btn-danger d-block">Lihat
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="alert alert-danger text-center fs-3">No Post Found</p>
            @endif

            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
