<?php
require_once "includes/header.php";
require_once "classes/Contato.php";
$contato = new Contato();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dado = $contato->readOne($id);
}else{
    header("Location: index.php");
}

?>
<div class="container">
    <h1 class="mt-4">Editar Contato</h1>
    <form method="POST" action="actions/updatecontato.php">
        <p><input type="hidden" name="id" value="<?= $dado['id']; ?>"></p>
        <p><input type="text" name="nome" value="<?= $dado['nome']; ?>" class="form-control"></p>
        <p><input type="email" name="email" value="<?= $dado['email'] ?>" class="form-control"></p>
        <p><button class="btn btn-success" name="btn">Editar</button></p>
    </form>
</div>

