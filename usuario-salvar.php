<?php
    include('conexao.php');
    if(!empty($_POST['username']) && !empty($_POST['useremail']) && !empty($_POST['userpass'])){


        $txnome = $_POST['username'];
        $txemail = $_POST['useremail'];
        $txsenha = $_POST['userpass'];
        $txsenha2 = $_POST['userpass2'];
        $emailbanco ="";


        $stmt = $pdo->prepare("select emailuser from tbusuarios where emailuser='$txemail'");	
        $stmt ->execute();	

        while ($row = $stmt ->fetch(PDO::FETCH_BOTH)) {
            $emailbanco = $row['emailuser'];
        }
        
        if ($txemail == $emailbanco ) {
            header("location:registro.php");

        }else{

            if($txsenha == $txsenha2){

                $stmt = $pdo->prepare("insert into tbusuarios values ('$txemail',  '$txnome',  '$txsenha', null)");
                $stmt ->execute();
                header("location:login.php");
            }
            else{ 
                header("location:registro.php");
            }

        }

    }
    
    else {
        
        header("location:registro.php");
    }
    
    

?>