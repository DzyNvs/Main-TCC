<?php include ("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/style-login.css">
  
  <script src="./script2.js" defer></script>

  <title>SP SUBMERSO</title>
</head>
<body>

  <main>
    <section class="login">

      <div class="wrapper">
        <img color="white" src="img/logopeixe.png" class="login__logo">

        <h1 class="login__title">Fazer login</h1>
        <form action ="login-consulta.php" method ="post">
        <h4 class ="error">
           <?php
          if (isset($_GET['erro'])) { if ($_GET['erro'] == "informacoesinvalidas") { echo "E-mail ou senha incorretos!"; }}
  ?>  
          </h3>
          <h4 class="registroconcluido">
          <?php
          if (isset($_GET['validacao'])) { if ($_GET['validacao'] == "registro") { 
			echo "Seu registro foi efetuado no site! ✔"; }}
			
  	?>  
    </h3>
        <label class="login__label">
          <span>E-mail do usuário</span>
          <input type="text" name="emailuser" class="input">
        </label>
  
        <label class="login__label">
        <div class="row">
          <span>senha</span>
          <input type="password" name="userpass" class="input senha" id="senha">
          <img src="https://icon-library.com/images/icon-eyes/icon-eyes-12.jpg" class="btn">
        </label>

        <script src="./mostrarsenha.js"></script>

      </div>

      <div class="wrapper">
        <button type="submit" class="login__button">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/>
          </svg>
        </button>
</form>
  
        <a href="registro.php" class="login__link">criar conta</a>
      </div>

    </section>

    <section class="wallpaper"></section>
  </main>
  
</body>
</html>
