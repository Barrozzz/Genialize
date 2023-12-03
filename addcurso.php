<?php
    require "conexao.php";
    if(!isset($_SESSION["educ"])) {
        die();
    } else{
    $id = $_SESSION["educ"];
    
    $comando = "SELECT * FROM educadores WHERE idEducador='$id'";

    $resultado = mysqli_query($conexao, $comando);

    $registro = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="pt">
  <head><link rel="icon" href="img/icone.png">
      
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Adicionar curso</title>
    <link rel="stylesheet" href="addcurso.css">
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
            <a class="header" href="index.php">Trabalhe conosco!</a> 
        </div>
         <div class="itensHeader"> 
            <a><img class="imgdir" src="img/notificacao.webp" width="50px"></a>
        </div>
        <div class="itensHeader">
         <a href="perfilEduc.php?idEducador=<?=$id?>"><img class="imgdir" id="perfil" src="<?=$registro["imgEducador"]?>" width="50px"></a>
        </div>
    </header>
    <form action="insertCurso.php" method="post" enctype="multipart/form-data">
      <div id="cont">
        <div id="contesq">
          <h1 id="titulo">Titulo do curso:</h1>
          <input id="titulotext" name="titulo" type="text" placeholder="Insira o título...">
          <h1 id="titulo">Descrição do curso:</h1>
	            <textarea id="desc"placeholder="Insira a descrição..." name="descricao" rows="4" cols="50"></textarea>

                <h1 id="titulo">Informações do curso:</h1>
                <div id="infocurso">
                    <select id="idioma" name="idioma">
                        <option value="Português(Brasil)">Português(Brasil)</option>
                        <option value="English">English</option>
                    </select>
                    <select id="categoria" name="categoria">
                        <option value="x"disabled selected>Selecione...</option>
                        <option value="Java">Java</option>
                        <option value="PHP">PHP</option>
                        <option value="CSS">CSS</option>
                        <option value="HTML">HTML</option>
                        <option value="SQL">SQL</option>
                    </select>
                </div>
             </div>
             <div id="contdir">
                <h1 id="titulo">Imagem do curso:</h1>
                <input type="file" name="imgcurso" onchange="previewImagem()" accept="image/*">
                <img id="imgcurso">

                <h1 id="titulo2">Preço:</h1>
                <input id="preco" name="valor" type="number" placeholder="Insira o preço...">

                <div id="botoes">
                    <a href="perfilEduc.php" class="botao" id="botaoVoltar">Voltar</a>
                    <button type="submit" class="botao" id="botaoSalvar">Salvar</button>
                </div>
            </div>
            </form>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

             <script>
                function previewImagem(){
                    var imgcurso = document.querySelector('input[name=imgcurso]').files[0];
                    var preview = document.querySelector('#imgcurso');

                    var reader = new FileReader();

                    reader.onloadend = function(){
                        preview.src = reader.result;

                    }
                    if(imgcurso){
                        reader.readAsDataURL(imgcurso)
                    }
                    else{
                        preview.src = ""
                    }

                }

             </script>
           
    </div>
</form>

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