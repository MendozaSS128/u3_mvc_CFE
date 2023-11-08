<?php
	require_once("../model/modelo.php");
	$menu = new Datos();
	$pd = $menu->lista_datos();
	require_once("../view/vista.php");
?>