@extends('front.layout.master')
@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                    <a href="">
                        <h2 class="post-title">Test</h2>
                        <img width="100%" height="100%" src="" alt="">
                        <h3 class="post-subtitle">İçeriğin bir kısmı</h3>
                    </a>
                    <p class="post-meta">
                        <strong>Kategori İsmi</strong><br>
                        <a href="#!">Tuncay Forma</a>
                        tarafından
                        24 Kasım, 2021
                        tarihinde yazıldı
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            </div>
        </div>
    </div>
@endsection
@section('site_header')
    Anasayfa
@endsection
