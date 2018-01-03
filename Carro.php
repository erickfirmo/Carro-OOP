<?php

class Carro {
    public $modelo;
    public $cor;
    public $ano_fabricacao;

    protected $ano_atual;
    public $anos_uso;
    protected $km_rodados;
    protected $km_ano;
    protected $pagar_ipva;
    

    public function Carro($m, $c, $a, $km) {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setAno($a);
        $this->setKm($km);
        $this->anoAtual();
        $this->anosUso();
        $this->kmAno();
        $this->ipva();
        
    }



    public function setKm($km) {
        $this->km_rodados = $km;
    }

    public function anoAtual() {
        $this->ano_atual = date('Y');
    }

    public function kmAno() {
        $this->anosUso();
        $this->km_ano = $km_rodados / $anos_uso;
        return $this->km_ano;
    }

    public function anosUso() {
        $this->anoAtual();
        $this->anos_uso = $ano_atual - $ano_fabricacao;
        return $this->anos_uso;
    }

    protected function Ipva() {
        $this->anosUso();
        $this->pagar_ipva = ($anos_uso < 20) ? true : false;
        return $this->pagar_ipva;

    }











    public function getAnoAtual() {
        return $this->ano_atual;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($m) {
        $this->modelo = $m;

    }

    public function getCor() {
        return $this->cor;
    }

    public function setCor($c) {
        $this->cor = $c;
    }

    public function getAno() {
        return $this->ano_fabricacao;
    }

    public function setAno($a) {
        $this->ano_fabricacao = $a;
    }

}