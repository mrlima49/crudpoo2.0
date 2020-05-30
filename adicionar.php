<?php
require_once "includes/header.php";
?>
<div class="container">
    <h1 class="mt-4">Adicionar Contato</h1>
    <form action="actions/addcontato.php" method="POST">
        <p><input type="text" name="nome" placeholder="Seu nome" class="form-control"></p>
        <p><input type="email" name="email" placeholder="Seu email" class="form-control"></p>
        <p><button class="btn btn-success" name="btn">Cadastrar</button></p>
    </form>
</div>

