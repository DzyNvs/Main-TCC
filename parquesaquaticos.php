<?php 
  
    include("conexao.php");
    include("menu.php");
?>

<head>
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
            <img height="500"  src="img/Hot Beach.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img  height="500"  src="img/Acqualinda.jpg" class="d-block w-100"  alt="...">
          </div>
          <div class="carousel-item">
            <img height="500" src="img/Magic City.jpg" class="d-block w-100" alt="...">
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
      <h2 class="text-center"> PARQUES AQUÁTICOS</h2>
      <p> 
      <div id="chapeus" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="card">
          <img width="80" height="250" class="card-img-top" src="img/thermadoslaranjais.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Thermas dos Laranjais</h5>
            <br>
            <p class="card-text"> O parque mais visitado do Brasil e da América Latina. Ele oferece mais de 55 atrações que vão desde complexos de toboáguas até uma montanha russa aquática.</p>
            <br>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thermas dos Laranjais</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img height="300" class="card-img-top" src="img/therma dos laranjais 2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Avenida do Folclore, 1543 – Jardim Santa Efigênia, Olímpia/SP – <p>
CEP: 15405-014  <p>
Telefone: (17) 3279-3500 <p>
Site: www.termas.com.br <p>
Preço: A partir de R$90. <p>
Zona: Fora da Capital de São Paulo <p>
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
          <img width="80" height="250" class="card-img-top" src="img/Wet’n Wild.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Wet’n Wild</h5>
            <br><br>
            <p class="card-text">O parque aquático Wet’n Wild fica a cerca de uma hora de São Paulo e contém mais de 25 atrações para todas as idades. </p>
            <br><br>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo1">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Wet’n Wild</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img height="300" class="card-img-top" src="img/Wet’n Wild2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP –   <p>
            CEP: 13295-000  <p>
Telefone: (11) 4496-8000  <p>
Site: www.wetnwild.com.br  <p>
Preço: A partir de R$99.  <p>
Zona: Zona Rural. 
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
          <img width="80" height="250" class="card-img-top" src="img/Thermas do Vale.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Thermas do Vale</h5>
            <br><br>
            <p class="card-text">Localizado no interior de São Paulo, o parque Thermas do Vale contém uma piscina de ondas com mais de 2.500 metros cúbicos e ondas com até um metro de altura. </p>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo2">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thermas do Vale</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img height="300" class="card-img-top" src="img/Thermas do Vale.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Linneu de Moura, 205 – Urbanova, São José dos Campos/SP    <p>
            CEP: 12244-380 <p>
Telefone: (12) 2136-8888  <p>
Site: www.thermasdovale.com.br  <p>
Preço: A partir de R$70.  <p>
Zona: Fora da Capital de São Paulo.
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
          <img width="80" height="250" class="card-img-top" src="img/Magic City.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Magic City </h5>
            <br>
            <p class="card-text">O parque possui uma estrutura completa que oferece locais para shows, lojas de conveniência e restaurantes. Além de contar com atrações radicais e uma área de parque de diversões. </p>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo3">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Magic City</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img height="300" class="card-img-top" src="img/Magic City.jpg" alt="Imagem de capa do card">
          <p>Endereço: Estrada do Pavoeiro, 8.870 – Índio Tibiriçá, Km 58,5 – Suzano/SP  –   <p>
            CEP: 08635-445  <p>
Telefone: (11) 4765-5800   <p>
Site: magiccity.com.br  <p>
Preço: A partir de R$29,90.  <p>
Zona: Fora da Capital de São Paulo.
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
          <img width="80" height="250" class="card-img-top" src="img/Hot Beach.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Hot Beach</h5>
            <br>
            <p class="card-text"> Famoso por sua praia artificial, com areia branca, 14 tipos de onda, água quente e mais de 600 coqueiros, o parque Hot Beach fica a cerca de 430 km de São Paulo e pode te surpreender muito!</p>
            <br>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo4">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hot Beach</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img height="300" class="card-img-top" src="img/Hot Beach.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Governador Adhemar Pereira de Barros, 1260 – Olímpia/SP <p>
CEP: 15406-255 <p>
Telefone: (17) 3279-1111  <p>
Site: www.hotbeach.com.br <p>
Preço: A partir de R$110 <p>
Zona: Fora da Capital de São Paulo <p>
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
          <img width="80" height="250" class="card-img-top" src="img/Thermas Water Park.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Thermas Water Park</h5>
            <br>
            <p class="card-text">Thermas Water Park é um parque aquático gigante que fica a cerca de 180 km de São Paulo. Destaca-se por sua quantidade de piscinas de águas quentes e sua decoração exótica. </p>
            <br><br>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo5">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thermas Water Park</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img height="300" class="card-img-top" src="img/Thermas Water Park.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rod. SP 304 – Km 189 – Fazenda Limoeiro, s/nº – São Pedro/SP  <p>
            CEP: 13520-000  <p>
Telefone: 4000-2998 <p>
Site: www.thermas.com.br/atracoes  <p>
Preço: A partir de R$59.  <p>
Zona: Fora da Capital de São Paulo 
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
          <img width="80" height="250" class="card-img-top" src="img/Castelo Park Aquático.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Castelo Park Aquático </h5>
            <p class="card-text"> Parque aquático com ótima infraestrutura e que fica a cerca de 150 km da capital paulista. Ele se destaca pela economia, já que o estacionamento é gratuito e tem um preço relativamente baixo. </p>
            <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo6">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Castelo Park Aquático</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img height="300" class="card-img-top" src="img/Castelo Park Aquático.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rodovia SP 143, km 3,5 – Cesário Lange/SP  <p>
            CEP: 18285-000  <p>
Telefone: (15) 99703-5711  <p>
Site: casteloparkaquatico.com.br  <p>
Preço: A partir de R$30.  <p>
Zona: Fora da Capital de São Paulo
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
          <img width="80" height="250" class="card-img-top" src="img/Acqualinda.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title"> Acqualinda </h5>
            <br><br>
            <p class="card-text"> Novo parque aquático da cidade de Andradina! Contém o maior rio lento das américas e uma enorme montanha-russa aquática. </p>
            <br><br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo7">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Acqualinda </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img height="300" class="card-img-top" src="img/Acqualinda.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rua Guarani, 859 - Itaguá, Ubatuba - SP   <p>
            CEP: 11680-000  <p>
Telefone: (12) 3834-1382  <p>
Site: www.thermasacqualinda.com.br  <p>
Preço: A partir de R$99.  <p>
Zona: Fora da Capital de São Paulo
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
      <hr>
      <div class="col-11 m-auto">
          <h3 class="text-center">Parques mais baratos </h3>
          <p class="text-center"> Magic City -- A partir de R$ 29,90 
          <p class="text-center">  Castelo Park Aquático -- A partir de R$ 30 
          <p class="text-center"> Thermas Water Park -- A partir de R$ 59
</p>


      </div>
      <hr>
      <div class="col-11 m-auto">
          <h3 class="text-center">Parques mais próximos da capital  </h3>
          <p class="text-center"> Wet’n Wild -- Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP – CEP: 13295-000.
          <p class="text-center">  Magic City -- Estrada do Pavoeiro, 8.870 – Índio Tibiriçá, Km 58,5 – Suzano/SP – CEP: 08635-445
          <p class="text-center"> Thermas da Mata  -- Estrada Morro Grande, 3000 – Jardim Isis, Cotia – SP, 06719-500.
</p>


      </div>
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

