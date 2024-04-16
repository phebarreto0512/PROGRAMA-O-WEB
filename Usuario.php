<?php

class Usuario {
    private $nome;
    private $dataNascimento;
    private $peso;
    private $altura;
    private $sexo;

    public function __construct($nome, DateTime $dataNascimento, $peso, $altura, $sexo) {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->sexo = $sexo;
    }

    public function fazAniversarioHoje(DateTime $dataAtual) {
        if ($dataAtual->format('m-d') === $this->dataNascimento->format('m-d')) {
            return true;
        }
        return false;
    }
}
