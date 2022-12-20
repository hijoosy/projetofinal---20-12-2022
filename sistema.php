<?php include_once'cabecalho2.php';?>
<body>
  <div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="verificarlogin.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Email</label>
            <input id="nome_login" name="email_login" required="required" type="text" placeholder="ex. contato@htmlecsspro.com"/>
          </p>
           
          <p> 
            <label for="email_login">Senha</label>
            <input id="email_login" name="senha_login" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar"/> 
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