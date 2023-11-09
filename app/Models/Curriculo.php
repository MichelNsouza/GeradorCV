<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;
  
  protected $fillable = [
      'nome',
      'cargo',
      'endereco',
      'telefone',
      'email',
      'linkedin',
      'objetivo',
  
      'instituicao',
      'curso',
      'inicioEducacao',
      'conclusaoEducacao',
      'descricaoEducacao',
  
      'empresa',
      'cargoEmpresa',
      'entradaEmpresa',
      'saidaEmpresa',
      'descricaoEmpresa',
  ];
  
}
