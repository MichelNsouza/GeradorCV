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
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
