@extends('dashboard.layout.main')

@section('content')
    <div class="my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-sm-12">
                <div class="card shadow mb-4 p-4">
                    <form action="/dashboard/blog" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title"
                                class="form-control @error('title')
                                is-invalid
                            @enderror"
                                id="title" placeholder="title" value="{{ old('title') }}" autofocus>
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text"
                                class="form-control @error('slug')
            is-invalid                    
                            @enderror"
                                value="{{ old('slug') }}" id="slug" placeholder="slug" name="slug">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <br>
                            <select
                                class="form-select category d-block w-100 @error('category_id')
                                is-invalid
                            @enderror"
                                name="category_id" id="category">
                                @foreach ($categories as $category)
                                    @if (old('category_id') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image Link</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5 rounded-4">
                            <input
                                class="form-control @error('image')
            is-invalid                    
                            @enderror"
                                type="text" id="image" name="image" onchange="previewImage()">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea
                                class="form-control @error('body')
                                is-invalid
                            @enderror"
                                id="body" rows="3" name="body">{{ old('body') }}</textarea>
                            @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-danger">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <script>
        // slug
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            preslug = preslug.replace(/\?/g, "");
            slug.value = preslug.toLowerCase();
        });

        // category
        $(document).ready(function() {
            $('.category').select2();
        });

        // post body
        ClassicEditor
            .create(document.querySelector('#body'))
            .catch(error => {
                console.error(error);
            });

        // image preview 
        function previewImage() {
            const image_preview = document.querySelector('.img-preview');

            image_preview.style.display = 'block';
            image_preview.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
@endsection
