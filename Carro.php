<?php

class Carro {
    public $modelo;
    public $cor;
    public $ano_fabricacao;
    public $anos_uso;
    public $km_rodados;
    public $km_ano;
    public $pagar_ipva;
    
    public function __construct($m, $c, $a, $km) {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setAnoFabricacao($a);
        $this->setKmRodados($km);
        $this->setAnosUso();
        $this->setKmAno();
        $this->setIpva();
    }
    
    public function setKmRodados($km) {
       $this->km_rodados = $km;
    }

    public function getKmRodados() {
        return $this->km_rodados;
     }

    public function setKmAno() {
        $this->km_ano = $this->getKmRodados() / $this->getAnosUso(); 
    }

    public function getKmAno() {
        return $this->km_ano; 
    }

    public function setAnoFabricacao($a) {
        $this->ano_fabricacao = $a;
    }

    public function getAnoFabricacao() {
        return $this->ano_fabricacao;
    }

    public function setAnosUso() {
        $this->anos_uso = date('Y') - $this->getAnoFabricacao();
    }

    public function setIpva() {
        $this->pagar_ipva = ($this->getAnosUso() < 10) ? "SIM" : "NÃO";
    }

    public function getAnosUso() {
        return $this->anos_uso;
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

    public function getIpva()
    {
        return $this->pagar_ipva;
    }

    public function dadosCarro() {

        return [
            'modelo' => $this->getModelo(),
            'cor' => $this->getCor(),
            'ano_de_fabricacao' => $this->getAnoFabricacao(),
            'anos_de_uso' => $this->getAnosUso(),
            'kms_rodados' => $this->getKmRodados(),
            'kms_por_ano' => $this->getKmAno(),
            'ipva' => $this->getIpva()
        ];

    }   

}