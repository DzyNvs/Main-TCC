<?php 
   
    include("conexao.php");
    include("menu.php");
   
?>

<title> SP SUBMERSO - Página Inicial </title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style-index.css">
<body>

<?php
$rand1 =(string) rand(3,16);
$rand2 = $rand1 - 1;
$rand3 = $rand2 - 1;

$image_rand = "curiosidades_imagens/curiosidade".$rand1.".jpg";
$image_rand2 = "curiosidades_imagens/curiosidade".$rand2.".jpg";
$image_rand3 = "curiosidades_imagens/curiosidade".$rand3.".jpg"
?>

    <br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="500"  src="<?php echo $image_rand;?>" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item">
            <img height="500"  src="<?php echo $image_rand2;?>" class="d-block w-100"  alt="...">
            
          </div>
          <div class="carousel-item">
            <img height="500"  src="<?php echo $image_rand3;?>" class="d-block w-100" alt="...">
            
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>

<center> <img width="90" height="70" src="img/logopeixe.png"> </center> <h2 class="text-center"> PRINCIPAIS DESTAQUES </h2> </img>
      <div id="destaques" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">

      <a href="Aquários.php">
        <div class="card aquarios">
          <img width="80" height="250" class="card-img-top" src="img/aquario.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title text-center">Aquários</h5>
            <p class="card-text text-center">
                <br>Entre peixes, golfinhos e outras criaturas marinhas, visitar um aquário é uma experiência bacana para todas as idades!<br><br><br><br>   </p>
                <br>
                <svg width="40" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z"/></svg>
        </a>
          </div>
        </div>

       <a href="parquesaquaticos.php">
        <div class="card aquatico">
          <img width="80" height="250" class="card-img-top" src="img/parque-aquatico.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title text-center">Parques Aquáticos</h5>
            <p class="card-text text-center"> <br> Saiba mais sobre os principais parques aquáticos de São Paulo e organize a sua próxima visita!<br> <br><br><br></p>
            <br>
                <svg width="40" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z"/></svg>
        </a>
          </div>
        </div>
    
        <a href="clubesnatacao.php">
        <div class="card natacao">
          <img width="80" height="250" class="card-img-top" src="img/natação.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title text-center">Clubes de Natação</h5>
            <p class="card-text text-center"> <br> A natação melhora o condicionamento cardiovascular, refresca você no verão, e pode ser praticada com segurança até por quem tem mais idade.</p>
            <br><br>
                <svg width="40" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z"/></svg>
            </a>
          </div>
        </div>
    
        <a href="Pisclubes.php">
        <div class="card piscinas">
          <img width="80" height="250" class="card-img-top" src="img/piscinas.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title text-center">Piscinas</h5>
            <p class="card-text text-center"> <br> Há dezenas de piscinas espalhadas pela cidade – em algumas delas, basta fazer uma inscrição gratuita e aproveitar o dia de sol.<br><br></p>
            <br><br>
                <svg width="40" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z"/></svg>
            </a>
          </div>
        </div>

      </div>
      <hr>
 
      <section class="teste"> 


      <h2 font-weight="700" color="darkblue" class="h2-footer text-center">LOCAIS MAIS BEM AVALIADOS </h2>

      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">  Clube Recreativo CERET </h5>
    <h6 class="card-subtitle mb-2 text-muted"> 4.6/5 -- 18,739 Avaliações </h6>
    <p class="card-text">"Clubes de natações super limpos e ambiente muito agrádavel, recomendo muito!" </p>
    <a href="http://www.ceret.com.br" class="card-link"> Site </a>
    <a href="https://www.google.com/search?q=clube+recreativo+ceret&sxsrf=ALiCzsZEgtce9yCniB0c-MNCCjMOjVk4pA%3A1662839191195&ei=l-kcY8bKC8_G5OUPzZyAiAQ&gs_ssp=eJzj4tVP1zc0TDIzKjYwMs81YLRSNaiwNElONU21MDBKS04yMTa2tAIKJSalGhgkJpsYGhsnmqaZeIkl55QmpSoUpSYXpSaWZJblKySnFqWWAABO3Rd1&oq=clube+rec&gs_lcp=Cgdnd3Mtd2l6EAMYADIKCC4QxwEQrwEQQzIFCAAQgAQyCwguEIAEEMcBEK8BMgsILhCABBDHARCvATILCC4QgAQQxwEQrwEyEQguEIAEELEDEIMBEMcBEK8BMgsILhCABBDHARCvATILCC4QgAQQxwEQrwEyBQgAEIAEMgsILhCABBDHARCvAToKCAAQRxDWBBCwAzoKCC4QxwEQrwEQJzoLCAAQgAQQsQMQgwE6CAguEIAEELEDOggILhCxAxCDAToRCC4QgAQQsQMQgwEQxwEQ0QM6BAgAEEM6CwguEIAEELEDEIMBOggIABCABBCxAzoHCCMQ6gIQJzoNCC4QxwEQrwEQ6gIQJzoNCC4QxwEQ0QMQ6gIQJzoHCAAQsQMQQzoUCC4QgAQQsQMQgwEQxwEQrwEQ1AI6BQguEIAESgQIQRgASgQIRhgAUJAmWJBEYOxNaApwAXgAgAGrAYgBuwuSAQQwLjEwmAEAoAEBsAEKyAEIwAEB&sclient=gws-wiz#lrd=0x94ce5e802fcb4339:0x9abe00ac4133a5f4,1,,," class="card-link">Mais Avaliações</a>
  </div>

