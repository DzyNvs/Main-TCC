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
                                <a href="">Alterar email</a>
                                <a href="alterarsenha.php">Alterar senha</a>
                             
                                <a href="logout.php">Logout</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
    <div class="col-md-8 mt-1">
        <div class="card mb-3 content">
            <h1 class="m-3 pt-3">Alterar E-mail do usuário</h1>
            <div class="card-body">
                <div class="row">
                <form action="email-trocar.php" method="post">
  <div class="form-group">
    <label for="exampleInputNome">Digite o novo e-mail:</label>
    <input type="email" class="form-control" id="exampleInputNome" name ="alteraremail"  placeholder="Novo E-mail">
    <small class="txtaviso">
    <h4 class="preencha">
	<?php
          if (isset($_GET['erro'])) { if ($_GET['erro'] == "vazio") { 
			echo "Preencha o formulário!"; }}
			
  	?>
    <h4 class="txtaviso">
	<?php
          if (isset($_GET['validacao'])) { if ($_GET['validacao'] == "emailalterado") { 
			echo "O novo E-mail foi registrado no servidor!"; }}
			
  	?>  
	</h4>
   
    <h4 class="txtaviso1">
	<?php
          if (isset($_GET['validacao'])) { if ($_GET['validacao'] == "erro") { 
			echo "Devido a um erro, não foi possivel alterar o E-mail do usuário!"; }}
			
  	?>  
	</h4>  
</h4>
                                </small>    
    
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
  
    
  
</form>

                    
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
