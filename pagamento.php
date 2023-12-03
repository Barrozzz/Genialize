<?php
    require "conexao.php";
    if(!isset($_SESSION["user"])) {
        die();
    } else{
    $id = $_SESSION["user"];

    $comando2 = "SELECT * FROM usuarios WHERE idUsuario='$id'";

    $resultado2 = mysqli_query($conexao, $comando2);

    $registro2 = mysqli_fetch_assoc($resultado2);

    $idCurso = $_GET["idCurso"];
    $comando = "SELECT * FROM Cursos WHERE idCurso=$idCurso";
    $resultado = mysqli_query($conexao, $comando);
    $registro = mysqli_fetch_assoc($resultado);

    ?>
<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="img/icone.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
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
                <a href="perfil.php?idUsuario=<?=$id?>"><img class="imgdir" id="perfil" src="<?=$registro2["imgUsuario"]?>" width="50px"></a>
            </div>
          </header>
            <div id="gradiente">
                <div id="cursoinfo">
                
                
                    <div id="boxtitulo">
                        <h1>Pagamento</h1>
                    </div>
            </div>
            
        
        <div id="pag">
            <img id="imgcurso" src="<?=$registro["imgCurso"]?>" alt="curso">
                <p id="nome"><?=$registro["titulo"]?></p>
                <img id="avaliacao" src="img/avaliacao.webp" width="150px">
                <h1 id="preco">R$<?=$registro["valor"]?></h1>
                <div id="comprar"><a href="insertCompra.php?idCurso=<?=$registro["idCurso"]?>">
                    <p id="compagr">Finalizar compra</p>
                </div>
                </a>
                
        </div>
    </div>
</div>
    <div id="cont">
    
        <h1 id="formapag">Escolha a forma de pagamento</h1>
    

    
        
        <label class="rotuloradio">
            <input type="radio" class="entradaradio" name="opcaopagamento" value="Cartão de crédito">
            <span class="iconeradio"></span> Cartão de crédito
    
            <div class="opcaopagamento">
                <input type="text" class="campoentrada" placeholder="Número do Cartão"><br>
                <input type="text" class="campoentrada" placeholder="Nome no Cartão"><br>
                <input type="text" class="campoentrada" placeholder="Validade do Cartão"><br>
                <input type="text" class="campoentrada" placeholder="Código de Segurança"><br>
            </div>
        </label>
    
        <label class="rotuloradio">
            <input type="radio" class="entradaradio" name="opcaopagamento" value="Boleto">
            <span class="iconeradio"></span> Boleto
    
            <div class="opcaopagamento">
                <a href="img/boleto_exemplo.pdf" download>
                    <button class="botaodownload">Download do Boleto</button>
                </a>
            </div>
        </label>
    
        <label class="rotuloradio">
            <input type="radio" class="entradaradio" name="opcaopagamento" value="PIX">
            <span class="iconeradio"></span> PIX
    
            <div class="opcaopagamento">
                <button class="botaoinfo">Mais Informações sobre PIX</button>
            </div>
        </label>
    

    
        
        
    
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