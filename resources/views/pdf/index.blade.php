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
            margin: 0;
            padding: 0;
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
<br>
<br>
        <div class="container">
            <div class="dados">
                <div class="nome">
                    <h1>{{ $curriculo->nome }}</h1>
                </div>
                <div class="cargo">{{ $curriculo->cargo }}</div>
<br>
<br>
                <div class="contato float-right text-right">
                    <p><i class="fab fa-linkedin"></i> {{ $curriculo->linkedin }}</p>
                    <p><i class="far fa-envelope"></i> {{ $curriculo->email }}</p>
                    <p><i class="fas fa-phone"></i> {{ $curriculo->telefone }}</p>
                    <p><i class="fas fa-map-marker"></i> {{ $curriculo->endereco }}</p>
                </div>
            </div>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
        <div class="container">
            <div class="titulo-objetivo">Objetivos</div>
            <div class="descricao-objetivo">
                <p>{{ $curriculo->objetivo }}</p>
            </div>
        </div>
<br>
<br>
        <div class="container">
            <div class="titulo-experiencia">Experiências</div>
            <div class="descricao-experiencia">
                <p>{{ $curriculo->experiencia }}</p>
            </div>
        </div>
<br>
<br>
        <div class="container">
            <div class="titulo-experiencia">Formações / Cursos</div>
            <div class="descricao-experiencia">
                <p>{{ $curriculo->educacao }}</p>
            </div>
        </div>
    </div>
<!-- Inclua seus arquivos JS no final da página para melhorar o desempenho -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>