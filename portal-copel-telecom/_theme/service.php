<?php

include '../../../../wp-load.php';

$services = new Services;

if (!empty($_GET["cidades"])) {
	echo $services->cidades($_GET["cidades"],$_GET["q"]);
}

if (!empty($_GET['planos'])) {
	echo $services->planos($_GET['tipo'], $_GET['cidade']);
}

if (!empty($_GET['site'])) {
	echo $services->site($_GET['site']);
}

if (!empty($_GET['sair'])) {
	$services->exit_session();
}

?>