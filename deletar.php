<?php
require_once "classes/Contato.php";
if(isset($_GET['id'])){
    $contato = new Contato();
    $id = $_GET['id'];
    $contato->delete($id);
}
header("Location: index.php");