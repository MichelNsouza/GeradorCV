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
      <!-- ... campos pessoais ... -->
      </div>
  </fieldset>
<fieldset class="card mb-4">
  <legend class="card-header">Informações Profissionais</legend>
    
  <div class="form-group m-4">
      <label for="objetivo">Objetivos</label>
      <input type="text" class="form-control" id="objetivo" name="objetivo" placeholder="Digite seus objetvos e metas" required>
    </div>
  
  <!-- Experiencia Acadêmica -->
  <div class="form-group m-4 bordaCampos" id="formacao">
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
      <textarea class="form-control" id="descricaoEducacao" name="descricaoEducacao" rows="4" cols="50" placeholder="Digite uma breve descrição da sua formação">
      </textarea>
              <!--
              <button type="button" class="btn btn-primary" id="adicionar-educacao">Adicionar outra formação</button> 
            Experiencia Profissional -->
  </div>
    
  <div class="form-group m-4 bordaCampos" id="experiencia">
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
      <label for="atual">Atualmente</label>
        <input type="checkbox"  id="atual" name="atual" value="sim">
    </div>
    
    <label for="descricaoEmpresa">Descrição:</label>
      <textarea class="form-control" id="descricaoEmpresa" name="descricaoEmpresa" rows="4" cols="50" placeholder="Digite uma breve descrição da sua experiência">
      </textarea>
            <!--
            <button type="button" class="btn btn-primary" id="adicionar-experiencia">Adicionar outra Experiência</button> 
            fim CARD BODY -->
  </div>

</fieldset>
    
  <!-- fim form -->
  <!-- btn gerar pdf -->
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn-primary btn-lg mt-4 mb-4">
        Gerar Currículo
      </button>
    </div>
    
  </form>
  
</div>