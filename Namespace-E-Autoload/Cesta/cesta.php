<?php

namespace Cesta;
use info_Produto\Produto;

    class Cesta {

        private $itens = array();
      
        public function AdicionaItem(Produto $produto) {
          $this->itens[] = $produto;
        }
      
        public function ExibeLista() {
          foreach ($this->itens as $produto) {
            echo "Etiqueta:\n". $produto->getEtiqueta() . "<br>";
            echo "Código:\n" . $produto->getCodigo() . "<br>";
            echo "Descrição:\n" . $produto->getDescricao(). "<br>";
            echo "Quantidade: \n". $produto->getQuantidade() . "<br>";
            echo "Preço:\n ". $produto->getPrecoTotal() . "<br>";
          }
        }
      
        public function CalculaTotal() {
            $total = 0;
            foreach ($this->itens as $produto) {
                $total += $produto->getPrecoTotal();
            }
            return $total;
        }
        
      }

      