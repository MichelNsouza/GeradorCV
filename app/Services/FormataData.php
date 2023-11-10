<?php

namespace App\Services;

class FormataData
{
  public function formataData($data_banco)
  {
    $data_objeto = new \DateTime($data_banco);
    return $data_objeto->format('d/m/Y');
  }
}