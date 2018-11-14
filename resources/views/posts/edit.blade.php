@extends('layouts.layout')

@section('content')
<div class="col-md-8 blog-main">
    <h1>Edite seu Post</h1>
    <hr>

<form method="post" action="/post/update/{{$edit->id}}">
        @csrf
            <div class="form-group">
              <label for="title">Edite seu titulo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$edit->title}}">
            </div>
            
            <div class="form-group">
              <label for="MyPostArea">O que deseja editar?</label>
              <textarea class="form-control" id="MyPostArea" name="body" rows="7" >{{$edit->body}}</textarea>
            </div>
            <button class="btn btn-primary" style="margin-left:90%;">Enviar</button>
          </form>
</div>
@endsection

