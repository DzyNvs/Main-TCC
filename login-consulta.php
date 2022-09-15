<?php
include('conexao.php');
session_start();

if(!empty($_POST['emailuser']) && !empty($_POST['userpass'])){
    session_start();

    
    $txsenha = $_POST['userpass'];
    $txemail = $_POST['emailuser'];
    $emailbanco ="";
    $senhabanco ="";
    $nomebanco ="";

    $stmt = $pdo->prepare("select emailuser, senhauser, nomeuser from tbusuarios where emailuser='$txemail' and senhauser='$txsenha'");	
    $stmt ->execute();	

    while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
        $emailbanco = $row['emailuser'];
        $senhabanco = $row['senhauser'];
        $nomebanco = $row['nomeuser'];
    }

    if ($txemail == $emailbanco && $txsenha == $senhabanco) {
        $_SESSION['autorizar'] = true;
        $_SESSION['nomebanco'] = $nomebanco;
        $_SESSION['emailbanco'] = $emailbanco;
        $_SESSION['senhabanco'] = $senhabanco;
        
        header("location:index.php");
    }
    else {
        $_SESSION['autorizar'] =  false;
        unset($_SESSION['autorizar']);
        session_destroy();
        header("Location: login.php?erro=informacoesinvalidas");
    }



}else{
header("location:login.php");
session_destroy();
}


?>