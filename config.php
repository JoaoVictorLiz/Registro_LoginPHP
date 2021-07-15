<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '292216';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*
    if($conexao->connect_errno){
        echo 'Erro';
    } else {
        echo 'Conexao efetuada com sucesso';
    }*/


?>