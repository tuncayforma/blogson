@extends('front.layout.master')
@section('content')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @foreach($articles as $article)
                <div class="post-preview">
                    <a href="{{route('article.single',$article->slug)}}">
                        <h2 class="post-title">{{$article->title}}</h2>
                        <img width="100%" height="100%" src="{{asset($article->image)}}" alt="">
{{--                        <h3 class="post-subtitle">{!!\Illuminate\Support\Str::limit($article->description,70)!!}</h3>--}}
                        <h3 class="post-subtitle">{!! \Illuminate\Support\Str::limit(strip_tags($article->description),70) !!}</h3>
                    </a>
                    <p class="post-meta">
                        <strong>{{$article->getCategory->name}}</strong><br>
                        <a href="#!">Tuncay Forma</a>
                        tarafından
                        24 Kasım, 2021
                        tarihinde yazıldı
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('site_header')
    Anasayfa
@endsection
