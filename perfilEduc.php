<?php
    require "conexao.php";
    if(!isset($_SESSION["educ"])) {
        die();
    } else{
    $id = $_SESSION["educ"];

    $comando = "SELECT * FROM educadores WHERE idEducador='$id'";

    $resultado = mysqli_query($conexao, $comando);

    $registro = mysqli_fetch_assoc($resultado);

    $comando2 = "SELECT * FROM cursos WHERE idEducador='$id'";

    $resultado2 = mysqli_query($conexao, $comando2);

 

?>
<!DOCTYPE html>
<html lang="pt">
  <head><link rel="icon" href="img/icone.png">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="perfilEduc.css">
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
  <div id="fundo">
  <header>
      
      <div id="logo">
        <div class="itensHeader2">
        <a href="perfilEduc.php?idEducador=<?=$id?>"> <img  id="imglogo" width="210" src="img/GENIALIZE.png" alt="logo"> </a>
        </div>
      </div>
      
      <div class="categorias">
        <a class="header" href="perfilEduc.php?idEducador=<?=$id?>">Categorias</a> 
        
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
            <a class="header" href="index.php">Trabalhe conosco!</a> 
        </div>
         <div class="itensHeader"> 
            <a><img class="imgdir" src="img/notificacao.webp" width="50px"></a>
        </div>
        <div class="itensHeader">
            <a href="perfilEduc.php?idEducador=<?=$id?>"><img class="imgdir" id="perfil" src="<?=$registro["imgEducador"]?>" width="50px"></a>
        </div>
    </header>

        <div id="perfil2">
          <div id="fotoPerfil">
            <img id="fotodeperfil" src="<?=$registro["imgEducador"]?>" alt="foto de perfil">
           
          </div>
            <a class="botaoPerfil" href="dadosEduc.php?id=<?=$id?>">
            <div>
              <p>Meus dados</p>
            </div>
          </a>
          <a class="botaoPerfil" href="senhaEduc.php?id=<?=$id?>">
            <div>
              <p>Alterar senha</p>
            </div>
          </a>
          
          <a class="botaoPerfil" href="ajudaEduc.php">
            <div>
              <p>Suporte ao cliente</p>
            </div>
          </a>
          <a class="botaoPerfil" href="logoffEduc.php">
            <div>
              <p>Sair</p>
            </div>
          </a>
            

        </div>
          
</div>

    <div id="mae">
      <h1 id="titulo">Meus cursos...</h1>
      <div class="cont">

      <?php while($registro2 = mysqli_fetch_assoc($resultado2)) : ?>
                <a href="configCurso.php?idCurso=<?=$registro2["idCurso"]?>">
                <div class="curso">
                        <img id="imgprod" src="<?=$registro2["imgCurso"]?>" alt="<?=$registro2["titulo"]?>"></img>
                        <div id="nome">
                            <h1 id="nomeProd"><?= $registro2["titulo"];?></h1>
                        </div>
                        <h1 id="preco">R$<?=$registro2["valor"]?></h1>
                        <h3 id="comprar">Editar</h1>
                </div>
                </a>
            <?php endwhile ?>

              <a href="addcurso.php">
                  <div id="addcurso">
                  <img id="imgadd" src="img/add.png" alt="adicionar curso">
                  <p id="textadd">Adicionar Curso</p>

                  </div>

                  </a>

          </div>
         
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
<?php }?>