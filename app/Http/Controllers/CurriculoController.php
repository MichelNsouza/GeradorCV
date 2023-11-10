<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Curriculo;
use Illuminate\Http\Request;
use PDF;
use App\Services\FormataData;

class CurriculoController extends Controller
{
    /**
     * Exibe uma lista do recurso.
     *
     * @return \Illuminate\Http\Response
     */
    public Curriculo $curriculo;
    
    public function index()
    {
      return view('curriculo.index');
    }

    /**
     * Mostra o formulário para criar um novo recurso.
     *
     * @return \Illuminate\Http\Response
     */
  public function create(Request $request)
  {
    return view('curriculo.create');
  }

    /**
     * Armazena um recurso recém-criado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request, FormataData $formataData)
  {
      $curriculo = new Curriculo();

      $dadosCurriculo = $request->only([
          'nome', 'cargo', 'endereco', 'telefone', 'linkedin', 'email', 'objetivo',
          'empresa', 'cargoEmpresa', 'entradaEmpresa', 'saidaEmpresa', 'descricaoEmpresa',
          'instituicao', 'curso', 'inicioEducacao', 'conclusaoEducacao', 'descricaoEducacao',
      ]);

      $curriculo->fill($dadosCurriculo);

      // Formatar datas
      $curriculo->entradaEmpresa = $formataData->formataData($request->input('entradaEmpresa'));
      $curriculo->saidaEmpresa = $formataData->formataData($request->input('saidaEmpresa'));
      $curriculo->inicioEducacao = $formataData->formataData($request->input('inicioEducacao'));
      $curriculo->conclusaoEducacao = $formataData->formataData($request->input('conclusaoEducacao'));

      // Salvar o currículo no banco de dados
      // $curriculo->save();

      // Carregar o HTML no PDF e retornar para download
      return PDF::loadHTML(view('pdf.index', ['curriculo' => $curriculo])->render())
          ->download($curriculo->nome . 'CV.pdf');
  }

    /**
     * Exibe o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      //
    }

    /**
     * Mostra o formulário para editar o recurso especificado.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza o recurso especificado no armazenamento.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove o recurso especificado do armazenamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
  
}