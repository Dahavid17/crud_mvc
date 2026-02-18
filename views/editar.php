<h2>Editar Usuário</h2>
<form method="post" action="index.php?acao=atualizar">
    <input type="hidden" name="id" value="<?= $usuario['id'] ?>">
    
    Nome: <input type="text" name="nome" value="<?= $usuario['nome'] ?>"><br><br>
    Email: <input type="email" name="email" value="<?= $usuario['email'] ?>"><br><br>
    
    <button type="submit">Atualizar</button>
</form>