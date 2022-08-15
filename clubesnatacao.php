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
            <img  height="500" src="img/clubebosque.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="500" src="img/clubehelvetia.jpg" class="d-block w-100"  alt="...">
          </div>
          <div class="carousel-item">
            <img height="500" src="img/clubeesperia.jpg" class="d-block w-100" alt="...">
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
      <h2 class="text-center"> Clubes de Natação e Lazer </h2>
      <p> 
      <div id="chapeus" class="card-deck row row-cols-1 row-cols-md-3 g-4 col-11 m-auto">
        <div class="card">
          <img class="card-img-top" src="img/clubebosque.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube do Bosque</h5>
            <p class="card-text"> O Clube Esperia é um dos mais completos e conceituados clubes brasileiros. Além de contribuir com a formação de atletas, o Esperia é também um importante polo de cultura, esporte e lazer da cidade de São Paulo.</p>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube do Bosque</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubebosque.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. Traituba, 287 - Vila da Saúde, São Paulo - SP <p>
CEP: 04142-050  <p>
Telefone: (11) 2276-0967 <p>
Site: www.clubedobosque.com.br <p>
Zona: Sul <p>
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
          <img class="card-img-top" src="img/clubehelvetia.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Esportivo Helvetia</h5>
            <p class="card-text">No Clube Esportivo Helvetia, você terá momentos inesquecíveis para suas festas e eventos. São diversos espaços para locação que acomodam eventos sociais e corporativos com estrutura e segurança locamos quadras para práticas esportivas, churrasqueira para encontro com os amigos, auditório, teatro e espaços para palestras e reuniões corporativas, além do nosso salão principal Maison Helvetia que acomoda até 200 pessoas e conta com todo o charme da arquitetura Suissa. </p>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo2">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Esportivo Helvetia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubehelvetia.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Indianópolis, 3145 - Planalto Paulista, São Paulo - SP   <p>
            CEP: 04063-006  <p>
Telefone: (11) 2275-6738  <p>
Site: www.clubehelvetia.com.br  <p>

Zona: Sul
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
          <img class="card-img-top" src="img/clubeesperia.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Esperia</h5>
            <p class="card-text">Esperia é um importante polo de cultura, esporte e lazer da cidade de São Paulo, com mais de 80.000 m² e acesso livre a diversas modalidades.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo3">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Esteria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeesperia.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Santos Dumont, 1313 - Santana, São Paulo - SP   <p>
            CEP: 02012-010  <p>
Telefone: (11) 2223-3300  <p>
Site: https://www.instagram.com/clubeesperiaoficial/  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        

        <div class="card">
          <img class="card-img-top" src="img/clubeescolamooca.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Escola da Mooca </h5>
            <p class="card-text">O Clube Escola Mooca conta com diversas modalidades diferentes de esportes e muito lazer, piscina semiolímpica, campo de futebol, ginásio poliesportivo, quadras externas, salão de judô, espaço para ginástica olímpica, musculação, brinquedoteca, local para a prática de capoeira, numa ampla área arborizada. </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo4">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Escola da Mooca</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeescolamooca.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rua Taquari, 635 - Mooca, São Paulo - SP   <p>
            CEP: 03166-000 <p>
Telefone: (11) 2694-7668  <p>
Site: www.prefeitura.sp.gov.br  <p>
Zona: Zona Leste
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
          <img class="card-img-top" src="img/clubesirio.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Esporte Clube Sírio</h5>
            <p class="card-text"> Com milhares de associados e profundamente integrado à vida paulistana, o Esporte Clube Sírio faz parte da elite dos clubes socioculturais e esportivos de São Paulo, oferecendo o que há de mais moderno em matéria de lazer, cultura e esporte para todas as idades e, ao mesmo tempo, cultuando a preservação das tradições, dos costumes e da hospitalidade árabe no Brasil.</p>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo5">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Esporte Clube Sírio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubesirio.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Indianópolis, 1192 - Planalto Paulista, São Paulo - SP <p>
