<?php 
   
    include("conexao.php");
    include("verifica-login.php");
    include("menu.php");
   
?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/estiloavaliar.css">

  
    <br>
    <br>
    <br>
    <br>

        

        <div class="container">
        <div class="row featurette">
        <div class="col-md-7"> 
        <center> <h2 class="featurette-heading">Avalie um lugar!  </h2> <center>
          <p class="p"> Visitou algum ponto turístico do site recentemente? Deixe sua avaliação abaixo de acordo com sua experiência.
         </p>
        

         <br>
         <br>
         <br>
        <form method="POST" action="processa.php" enctype="multipart/form-data">


        <div class="nomelugar">
        <label for="IdLugar" style="font-weight: bold">Selecione o local: </label> 
        <?php
        
            echo "<select  name='txnomelugar'>";
            $stmt = $pdo->prepare("Select * from tbLugares ");
            $stmt ->execute();
            echo "<option selected disabled value=''> Selecione uma Localidade </option>";
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                echo "<option value='$row[0]'> $row[1] </option>";
            }

            
            echo "</select>";
            ?>
        </div> 








			<div class="estrelas">
				<input type="radio" id="vazio" name="estrela" value="" checked>
				
				<label for="estrela_um"><i class="fa"></i></label>
				<input type="radio" id="estrela_um" name="estrela" value="1">
				
				<label for="estrela_dois"><i class="fa"></i></label>
				<input type="radio" id="estrela_dois" name="estrela" value="2">
				
				<label for="estrela_tres"><i class="fa"></i></label>
				<input type="radio" id="estrela_tres" name="estrela" value="3">
				
				<label for="estrela_quatro"><i class="fa"></i></label>
				<input type="radio" id="estrela_quatro" name="estrela" value="4">
				
				<label for="estrela_cinco"><i class="fa"></i></label>
				<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
				
				<input type="submit" class="btn btn-outline-primary" value="Registrar Avaliação">
				
			</div>
		</form>

    <h4 class="sucess">

<?php
  if (isset($_GET['validacao'])) { if ($_GET['validacao'] == "registrada") { 
echo "Sua avaliação foi registrada!"; }}

?>  
</h4>

<h4 class="sucess">

        <?php
         if (isset($_GET['validacao'])) { if ($_GET['validacao'] == "houveumerro") { 
        echo "É necessário escolher um local e selecionar no minímo uma estrela!"; }}
    
        ?>  
        </h4>



          </div>
          <div class="col-md-5">

          <img class="featurette-image img-fluid rounded-top mx-auto" src="img/shutterstock_1576875433-770x510.jpg" 
                    >

          </div>

          </div>
          </div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>









                  <div class="container">
                  <div class="row featurette">


                  <div class="col-md-7"> 
                  <img class="featurette-image img-fluid rounded-top mx-auto" src="img/52817_wet-n-wild.jpg" 
                    >


                  </div>  

                  <div class="col-md-5"> 

                  <center> <h2 class="featurette-heading">Pesquisa de Avaliações!  </h2> <center>
                    <p> Pretende visitar algum dos pontos turísticos? Pesquise e veja as avaliações sobre estes lugares! 
         </p>
          <br>
          <br>
          <br>

                    <form method="POST" action="" enctype="multipart/form-data">


                    <div class="nomelugar">
                    <label for="IdLugar" style="font-weight: bold">Selecione o local: </label> 
                    <?php
                 echo "<select name='txnomeavaliar' required>";
                  $stmt = $pdo->prepare("Select * from tbLugares ");
                 $stmt ->execute();
                echo "<option selected disabled value=''> Selecione uma Localidade </option>";
                  while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                echo "<option value='$row[0]'> $row[1] </option>";
    }

    
    echo "</select>";
    ?>
</div> 
    <br>
    <input type="submit" class="btn btn-outline-primary" value="Pesquisar">


</form>
  
  </div>
  </div>
  </div>


<?php

if(!empty($_POST['txnomeavaliar'])) {

$txnome = $_POST['txnomeavaliar'];
$count = 0;

$stmt = $pdo->prepare("select * from avaliar where idlugar='$txnome'");
$stmt ->execute();

while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
    $count = $stmt->rowCount();
      
    
}

if ($count == 0){

echo " <div class='container'>
<div class='row featurette'> <div class='col-md-7'></div> <div class='col-md-5'>  <h1 class='sucess'> Não foi possivel encontrar nenhuma avaliação para essa localidade!</h1>
 </div> </div> </div>";


}

else{
$stmt2 = $pdo->prepare("select count(*) from avaliar where idlugar='$txnome' and qntestrela=5");
$stmt2 ->execute();   
$row2 = $stmt2 ->fetch(PDO::FETCH_NUM);
$fivestars = $row2[0];

$stmt3 = $pdo->prepare("select count(*) from avaliar where idlugar='$txnome' and qntestrela=4");
$stmt3 ->execute();   
$row3 = $stmt3 ->fetch(PDO::FETCH_NUM);
$fourstars = $row3[0];

$stmt4 = $pdo->prepare("select count(*) from avaliar where idlugar='$txnome' and qntestrela=3");
$stmt4 ->execute();   
$row4 = $stmt4 ->fetch(PDO::FETCH_NUM);
$threestars = $row4[0];

$stmt5 = $pdo->prepare("select count(*) from avaliar where idlugar='$txnome' and qntestrela=2");
$stmt5 ->execute();   
$row5 = $stmt5 ->fetch(PDO::FETCH_NUM);
$twostars = $row5[0];

$stmt6 = $pdo->prepare("select count(*) from avaliar where idlugar='$txnome' and qntestrela=1");
$stmt6 ->execute();   
$row6 = $stmt6 ->fetch(PDO::FETCH_NUM);
$onestar = $row6[0];

$stmt7 = $pdo->prepare("select nome from tblugares where idlugar='$txnome'");
$stmt7 ->execute();   
$row7 = $stmt7 ->fetch(PDO::FETCH_NUM);
$nomelugar = $row7[0];

$valor5 = $fivestars * 5;
$valor4 = $fourstars * 4;
$valor3 = $threestars * 3;
$valor2 = $twostars * 2;
$valor1 = $onestar * 1;


$juntos = array($valor5,$valor4,$valor3,$valor2,$valor1);
$soma = array_sum($juntos);
$media = $soma/$count;
$media = number_format($media, 1, ',', '');



echo "
<br>
<br>
<br>
<br>
<div class='container'>
<div class='row featurette'>
<div class='col-md-3'>

<h1 class='info'>Nome do Local: $nomelugar </h1>";
echo "<h1 class='info'> Quantidades de avaliações: $count </h1>";
echo "<h1 class='info'>Média das Avaliações: $media  </h1>
</div>"
;
    
}
}
else {
        
    
}

?>
<div class='col-md-9' style ="margin-top: 10px">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Estrelas', 'Quantidade de Avaliações'],
          ['5 Estrelas', <?php echo $fivestars ?>],
          ['4 Estrelas', <?php echo $fourstars ?>],
          ['3 Estrelas', <?php echo $threestars ?>],
          ['2 Estrelas', <?php echo $twostars ?>],
          ['1 Estrela', <?php echo $onestar ?>]
        ]);

        var options = {
          chart: {
            title: 'Avaliações'
            
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 700px; height: 300px;"></div>
  </body>
    </div>    
    </div>
    </div>
            
<?php



include ("rodape.php");
?>