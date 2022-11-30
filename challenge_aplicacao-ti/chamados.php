<?php
session_start();
include "banco.php";

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $chamado = array();

    $chamado['nome'] = $_GET['nome'];

    if (isset($_GET['descricao'])) {
        $chamado['descricao'] = $_GET['descricao'];
    } else {
        $chamado['descricao'] = '';
    }
    gravar_chamado($chamado);
}

$cadastro_chamados = buscar_chamados();

include "template.php";
?>

