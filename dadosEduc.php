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
    <title>Dados</title>
    <link rel="stylesheet" href="dados.css">
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

    <div id="cont">
        <div id="fotoPerfil">
            <img id="fotodeperfil" src="<?=$registro["imgEducador"]?>" alt="foto de perfil">
            <p id="altfoto">Alterar foto de perfil</p>
            
        </div>
        <h1 id="dadpessoal">Dados pessoais</h1>
        <div id="dados">
            <div>
                <label for="nome">Nome</label><br>
                <input id="nome" type="text" value="<?=$registro["nome"]?>"> 
            </div>
            <div>
                <label for="email">Email</label>
                <input id="email" type="text" value="<?=$registro["email"]?>">
             </div>
             
           
        </div>
        
        <div id="idiomacont">
            <label for="nome">CPF</label><br>
            <input id="nome" type="text" value="<?=$registro["cpf"]?>"> 
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