<?php 
    include("verifica-login.php");
    include("conexao.php");
    include("menu.php");
?>
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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="500" src="img/AquarioSPdestaque.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img  height="500" src="img/AquarioUbatubadestaque.jpg" class="d-block w-100"  alt="...">
          </div>
          <div class="carousel-item">
            <img height="500" src="img/AcquaDestaques.jpg" class="d-block w-100" alt="...">
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
      <h2 class="text-center"> Aquários </h2>
      <p> 
      <div id="chapeus" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="card">
          <img class="card-img-top" src="img/AquarioSP.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Aquário de São Paulo</h5>
            <p class="card-text"> O Aquário fica localizado no bairro do Ipiranga. Considerado uma referência em tratamento e exposição de animais, foi inaugurado em 2006. É o único aquário temático do Brasil e apresenta aproximadamente 3 mil exemplares de cerca de 300 espécies de animais.</p>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aquário de São Paulo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/AquarioSP.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rua Huet Bacelar, 407 – Ipiranga  <p>
CEP:   <p>
Telefone: (11) 2273-5500 <p>
Site: www.aquariodesp.com.br <p>
Zona: Sul. <p>
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
          <img class="card-img-top" src="img/AquarioSantos.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Aquário Municipal de Santos </h5>
            <p class="card-text">Famoso por sua grande variedade de espécies o Aquário Municipal de Santos vai te deixar de boca aberta! </p>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo1">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aquário Municipal de Santos </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/AquarioSantos.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Bartolomeu de Gusmão, s/n (Praça Ver. Luiz La Scalla) Ponta da Praia – Santos   <p>
            CEP:  <p>
Telefone: (13) 3278-7830 <p>
Site:  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        
        <div class="card">
          <img class="card-img-top" src="img/AcquaMundo.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Acqua Mundo </h5>
            <p class="card-text">Localizado no Guarujá, também proporciona experiências incríveis! Ele é o maior aquário da América do Sul.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo2">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Acqua Mundo </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/AcquaMundo.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Miguel Estéfano – Guarujá/SP  <p>
            CEP:  <p>
Telefone: (13) 3398-3000 <p>
Site: : www.acquamundo.com.br <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        

        <div class="card">
          <img class="card-img-top" src="img/AquarioPiracicaba.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Aquário Municipal de Piracicaba </h5>
            <p class="card-text">Inaugurado em setembro de 2012, o aquário está instalado no Parque Mirante às margens do rio Piracicaba e é mais uma opção turística para levar as crianças.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo3">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aquário Municipal de Piracicaba </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/AquarioPiracicaba.jpg" alt="Imagem de capa do card">
          <p>Endereço: Avenida Doutor Maurice Allain s/n Parque do Mirante, Piracicaba   <p>
            CEP:  <p>
Telefone: (19) 3421-1566  <p>
Site:   <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        
      </div>


      <p> 
      <div id="chapeus" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="card">
          <img class="card-img-top" src="img/Ubatuba.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Projeto Tamar – Ubatuba</h5>
            <p class="card-text"> Inaugurada em 1991, a base da Fundação Projeto Tamar de Ubatuba foi a primeira instalada em uma área de alimentação das tartarugas marinhas no litoral brasileiro, tendo como principal objetivo mitigar os efeitos predatórios da pesca sobre esses animais. É a única base no Estado e está localizada na área central da cidade.</p>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo4">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Projeto Tamar – Ubatuba</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/Ubatuba.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. Antônio Atanázio, 273 - Itaguá, Ubatuba - SP <p>
CEP: 11680-000  <p>
Telefone: (12) 3832-6202 <p>
Site: tamar.org.br <p>
Zona: Fora da Capital de São Paulo. <p>
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
          <img class="card-img-top" src="img/AquarioUbatuba.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Aquário de Ubatuba </h5>
            <p class="card-text">Aquário com várias espécies locais, um tanque aberto, pássaros e répteis. </p>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo5">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aquário de Ubatuba </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/AquarioUbatuba.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rua Guarani, 859 - Itaguá, Ubatuba - SP  <p>
            CEP:11680-000 <p>
Telefone: (12) 3834-1382  <p>
Site: www.aquariodeubatuba.com.br  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        
        <div class="card">
          <img class="card-img-top" src="img/AquarioAparecida.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Aquário de Aparecida</h5>
            <p class="card-text">O Aquário de Aparecida é um atrativo para toda família. O colorido das dezenas de espécies encanta os visitantes que podem apreciar diversos tanques com espécies marinhas, peixes de água doce e uma piscina de tubarões.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo6">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aquário de Aparecida</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/AquarioAparecida.jpg" alt="Imagem de capa do card">
          <p>Endereço: Centro de Apoio ao Romeiro. Asa Oeste Aquario. Bairro: - Avenida Getúlio Vargas, R. Santa Rita, s/ n, Aparecida - SP  <p>
            CEP: 12570-000 <p>
Telefone:(12) 3909–2977  <p>
Site: www.a12.com <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>


      <p> 

      </div>


        
      </div>


 

      </div>
      <hr>

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
</html>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
  </body>

</html>
