<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Curriculo;
use Illuminate\Http\Request;
use PDF;


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
  public function store(Request $request)
  {
      $curriculo = new Curriculo;

      $curriculo->nome = $request->input('nome');
      $curriculo->cargo = $request->input('cargo');
      $curriculo->endereco = $request->input('endereco');
      $curriculo->telefone = $request->input('telefone');
      $curriculo->linkedin = $request->input('linkedin');
      $curriculo->email = $request->input('email');
      $curriculo->objetivo = $request->input('objetivo');
    
      $curriculo->empresa = $request->input('empresa');
      $curriculo->cargoEmpresa = $request->input('cargoEmpresa');
      $curriculo->entradaEmpresa = $request->input( 'entradaEmpresa');
      $curriculo->saidaEmpresa = $request->input('saidaEmpresa');
      $curriculo->descricaoEmpresa = $request->input('descricaoEmpresa');
      $curriculo->instituicao = $request->input('instituicao');
      $curriculo->curso = $request->input('curso');
      $curriculo->inicioEducacao = $request->input('inicioEducacao');
      $curriculo->conclusaoEducacao = $request->input('conclusaoEducacao');
      $curriculo->descricaoEducacao = $request->input('descricaoEducacao');

    
      // salvar o curriculo no banco de dados
      // $curriculo->save();

      // Renderizar a view com os dados do Curriculo
      $html = view('pdf.index', ['curriculo' => $curriculo])->render();

      // Carregar o HTML no PDF
      $pdf = PDF::loadHTML($html);

      // Retornar o PDF para download
    
      return $pdf->download($curriculo->nome .'CV.pdf');

    //return view('pdf.index', ['curriculo' => $curriculo]);
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

    public function gerarPDF()
    {
     // $html = View::file(resource_path('views/pdf/pdf.blade.php'))->render();
 //     $pdf = PDF::loadHTML($html);
  
      //return $pdf->download('cv.pdf');

      //return view('pdf.pdf');
    }
}