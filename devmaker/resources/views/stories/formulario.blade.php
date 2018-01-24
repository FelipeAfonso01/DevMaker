@extends('layout.principal')

@section('conteudo')

  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    </div>
  @endif

  <form action="/newpost/adiciona" method="POST">
    <input  type="hidden" value="{{ csrf_token() }}" name="_token" />

    <div class="form-group">
      <label>Titulo</label>
      <input class="form-control" name="title" value="{{ old('title') }}"/>
    </div>

    <div class="form-group">
      <label>Descrição</label>
      <textarea name="description" class="form-control">{{ old('description') }}</textarea>
    </div>
    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
    <button class="btn btn-primary" type="submit">Adicionar</button>
  </form>


@endsection
