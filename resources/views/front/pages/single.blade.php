@extends('front.layout.master')
@section('content')
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <h1>{{$article->title}}</h1> <br>
                    <hr>
                    {!! $article->description !!}
                    <p>
                        <img width="100%" height="100%" src="{{asset($article->image)}}" alt="">
                        <strong>{{$article->getCategory->name}}</strong> kategorisinde
                        <a href="">Tuncay Forma</a>
                        tarafından
                        11/01/2021
                        tarihinde yazıldı.
                    </p>
                </div>
            </div>
        </div>
    </article>
@endsection


