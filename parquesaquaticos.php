<?php 
    include("verifica-login.php");
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
      <h2 class="text-center"> Parques Aquáticos </h2>
      <p> 
      <div id="chapeus" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="card">
          <img class="card-img-top" src="img/thermadoslaranjais.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Thermas dos Laranjais</h5>
            <p class="card-text"> O parque aquático Thermas dos Laranjais fica em Olímpia, a 430 km de São Paulo, e é o parque mais visitado do Brasil e da América Latina. Ele oferece mais de 55 atrações que vão desde complexos de toboáguas até piscina de surf 180°, passando por praias com ondas e rio lento com corredeiras, além de uma montanha russa aquática.</p>
        
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
          <img class="card-img-top" src="img/therma dos laranjais 2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Avenida do Folclore, 1543 – Jardim Santa Efigênia, Olímpia/SP – <p>
CEP: 15405-014  <p>
Telefone: (17) 3279-3500 <p>
Site: https://www.termas.com.br/ <p>
Preço: A partir de R$ 90. <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="img/Wet’n Wild.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Wet’n Wild</h5>
            <p class="card-text">O parque aquático Wet’n Wild fica a cerca de uma hora de São Paulo e contém mais de 25 atrações para todas as idades. Podemos destacar o tobogã com cápsula mais alto do mundo, altura similar a um prédio de 13 andares e 70 graus de inclinação e simula uma queda livre de 40 metros. Tem coragem de se aventurar em um dos maiores parques de São Paulo?</p>
         
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
          <img class="card-img-top" src="img/Wet’n Wild2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP –   <p>
            CEP: 13295-000  <p>
Telefone: (11) 4496-8000  <p>
Site: https://www.wetnwild.com.br/  <p>
Preço: A partir de R$ 99.  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        
        <div class="card">
          <img class="card-img-top" src="img/Thermas do Vale.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Thermas do Vale</h5>
            <p class="card-text">Localizado no interior de São Paulo, o parque Thermas do Vale contém uma piscina de ondas com mais de 2.500 metros cúbicos e ondas com até um metro de altura, um rio lento com 200 metros de extensão e mais outras 8 atrações.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo2">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Wet’n Wild</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Wet’n Wild2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP –   <p>
            CEP: 13295-000  <p>
Telefone: (11) 4496-8000  <p>
Site: https://www.wetnwild.com.br/  <p>
Preço: A partir de R$ 99.  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        

        <div class="card">
          <img class="card-img-top" src="img/Magic City.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Magic City </h5>
            <p class="card-text">O parque aquático Magic City fica a somente 60 km de São Paulo e se tornou um dos maiores complexos de lazer do país, com uma estrutura completa que oferece locais para shows, lojas de conveniência e restaurantes. Além de contar atrações radicais e uma área de parque de diversões. </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo3">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Wet’n Wild</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Wet’n Wild2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP –   <p>
            CEP: 13295-000  <p>
Telefone: (11) 4496-8000  <p>
Site: https://www.wetnwild.com.br/  <p>
Preço: A partir de R$ 99.  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        
      </div>


      <p> 
      <div id="chapeus" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="card">
          <img class="card-img-top" src="img/Hot Beach.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Hot Beach</h5>
            <p class="card-text"> Famoso por sua praia artificial, com areia branca, 14 tipos de onda, água quente e mais de 600 coqueiros, o parque Hot Beach fica a cerca de 430 km de São Paulo e pode te surpreender muito!</p>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo4">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thermas dos Laranjais</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/therma dos laranjais 2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Avenida do Folclore, 1543 – Jardim Santa Efigênia, Olímpia/SP – <p>
CEP: 15405-014  <p>
Telefone: (17) 3279-3500 <p>
Site: https://www.termas.com.br/ <p>
Preço: A partir de R$ 90. <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        <div class="card">
          <img class="card-img-top" src="img/Thermas Water Park.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Thermas Water Park</h5>
            <p class="card-text">Thermas Water Park é um parque aquático gigante que fica a cerca de 180 km de São Paulo. Destaca-se por sua quantidade de piscinas de águas quentes e sua decoração exótica </p>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo5">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Wet’n Wild</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Wet’n Wild2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP –   <p>
            CEP: 13295-000  <p>
Telefone: (11) 4496-8000  <p>
Site: https://www.wetnwild.com.br/  <p>
Preço: A partir de R$ 99.  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        
        <div class="card">
          <img class="card-img-top" src="img/Castelo Park Aquático.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Castelo Park Aquático </h5>
            <p class="card-text">Castelo Park Aquático é um parque aquático com uma ótima infraestrutura que fica a cerca de 150 km da capital paulista. Ele se destaca pela economia, já que o estacionamento é gratuito e tem um preço relativamente baixo. </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo6">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Wet’n Wild</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Wet’n Wild2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP –   <p>
            CEP: 13295-000  <p>
Telefone: (11) 4496-8000  <p>
Site: https://www.wetnwild.com.br/  <p>
Preço: A partir de R$ 99.  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        

        <div class="card">
          <img class="card-img-top" src="img/Acqualinda.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title"> Acqualinda </h5>
            <p class="card-text"> Acqualinda é o novo parque aquáticos da cidade de Andradina criado recentemente, e veio para competir com os gigantes! Contém o maior rio lento das américas e uma enorme montanha-russa aquática. Tem a previsão de abertura em agosto de 2022. </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo7">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Wet’n Wild</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Wet’n Wild2.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP –   <p>
            CEP: 13295-000  <p>
Telefone: (11) 4496-8000  <p>
Site: https://www.wetnwild.com.br/  <p>
Preço: A partir de R$ 99.  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        
      </div>
      <hr>
      <div class="col-11 m-auto">
          <h2 class="text-center">Parques mais baratos </h2>
          <p class="text-center"> Magic City -- A partir de R$ 29,90 
          <p class="text-center">  Castelo Park Aquático -- A partir de R$ 30 
          <p class="text-center"> Thermas Water Park -- A partir de R$ 59
</p>


      </div>
      <hr>
      <div class="col-11 m-auto">
          <h2 class="text-center">Parques mais próximos da capital  </h2>
          <p class="text-center"> Wet’n Wild -- Rodovia dos Bandeirantes, s/n – Km 72 – Zona Rural, Itupeva/SP – CEP: 13295-000.
          <p class="text-center">  Magic City -- Estrada do Pavoeiro, 8.870 – Índio Tibiriçá, Km 58,5 – Suzano/SP – CEP: 08635-445
          <p class="text-center"> Thermas da Mata  -- Estrada Morro Grande, 3000 – Jardim Isis, Cotia – SP, 06719-500.
</p>


      </div>
      <hr>

      <div class="col-11 m-auto">
        <h2 id="contato" class="text-center">Contato</h2>
        <div class="m-auto" style="width: 150px;">
            <a href="http://">
                <i class="fa-brands fa-whatsapp" style="font-size: 150px; color: green;"></i>
            </a>
        </div>
      </div>

      <footer style="background-color: #333;" class="p-5">
          <div class="text-center">
              <a href=""> © Copyright 2022: SP SUBMERSO™ </a>
          </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </body>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  </body>

