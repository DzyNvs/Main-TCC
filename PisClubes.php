<?php 
    
    include("conexao.php");
    include("menu.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Raleway:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/style-geral.css">

  <title> SP SUBMERSO </title>
</head>
<body>
<br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="500" src="img/PacaembuDestaque.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img  height="500" src="img/Sesc24Maio.jpg" class="d-block w-100"  alt="...">
          </div>
          <div class="carousel-item">
            <img  height="500" src="img/Ibirapuera.jpg" class="d-block w-100" alt="...">
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
      <hr>
      <h2 class="text-center"> PISCINAS E CLUBES </h2>
      <p> 
      <div id="chapeus" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/Ceret.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Piscina do Ceret</h5>
            <br><br><br>
            <p class="card-text"> Conta com uma das maiores piscinas públicas de São Paulo.
Existem duas piscinas para crianças menores onde as mães e pais podem curtir com os pequenos com toda a segurança.</p>
<br><br>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Piscina do Ceret</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Ceret.jpg" alt="Imagem de capa do card">
          <p>Endereço: Vila Reg. Feijó, São Paulo - SP <p>
CEP: 03338-050  <p>
Telefone: (11) 2672-1240 <p>
Site: www.ceret.com.br/ceret-piscina/ <p>
Zona: Leste <p>
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
          </div>
        </div>

        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/SescItaquera.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Piscinas – Sesc Itaquera</h5>
            <br><br>
            <p class="card-text"> O local conta com ginásio poliesportivo, parque aquático, campo de futebol e muito mais! Há piscina em quase todas as unidades do Sesc, com exceção do Parque Dom Pedro II e Florêncio de Abreu. </p>
            <br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo1">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Piscinas – Sesc Itaquera</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/SescItaquera.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Fernando do Espírito Santo Alves de Mattos, 1000 - Itaquera, São Paulo - SP   <p>
            CEP: 08265-045  <p>
Telefone: (11) 2523-9200  <p>
Site: www.sescsp.org.br/servicos-sesc-itaquera/  <p>
Zona: Leste
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
          </div>
</div>
          </div>
        </div>

        
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/Ceret2.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Recreativo CERET</h5>
            <br><br>
            <p class="card-text">O CERET é um grande local onde se elaboram programações recreativas, educacionais, culturais, sociais e esportivas, localizado na Cidade de São Paulo, no distrito de Vila Formosa.</p>
            <br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo2">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Recreativo CERET</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Ceret2.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. Canuto Abreu, s/n - Jardim Analia Franco, São Paulo - SP  <p>
            CEP: 03336-060 <p>
Telefone: (11) 2672-1240 <p>
Site: www.ceret.com.br  <p>
Zona: Leste.
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
          </div>
</div>
          </div>
        </div>

        

        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/Trindade.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">CE Jd. São Paulo - CEE Alfredo Ignácio Trindade </h5>
            <br><br>
            <p class="card-text"> O Clube Escola Jardim São Paulo é um complexo de lazer e educacional administrado pela Prefeitura de São Paulo.</p>
            <br><br><br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo3">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">CE Jd. São Paulo - CEE Alfredo Ignácio Trindade</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Trindade.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. Viri, 425 - Jardim São Paulo, São Paulo - SP   <p>
            CEP: 02046-030 <p>
Telefone: (11) 2973-5390  <p>
Site: www.prefeitura.sp.gov.br/cidade/secretarias/esportes/  <p>
Zona: Norte.
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
          </div>
</div>
          </div>
        </div>

        
      </div>


      <p> 
      <div id="chapeus" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/Pacaembu.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Complexo Esportivo do Pacaembu</h5>
            <br>
            <p class="card-text"> Além de um complexo esportivo, o estádio tem uma piscina aquecida que foi reformada no ano passado. A piscina fica aberta de terça a domingo até às 17h e os associados também têm acesso à quadra de futsal, sala de ginástica e de musculação.</p>
            <br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo4">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Complexo Esportivo do Pacaembu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Pacaembu.jpg" alt="Imagem de capa do card">
          <p>Endereço: Praça Charles Miller, s/n - Pacaembu, São Paulo - SP <p>
CEP: 01246-020  <p>
Telefone: (11) 3664-4650 <p>
Site: www.prefeitura.sp.gov.br/cidade/secretarias/esportes/estadio_pacaembu/centro_esportivo/ <p>
Zona: Centro. <p>
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
          </div>
        </div>

        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/24Maio.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Sesc 24 de Maio</h5>
            <br><br>
            <p class="card-text">Inaugurada em agosto de 2017, esta unidade do Sesc possui uma piscina com vista panorâmica para a cidade construída no topo do prédio principal. O espaço fica aberto de terça a domingo das 9h às 20h30, exceto no domingo, que funciona até às 17h30. </p>
            <br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo5">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sesc 24 de Maio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/24Maio.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. 24 de Maio, 109 - República, São Paulo - SP   <p>
            CEP: 01041-001  <p>
Telefone: (11) 3350-6300  <p>
Site: www.sescsp.org.br  <p>
Zona: Centro.
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
          </div>
</div>
          </div>
        </div>

        
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/IbirapueraDes.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Esportivo Municipal Ibirapuera</h5>
            <br><br><br>
            <p class="card-text"> A poucos quarteirões do Parque do Ibirapuera, duas piscinas, uma semiolímpica e outra infantil, ficam abertas de terça a domingo até às 17h.  </p>
            <br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo6">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Esportivo Municipal Ibirapuera</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/IbirapueraDes.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rua Pedro de Toledo, 1591 - Vila Clementino, São Paulo – SP  <p>
            CEP: 04039-034  <p>
Telefone: (11) 5574-5045  <p>
Site: parqueibirapuera.org <p>
Zona: Sul.
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
          </div>
</div>
          </div>
        </div>


      <p> 

      </div>
      </div>
      </div>
      <hr>

     

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </body>
</html>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  </body>
  <?php
include("rodape.php")

?>

</html>
