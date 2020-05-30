<?php 
require_once "includes/header.php" ;
require_once "classes/Contato.php";
$contato = new Contato();
$dados = $contato->read();

?>

<div class="container mt-4">
    <h1>Crudpoo</h1>
    <a href="adicionar.php"><button class="btn btn-primary">Adicionar contato</button></a>
    <table class="table table-striped table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($dados as $dado):
            ?>
            <tr>
                <td><?= $dado['nome']; ?></td>
                <td><?= $dado['email']; ?></td>
                <td>
                    <a href="editar.php?id=<?= $dado['id']; ?>"><button class="btn btn-success">Editar</button></a>
                    <a href="deletar.php?id=<?= $dado['id']; ?>"><button class="btn btn-danger" >Excluir</button></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

