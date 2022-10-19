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
        <body>
        <div>
        <p> Você não pode acessar esta página porque não está logado </p> 
        <br>
        <center> <button> <a href=\"login.php\"> Entrar </a> </button> </center> 
        <br><img height=50 src=img/logopeixe.png><br> 
        <center> <button> <a href=\"registro.php\"> Cadastrar </a> </button </center> 
        </div>
        </body>");
}
?>