CEP: 04062-001  <p>
Telefone: (11) 2189-8500 <p>
Site: www.sirio.org.br <p>
Zona: Sul <p>
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
          <img class="card-img-top" src="img/clubeypiranga.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Atlético Ypiranga</h5>
            <p class="card-text">Com amplas opções esportivas e de lazer além de uma longa trajetória, o Clube Atlético Ypiranga pode se orgulhar de ser grande referência esportiva e social na cidade de São Paulo. </p>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo6">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Atlético Ypiranga</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeypiranga.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. do Manifesto, 475 - Ipiranga, São Paulo - SP   <p>
            CEP: 04209-000  <p>
Telefone: (11) 3386-3386  <p>
Site: https://www.instagram.com/c.a.ypiranga/  <p>
Zona: Zona Sul
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
          <img class="card-img-top" src="img/cluberuve.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">R.U.V.E. Recreativo União Vila Esperança </h5>
            <p class="card-text">O RUVE sendo uma associação sem fins lucrativos oferece com custos acessíveis infraestrutura de um clube muito bem estruturado. Com quadra poliesportiva, salão social, piscina coberta, piscina descoberta semiolímpica, salas de ginástica, além de professores altamente qualificados. </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo7">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">R.U.V.E. Recreativo União Vila Esperança</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/cluberuve.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. Cumai, 170 - Vila Esperança, São Paulo - SP  <p>
            CEP: 03649-040  <p>
Telefone: (11) 2684-9011  <p>
Site: www.ruve.com.br <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        

        <div class="card">
          <img class="card-img-top" src="img/clubebutanta.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title"> Centro Educacional Esportivo do Butantã </h5>
            <p class="card-text"> Localizado na zona oeste de São Paulo, o local possui 2 campos de futebol, piscinas e quadras poliesportivas. </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo8">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Centro Educacional Esportivo do Butantã</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubebutanta.jpg" alt="Imagem de capa do card">
          <p>Endereço: Rua Dr. Ernâni da Gama Corrêa, 367 - Conj. Res. Butanta, São Paulo - SP   <p>
            CEP: 05539-040  <p>
Telefone: (11) 3721-5711 <p>
Site: www.desportivobutanta.com.br  <p>
Zona: Oeste
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
          <img class="card-img-top" src="img/clubepaulista.jpeg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Tênis Clube Paulista</h5>
            <p class="card-text">Local de lazer e entretenimento seguro, proporcionando ótima qualidade de vida aos associados. Contém dezenas de modalidades esportivas, academia gratuita aos associados, cursos de dança, shows, festas, atividades físicas, eventos, saunas, berçário, salas de jogos, brinquedoteca com monitores, piscinas aquecidas, lanchonetes e restaurantes. </p>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo9">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tênis Clube Paulista</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubepaulista.jpeg" alt="Imagem de capa do card">
          <p>Endereço: R. Gualaxo, 285 - Aclimação, São Paulo - SP <p>
CEP: 01533-020  <p>
Telefone: (11) 3252-5254 <p>
Site: www.tenisclubepaulista.com.br <p>
Zona: Sul <p>
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
          <img class="card-img-top" src="img/clubeacre.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Acre</h5>
            <p class="card-text">O Acre Clube é um dos mais tradicionais clubes de lazer, cultura e esportes de São Paulo. Com infraestrutura completa para atividades sociais, de lazer e saúde, o clube ainda organiza campeonatos das mais variadas modalidades esportivas, festas, shows, cursos, exposições de arte e até apresentação de peças de teatro. </p>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo10">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Acre</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeacre.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. Água Comprida, 257 - Jardim Franca, São Paulo - SP   <p>
            CEP: 02339-040  <p>
Telefone: (11) 2203-8788 <p>
Site: www.acreclube.com.br  <p>

Zona: Norte
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
          <img class="card-img-top" src="img/clubeescolasp.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Escola Jardim SP</h5>
            <p class="card-text">Centro que oferece atividades esportivas gratuitas de esporte e lazer. Possuindo uma área de 58.725 metros quadrados que conta com piscina, campo de futebol, quadras poliesportivas, quadra de tênis, playground e aparelhos para terceira idade.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo11">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Escola Jardim SP</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeescolasp.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. Viri, 425 - Jardim São Paulo, São Paulo - SP   <p>
            CEP: 02046-030 <p>
