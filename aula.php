<?php
    require "conexao.php";
    if(!isset($_SESSION["user"])) {
        die();
    } else{
    $id = $_SESSION["user"];

    $comando = "SELECT * FROM usuarios WHERE idUsuario='$id'";

    $resultado = mysqli_query($conexao, $comando);

    $registro = mysqli_fetch_assoc($resultado);

    $idAula = $_GET["idAula"];

    $comando2 = "SELECT * FROM aulas WHERE idAula='$idAula'";

    $resultado2 = mysqli_query($conexao, $comando2);

    $registro2 = mysqli_fetch_assoc($resultado2);

    $comando3 = "SELECT * FROM arquivos WHERE idAula='$idAula'";

    $resultado3 = mysqli_query($conexao, $comando3);

    $comando4 = "SELECT * FROM arquivos WHERE idAula='$idAula'";

    $resultado4 = mysqli_query($conexao, $comando4);

    $comando5 = "SELECT COUNT(*) AS numArquivos FROM arquivos WHERE idAula = $idAula";

    $resultado5 = mysqli_query($conexao, $comando5);
    
    $registro5 = mysqli_fetch_assoc($resultado5);

    $comando6 = "SELECT * FROM aulas WHERE idAula='$idAula'";

$resultado6 = mysqli_query($conexao, $comando6);

$registro6 = mysqli_fetch_assoc($resultado6);


    $cont = 0;
    $cont2 = 0;
?>
<!DOCTYPE html>
<html lang="pt">
  <head><link rel="icon" href="img/icone.png">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Aula</title>
    <link rel="stylesheet" href="aula.css">
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
        <a href="pagInicial.php"> <img  id="imglogo" width="210" src="img/GENIALIZE.png" alt="logo"> </a>
        </div>
      </div>
      
      <div class="categorias">
        <a class="header" href="pagInicial.php">Categorias</a> 
        
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
          <a href="perfil.php?id=<?=$id?>"> <img class="imgdir" id="perfil" src="<?=$registro["imgUsuario"]?>" width="50px"></a>
        </div>
    </header>
    <script>
let paginaAtual = 0;

if (paginaAtual = 0){
  document.getElementById('alegre').style.display = 'block';
}
else {
  document.getElementById('alegre').style.display = 'hidden';
}

function atualizarConteudo() {
  <?php while($registro4 = mysqli_fetch_assoc($resultado4)) : 
      $cont2++;
    ?>
  document.getElementById('pagina<?=$cont2?>').style.display = 'none';
  <?php endwhile ?>
  document.getElementById('pagina' + paginaAtual).style.display = 'block';
}

function avancar() {
    if (paginaAtual >= 0 && paginaAtual < <?=$registro5["numArquivos"]?>) {
        paginaAtual++;
        atualizarConteudo();
    }
}

function voltar() {
    if (paginaAtual >= 2) {
        paginaAtual--;
        atualizarConteudo();
    }
}


</script>
    <h1 id="aula"><?=$registro2["titulo"]?></h1>
    <div id="content">
      <div id="alegre">
        <p>Clique em "Avançar" para começar, "Voltar" para retornar ao arquivo anterior e "Terminar" para sair da aula</p>
      </div>
    <?php while($registro3 = mysqli_fetch_assoc($resultado3)) : 
              $cont++;
              if($registro3["tipo"]=="Video"){?>
                <div id="pagina<?=$cont?>" class="pagina"><video id="videoaula" src="<?=$registro3["arquivo"]?>"controls></video></div>
              <?php }else if($registro3["tipo"]=="Texto"){?>
                <div id="pagina<?=$cont?>" class="pagina">
              <a href="<?=$registro3["arquivo"]?>" download>
                    <button class="botaodownload">Baixar Texto</button>
                </a></div>
                <?php }else if($registro3["tipo"]=="Imagem"){?>
                <div id="pagina<?=$cont?>" class="pagina">
                <img src="<?=$registro3["arquivo"]?>" width="300px"></img>
              </div>
              <?php }else if($registro3["tipo"]=="Slides"){?>
                <div id="pagina<?=$cont?>" class="pagina">
                <a href="<?=$registro3["arquivo"]?>" download>
                    <button class="botaodownload">Baixar Slides</button>
                </a>
                </div>
              <?php } else{?>
                <div id="pagina<?=$cont?>" class="pagina">
                <a href="<?=$registro3["arquivo"]?>" download>
                    <button class="botaodownload">Baixar Arquivo</button>
                </a>
                </div>
                <?php }
              ?>
    <?php endwhile ?>
  
    </div>

    <div id="buttons">
        <button id="btnVoltar" onclick="voltar()">Voltar</button>
        <a id="btnAvancar" href="aulas.php?idCurso=<?=$registro6["idCurso"]?>">Terminar</a>
        <button id="btnAvancar" onclick="avancar()">Avançar</button>
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