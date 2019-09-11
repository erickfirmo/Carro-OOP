<?php

require_once "Carro.php";

$modelo = isset($_POST['modelo']) ? ($_POST['modelo']) : null;
$cor = isset($_POST['cor']) ? ($_POST['cor']) : null;
$ano = isset($_POST['ano']) ? ($_POST['ano']) : null;
$quilometros = isset($_POST['km']) ? ($_POST['km']) : null;

$carro = new Carro($modelo, $cor, $ano, $quilometros);
$carro->dadosCarro($modelo, $cor, $ano, $quilometros);

echo json_encode($carro, JSON_UNESCAPED_UNICODE);
