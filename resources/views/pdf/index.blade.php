<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 0; /* Remova as margens */
        }

        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            padding: 0;
            border: 2px solid black;
        }
        hr {
          border: 1px solid black; 
          margin: 0 0; 
          width: 95%; 
        }
        .sheet {
            /* Ajuste as dimensões para ocupar a página inteira */
            width: 100%;
            height: 100%;
            padding: 10px;
        }

        /* Estilos personalizados */
        /* Adicione estilos conforme necessário para ajustar o layout */
        .dados {
            /* Ajuste o posicionamento dos elementos de dados */
            display: flex;
            justify-content: space-between;
        }

        .nome {
            font-size: 24px; /* Aumente o tamanho da fonte conforme necessário */
        }

        .cargo {
            font-size: 18px; /* Aumente o tamanho da fonte conforme necessário */
        }

        .contato {
            font-size: 14px; /* Aumente o tamanho da fonte conforme necessário */
        }

        .titulo-objetivo,
        .titulo-experiencia,
        .titulo-educacao {
            font-size: 20px; /* Aumente o tamanho da fonte conforme necessário */
        }

        .descricao-objetivo,
        .descricao-experiencia,
        .descricao-educacao {
            font-size: 16px; /* Aumente o tamanho da fonte conforme necessário */
        }
    </style>
</head>
<body>
<div class="sheet">

    <div class="container dados"> <!--  ***********************BOX DADOS******************** -->

        <div class="float-left text-left">
          <h1 class="nome">{{$curriculo->nome}}</h1>
          <p class="cargo">{{$curriculo->cargo}}</p>
        </div>

        <div class="contato float-right text-right">
          <p><i class="fab fa-linkedin"></i> {{ $curriculo->linkedin }}</p>
          <p><i class="far fa-envelope"></i> {{ $curriculo->email }}</p>
          <p><i class="fas fa-phone"></i> {{ $curriculo->telefone }}</p>
          <p><i class="fas fa-map-marker"></i> {{ $curriculo->endereco }}</p>
        </div>

    </div> <!--************************ FIM BOX DADOS************************** -->

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>

    <div class="container objetivo">
      <p class="titulo-objetivo">Objetivo e Meta</p>
      <p class="descricao-objetivo">{{$curriculo->objetivo}}</p>
    </div>

<br><hr>

    <div class="container educacao">
        <p class="titulo-experiencia">
          Formação / Curso
        </p>
      <div class="descricao-experiencia">
        <p>{{$curriculo->curso}} - {{$curriculo->instituicao}}</p>
        <p>{{$curriculo->descricaoEducacao}}</p>
        <p>Inicio: {{$curriculo->inicioEducacao}} - Conclusão:{{$curriculo->conclusaoEducacao}}</p>
      </div>
    </div>

<br><hr>

    <div class="container experiencia">
        <p class="titulo-experiencia">
          Experiência Profissional
        </p>

        <div class="descricao-experiencia">
          <p>{{$curriculo->empresa}} - {{$curriculo->cargoEmpresa}}</p>
          <p>{{$curriculo->descricaoEmpresa}}</p>
          <p>De: {{$curriculo->entradaEmpresa}} Até:{{$curriculo->saidaEmpresa}}</p>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>