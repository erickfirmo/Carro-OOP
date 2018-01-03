<?php

class Carro {
    public $modelo;
    public $cor;
    public $ano_fabricacao;

    public $ano_atual;
    public $anos_uso;
    public $km_rodados;
    public $km_ano;
    public $pagar_ipva;
    

    public function __construct($m, $c, $a, $km) {
        $this->setModelo($m);
        $this->setCor($c);
        $this->anoFabricacao($a);
        $this->kmRodados($km);
        $this->anosUso($a);
        $this->kmRodados($km);
        $this->kmAno($km, $a);
        $this->ipva();
    }
    
    public function kmRodados($km) {
       return $this->km_rodados = $km;
    }

    public function kmAno($km, $a) {
        return $this->km_ano = $this->kmRodados($km) / $this->anosUso($a);
        
    }

    public function anoFabricacao($a) {
        return $this->ano_fabricacao = $a;
    }

    public function anoAtual() {
        return $this->ano_atual = date('Y');
    }

    public function anosUso($a) {
        
        return $this->anos_uso = $this->anoAtual()- $this->anoFabricacao($a);

    }


    public function ipva() {
        return $this->pagar_ipva = ($this->anosUso() < 20) ? true : false;

    }

    public function getAnoAtual() {
        return $this->ano_atual;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        return $this->modelo = $m;

    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($c) {
        return $this->cor = $c;
    }

   

    

}