<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
    <link rel="stylesheet" href="views/style.css">
</head>
<body>

<div class="container">
    <h2>Novo Usuário</h2>

    <form method="post" action="index.php?acao=salvar">
        
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <button type="submit">Salvar</button>
    </form>
</div>

</body>
</html>
