<?php

require_once "../classes/Contato.php";
$contato = new Contato();

if(isset($_POST['btn'])){
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if($nome && $email){
        $contato->create($nome, $email);
    }

}

header("location: ../index.php");