<?php
// espaço de memoria no navegador
session_start();

// pegar os dados da tela
$email = $_POST["email_login"];
$senha = md5($_POST["senha_login"]);

// abrir a conexão com o banco
include_once'./conexao.php';

//montar a instrução de ir ao banco verificar se o usuario é válido.
$sql ="select * from cliente1 where email = '".$email."' and senha = '".$senha."'";

$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION["nome"] = $row["nome"];
  //  $_SESSION["perfil"] = $row["perfil"];
    $_SESSION["tempo"] = time(); //aguardando o exato instante do login
    header("location:painel.php?msg=".$msg);
} else{
    $msg = "Login/Senha invalido";
    header("location:index.php?msg=".$msg);
}

?>