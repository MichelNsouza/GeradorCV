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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
        .bordaCampos {
          border: 1px solid lightblue;
          padding: 5px;
          margin: 5pc;
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
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/MichelNsouza">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/MichelNsouza/GeradorCV">Ajuda</a>
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
            <p>Direitos Autorais  ©  Michel N Souza - {{ date('Y') }}</p>
        </div>
    </footer>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--<script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
    
<script>
    $(document).ready(function () {
        $("#telefone").mask("(99) 9 9999-9999", {
            clearIfNotMatch: true,
            placeholder: "(XX) 9 XXXX-XXXX"
        });

        // Adiciona um evento de input ao campo de telefone
        $("#telefone").on('input', function (event) {
            // Remove todos os caracteres não numéricos
            var phoneNumber = $(this).val().replace(/\D/g, '');

            // Atualiza o valor com a máscara
            $(this).val(phoneNumber.replace(/(\d{2})(\d{1})(\d{4})(\d{4})/, '($1) $2 $3-$4'));
        });
    });
</script>

<script>
$(document).ready(function () {
    var contadorEducacao = 1;
    var contadorExperiencia = 1;

    // Função para clonar campos de educação
    $('#adicionar-educacao').click(function () {
        contadorEducacao++;
        var educacaoClone = clonarElemento('educacao', contadorEducacao, 'formacao');
        $('#formacao').append(educacaoClone);
    });

    // Função para clonar campos de experiência
    $('#adicionar-experiencia').click(function () {
        contadorExperiencia++;
        var experienciaClone = clonarElemento('experiencia', contadorExperiencia, 'experiencia');
        $('#experiencia').append(experienciaClone);
    });

    function clonarElemento(idBase, contador, containerId) {
        var clone = $('#' + idBase).clone(true);
        clone.attr('id', idBase + contador);

        // Atualiza os IDs dos campos clonados para garantir unicidade
        clone.find('[id]').each(function () {
            var novoId = this.id + contador;
            $(this).attr('id', novoId);
        });

        return clone;
    }
});
</script>

   

  
</body>
</html>
