<?php
// regate de dados da tela
$idreceita = $_POST["idreceita"];
$nome=$_POST["nome"];
$autor=$_POST["autor"];
$receita=$_POST["receita"];
// conexão com banco de dados
include_once'./conexao.php';
// montar instrução de atualização de banco
$sql = "update receitas set nome = '".$nome."',autor = '".$autor."',receita = '".$receita."' where idreceita=".$idreceita;
// atualização é igual ao gravar
if(mysqli_query($con,$sql)){   
     $msg = "Atualizado com sucesso!";
}else{  
      $msg = "Erro ao atualizar!";
}
mysqli_close($con);
echo "<script> alert('".$msg."');location.href='consulta.php'; </script>";



?><?php include_once('rodape.php'); ?>