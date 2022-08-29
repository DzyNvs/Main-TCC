<?php include("menu.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>SP SUBMERSO - Página de Contato</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/style-contato.css">


		<!-- CSS only -->
		
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="css/style-geral.css">

		</script>
	<head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<center> <h1 class="titulo">ENTRE EM CONTATO COM A GENTE!</h1> </center>
			</div>
			<center> <img width="700" src="imagens_registro-contato/imagem_contato3.jpg" class="img-fluid" alt="Imagem responsiva"> </center>
			<div class="textin">
				<center> <h4>Disponibilizamos nossos canais de contato direto para você enviar suas dúvidas, críticas, sugestões/solicitações ou elogios.</h4> </center>
			</div>
			

			<form class="form-horizontal" name="formcontato" method="POST" >
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Nome: 
					</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome" placeholder="Nome completo..." required>
					</div>
				</div>
				

				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						E-mail: 
					</label>
					<div class="col-sm-10">
						 <input type="email" class="form-control" name="email" placeholder="Seu melhor e-mail..." required>
					</div>
				</div>

				<div class="testezinho"> 


				
				
</div> 


				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Telefone:
					</label>
					<div class="col-sm-10">
						 <input id="phone" type="tel" class="form-control" name="telefone" placeholder="(DDD) 99999-9999" required>
					</div>
				</div>
				
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Assunto: 
					</label>
					<div class="col-sm-10">
						 <input type="text" class="form-control" name="assunto" placeholder="Motivo do contato..." required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">
						Mensagem: 
					</label>
					<div class="col-sm-10">
						<textarea class="form-control" name="mensagem"></textarea>
					</div>
				</div class="botao">
				
				<div class="butao">
				<button type="button" class="btn btn-outline-dark">Enviar</button>
				<br>
				<br>
				</div>

			</div>
			</form>

			
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>


	
	<?php
include("rodape.php")

?>

</html>