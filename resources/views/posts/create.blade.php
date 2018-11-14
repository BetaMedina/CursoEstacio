@extends('layouts.layout')

@section('content')
<div class="col-md-8 blog-main">
    <h1>Create a Post</h1>
    <hr>

    <form method="post" action="/post">
        @csrf
            <div class="form-group">
              <label for="title">Titulo</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            
            <div class="form-group">
              <label for="MyPostArea">O que deseja compartilhar com o mundo?</label>
              <textarea class="form-control" id="MyPostArea" name="body" rows="7"></textarea>
            </div>
            <button class="btn btn-primary" style="margin-left:90%;">Enviar</button>
          </form>
</div>
@endsection

