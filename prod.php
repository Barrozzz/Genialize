<?php
require "conexao.php";

if(!isset($_SESSION["user"])) {
  die();
} else{
$id = $_SESSION["user"];

$comando4 = "SELECT * FROM usuarios WHERE idUsuario='$id'";

$resultado4 = mysqli_query($conexao, $comando4);

$registro4 = mysqli_fetch_assoc($resultado4);


$idCurso = $_GET["idCurso"];
$comando = "SELECT * FROM Cursos WHERE idCurso=$idCurso";
$resultado = mysqli_query($conexao, $comando);
$registro = mysqli_fetch_assoc($resultado);

$comando2 = "SELECT E.nome AS nome_educador, E.imgEducador AS foto_perfil
FROM Cursos C
JOIN Educadores E ON C.idEducador = E.idEducador
WHERE C.idCurso = $idCurso;";
$resultado2 = mysqli_query($conexao, $comando2);
$registro2 = mysqli_fetch_assoc($resultado2);

$comando3= "SELECT COUNT(*) AS total_compras
FROM compras
WHERE idCurso = $idCurso";
$resultado3 = mysqli_query($conexao, $comando3);
$registro3 = mysqli_fetch_assoc($resultado3);



?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="img/icone.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso</title>
    <link rel="stylesheet" href="prod.css">
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
                <a href="perfil.php?idUsuario=<?=$id?>"><img class="imgdir" id="perfil" src="<?=$registro4["imgUsuario"]?>" width="50px"></a>
              </div>
          </header>
            <div id="gradiente">
                <div id="cursoinfo">
                    <p id="caminho">Tecnologia><?=$registro["categoria"]?>><?=$registro["titulo"]?></p>
                    <div id="boxdesc">
                    <p id="desc"><?=$registro["descricao"]?></p>
                    </div>
                
                    <div id="boxtitulo">
                        <h1><?=$registro["titulo"]?></h1>
                    </div>
            </div>
            
        
        <div id="pag">
                <img id="imgcurso" src="<?=$registro["imgCurso"]?>" alt="curso">
                <h1 class="preco">R$<?=$registro["valor"]?></h1>
                <div id="comprar">
                  <?php 
                  if($registro["valor"]>0){
                    ?>
                    <a href="pagamento.php?idCurso=<?=$registro["idCurso"]?>">
                    <?php
                  }else{
                    ?>
                    <a href="insertCompra.php?idCurso=<?=$registro["idCurso"]?>">
                    <?php
                  }
                  ?>
                  
                    <p id="compagr">Adquirir agora</p>
                    <img src="img/carrinho.png" id="carrinho" alt="carrinho">
                </div>
                </a>
                <p id="devolucao">Garantia de devolução do dinheiro<br> em 30 dias!</p>
        </div>
    </div>
</div>
    <div id="cont">
    
        <div id="info">
          <div id="educ">
            <p>Professor(a): <?=$registro2["nome_educador"]?></p>
            <img id="imgeduc" src="<?=$registro2["foto_perfil"]?>" alt="curso">
            </div>
            <p><?=$registro["idioma"]?></p>
            <div class="rating">
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1"></label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2"></label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3"></label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4"></label>
                <input type="radio" id="star5" name="rating" value="5">
                <label for="star5"></label>
            </div>
            <p><?=$registro3["total_compras"]?> Alunos</p>
            <h1 id="sobre">Sobre</h1>
            <div class="sobre">
                <p><?=$registro["sobre"]?></p>
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

<script>




var prices = document.getElementsByClassName("preco");

for (var i = 0; i < prices.length; i++) {
    if (prices[i].textContent === "R$0.00") {
        prices[i].textContent = "Gratuito";
    }
}


</script>