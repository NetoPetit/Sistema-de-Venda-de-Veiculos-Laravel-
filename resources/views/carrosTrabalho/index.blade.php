@extends('template_admin.index')

@section('conteudo')

    @guest

    <h2>Seja bem vindo Visitante!!!</h2>

    @endguest

    @auth

    <h2>Seja bem vindo Admin!!!</h2>

    @endauth

@endsection

