<?php
require "conexao.php";

$cpf = $_POST["cpf"];
$acessar = $_POST["acessar"];
$senha = $_POST["senha"];

if (isset($acessar)) {

    $comando = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";

    $resultado = mysqli_query($conexao, $comando);

    $registro = mysqli_fetch_assoc($resultado);

    if ($registro>0){
        $_SESSION["user"] = $registro["idUsuario"];
        $id = $_SESSION["user"];
      header ("Location: perfil.php?id=$id");
    } else{?>
        <!DOCTYPE html>
        <html lang="pt">
          <head><link rel="icon" href="img/icone.png">
              
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
            <meta charset="UTF-8">
            <title>Erro</title>
            <link rel="stylesheet" href="confirmaçao.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Passion+One&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Carter+One&family=Fredoka+One&family=Nerko+One&family=Patrick+Hand&family=Patua+One&family=Righteous&family=Roboto&display=swap" rel="stylesheet">
        
          </head>
          <body>
            
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
                 <div class="itensHeader"> 
                    <a><img class="imgdir" src="img/notificacao.webp" width="50px"></a>
                </div>
                <div class="itensHeader4">
                <a class="header" href="login.php">Entrar</a> 
            </div>
            </header>
        
            <div id="mae">
                <div>
                    <p>Algo deu errado</p>
                    <img id="erro" src="img/logo.png"><br>
                    <a id="tentarnov" href="login.php">Tentar Novamente</a>
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
    <?php
        
    }
  }
?>