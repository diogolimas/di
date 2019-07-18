@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
    @if(isset($success))
        <div class="alert alert-success" role="alert">
            {{$success}}
        </div>
    @endif
        <form action="{{route('postar.denuncia')}}" method="post">
                {!!csrf_field()!!}
                <input type="text" placeholder="Digite a sua denúncia" name="descricao">
                <input type="file" name="imagem" accept="image/*">
                <button type="submit">Postar</button>
        </form>
        
    
    
@stop