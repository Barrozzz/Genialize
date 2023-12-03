<?php
    require "conexao.php";
    if(!isset($_SESSION["user"])) {
        die();
    } else{
    $id = $_SESSION["user"];

    $comando = "SELECT * FROM usuarios WHERE idUsuario='$id'";

    $resultado = mysqli_query($conexao, $comando);

    $registro = mysqli_fetch_assoc($resultado);

    $idCurso = $_GET["idCurso"];

    $comando2="SELECT * FROM Cursos WHERE idCurso = '$idCurso'";

     $resultado2 = mysqli_query($conexao, $comando2);

     $registro2 = mysqli_fetch_assoc($resultado2);

     $comando3="SELECT a.*
     FROM aulas a
     JOIN cursos c ON a.idCurso = c.idCurso
     WHERE c.idCurso = $idCurso";

    $resultado3 = mysqli_query($conexao, $comando3);

    $comando4="SELECT * FROM avisos WHERE idCurso = '$idCurso'";

     $resultado4 = mysqli_query($conexao, $comando4);


?>
<!DOCTYPE html>
<html lang="pt">
  <head><link rel="icon" href="img/icone.png">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Aulas</title>
    <link rel="stylesheet" href="aulas.css">
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
        <div id="cont">
            
            <div id="imgcursocont">
                <img id="imgcurso" src="<?=$registro2["imgCurso"]?>" alt="curso">
            </div>
            <div id="black">
                <h1 id="nomecurso"><?=$registro2["titulo"]?></h1>
                <p><?=$registro2["descricao"]?></p>


            </div>
     </div>
     <div id="abas">
      <nav>
          <a href="#aulas">Aulas</a>
          <a href="#avisos">Avisos</a>
          <a href="#sobre">Sobre</a>
      </nav>
  
      <div id="aulas" >
      <?php while($registro3 = mysqli_fetch_assoc($resultado3)) : ?>
          <a href="aula.php?idAula=<?=$registro3["idAula"]?>"><span id="aula">
              <h1 id="botaoAula">Assistir</h1>
              <p id="nomeAula"><?=$registro3["titulo"]?></p>
          </span></a>
          <?php endwhile ?>
      </div>

      <div id="avisos">
          <h1>Avisos</h1>
          <?php while($registro4 = mysqli_fetch_assoc($resultado4)) : ?>
            <br>
            <p id="sobreAviso"><?=$registro4["dataAviso"]?></p>
          <p id="sobreAviso"><?=$registro4["aviso"]?></p>

          <?php endwhile ?>
          
      </div>
      <div id="sobre">
          <h1>Sobre</h1>
          <p id="sobreAviso"><?=$registro2["sobre"]?></p>
      </div>

  </div>

  <script>
      window.addEventListener('load',()=>{
          document.querySelectorAll('#abas nav a').forEach((a)=>{
              a.addEventListener('click',()=>{
                  let f=a.parentNode.querySelector('a.focus')
                  if(f)f.classList.remove('focus')
                  a.classList.add('focus')
              })
          })
      })
      

  </script>




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