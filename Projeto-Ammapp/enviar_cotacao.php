<?php

    $hostname = "localhost";
    $database = "MT0p";
    $usuario = "root";
    $senha = "302543";

    $mysqli = new mysqli($hostname, $usuario, $senha, $database);
    if($mysqli->connect_errno) {

    }
    
    header('Content-Type: text/html; charset=UTF-8');
    $nome = filter_input(INPUT_POST, 'nome');
    $celular = filter_input(INPUT_POST, 'celular');
    $placa = filter_input(INPUT_POST, 'placa');
    $marcamodelo = filter_input(INPUT_POST, 'marcamodelo');
    $versao = filter_input(INPUT_POST, 'versao');
    $motor = filter_input(INPUT_POST, 'motor');
    $ano = filter_input(INPUT_POST, 'ano');
    $utm = filter_input(INPUT_POST, 'utm_source');
    $afiliado = filter_input(INPUT_POST, 'afiliado');
    
    if(!isset($afiliado)) {
        $afiliado = 1;
    }

    if(isset($nome) && isset($celular) && isset($placa) && isset($marcamodelo) && isset($versao) && isset($motor) && isset($ano)) {
        $celular = preg_replace( '/[^0-9]/', '', $celular );
        $placa = strtoupper( preg_replace( '/[^A-Za-z0-9 ]/', '', $placa ) );
        
        try {
            
            if (!$mysqli->connect_error) {
                $sql = " SELECT aa.* FROM MT0p.AMASP_ASSOCIADOS_NEW aa "." WHERE aa.ID = ? OR aa.celular = ? OR aa.INFLUENCIADOR_URL = ? ";
                $stmt = $mysqli->prepare($sql);
                $stmt->bind_param('sss', $afiliado, $afiliado, $afiliado);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $idIndicador = $row["ID"];
                        break;
                    }
                }
                if(!isset($idIndicador)) {
                    $idIndicador = 1;
                }
                $utm = ($utm != null) ? $utm : 'direct';
                $mysqli->begin_transaction();
                $consultorId = 1;
                try {
                    $consultorId = uniqid();
                } catch (Exception $exc) {
                    $consultorId = 1;
                }
                $stmt2 = $mysqli->prepare(" INSERT INTO AMASP_COTACOES (PLACA, MARCA_MODELO, MOTOR, VERSAO, ANO, NOME, TELEFONE, CONSULTOR, ID_INDICADOR, SOURCE) "." VALUES (?,?,?,?,?,?,?,?,?,?) ");
                $ano = intval($ano);
                $stmt2->bind_param("ssssissiis", $placa, $marcamodelo, $motor, $versao, $ano, $nome, $celular, $consultorId, $idIndicador, $utm);
                $t = $stmt2->execute();
                $stmt2->close();
                $mysqli->commit();
            }
        } 
        catch (Exception $exc) {
       $exc->getTraceAsString();
        }
    }
    $ref = 'obrigado.php';
    try {
        $ref = $_SERVER['HTTP_REFERER'].'?status=ok';
    } 
    catch (Exception $ex) {
    }
    // echo header('Location:  '.$ref);

?>