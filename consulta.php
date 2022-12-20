
    <?php include_once'cabecalho5.php';?>

<script>
    function excluir(id) {
        if (confirm('Deseja realmente excluir ?')) {
            location.href='excluir.php?id='+id;
        }
    }

</script>

<h1>Consulta por Nome</h1>
<form action="consulta.php" method="get">
  Nome:<br/>
  <input type="text"
  placeholder="Digite o nome para buscar"
  name="nome" required />
  <br/><br/>
  <input type="submit" value="Buscar"/>

</form>
<?php
if(isset($_GET["nome"])){
// pegar o campo nome da tela
$nome = $_GET["nome"];

// abrir a conexão com o banco
include_once'./conexao.php';

// montar a instrução sql para buscar a informação
$sql = "select * from receitas where nome like'".$nome."%'";

// mysql_query() -> executa a instrução no banco
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
?>
<table class="table">
    <tr>
    <td>numero da receita</td>
        <td>Nome da Receita</td>
        <td>Autor</td>
        <td>Receita</td>
        <td>Editar</td>
        <td>Excluir</td>
        
    </tr>
    <?php
while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row["idreceita"]; ?></td>
        <td><?php echo $row["nome"]; ?></td>
        <td><?php echo $row["autor"]; ?></td>
        <td><?php echo $row["receita"]; ?></td>

        <td>  
 

        <a href="editar.php?idreceita=<?php echo $row['idreceita']; ?>"> 
         <img src="./img/editar1.png"/> </a> 
        </td>

        <td>  
 

        <a href="excluir.php?idreceita=<?php echo $row['idreceita']; ?>"> 
         <img src="./img/editar1.png"/> </a> 
        </td>
<!--  
        <td>
        <a href="#" onclick="excluir(<?php echo $row['idreceita']; ?>)">
            <img src="./img/lixeira1.png"/></a> 
        </td>-->
    </tr>
    <?php
    }
    }else{
        echo" Não existe receita com este nome.";
    }
    }
?>
