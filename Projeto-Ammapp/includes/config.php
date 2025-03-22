<?php

$pagina = ($_SERVER['REQUEST_URI']);

$tituloPagina = "AMMAPP - Inicio";
if (strstr($pagina, 'cotacao')) {
    $tituloPagina = "AMMAPP - Cotação";
}
if (strstr($pagina, 'quemSomos')) {
    $tituloPagina = "AMMAPP - Quem Somos";
}

if (strstr($pagina, 'protecaoVeicular')) {
    $tituloPagina = "AMMAPP - Proteção Veicular";
}

if (strstr($pagina, 'areaDoCliente')) {
    $tituloPagina = "AMMAPP - Área do Cliente";
}



$idAfiliado = "cotacao";
if (isset($_GET['o'])) {
    $idAfiliado =  $_GET['o'];
    $tituloPagina = "AMMAPP - Cotação";
}



