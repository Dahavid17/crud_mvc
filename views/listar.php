<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuários</title>
    <link rel="stylesheet" href="views/style.css">
</head>
<body>

<div class="container">
    <h1>Usuários</h1>

    <a class="btn-novo" href="index.php?acao=criar">Novo Usuário</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['nome'] ?></td>
            <td><?= $u['email'] ?></td>
            <td>
                <a class="btn-editar" href="index.php?acao=editar&id=<?= $u['id'] ?>">Editar</a>
                <a class="btn-excluir" 
                   href="index.php?acao=excluir&id=<?= $u['id'] ?>" 
                   onclick="return confirm('Tem certeza?');">
                   Excluir
                </a>
            </td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>

</body>
</html>
