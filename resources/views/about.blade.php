@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-4">
            <div class="shadow">
                <div class="p-3  d-flex justify-content-center align-items-center flex-column">
                    <img src="{{ asset('assets/img/' . $about_data['photo']) }}" alt="{{ $about_data['photo'] }}"
                        class="img-fluid rounded col-sm-6 rounded my-2">
                    <h4>{{ $about_data['name'] }}</h4>
                    <p>{{ $about_data['email'] }}</p>
                    <a href="https://www.instagram.com/viery.n/" target="_blank" class="btn btn-danger d-block"><i
                            class="fa-brands fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="shadow">
                <div class="p-3">
                    <h4><strong>VBlog</strong></h4>
                    <p>VBlog merupakan website yang berfungsi untuk menampilkan postingan-postingan dari
                        <strong>User</strong> yang akan disajikan kepada user lain untuk memperoleh berbagai informasi
                    </p>
                    <p>VBlog dibangun menggunakan <strong>Laravel 10</strong> Dengan beberapa ekosistem atau library
                        pendukung untuk mengoptimalkan pengalaman pengguna pada website ini</p>
                </div>
            </div>
        </div>
    </div>
@endsection
