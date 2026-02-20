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
        <input type="text" name="nome" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Veículo:</label>
        <input type="text" name="veiculo" required><br><br>

        <label for="servico">Serviço:</label>
    <select name="servico" id="servico" required>
        <option value="">Selecione um serviço</option>
        <option value="troca_oleo">Troca de Óleo</option>
        <option value="alinhamento">Alinhamento e Balanceamento</option>
        <option value="freios">Revisão de Freios</option>
        <option value="motor">Manutenção de Motor</option>
        <option value="eletrica">Parte Elétrica</option>
        <option value="suspensao">Suspensão</option>
        <option value="revisao_geral">Revisão Geral</option>
    </select>
    <br><br>

        <button type="submit" class="salvar-btn">Salvar</button>
    </form>
</div>
<a href="index.php" class="btn-voltar">Voltar</a>

</body>
</html>
