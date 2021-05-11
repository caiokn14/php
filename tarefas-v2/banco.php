<?php

function gravar_tarefa($tarefa){
    $bdServidor = '127.0.0.1:3306';
    $bdUsuario = 'root';
    $bdSenha = '';
    $bdBanco = 'tarefas';

    $conexao =  new mysqli($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

        if($conexao->connect_error){
            echo "Problemas para conectar no banco. Verifique os dados!";
            $conexao->close();
        }else{

            $stmt = $conexao->prepare("INSERT INTO tarefas(nome,descricao,prazo,prioridade,concluida)VALUES(?,?,?,?,?)");
            
            $stmt->bind_param('sssii',$nome,$descricao,$prazo,$prioridade,$concluida);

            $nome = $tarefa['nome'];
            $descricao = $tarefa['descricao'];
            $prazo = $tarefa['prazo'];
            $concluida = $tarefa['concluida'];
            $prioridade = $tarefa['prioridade'];
            
            $stmt->execute();
            
            $stmt->close();
            $conexao->close();
        }
}