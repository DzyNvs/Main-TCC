<?php 
   
    include("conexao.php");
    include("verifica-login.php");
    include("menu.php");
   
?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/estiloavaliar.css">


        <h1> Avalie Um Lugar!
        </h1>
    <br>
    <br>
    <br>
    <br>

        <h4>

        <?php
          if (isset($_GET['validacao'])) { if ($_GET['validacao'] == "registrada") { 
			echo "Sua avaliação foi registrada!"; }}
			
  	    ?>  
        </h4>
        <h4>

        <?php
         if (isset($_GET['validacao'])) { if ($_GET['validacao'] == "houveumerro") { 
        echo "É necessário escolher um local e selecionar no minímo uma estrela!"; }}
    
        ?>  
        </h4>


        <form method="POST" action="processa.php" enctype="multipart/form-data">


        <div class="nomelugar">
        <label for="IdLugar">Selecione o local: </label> 
        <?php
        
            echo "<select name='txnomelugar'>";
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
				
				<input type="submit" value="Cadastrar">
				
			</div>
		</form>




                    <h1> Pesquisa de Avaliações</h1>


                    <form method="POST" action="" enctype="multipart/form-data">


                    <div class="nomelugar">
                    <label for="IdLugar">Selecione o local: </label> 
                    <?php
                 echo "<select name='txnomeavaliar'>";
                  $stmt = $pdo->prepare("Select * from tbLugares ");
                 $stmt ->execute();
                echo "<option selected disabled value=''> Selecione uma Localidade </option>";
                  while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                echo "<option value='$row[0]'> $row[1] </option>";
    }

    
    echo "</select>";
    ?>
</div> 
    <input type="submit" value="Pesquisar">


</form>


<?php

if(!empty($_POST['txnomeavaliar'])) {

$txnome = $_POST['txnomeavaliar'];


$stmt = $pdo->prepare("select * from avaliar where idlugar='$txnome'");
$stmt ->execute();

while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
    $count = $stmt->rowCount();
    $cincoes = $row[1]==5;
    
    echo "<h1> $cincoes </h1>";   
    
}
    


}

else {
        
    
}

?>




            
<?php

include ("rodape.php");
?>