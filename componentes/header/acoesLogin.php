<?php

require('../../database/conexao.php');

function realizarLogin($usuario, $senha, $conexao){

    $sql = "SELECT * FROM tbl_administrador WHERE usuario = '$usuario' AND senha = '$senha'";

    //echo $sql;exit;

    $resultado = mysqli_query($conexao, $sql);

    $dadosUsuario = mysqli_fetch_array($resultado);

    //var_dump($dadoUsuario);

    if(isset($dadosUsuario["usuario"]) && isset($dadosUsuario["senha"])){

        echo 'LOGADO!';

        // $_SESSION["usuario"] = $conexao->usuario;
        // $_SESSION["senha"] = $conexao->senha;

        // header("location: ../produtos/index.php");
        // exit;
    }else{
        echo 'ALGO DEU ERRADO!';
    }

}

realizarLogin('kelly', '12345', $conexao);


?>

