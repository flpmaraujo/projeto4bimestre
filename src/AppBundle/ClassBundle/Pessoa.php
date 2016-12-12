<?php
  namespace AppBundle\ClassBundle;

  class Pessoa {
    // criação da classe "pessoa"
    private $nome;
    private $idade;

    // getters
    public function getNome() {
      return $this->nome;
    }

    public function getIdade() {
      return $this->idade;
    }

    // setters
    public function setNome($nome) {
      $this->nome = $nome;
    }

    public function setIdade($idade) {
      $this->idade = $idade;
    }
  }
?>
