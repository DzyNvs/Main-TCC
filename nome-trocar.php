<?php
include('conexao.php');
include('verifica-login.php');


if(!empty($_POST['alterarnome'])){
    

    $nomesession =  $_SESSION['nomebanco'];
    $emailsession = $_SESSION['emailbanco'];
    $txnome = $_POST['alterarnome'];
    $emailbanco = "";
    $nomebanco ="";
    
    
   
    $stmt = $pdo->prepare("select emailuser, nomeuser from tbusuarios where emailuser='$emailsession' and nomeuser='$nomesession'");	
    $stmt ->execute();	

    while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
        $emailbanco = $row['emailuser'];
        $nomebanco = $row['nomeuser'];
    }

    if ($emailsession == $emailbanco )  {
        $stmt = $pdo -> prepare ("update tbusuarios set nomeuser='$txnome' where emailuser='$emailsession'");
        $stmt -> execute();
        $_SESSION['nomebanco'] = $txnome;
        header("location:alterarnome.php?validacao=nomealterado");

        }
    else {
        
        header("location:alterarnome.php?erro=desconhecido");
    }



}else{
header("location:alterarnome.php?erro=vazio");

 }


?>