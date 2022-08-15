<?php
    include('conexao.php');
    if(!empty($_POST['username']) && !empty($_POST['useremail']) && !empty($_POST['userpass'])){


        $txnome = $_POST['username'];
        $txemail = $_POST['useremail'];
        $txsenha = $_POST['userpass'];
        $txsenha2 = $_POST['userpass2'];


        $checkuser = $pdo->prepare("SELECT COUNT(*) FROM tbusuarios where emailuser ='$txemail'");
        $checkuser ->execute();
        
        if ($checkuser >= 1){

            echo "E-mail já cadastrado. Tente outro!";
            header("location:registro.php");



        }else{

            if($txsenha == $txsenha2){

                $stmt = $pdo->prepare("insert into tbusuarios values (null,  '$txnome', '$txemail', '$txsenha', null)");
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