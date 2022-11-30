<?php
// Nomes de constantes válidos
define("BD_SERVIDOR","127.0.0.1:3306");
define("BD_USUARIO","root");
define("BD_SENHA","");
define("BD_BANCO","tarefas");

function gravar_tarefa($tarefa){

    $conexao = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

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

function buscar_tarefas(){
    $conexao = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    $listaTarefas = array();

    if($conexao->connect_error){
        echo "Problemas para conectar no banco. Verifique os dados!";
        $conexao->close();
    }else{
        $resultado = $conexao->query("SELECT * FROM tarefas");
        while($tarefa = $resultado->fetch_array(MYSQLI_ASSOC)){
            array_push($listaTarefas,$tarefa);
        }
        $conexao->close();
    }
    return $listaTarefas;
}