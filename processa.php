<?php
include('conexao.php');
if(!empty($_POST['txnomelugar']) && !empty($_POST['estrela'])) {

$nomelugar = $_POST['txnomelugar'];
$estrelas = $_POST['estrela'];



$stmt = $pdo->prepare("insert into avaliar values (null, '$estrelas',  '$nomelugar')");
$stmt ->execute();
header("location:avaliar.php?validacao=registrada");


}

else {
        
    header("location:avaliar.php?validacao=houveumerro");
}

?>