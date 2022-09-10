<?php
include('conexao.php');
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['assunto'] && !empty($_POST['message']))) {

$txnome = $_POST['name'];
$txemail = $_POST['email'];
$txassunto = $_POST['assunto'];
$txmensagem = $_POST['message'];

$stmt = $pdo->prepare("insert into formContato values (null, '$txnome',  '$txemail',  '$txassunto', '$txmensagem')");
$stmt ->execute();
header("location:form_contato.php?validacao=suamensagemfoienviada");




}

else {
        
    header("location:form_contato?validacao=houveumerro.php");
}

?>