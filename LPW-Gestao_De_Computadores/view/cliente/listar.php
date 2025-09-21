<?php

require_once(__DIR__ . "/../../controller/ClienteController.php");
$clienteCont = new ClienteController();
$clientes = $clienteCont->clienteDAO->listar();
include_once(__DIR__ . "/../include/header.php");
?>

<h3>Clientes</h3>
<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($clientes as $cliente): ?>
        <tr>
            <td><?= $cliente->getId() ?></td>
            <td><?= $cliente->getNome() ?></td>
            <td><?= $cliente->getTelefone() ?></td>
            <td><?= $cliente->getEmail() ?></td>
            <td>
                <a href="alterar.php?id=<?= $cliente->getId() ?>">Editar</a>
                <a href="excluir.php?id=<?= $cliente->getId() ?>" onclick="return confirm('Confirma exclusão?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="cadastrar.php" class="btn btn-primary ms-2">Cadastrar Cliente</a>
<a href="../ordem_servico/listar.php" class="btn btn-outline-primary">Voltar</a>
<?php include_once(__DIR__ . "/../include/footer.php"); ?>