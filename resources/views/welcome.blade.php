<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/style.css" class="css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Algum titulo</h1>
        <img src="/img/banner.jpg" width="700px" alt="hm" srcset="">
        @if(10 > 15)
            <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Jhow")
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos, e trabalha como {{ $profissao }}</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
            <p>O i é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php
            $name = "João";
            echo $name;
        @endphp


        <!-- Batata doce -->
        {{-- Batata doce oculta --}}
    </body>
</html>
