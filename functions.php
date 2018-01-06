<?php

require_once "Carro.php";

$modelo = isset($_POST['modelo']) ? ($_POST['modelo']) : null;
$cor = isset($_POST['cor']) ? ($_POST['cor']) : null;
$ano = isset($_POST['ano']) ? ($_POST['ano']) : null;
$quilometros = isset($_POST['km']) ? ($_POST['km']) : null;

$carro1 = new Carro($modelo, $cor, $ano, $quilometros);


session_start();

$_SESSION['dados_carro'] = $carro1->dadosCarro($modelo, $cor, $ano, $quilometros);


header('location: http://localhost/poo-carro/resultado.php');

?>

