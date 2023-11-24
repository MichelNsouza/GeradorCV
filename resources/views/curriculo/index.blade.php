@extends('template.template')

@section('title', 'Gerador de CV')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Bem-vindo ao Gerador de Currículo</h1>
        <p class="text-center">Este site irá ajudá-lo a criar um currículo profissional e personalizado em poucos minutos.</p>
        <p class="text-center">Você só precisa preencher alguns dados sobre você, sua formação, sua experiência e suas habilidades.</p>
        <p class="text-center">O site irá gerar um currículo em formato PDF que você poderá baixar, imprimir ou compartilhar.</p>
        <div class="d-flex justify-content-center">

            <a href="{{ route('create') }}" class="btn btn-primary btn-lg">Começar Agora teste</a>

        </div>
    </div>
@endsection