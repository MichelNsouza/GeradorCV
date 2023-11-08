<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- CSS do Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Seu CSS personalizado -->
    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #3498db; /* Define a cor de fundo que desejar */
            min-height: 100vh;
            position: relative;
            padding-bottom: 60px; /* Altura do rodapé */
        }
        .page-footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .main-container {
            background-color: #fff; /* Cor de fundo clara */
            border-radius: 10px; /* Borda arredondada */
            padding: 20px; /* Espaçamento interno */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* Sombra */
            margin-top: 20px; /* Margem superior para afastar do navbar */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Gerador CV</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajuda</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container main-container">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="page-footer">
            <!-- Rodapé do seu currículo -->
            <p>Direitos Autorais © {{ date('Y') }}</p>
        </div>
    </footer>

    <!-- JS do Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Seu JS personalizado -->
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
