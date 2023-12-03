<?php
   require "conexao.php";
   
   if(!isset($_SESSION["educ"])) {
       die();
   } else{
   $id = $_SESSION["educ"];
   
   $idAula = $_GET["idAula"];
   
   $comando = "SELECT * FROM aulas WHERE idAula = $idAula";
   
   $resultado = mysqli_query($conexao, $comando);
   
   $registro = mysqli_fetch_assoc($resultado);
   
   $comando2 = "SELECT * FROM educadores WHERE idEducador='$id'";
   
   $resultado2 = mysqli_query($conexao, $comando2);
   
   $registro2 = mysqli_fetch_assoc($resultado2);

    ?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="img/icone.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="pagamento.css">
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
                <a class="header" href="index.php">Trabalhe conosco!</a> 
            </div>
            <div class="itensHeader"> 
                <a><img class="imgdir" src="img/notificacao.webp" width="50px"></a>
            </div>
            <div class="itensHeader">
                <a href="perfilEduc.php?idEducador=<?=$id?>"><img class="imgdir" id="perfil" src="<?=$registro2["imgEducador"]?>" width="50px"></a>
              </div>
          </header>
            <div id="gradiente">
                <div id="cursoinfo">
            
            </div>
    </div>
</div>
    <div id="cont">
    
        <h1 id="formapag">Adicione o Arquivo</h1>
    

    
        <form action="insertArquivo.php?idAula=<?=$idAula?>" method="post" enctype="multipart/form-data">
            <div>
            <input type="file" class="botaodownload" name="arquivo">
                <br><br>
        <select id="categoria" name="tipo">
                        <option value="x"disabled selected>Tipo...</option>
                        <option value="Texto">Texto</option>
                        <option value="Video">Video</option>
                        <option value="Imagem">Imagem</option>
                        <option value="Slides">Slides</option>
                        <option value="Outros">Outros</option>
                    </select>
                    
        <button type="submit" name="botao" class="botaodownload2">Continuar</button>
    </form>

    
        
        
    
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