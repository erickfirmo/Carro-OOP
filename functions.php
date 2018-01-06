<?php

require_once "Carro.php";

$m = isset($_POST['modelo']) ? ($_POST['modelo']) : null;
$c = isset($_POST['cor']) ? ($_POST['cor']) : null;
$a = isset($_POST['ano']) ? ($_POST['ano']) : null;
$km = isset($_POST['km']) ? ($_POST['km']) : null;

$carro = new Carro($m, $c, $a, $km);

session_start();

$_SESSION['modelo'] = $carro->getModelo();
$_SESSION['cor'] = $carro->getCor();
$_SESSION['ano_fabricacao'] = $carro->anoFabricacao($a);
$_SESSION['anos_uso'] = $carro->anosUso($a);
$_SESSION['km_Rodados'] = $carro->kmRodados($km);
$_SESSION['km_ano'] = $carro->kmAno($km, $a);
$_SESSION['ipva'] = $carro->ipva($a);

header('location: http://localhost/poo-carro/resultado.php');

?>

