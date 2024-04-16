<?php

namespace Produtos;
use info_Produto\Produto;

class Eletronico extends Produto {
    public static function getEtiqueta() {
      return "Eletrônico";
    }
  }