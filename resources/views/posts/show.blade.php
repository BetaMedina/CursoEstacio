@extends('layouts.layout') 
@section('content')

<style>


</style>


<div class="col-md-8 blog-main">
    <h3 class="pb-3 mb-4 font-italic  unique">
        {{$post->title}} 
        <div class="btn-group left-position">
            <button type="button" class="btn btn-default dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="/post/delete/{{$post->id}}"><i class="fa fa-trash-alt" > Delete</i></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/post/edit/{{$post->id}}"><i class="fa fa-edit" > Edite</i></a>
            </div>
          </div>
        <hr>
    </h3> 
    

    <div class="blog-post">
        <p class="blog-post">{{$post->body}}</p>
        <p class="date-time">Created at {{$post->created_at->subDay()->diffForHumans()}}</p>

        <hr class="sublime">

    </div>

</div>
@endsection