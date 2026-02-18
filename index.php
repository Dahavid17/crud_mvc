<?php

require_once 'controllers/UsuarioController.php';

$controller = new UsuarioController();

$acao = isset($_GET['acao']) ? $_GET['acao'] : 'listar';

if ($acao == 'listar') {
    $controller->listar();
}

if ($acao == 'criar') {
    $controller->criar();
}

if ($acao == 'salvar') {

    if(isset($_POST['nome']) && isset($_POST['email'])) {
        $controller->salvar($_POST['nome'], $_POST['email']);
    }
}

if ($acao == 'editar') {
    if(isset($_GET['id'])) {
        $controller->editar($_GET['id']);
    }
}

if ($acao == 'atualizar') {
    if(isset($_POST['id'])) {
        $controller->atualizar($_POST['id'], $_POST['nome'], $_POST['email']);
    }
}

if ($acao == 'excluir') {
    if(isset($_GET['id'])) {
        $controller->excluir($_GET['id']);
    }
}
?>