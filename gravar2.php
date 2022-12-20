<?php include_once'cabecalho.php';


//PASSO 1- pegar dados da tela
$nome = $_POST["nome"];
$autor = $_POST["autor"];
$receita = $_POST["receita"];
$foto =$_FILES["foto"];

$ext = explode(".",$foto["name"]);//[foto][nome][ext]
$ext = array_reverse($ext);//[amarelas][flores]
$ext = $ext[0];



if(($ext != "jpg") && ($ext !="gif")){
    echo "Arquivo Inválido";
}elseif($foto ["size"] < 1024 *8){
     echo "Tamanho excedido";
}else
?><?php

//PASSO 2- montar a conexão com o banco de dados
include_once'./conexao.php';

$nomefoto= date("YmdHis").rand(0000,9999).".".$ext;


//PASSO 3- montar o sql de gravar no banco
$sql ="insert into receitas values(null, '".$nome."','".$autor."','".$receita."','".$nomefoto."')";

//PASSO 4- mandar esse comando para o mysql
if(mysqli_query($con,$sql)){
    $msg = "Gravado com sucesso!";

    move_uploaded_file($foto["tmp_name"],"./uploads/.".$nomefoto);

}else{
    $msg = "Erro ao gravar.";
}
mysqli_close($con);
echo "<script> alert('".$msg."'); location.href = 'painel.php'; </script>";
?>
