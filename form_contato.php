<?php include("menu.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>SP SUBMERSO - Página de Contato</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style-contato.css">
		
</head>




<body>
	<br>
	<br>
	<br>
	<br>
<center>
<section>
        <img width ="300" src="img/imagem_contato_semfundo.png">
		<div class="container">
		<form action="#" method="post">
            <label>Nome</label>
            <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" required>
            <label>Email</label>
            <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
			<label>Assunto</label>
            <input type="text" name="assunto" placeholder="Digite o foco da mensagem" autocomplete="off" required>
            <label>Mensagem</label>
            <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem" required></textarea>
            <button type="submit">Enviar</button>

            <input type="hidden" name="accessKey" value="042be0d3-84fa-4ae8-aaed-2434cda72cac">
            <input type="hidden" name="redirectTo" value="http://127.0.0.1:5501/obrigado.html">
        </form>
</div>
    </section>

</center>
	<br>
	<br>
	<br>
	<br>


















</body>	

	
	<?php
include("rodape.php")
?>
</html>