<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VBlog - {{ $sub_title }}</title>

    @include('partials.bootstrap-head')

    @include('partials.fontawesome-head')

    {{-- My CSS --}}
    <link rel="stylesheet" href="/css/app.css">
    {{-- My CSS --}}
</head>

<body>
    @include('partials.navbar')

    {{-- Container --}}
    <div class="container mt-3">
        @yield('container')
    </div>
    {{-- Container --}}

    @include('partials.bootstrap-script')
</body>

</html>
