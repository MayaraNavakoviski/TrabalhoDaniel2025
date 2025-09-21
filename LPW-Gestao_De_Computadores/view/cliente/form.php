<?php

include_once(__DIR__ . "/../include/header.php"); ?>

<h3>Cadastrar Cliente</h3>
<form method="POST" action="">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="listar.php" class="btn btn-outline-primary">Voltar</a>
</form>

<?php include_once(__DIR__ . "/../include/footer.php"); ?>