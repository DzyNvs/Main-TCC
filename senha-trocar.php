<?php
include('conexao.php');
include('verifica-login.php');


if(!empty($_POST['oldsenha']) && !empty($_POST['senhanova']) && !empty($_POST['confirmarsenha'])){
    

    $senhasession = $_SESSION['senhabanco'];
    $emailsession = $_SESSION['emailbanco'];
    $txoldsenha = $_POST['oldsenha'];
    $txnovasenha = $_POST['senhanova'];
    $txconfirmarsenha = $_POST['confirmarsenha'];
    $emailbanco = "";
    $senhabanco = "";
    

    
    
   
    $stmt = $pdo->prepare("select emailuser, senhauser from tbusuarios where emailuser='$emailsession' and senhauser='$senhasession'");	
    $stmt ->execute();	

    while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
        $emailbanco = $row['emailuser'];
        $senhabanco = $row['senhauser'];
    }

    


    if ($txoldsenha == $senhabanco && $txnovasenha == $txconfirmarsenha )  {
        
            $stmt = $pdo -> prepare ("update tbusuarios set senhauser='$txnovasenha' where emailuser='$emailsession'");
            $stmt -> execute();
            $_SESSION['senhabanco'] = $txnovasenha;
            header("location:alterarsenha.php?validacao=senhaalterada");

        }
    else {
        
        if ($txoldsenha == $senhabanco )  {
           
            header("location:alterarsenha.php?validacao=naoconferem");
    
            }
         else{

            if($txnovasenha == $txconfirmarsenha){

                header("location:alterarsenha.php?validacao=antigasenha");
            
            }
            else{

                header("location:alterarsenha.php");
            }
         }   
    }



}else{
header("location:alterarsenha.php?erro=vazio");

 }


?>