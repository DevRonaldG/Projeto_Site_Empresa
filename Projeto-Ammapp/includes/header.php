<?php include "includes/config.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <title><?php echo $tituloPagina ?></title>

    </head>

    <body>

    <header> 

        <div class="menu">
            <img id="logo" src="img/LOGO_AMMMAPP.png">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="quemSomos.php">Quem Somos</a></li>
                <li><a href="protecaoVeicular.php">Proteção Veicular</a></li>
                <li><a href="areaDoCliente.php">Área do Cliente</a></li> 
                <li><button type="button" class="btn btn-primary"><a style="color: white;" href="https://services.uberdomarlon.com/amasp.org/protecao-veicular/segundaVia.php">2ª VIA DE BOLETO</a></button></li>
                <li><button type="button" class="btn btn-danger"><a style="color: white;"href="areaDoCliente.php">EMERGÊNCIA 24h</a></button></li>  
            </ul>
        </div>  
        
    </header>