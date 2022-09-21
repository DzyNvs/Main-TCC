<?php
include('conexao.php');
include('verifica-login.php');


if(!empty($_POST['alteraremail'])){
    

    
    $emailsession = $_SESSION['emailbanco'];
    $txemail = $_POST['alteraremail'];
    $emailbanco = "";
    $verificaremail ="";
   
    
    
   
    $stmt = $pdo->prepare("select emailuser from tbusuarios where emailuser='$emailsession'");	
    $stmt ->execute();	

    while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
        $emailbanco = $row['emailuser'];
        
    }

    $stmt = $pdo ->prepare("select emailuser from tbusuarios where emailuser='$txemail'");
    $stmt ->execute();

    while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
        $verificaremail = $row['emailuser'];
        
    }


    if ($verificaremail == $txemail )  {
        
        header("location:alteraremail.php?validacao=erro");

        }
    else {
        
        if ($emailsession == $emailbanco )  {
            $stmt = $pdo -> prepare ("update tbusuarios set emailuser='$txemail' where emailuser='$emailsession'");
            $stmt -> execute();
            $_SESSION['emailbanco'] = $txemail;
            header("location:alteraremail.php?validacao=emailalterado");
    
            }
         else{
            header("location:alteraremail.php");
         }   
    }



}else{
header("location:alteraremail.php?erro=vazio");

 }


?>