Telefone: (11) 2973-5390  <p>
Site:www.sites.google.com/site/clubeescolajsp/novidades  <p>
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
          <div class="card-footer">
            <small class="text-muted">Atualizados 3 minutos atrás</small>
          </div>
        </div>

        

        <div class="card">
          <img class="card-img-top" src="img/clubeatleticomooca.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Atlético Parque da Mooca  </h5>
            <p class="card-text">O espaço esportivo possui um ginásio com quadra para futsal, vôlei e handebol, quadra de futebol Society e piscina </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo12">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Atlético Parque da Mooca </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeatleticomooca.jpg" alt="Imagem de capa do card">
          <p>Endereço: R. Padre Raposo, 837 - Alto da Mooca, São Paulo - SP   <p>
            CEP: 03118-001 <p>
Telefone: (11) 2076-3620  <p>
Site:www.jogaojogo.com.br/quadra/c-a-parque-da-mooca  <p>
Zona: Zona Leste
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
          <img class="card-img-top" src="img/clubeassociacao.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Associação Atlética São Paulo</h5>
            <p class="card-text">Contendo uma imensa área verde a Atlética nos concede atividades diversas e áreas de lazer para relaxar. Ginásio poliesportivo, parque aquático e sauna são alguns exemplos. </p>
        
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo13">
    Veja mais!
  </button>
  <div class="modal fade" id="modalExemplo13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Associação Atlética São Paulo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeassociacao.jpg" alt="Imagem de capa do card">
          <p>Endereço: Praça Bento de Camargo Barros, 162 - Bom Retiro, São Paulo  <p>
CEP: 01101-020  <p>
Telefone: (11) 3228-1719 <p>
Site: www.atleticasaopaulo.com.br <p>
Zona: Centro <p>
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
          <img class="card-img-top" src="img/clubeindiano.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube Atlético Indiano</h5>
            <p class="card-text">O Clube Atlético Indiano oferece tendencias inovadoras de lazer, esporte e diversão, ampla estrutura, estacionamento e atividade para toda a família. Tudo isso as margens da Represa Guarapiranga em uma área verde sem igual e privilegiada na cidade de São Paulo. </p>
         
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo14">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube Atlético Indiano</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeindiano.jpg" alt="Imagem de capa do card">
          <p>Endereço: Av. Francisco Nóbrega Barbosa, 411 - Parque Alves de Lima, São Paulo - SP <p>
            CEP: 04902-000  <p>
Telefone: (11) 5890-3666 <p>
Site:www.indiano.com.br  <p>

Zona: Sul
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
          <img class="card-img-top" src="img/clubemesc.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Clube MESC</h5>
            <p class="card-text">Com 63 anos de história, o Clube MESC conta com diversas atividades e eventos. </p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo15">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Clube MESC</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubemesc.jpg" alt="Imagem de capa do card">
          <p>Endereço: : Av. Robert Kennedy, 2113 - Jardim Beatriz, São Bernardo do Campo - SP   <p>
            CEP: 09895-0050 <p>
Telefone: (11) 4344-5566  <p>
Site:www.clubemesc.com.br  <p>
Zona: Sudeste
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
          <img class="card-img-top" src="img/clubeCE.jpg" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">C.E. Rubens Pecce Lordello  </h5>
            <p class="card-text">O C.E. Rubens Pecce Lordello é uma entidade Municipal com atividades esportivas gratuitas e lazer garantido para a população.</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo16">
    Veja mais!
  </button>
  
  <div class="modal fade" id="modalExemplo16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">C.E. Rubens Pecce Lordello </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img class="card-img-top" src="img/clubeCE.jpg" alt="Imagem de capa do card">
          <p>Endereço:Av. Lins de Vasconcelos, 804 - Cambuci, São Paulo - SP    <p>
            CEP: 01515-000 <p>
Telefone: (11) 3209-0995  <p>
Site:https://www.prefeitura.sp.gov.br/cidade/secretarias/esportes/clube_escola/index.php?p=44153  <p>
Zona: Centro
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
</html>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    


  </body>
</html>