</div> 

 

   
<br> <br> 
<br> 
<br> 
<br> 





      <div class="card" style="width: 18rem;">
  <img src="img/Ceret2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> Clube Recreativo CERET </h5>
    <p class="card-text"> O Clube Recreativo CERET é hoje o clube mais bem avaliado de São Paulo!!</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> 4.6/5 -- 18,739 Avaliações </li>
    <li class="list-group-item"> "Clubes de natações super limpos e ambiente muito agrádavel, recomendo muito!" </li>
    <li class="list-group-item"> "Ótimo lugar para um lazer em família para um dia de recreação. Com fácil acesso, um ambiente muito familiar, bem cuidado e com um horto florestal muito bem cuidado. Super indico 😉" </li>
  </ul>
  <div class="card-body">
    <a href="http://www.ceret.com.br" class="card-link">Site</a>
    <a href="https://www.google.com/search?q=clube+recreativo+ceret&sxsrf=ALiCzsZEgtce9yCniB0c-MNCCjMOjVk4pA%3A1662839191195&ei=l-kcY8bKC8_G5OUPzZyAiAQ&gs_ssp=eJzj4tVP1zc0TDIzKjYwMs81YLRSNaiwNElONU21MDBKS04yMTa2tAIKJSalGhgkJpsYGhsnmqaZeIkl55QmpSoUpSYXpSaWZJblKySnFqWWAABO3Rd1&oq=clube+rec&gs_lcp=Cgdnd3Mtd2l6EAMYADIKCC4QxwEQrwEQQzIFCAAQgAQyCwguEIAEEMcBEK8BMgsILhCABBDHARCvATILCC4QgAQQxwEQrwEyEQguEIAEELEDEIMBEMcBEK8BMgsILhCABBDHARCvATILCC4QgAQQxwEQrwEyBQgAEIAEMgsILhCABBDHARCvAToKCAAQRxDWBBCwAzoKCC4QxwEQrwEQJzoLCAAQgAQQsQMQgwE6CAguEIAEELEDOggILhCxAxCDAToRCC4QgAQQsQMQgwEQxwEQ0QM6BAgAEEM6CwguEIAEELEDEIMBOggIABCABBCxAzoHCCMQ6gIQJzoNCC4QxwEQrwEQ6gIQJzoNCC4QxwEQ0QMQ6gIQJzoHCAAQsQMQQzoUCC4QgAQQsQMQgwEQxwEQrwEQ1AI6BQguEIAESgQIQRgASgQIRhgAUJAmWJBEYOxNaApwAXgAgAGrAYgBuwuSAQQwLjEwmAEAoAEBsAEKyAEIwAEB&sclient=gws-wiz#lrd=0x94ce5e802fcb4339:0x9abe00ac4133a5f4,1,,," class="card-link">Mais Avaliações</a>
  </div>
</div>
<br> 
<br> 
<br> 
<br> 

</section> 

      </div>

      <hr>

      <div class="col-11 m-auto">
      <h2 font-weight="700" color="darkblue" class="h2-footer text-center">QUEM SOMOS?</h2>
          <p class="p-footer text-center">Nós do SP SUBMERSO desenvolvemos esse site com o intuito de inserir mais pessoas no ambiente marinho. Dessa forma o site
disponibiliza informações e outros detalhes sobre clubes de natação, aquários, parques
aquáticos e pontos turísticos que envolvam água em geral. Visamos atender principalmente a demanda de atletas, que buscam uma nova forma de se exercitar e que através do nosso site podem se
inscrever em clubes de natação, turistas que querem visitar aquários para conhecer um
pouco mais da fauna nacional, além de pais que desejam levar seus filhos para visitar
parques aquáticos ou inscrevê-los em clubes de natação para se exercitarem.</p>


      </div>

<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".card"), {
		max: 25,
		speed: 400
	});
      </script>


<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".card2"), {
		max: 25,
		speed: 400
	});
      </script>
</body>

<?php
include("rodape.php")

?>
