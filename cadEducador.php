<!DOCTYPE html>
<html lang="en">
<head><link rel="icon" href="img/icone.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cad.css">
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
            <a class="header" href="loginEducador.php">Trabalhe conosco!</a> 
        </div>
        <div class="itensHeader4">
            <a class="header" href="login.php">Entrar</a> 
        </div>
        
    </header>
    <div id="pag">
        <h3>Seja um educador</h3>
        <form action="insertEducador.php" method="post" enctype="multipart/form-data">
            <div class="cadItens">
                <div class="item">
                    <label for="nome">Nome completo*</label>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome...">
                </div>
                <div class="item">
                    <label for="email">E-mail*</label>
                    <input type="text" name="email" id="email" placeholder="Digite seu email...">
                </div>
                <div class="item">
                    <label for="senha">Senha*</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha...">
                </div>
            </div>
            <div class="cadItens">
                <div class="item">
                    <label for="contato">Contato*</label>
                    <input type="text" name="contato" id="contato" placeholder="Digite seu número...">
                </div>
                <div class="item">
                    <label for="cpf">CPF*</label>
                    <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF...">
                </div>
                <div class="item">
                    <label for="imgEducador">Foto de perfil*</label>
                    <input type="file"  accept="image/*" name="imgEducador" id="imgEducador">
                </div>
            </div>
            <div id="botao">
                <div>
                    <button type="submit">CADASTRAR</button>
                    <p>Ao se inscrever, você concorda com nossos Termos de Uso e com a Política de Privacidade.</p>
                </div>
            </div> 
        </form>
        <div id="atalho">
            <p>Já é um educador? <a href="loginEducadores.php">Faça Login</a></p>
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