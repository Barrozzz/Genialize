<?php
    require "conexao.php";
    if(!isset($_SESSION["user"])) {
        die();
    } else{
    $id = $_SESSION["user"];

    $comando4 = "SELECT * FROM usuarios WHERE idUsuario='$id'";

    $resultado4 = mysqli_query($conexao, $comando4);

    $registro4 = mysqli_fetch_assoc($resultado4);

    $comando = "SELECT *
    FROM Cursos
    WHERE NOT EXISTS (
        SELECT 1
        FROM compras
        WHERE compras.idCurso = Cursos.idCurso
        AND compras.idUsuario = '$id'
    )";
    $resultado = mysqli_query($conexao, $comando);

    $comando2 = "SELECT *
    FROM Cursos
    WHERE valor = 0
    AND NOT EXISTS (
        SELECT 1
        FROM compras
        WHERE compras.idCurso = Cursos.idCurso
        AND compras.idUsuario = '$id'
    )";
    $resultado2 = mysqli_query($conexao, $comando2);

    $comando3 = "SELECT Cursos.*, COUNT(compras.idUsuario) AS numCompras
    FROM Cursos
    LEFT JOIN compras ON Cursos.idCurso = compras.idCurso
    WHERE NOT EXISTS (
        SELECT 1
        FROM compras
        WHERE compras.idCurso = Cursos.idCurso
        AND compras.idUsuario = '$id'
    )
    GROUP BY Cursos.idCurso
    ORDER BY numCompras DESC;";
    $resultado3 = mysqli_query($conexao, $comando3);

    $comando5 = "SELECT * FROM compras WHERE idUsuario='$id'";

    $resultado5 = mysqli_query($conexao, $comando5);

    $registro5 = mysqli_fetch_assoc($resultado5);

?>
<!DOCTYPE html>
<html lang="pt">
  <head><link rel="icon" href="img/icone.png">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <title>Pagina inicial</title>
    <link rel="stylesheet" href="index.css">
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
            <a class="header" href="cadEducador.php">Trabalhe conosco!</a> 
        </div>
         <div class="itensHeader"> 
            <a><img class="imgdir" src="img/notificacao.webp" width="50px"></a>
        </div>
         <div class="itensHeader">
            <a href="perfil.php?idUsuario=<?=$id?>"><img class="imgdir" id="perfil" src="<?=$registro4["imgUsuario"]?>" width="50px"></a>
        </div>
    </header>

    <div id="mae">
        <div id="banner">
            <img class="imgbanner" src="img/banner2.jpg" alt="banner">

        </div>
        <h1 id="titulo">Comece por aqui...</h1>
        <div class="cont">
            <div class="cursos">
  <?php while($registro = mysqli_fetch_assoc($resultado)) : ?>
                <a href="prod.php?idCurso=<?=$registro["idCurso"]?>">
                <div class="curso">
                        <img id="imgprod" src="<?=$registro["imgCurso"]?>" alt="<?=$registro["titulo"]?>"></img>
                        <div id="nome">
                            <h1 id="nomeProd"><?= $registro["titulo"];?></h1>
                        </div>
                        <h1 class="preco">R$<?=$registro["valor"]?></h1>
                        
                        <h3 class="comprar">Comprar</h3>
                        
                </div>
                </a>
            <?php endwhile ?>

            </div>

        </div>
            
        <h1 id="titulo">Cursos gratuitos...</h1>
        <div class="cont">

            <div class="cursos">
           
            <?php while($registro2 = mysqli_fetch_assoc($resultado2)) : ?>
                <a href="prod.php?idCurso=<?=$registro2["idCurso"]?>">
                <div class="curso">
                        <img id="imgprod" src="<?=$registro2["imgCurso"]?>" alt="<?=$registro2["titulo"]?>"></img>
                        <div id="nome">
                            <h1 id="nomeProd"><?= $registro2["titulo"];?></h1>
                        </div>
                        <h1 class="preco">R$<?=$registro2["valor"]?></h1>
                    
                        <h3 class="comprar">Comprar</h3>
                </div>
                </a>
            <?php endwhile ?>
  
                
               
            

            </div>

        </div>
        <h1 id="titulo">Mais vendidos...</h1>
        <div class="cont">
            <div class="cursos">
            <?php while($registro3 = mysqli_fetch_assoc($resultado3)) : ?>
                <a href="prod.php?idCurso=<?=$registro3["idCurso"]?>">
                <div class="curso">
                        <img id="imgprod" src="<?=$registro3["imgCurso"]?>" alt="<?=$registro3["titulo"]?>"></img>
                        <div id="nome">
                            <h1 id="nomeProd"><?= $registro3["titulo"];?></h1>
                        </div>
                        <h1 class="preco">R$<?=$registro3["valor"]?></h1>
                        <h3 class="comprar">Comprar</h3>

                </div>
                </a>
            <?php endwhile ?>
                
            

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

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script>





$('.cursos').slick({
  infinite: false,
  slidesToShow: 4,
  slidesToScroll: 3
});


var prices = document.getElementsByClassName("preco");


for (var i = 0; i < prices.length; i++) {
    if (prices[i].textContent === "R$0.00") {
        prices[i].textContent = "Gratuito";
    }
}


</script>
<?php }?>