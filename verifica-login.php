<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">

<?php
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION['autorizar'])) {
    die(
        "<link rel='stylesheet' href='css/style-verifica-login.css'>
        <body class='body-popup'>
          <div id='popup-js' class='popup mostrar'>
            <div class='modal-popup'>
              <button class='fechar'> x </button>
              <p class='p-popup'> Você não pode acessar esta página porque não está logado </p> 
              <center> <button class='button-popup'> <a class='a-popup' href=\"login.php\"> Entrar </a> </button> </center> 
              <img height=50 src=img/logopeixe.png><br> 
              <center> <button class='button-popup'> <a class='a-popup' href=\"registro.php\"> Cadastrar </a> </button </center> 
            </div>
            </div>
        </body>");
}
?>
