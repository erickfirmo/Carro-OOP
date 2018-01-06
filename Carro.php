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
    public $dados_carro;
    
    public function __construct($m, $c, $a, $km) {
        $this->setModelo($m);
        $this->setCor($c);
        $this->anoFabricacao($a);
        $this->kmRodados($km);
        $this->anosUso($a);
        $this->kmRodados($km);
        $this->kmAno($km, $a);
        $this->ipva($a);
        $this->dadosCarro($m, $c, $a, $km);

    }
    
    public function kmRodados($km) {
       return $this->km_rodados = number_format($km, 0, ',','.');
       
    }

    public function kmAno($km, $a) {
        return $this->km_ano = number_format(($this->kmRodados($km) / $this->anosUso($a)), 0, ',', '.');
        
    }

    public function anoFabricacao($a) {
        return $this->ano_fabricacao = $a;
    }

    public function anoAtual() {
        return $this->ano_atual = date('Y');
    }

    public function anosUso($a = null) {
        
        return $this->anos_uso = $this->anoAtual() - $this->anoFabricacao($a);

    }

    public function ipva($a) {
        $this->pagar_ipva = ($this->anosUso($a) < 20) ? true : false;

        if ($this->pagar_ipva == true){
            return "SIM";
        }else{
            return "NÃO";
        }

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

    public function dadosCarro($m, $c, $a, $km) {

        return $this->dados_carro = array(
            array(
                'Modelo' => $this->getModelo()
                ),
            array(
                'Cor' => $this->getCor()
            ),
            array(
                'Ano de Fabricação' => $this->anoFabricacao($a)
            ),
            array(
                'Anos de Uso' => $this->anosUso($a)
            ),
            array(
                'Km(s) Rodados' => $this->kmRodados($km)
            ),
            array(
                'Km(s) p/ Ano' => $this->kmAno($km, $a)
            ),
            array(
                'Pagar IPVA' => $this->ipva($a)
                )

        );

    }   

}