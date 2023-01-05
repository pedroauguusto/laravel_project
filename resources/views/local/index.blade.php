@extends('Layout.Site')

@section('titulo','Contatos')

@section('Conteudo')
    <h3>Essa é a view index</h3>

    @foreach($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->tel  }}</p>

    @endforeach
@endsection