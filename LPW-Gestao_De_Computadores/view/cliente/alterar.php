<?php
require_once(__DIR__ . "/../../controller/ClienteController.php");
$controller = new ClienteController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->alterar();
    exit;
}

$id = $_GET['id'] ?? null;
$cliente = null;
if ($id) {
    $cliente = $controller->buscarPorId($id); // Implemente esse método no controller se não existir
}
?>

<?php include_once(__DIR__ . "/../include/header.php"); ?>

<h3>Editar Cliente</h3>
<?php if ($cliente): ?>
<form method="POST" action="">
    <input type="hidden" name="id" value="<?= htmlspecialchars($cliente->getId()) ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= htmlspecialchars($cliente->getNome()) ?>" required>
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="<?= htmlspecialchars($cliente->getTelefone()) ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($cliente->getEmail()) ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="listar.php" class="btn btn-outline-primary">Voltar</a>
</form>
<?php else: ?>
    <div class="alert alert-danger">Cliente não encontrado.</div>
<?php endif; ?>

<?php include_once(__DIR__ . "/../include/footer.php"); ?>
