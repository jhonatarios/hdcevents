@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Tela de produtos</h1>
<a href="/">Voltar para a home</a>
@if($busca != '')
<p>O usuario está buscando por {{ $busca }}</p>
@endif

@endsection
