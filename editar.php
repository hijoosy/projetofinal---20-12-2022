<?php include_once'cabecalho5.php'; ?>

<?php
$idreceita = $_GET["idreceita"];
echo "-";
echo $idreceita;
include_once'./conexao.php';
$sql="select * from receitas where idreceita =".$idreceita;

$result= mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>
    <h1><span class="badge badge-dark">Atualização de Receita</span></h1>
    <hr>
    <form action="atualizar.php" method="post">

        <input type="hidden" name="idreceita" value="<?php echo $row["idreceita"]; ?>"/><br/><br/>

        Nome:<br/><input type="text" name="nome" value="<?php echo $row["nome"]; ?>" class="btn btn-outline-dark" required/> <br/><br/>
        
        Autor:<br/><input type="text" name="autor" value="<?php echo $row["autor"]; ?>"class="btn btn-outline-dark" required/> <br/><br/>
        
        Receita:<br/><input type="text" name="receita" value="<?php echo $row["receita"]; ?>" class="btn btn-outline-dark" required/> <br/><br/>
        <input type="submit" value="Atualizar" class="btn btn-dark"/>
    </form>
    
<?php include_once'rodape.php'; ?>