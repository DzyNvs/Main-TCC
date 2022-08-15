
<?php 
    include("verifica-login.php");
    include("conexao.php");
    include("menu.php");
?>


<title> SP SUBMERSO - Página Inicial </title>

<link rel="stylesheet" href="style1.css">
<body>


<?php
$rand1 =(string) rand(1,16);
$rand2 =(string) rand(1,16);
$rand3 =(string) rand(1,16);

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

<center> <img width="90" height="70" src="img/logo.jpg"> </center> <h2 class="text-center"> PRINCIPAIS DESTAQUES </h2> </img>
      <div id="destaques" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">

      <a href="Aquários.php">
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/aquario.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title text-center">Aquários</h5>
            <p class="card-text text-center">Que tal levar os pequenos para um passeio? 
                <br><br> Entre peixes, golfinhos e outras criaturas marinhas, visitar um aquário é uma experiência bacana para todas as idades! </p>
                <br><br><br><br>
                <svg width="40" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z"/></svg>
        </a>
          </div>
        </div>

       <a href="parquesaquaticos.php">
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/parque-aquatico.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title text-center">Parques Aquáticos</h5>
            <p class="card-text text-center">Com uma vasta estrutura repleta de piscinas, tobogãs, espreguiçadeiras e muito mais, esses complexos de lazer são excelentes para relaxar e ainda se refrescar com diversão ao lado de familiares e amigos. <br>Saiba mais sobre os principais parques aquáticos de São Paulo e organize a sua próxima visita!</p>
                <svg width="40" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z"/></svg>
        </a>
          </div>
        </div>
    
        <a href="clubesnatacao.php">
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/natação.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title text-center">Clubes de Natação</h5>
            <p class="card-text text-center">A natação é uma atividade que queima muitas calorias, ajuda nas articulações, aumenta a força muscular e a resistência. Também melhora o condicionamento cardiovascular, e refresca você no verão, e pode ser praticado com segurança até por quem tem mais idade.</p>
            <br><br>
                <svg width="40" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z"/></svg>
            </a>
          </div>
        </div>
    
        <a href="Pisclubes.php">
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/piscinas.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title text-center">Piscinas</h5>
            <p class="card-text text-center">Para se refrescar no calor, você não precisa enfrentar horas no congestionamento até a praia mais próxima. Há dezenas de piscinas espalhadas pela cidade – em algumas delas, basta fazer uma inscrição gratuita e aproveitar o dia de sol.</p>
            <br><br><br>
                <svg width="40" height="17" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M246.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L178.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C47.63 444.9 55.81 448 64 448s16.38-3.125 22.62-9.375l160-160C259.1 266.1 259.1 245.9 246.6 233.4zM438.6 233.4l-160-160c-12.5-12.5-32.75-12.5-45.25 0s-12.5 32.75 0 45.25L370.8 256l-137.4 137.4c-12.5 12.5-12.5 32.75 0 45.25C239.6 444.9 247.8 448 256 448s16.38-3.125 22.62-9.375l160-160C451.1 266.1 451.1 245.9 438.6 233.4z"/></svg>
            </a>
          </div>
        </div>

      </div>
      <hr>

<footer>
      <div class="col-11 m-auto">
      <h2 class="h2-footer text-center">QUEM SOMOS?</h2>
          <p class="p-footer text-center">Nós do SP SUBMERSO desenvolvemos esse site com o intuito de inserir mais pessoas no ambiente marinho. Dessa forma o site
disponibiliza informações e outros detalhes sobre clubes de natação, aquários, parques
aquáticos e pontos turísticos que envolvam água em geral. Visamos atender principalmente a demanda de atletas, que buscam uma nova forma de se exercitar e que através do nosso site podem se
inscrever em clubes de natação, turistas que querem visitar aquários para conhecer um
pouco mais da fauna nacional, além de pais que desejam levar seus filhos para visitar
parques aquáticos ou inscrevê-los em clubes de natação para se exercitarem.</p>
      </div>
</footer>
<script type="text/javascript" src="vanilla-tilt.js"></script>
<script type="text/javascript">
	VanillaTilt.init(document.querySelectorAll(".card"), {
		max: 25,
		speed: 400
	});
      </script>
</body>