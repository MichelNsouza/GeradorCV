@extends('template.pdfTemplate')

@section('content')

    <div class="container dados">
<!-- ***********************BOX DADOS***************************************************************** -->
        <div class="float-left text-left">
            <h1 class="nome">{{ $curriculo->nome }}</h1>
            <p class="cargo">{{ $curriculo->cargo }}</p>
        </div>

        <div class="contato float-right text-right">
            <p><i class="fab fa-linkedin"></i> {{ $curriculo->linkedin }}</p>
            <p><i class="far fa-envelope"></i> {{ $curriculo->email }}</p>
            <p><i class="fas fa-phone"></i> {{ $curriculo->telefone }}</p>
            <p><i class="fas fa-map-marker"></i> {{ $curriculo->endereco }}</p>
        </div>
    </div>
<!--************************ FIM BOX DADOS**************************************************** -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
<!-- ***********************BOX objetivos************************************************** -->
    <div class="container objetivo">
        <p class="titulo-objetivo">Objetivo e Meta</p>
        <p class="descricao-objetivo">{{ $curriculo->objetivo }}</p>
    </div>
<!-- ***********************FM BOX objetivos************************************************** -->

    <br><hr>

<!-- ***********************BOX EDUCAÇÃO******************************************************** -->
    <div class="container educacao">
        <p class="titulo-experiencia">Formação / Curso</p>
        <div class="descricao-experiencia">
            <p>{{ $curriculo->curso }} - {{ $curriculo->instituicao }}</p>
            <p>{{ $curriculo->descricaoEducacao }}</p>
            <p>Inicio: {{ $curriculo->inicioEducacao }} - Conclusão:{{ $curriculo->conclusaoEducacao }}</p>
        </div>
    </div>
<!-- ***********************FIM BOX EDUCAÇÃO************************************************** -->

    <br><hr>
<!-- ***********************BOX EXPERIENCIA************************************************** -->
    <div class="container experiencia">
        <p class="titulo-experiencia">Experiência Profissional</p>
        <div class="descricao-experiencia">
            <p>{{ $curriculo->empresa }} - {{ $curriculo->cargoEmpresa }}</p>
            <p>{{ $curriculo->descricaoEmpresa }}</p>
            <p>De: {{ $curriculo->entradaEmpresa }} Até:{{ $curriculo->saidaEmpresa }}</p>
        </div>
    </div>
<!-- ***********************FIM BOX EXPERIENCIA********************************************** -->
@endsection
