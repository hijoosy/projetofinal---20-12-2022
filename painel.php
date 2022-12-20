
<?php session_start(); ?> 
<?php include_once'cabecalho6.php';?>
   <body>
   <body id="body">
    <div id="topo">
        <div class="largura-site">
            <div id="logotipo">
                <img src="img/receitinhas.png" height="60px" alt="logotipo do site" />

            </div>
            <!--fecha logotipo-->

            <div id="menu">
                <a href="index.php">Página Inicial</a>
                <a href="index.php">Drinks</a>
                <a href="index.php">Login</a>

            </div>
            <!--fecha menu-->

        </div>
        <!--fecha largura do site-->

    </div>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="verificarlogin.php"> 
          <h1>Painel do Sistema</h1> 
          <p> 
          <?php
           echo "<h6>Seja Bem Vindo(a): </h6> " .$_SESSION["nome"];
        ?>
            

          <h4>Menu:<h4>


          <p> <a href="receitas.php">↬ Nova Receita </a>
          <br/></p>
          <p><a href="consulta.php">↬ Consultar Receitas </a>
          <br/></br></p>

          </p>
           
           
          <p> 
            <input type="submit" value="Sair" href="sair.php"/> 
          </p>
           
          <p class="link">
            Ainda não tem conta?
            <a href="sistema1.php">Cadastre-se</a>
          </p>
        </form>
      </div>
 
    </div>
  </div>  
</body>
</html>