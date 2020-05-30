<?php
require_once "../classes/Contato.php";
$contato = new Contato();
if(isset($_POST['btn'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

    if($nome && $email && $id){
        $contato->update($nome, $email, $id);
    }

}
header("Location: ../index.php");
