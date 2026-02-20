<?php


require_once __DIR__ . '/../app/config/conexao.php';

class Usuario {

    public function listar() {
        global $pdo;
        
        $stmt = $pdo->query("SELECT * FROM usuarios");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criar($nome, $email, $veiculo, $servico) {
        global $pdo;
        
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, veiculo, servico) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nome, $email, $veiculo, $servico]);
    }

    public function buscar($id) {
        global $pdo;
        
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome, $email, $veiculo, $servico) {
        global $pdo;
        
        $stmt = $pdo->prepare("UPDATE usuarios SET nome = ?, email = ?, veiculo = ?, servico = ? WHERE id = ?");
        return $stmt->execute([$nome, $email, $veiculo, $servico, $id]);
    }

    public function excluir($id) {
        global $pdo;
        
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>