<?php

require_once "Carro.php";

$m = isset($_POST['modelo']) ? ($_POST['modelo']) : null;

$c = isset($_POST['cor']) ? ($_POST['cor']) : null;

$a = isset($_POST['ano']) ? ($_POST['ano']) : null;

$km = isset($_POST['km']) ? ($_POST['km']) : null;


$carro1 = new Carro($m, $c, $a, $km);