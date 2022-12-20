<?php include_once'cabecalho3.php';?>
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
  <div class="container" >
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="gravar2.php" enctype="multipart/form-data"> 
          <h1>Cadastre sua Receita</h1> 
          <p> 
            <label for="nome_login">Nome da Receita:</label>
            <input id="nome_login" name="nome" required="required" type="text"/>
          </p>
           
          <p> 
            <label for="email_login">Autor:</label>
            <input id="email_login" name="autor" required="required" type="text"/> 
          </p>
           
          <p> 
            <label for="email_login">Receita:<br/></label>
            <input id="email_login" name="receita" required="required" type="text"/> 
            <br/>
          </p>
          Foto
         <input  type="file" name="foto" required="required"/><br/>
          <p> 
            <input type="submit" value="Salvar"/> 
          </p>
           
        </form>
      </div>
 
    </div>
  </div>  
</body>
</html
