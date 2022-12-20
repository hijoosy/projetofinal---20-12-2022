<?php include_once'cabecalho.php'; 


//PASSO 1- pegar dados da tela
$nome = $_POST["nome_cad"];
$email = $_POST["email_cad"];
$senha=md5 ($_POST["senha_cad"]);


//PASSO 2- montar a conexão com o banco de dados
include_once'./conexao.php';



//PASSO 3- montar o sql de gravar no banco
$sql ="insert into cliente1 values(null, '".$nome."','".$email."','".$senha."')";

//PASSO 4- mandar esse comando para o mysql

if(mysqli_query($con,$sql)){
    $msg = "Cadastrado com sucesso!";

}else{
    $msg = "Erro ao cadastrar.";
}
mysqli_close($con);
echo "<script> alert('".$msg."'); location.href = 'painel.php'; </script>";
?>
<?php include_once'rodape.php';?>