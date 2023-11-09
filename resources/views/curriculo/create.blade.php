@extends('template.template')

@section('title', 'Gerador de CV')

@section('content')


  <div class="container mt-5">

    <h1 class="text-center mb-4">
      Gerador de Currículo - Formulário
    </h1>

    <p class="text-center">
      Preencha os campos abaixo com os dados necessários para o seu currículo.
    </p>

  <form action="/store" method="post">
  @csrf
  @method('POST')
    <!-- form -->
  <div class="card mb-4">
    <div class="card-header">Informações de contato</div>
    <div class="card-body">

      <!-- box nome -->
      <div class="form-group">
        <label for="nome">
          Nome completo
        </label>
        <input 
          type="text" 
          class="form-control" 
          id="nome" 
          name="nome" 
          placeholder="Digite seu nome completo"
          required 
          >
      </div>

      <!-- box cargo -->
      <div class="form-group">
        <label for="cargo">
          Cargo Pretendido
        </label>
        <input 
          type="text" 
          class="form-control" 
          id="cargo" 
          name="cargo" 
          placeholder="Digite seu cargo pretendido" 
        required 
          >
      </div>

      <!-- box endereço -->
      <div class="form-group">
        <label for="endereco">
          Endereço
        </label>
        <input 
          type="text" 
          class="form-control" 
          id="endereco" 
          name="endereco" 
          placeholder="Digite seu endereço"
required 
        >
      </div>

      <!-- box telefone -->
      <div class="form-group">
        <label for="telefone">
          Número de telefone
        </label>
        <input 
          type="tel" 
          class="form-control" 
          id="telefone" 
          name="telefone"
          placeholder="(XX) XXXXX-XXXX" 
          required 
        >
      </div>

      <!-- box email -->
      <div class="form-group">
        <label for="email">
          Endereço de e-mail
        </label>
        <input 
          type="email" 
          class="form-control" 
          id="email" 
          name="email" 
          placeholder="Digite seu endereço de e-mail" 
required 
        >
      </div>

      <!-- box LinkedIn -->
      <div class="form-group">
        <label for="linkedin">
          Perfil de LinkedIn (opcional)
        </label>
        <input 
          type="url" 
          class="form-control" 
          id="linkedin" 
          name="linkedin" 
          placeholder="Digite o link do seu perfil de LinkedIn"
        >
      </div>

      <!-- box objetivos -->
      <div class="form-group">
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
      </div>

    <!-- box educação -->
    <div class="form-group" id="educacao" >
      <label for="educacao">
        Experiência acadêmica
      </label>
      <input 
        type="text" 
        class="form-control" 
        name="educacao" 
        placeholder="Digite suas conquistas acadêmicas"
required 
      >
    </div>

    <button type="button" class="btn btn-primary" id="adicionar-educacao">
      Adicionar Educação
    </button>

    <br>
    <br>

    <!-- box experiência -->
    <div class="form-group" id="experiencia">
      <label for="experiencia">
        Experiência Profissional
      </label>
      <input 
        type="text" 
        class="form-control" 
        name="experiencia" 
        placeholder="Digite sua experiência profissional"
required 
      >
    </div>
    <button type="button" class="btn btn-primary" id="adicionar-experiencia">
      Adicionar Experiência
    </button>


    </div><!-- fim CARD BODY -->
  </div>  <!-- fim form -->

      <!-- btn gerar pdf -->
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-primary btn-lg">
        Gerar Currículo
      </button>
    </div>

  </form>

</div>

@endsection