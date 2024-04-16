<?php

namespace info_Produto;

abstract class Produto {
    private $codigo;
    private $descricao;
    private $quantidade;
    private $precoTotal;
  
    public function getCodigo() {
      return $this->codigo;
    }
  
    public function setCodigo($codigo) {
      $this->codigo = $codigo;
    }
  
    public function getDescricao() {
      return $this->descricao;
    }
  
    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }
  
    public function getQuantidade() {
      return $this->quantidade;
    }
  
    public function setQuantidade($quantidade) {
      $this->quantidade = $quantidade;
    }
  
    public function getPrecoTotal() {
      return $this->precoTotal;
    }
  
    public function setPrecoTotal($precoTotal) {
      $this->precoTotal = $precoTotal;
    }
  
    public function imprimeEtiqueta() {
      echo "Tipo de produto: " . static::getEtiqueta() . "<br>";
      echo "Código: " . $this->getCodigo() . "<br>";
      echo "Descrição: " . $this->getDescricao() . "<br>";
      echo "Quantidade: " . $this->getQuantidade() . "<br>";
      echo "Preço: R$ " . number_format($this->getPrecoTotal(), 2, ',', '.') . "<br>";
    }
  
    abstract protected static function getEtiqueta();
  }
