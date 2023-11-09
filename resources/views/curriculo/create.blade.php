@extends('template.template')
@section('title', 'Gerador de CV')
@section('content')

<div class="container mt-5">
  <h1 class="text-center mb-4">Formulário</h1>
  <p class="text-center">Preencha os campos abaixo com os dados necessários para o seu currículo.</p>
  <form action="/store" method="post">
    @csrf
    @method('POST')
    <!-- form -->
    <fieldset class="card mb-4">
      <legend class="card-header">Informações pessoais</legend>
      <div class="card-body">
        <!-- box nome -->
        <div class="form-group">
          <label for="nome">Nome completo</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
        </div>
        <!-- box cargo -->
        <div class="form-group">
          <label for="cargo">Cargo Pretendido</label>
          <input type="text" class="form-control" id="cargo" name="cargo" placeholder="Digite seu cargo pretendido" required>
        </div>
        <!-- box endereço -->
        <div class="form-group">
          <label for="endereco">Endereço</label>
          <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite seu endereço" required>
        </div>
        <!-- box telefone -->

        <div class="form-group">
          <label for="telefone">Número de telefone</label>

          <input 
            type="tel" 
            class="form-control"   
            id="telefone" 
            name="telefone" 
            placeholder="(XX) 9 XXXX-XXXX"
            required 
            "
          >
        </div>

        <!-- box email -->
        <div class="form-group">
          <label for="email">Endereço de e-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu endereço de e-mail" required>
        </div>
        <!-- box LinkedIn -->
        <div class="form-group">
          <label for="linkedin">Perfil de LinkedIn ou equivalente</label>
          <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="Digite o link do seu perfil de LinkedIn">
        </div>
        </fieldset>

<fieldset class="card mb-4">
        <legend class="card-header">Informações Profissionais</legend>
          <div class="form-group m-4">
            <label for="objetivo">
              Objetivos
            </label>
            <input 
              type="text" 
              class="form-control" 
              id="objetivo" 
              name="objetivo" 
              placeholder="Digite seus objetvos e metas"
          required 
            >
          </div><!-- box educação -->


          <div class="form-group m-4" id="educacao" >

          <h4 class="">Experiencia Acadêmica</h4>
          
          <label for="curso">Formação:</label>
          <input type="text" class="form-control" id="curso" name="curso" placeholder="Digite uma formação">

          <label for="formacao">Instituição:</label>
          <input type="text" class="form-control" id="instituicao" name="instituicao" placeholder="Digite o nome da Instituição">

          <label for="inicioEducacao">Inicio:</label>
          <input type="date" class="form-control" id="inicioEducacao" name="inicioEducacao">
          
          <label for="conclusaoEducacao">Conclusão:</label>
          <input type="date" class="form-control" id="conclusaoEducacao" name="conclusaoEducacao">

          <label for="descricaoEducacao">Descrição:</label>
          <textarea class="form-control" id="descricaoEducacao" name="descricaoEducacao" rows="4" cols="50" placeholder="Digite uma breve descrição da sua formação"></textarea>
          
          </div>


          <button type="button" class="btn btn-primary" id="adicionar-educacao">
          Adicionar outra formação
          </button>


          <br>
          <br>


<!-- box experiência -->
          <div class="form-group m-4" id="experiencia">
<h4 class="">Experiencia Profissional</h4>

          <label for="cargoEmpresa">Cargo:</label>
          <input type="text" class="form-control" id="cargoEmpresa" name="cargoEmpresa" placeholder="Digite o cargo ocupado">

          <label for="empresa">Empresa:</label>
          <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Informe o nome da empresa">

          <label for="entradaEmpresa">De:</label>
          <input type="date" class="form-control" id="entradaEmpresa" name="entradaEmpresa">

          <label for="saidaEmpresa">Até:</label>
          <input type="date" class="form-control" id="saidaEmpresa" name="saidaEmpresa">

          <div>
          <input type="checkbox"  id="atual" name="atual" value="sim">
          <label for="atual">Atualmente</label>
          </div>

          <label for="descricaoEmpresa">Descrição:</label>
          <textarea class="form-control" id="descricaoEmpresa" name="descricaoEmpresa" rows="4" cols="50" placeholder="Digite uma breve descrição da sua experiência"></textarea>

</div>
          <button type="button" class= "btn btn-primary" id="adicionar-experiencia">
          Adicionar outra Experiência
          </button>


          </div><!-- fim CARD BODY -->
          </div>  <!-- fim form -->
          <!-- btn gerar pdf -->
          <div class="d-flex justify-content-center">
          <button type="submit" class="btn btn-primary btn-lg mt-4 mb-4">
            Gerar Currículo
          </button>
          </div>
          </form>
          </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
$("#telefone").mask("(99) 9 9999-9999", {
  clearIfNotMatch: true, 
  placeholder: "(XX) 9 XXXX-XXXX"
});

// Adiciona um evento de keypress ao campo de telefone
$("#telefone").keypress(function(event) {
  // Obtém o código do caractere digitado
  var charCode = event.which || event.keyCode;
  // Verifica se é um número (código entre 48 e 57)
  if (charCode < 48 || charCode > 57) {
    // Cancela a ação se for uma letra ou outro símbolo
    event.preventDefault();
  }
});
</script>

<script src="script.js"></script>
<script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>

@endsection