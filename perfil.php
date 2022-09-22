<?php
    include("verifica-login.php");  
    include("menu.php");
    include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style-perfil.css">
  

  <title>SP SUBMERSO</title>
</head>

<body>
    <div class="container">
        <div class="main">

            <div class="row">
                <div class="col-md-4 mt-1">
                    <div class="card text-center sidebar">
                        <div class="card-body">
                           
                            <div class="mt-3">
                                <br>
                                <br>
                                <a href="perfil.php">Meu Perfil</a>
                                <?php
                                if(isset($_SESSION['nomebanco'])) {
                                echo '<h3>'. $_SESSION["nomebanco"]. "</h3>";
                                 }
                                ?>
                                <a href="alteraremail.php">Alterar email</a>
                                <a href="alterarsenha.php">Alterar senha</a>
                                <a href =""> Favoritos</a>
                                <a href="logout.php">Logout</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
    <div class="col-md-8 mt-1">
        <div class="card mb-3 content">
            <h1 class="m-3 pt-3">Conta</h1>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h5>Nome:</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                    <?php
                                if(isset($_SESSION['nomebanco'])) {
                                echo $_SESSION["nomebanco"];
                                 }
                                ?> <br>
                        <a href="alterarnome.php">Alterar nome de usuário</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h5>E-mail:</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                    <?php
                                if(isset($_SESSION['emailbanco'])) {
                                echo $_SESSION["emailbanco"];
                                 }
                                ?>
                        <br>
                        <a href="alteraremail.php">Alterar e-mail de usuário</a>
                    </div>
                    </div>
                                 <hr>
                    <div class="row">
                    <div class="col-md-3">
                        <h5>Senha:</h5>
                    </div>
                    <div class="col-md-9 text-secondary">
                    ********
                        <br>
                        <a href="alterarsenha.php">Alterar senha do usuário</a>
                    </div>
                    </div>
                    <br>
                   
</div>

                                 </div>
    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include("rodape.php")

?>

</html>
