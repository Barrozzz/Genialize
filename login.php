<?php
    require "conexao.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="img/icone.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
   
</head>
<body>

    <div id="fundo">
    <header>
      
      <div id="logo">
        <div class="itensHeader2">
        <a href="index.php"> <img  id="imglogo" width="210" src="img/GENIALIZE.png" alt="logo"> </a>
        </div>
      </div>
      
      <div class="categorias">
        <a class="header" href="index.php">Categorias</a> 
        
        <div id="cathover">
         
            <ul>
                <div id="cathoveritens">
                  <li><a href="#">PHP</a></li>
                </div>
                <div id="cathoveritens">
                  <li><a href="#">Java</a></li>
                </div>
                  <div id="cathoveritens">
                  <li><a href="#">CSS</a></li>
                </div>
                  <div id="cathoveritens">
                  <li><a href="#">HTML</a></li>
                </div>
                  <div id="cathoveritens">
                  
                  <li><a href="#">SQL</a></li>
                </div>
                  <div id="cathoveritens">
                  <li><a href="#">PHP</a></li>
                </div>
                  
                  
              </ul>
        </div> 
    </div> 
   
        <div id="pesquisa">
          <form method="GET" action="pesquisalogin.php">
           <input id="pesquisa"  type="text" name="termo_pesquisa"placeholder="Pesquisar">
      </form>
       </div>
       <div class="itensHeader3">
            <a class="header" href="loginEducador.php">Trabalhe conosco!</a> 
        </div>
        <div class="itensHeader4">
            <a class="header" href="login.php">Entrar</a> 
        </div>
        
    </header>
    <div id="pag">
        <h3>Entre como aluno</h3>
        <div id="areaLogin">
            <img src="img/telaLogin.png" alt="Login">
            <form action="log.php" method="post">
                <div class="item">
                    <label for="nome">CPF*</label>
                    <input type="text" name="cpf" id="nome" placeholder="Digite seu CPF...">
                </div>
                <div class="item">
                    <label for="senha">Senha*</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha...">
                </div>
                <button type="submit" name="acessar">ENTRAR</button>
                <div id="atalho">
                    <p>Não tem uma conta? <a href="cad.php">Cadastre-se</a></p>
                </div>
            </form>
        </div>        
    </div>
    <footer>
        <div class="footerConteiner">
            <div class="fotterSecao">
                <h3>Links Úteis</h3>
                <a href="#">Página Inicial</a>
                <a href="#">Produtos</a>
                <a href="sobreNos.php">Sobre Nós</a>
                <a href="#">Contato</a>
            </div>
            <div class="fotterSecao">
                <h3>Redes Sociais</h3>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
            <div class="fotterSecao">
                <h3>Contato</h3>
                <p>Endereço: Rua Exemplo, 123</p>
                <p>Telefone: (12) 3456-7890</p>
                <p>Email: contato@empresa.com</p>
            </div>   
        </div>

        <div id="footerLogo">
          <img  width="200" src="img/GENIALIZE.png" alt="logo">
        </div>
    </footer>
    
</body>
</html>