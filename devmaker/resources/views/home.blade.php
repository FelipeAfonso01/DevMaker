@extends('layout.principal')

@section('conteudo')
  <link rel='stylesheet prefetch' href='https://storage.googleapis.com/code.getmdl.io/1.0.0/material.indigo-pink.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

<style>
.mdl-card + .mdl-card {
margin-top: 40px;
}

.mdl-card--horizontal {
flex-direction: column;
height: 1vh;
/* 1 */
padding-left: 150px;
width: 100%;
}
.mdl-card--horizontal .mdl-card__media {
left: 0;
position: absolute;
width: 150px;
}
.mdl-card--horizontal .mdl-card__supporting-text {
flex: 1 1 auto;
width: auto;
}

.mdl-card--horizontal-2 {
flex-direction: row;
flex-wrap: wrap;
min-height: 0px;
}
.mdl-card--horizontal-2 .mdl-card__title {
align-items: flex-start;
flex-direction: column;
flex: 1 auto;
float: left;
}
.mdl-card--horizontal-2 .mdl-card__title-text {
align-self: flex-start;
}
.mdl-card--horizontal-2 .mdl-card__media {
flex: 0 auto;
float: right;
height: 112px;
margin: 16px 16px 0 0;
width: 112px;
}
.mdl-card--horizontal-2 .mdl-card__actions {
clear: both;
flex: 1 auto;
}

</style>

<div class="container">
    <div class="row">
        <h3>  Olá, {{ Auth::user()->name }}!<br> Aqui você pode visualizar e cadastrar novas publicações</h3>
        @if(isset($mensagem))
            <div class="alert alert-success">
              <strong>Sucesso!</strong> O post foi adicionado.
            </div>
        @endif
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Timeline</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach($usuarios as $user)
                      @foreach($user->stories as $st)
                        <div class="mdl-card mdl-shadow--2dp mdl-card--horizontal">
                        <div class="mdl-card__media">
                          <img src="http://placehold.it/150x200/DC143C/FFFFFF" alt="img">
                        </div>
                          <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">{{$st->title}}</h2>
                          </div>
                          <div class="mdl-card__supporting-text">
                              {{$st->description}}
                          </div>
                          <div class="mdl-card__actions mdl-card--border">
                            <p>Post Criado por: {{$user->name}}. <p>Dia: {{$st->created_at}}</p>
                          </div>

                      </div>
                      @endforeach

                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script src='https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js'></script>
<script src='https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js'></script>
@endsection
