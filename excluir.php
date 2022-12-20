<?php
//pegar o id 
$idreceita = $_GET["idreceita"];
echo $idreceita;
//abrir conexão com o banco 
include_once'./conexao.php';

//montar a instrução 
$sql = "delete from receitas where idreceita =".$idreceita;

//igual ao gravar
if(mysqli_query($con,$sql)){
    $msg = "Excluido com sucesso!";
}else{
    $msg = "Erro ao excluir!";
}
mysqli_close($con);
echo "<script> alert('".$msg."');
location.href='excluir.php'; </script>";


?>