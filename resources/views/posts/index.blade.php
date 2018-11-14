@extends('layouts.layout') 
@section('content')
<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic ">
        Publications
        <hr>
    </h3>

    <div class="blog-post">
        @foreach($post as $posts)
        <h2 class="blog-post-title ">{{$posts->title}}...</h2>
    <p class="blog-post-meta border-bottom"><a class="tag-position" href="/post/list/{{$posts->id}}">Ler mais...</a></p>
         @endforeach

    </div>


</div>
@endsection