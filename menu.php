

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title> SP SUBMERSO </title>
</head>
<body>
 <br>
<nav class="navbar col-7 m-auto navbar-expand-lg navbar-dark bg-primary">
  <a width="1" class="navbar-brand" href="index.php"><center> <img width="60" height="40" src="img/logopeixe.png"> </center> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> Início </span></a>
      </li>

      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Locais
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="Aquários.php">Aquários</a>
          <a class="dropdown-item" href="parquesaquaticos.php">Parques aquáticos</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="clubesnatacao.php">Clubes de natação</a>
          <a class="dropdown-item" href="PisClubes.php">Piscinas</a>
        </div>
      </li>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function abrirAlerta(){
            
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Esta pagina só pode ser acessada com login!',
            footer: '<a href="registro.php">Criar uma conta</a>'
})
    }    
</script>
    <!--
     <?php

     /* if ($_SESSION['autorizar'] = true){

        echo "<li class='nav-item active'>
        <a onclick='abrirAlerta()' class='nav-link' href='form_contato.php'> Contato </a>
      </li>";
      }
        else{

          echo "<li class='nav-item active'>
        <a onclick='abrirAlerta()' class='nav-link' href='form_contato.php'> Contato </a>
      </li>";

        }

      
          */
      ?>
      
      <li class="nav-item active">
        <a onclick="abrirAlerta()" class="nav-link" href="form_contato.php"> Contato </a>
      </li>

      -->

      <li class="nav-item active">
        <a class="nav-link" href="form_contato.php"> Contato </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="quemsomos.php"> Quem Somos </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="avaliar.php"> Avaliações </a>
      </li>
    </ul>
    

    <ul class="navbar-nav  ">
    <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Perfil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="perfil.php"> Ver informações do Usuário </a>
          <a class="dropdown-item" href="alteraremail.php"> Alterar e-mail </a>
          <a class="dropdown-item" href="alterarsenha.php"> Alterar senha </a>      
          
          <a class="dropdown-item" href="logout.php"> Logout </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--<svg style="color: ;" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"> <path d="M495.9 166.6C499.2 175.2 496.4 184.9 489.6 191.2L446.3 230.6C447.4 238.9 448 247.4 448 256C448 264.6 447.4 273.1 446.3 281.4L489.6 320.8C496.4 327.1 499.2 336.8 495.9 345.4C491.5 357.3 486.2 368.8 480.2 379.7L475.5 387.8C468.9 398.8 461.5 409.2 453.4 419.1C447.4 426.2 437.7 428.7 428.9 425.9L373.2 408.1C359.8 418.4 344.1 427 329.2 433.6L316.7 490.7C314.7 499.7 307.7 506.1 298.5 508.5C284.7 510.8 270.5 512 255.1 512C241.5 512 227.3 510.8 213.5 508.5C204.3 506.1 197.3 499.7 195.3 490.7L182.8 433.6C167 427 152.2 418.4 138.8 408.1L83.14 425.9C74.3 428.7 64.55 426.2 58.63 419.1C50.52 409.2 43.12 398.8 36.52 387.8L31.84 379.7C25.77 368.8 20.49 357.3 16.06 345.4C12.82 336.8 15.55 327.1 22.41 320.8L65.67 281.4C64.57 273.1 64 264.6 64 256C64 247.4 64.57 238.9 65.67 230.6L22.41 191.2C15.55 184.9 12.82 175.3 16.06 166.6C20.49 154.7 25.78 143.2 31.84 132.3L36.51 124.2C43.12 113.2 50.52 102.8 58.63 92.95C64.55 85.8 74.3 83.32 83.14 86.14L138.8 103.9C152.2 93.56 167 84.96 182.8 78.43L195.3 21.33C197.3 12.25 204.3 5.04 213.5 3.51C227.3 1.201 241.5 0 256 0C270.5 0 284.7 1.201 298.5 3.51C307.7 5.04 314.7 12.25 316.7 21.33L329.2 78.43C344.1 84.96 359.8 93.56 373.2 103.9L428.9 86.14C437.7 83.32 447.4 85.8 453.4 92.95C461.5 102.8 468.9 113.2 475.5 124.2L480.2 132.3C486.2 143.2 491.5 154.7 495.9 166.6V166.6zM256 336C300.2 336 336 300.2 336 255.1C336 211.8 300.2 175.1 256 175.1C211.8 175.1 176 211.8 176 255.1C176 300.2 211.8 336 256 336z"/></svg> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>
