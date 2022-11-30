<?php
session_start();

if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $contato = array();
    
    $contato['nome'] = $_GET['nome'];  
    
    if (isset($_GET['telefone']) && $_GET['telefone'] != '') {
        $contato['telefone'] = $_GET['telefone'];
    }
    
    if (isset($_GET['email']) && $_GET['email'] != '') {
        $contato['email'] = $_GET['email'];
    }
    
    if (isset($_GET['descricao'])) {
        $contato['descricao'] = $_GET['descricao'];
    } else {
        $contato['descricao'] = '';
    }
    
    if (isset($_GET['data'])) {
        $contato['data'] = $_GET['data'];
    } else {
        $contato['data'] = '';
    }
    
    if (isset($_GET['favorito'])) {
        $contato['favorito'] = $_GET['favorito'];
    } else {
        $contato['favorito'] = '';
    }

    $_SESSION['lista_contatos'][] = $contato;
}

if (isset($_SESSION['lista_contatos'])) {
    $lista_contatos = $_SESSION['lista_contatos'];
} else {
    $lista_contatos = array();
}
include "template.php"
?>

