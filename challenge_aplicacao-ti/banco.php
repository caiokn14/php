<?php
// Nomes de constantes válidos
define("BD_SERVIDOR","127.0.0.1:3306");
define("BD_USUARIO","root");
define("BD_SENHA","");
define("BD_BANCO","suporte_ti");

function gravar_chamado($chamado){

    $conexao = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

        if($conexao->connect_error){
            echo "Problemas para conectar no banco. Verifique os dados!";
            $conexao->close();
        }else{

            $stmt = $conexao->prepare("INSERT INTO chamados(nome,descricao)VALUES(?,?)");
            
            $stmt->bind_param('ss',$nome,$descricao);

            $nome = $chamado['nome'];
            $descricao = $chamado['descricao'];
            
            $stmt->execute();
            
            $stmt->close();
            $conexao->close();
        }
}

function buscar_chamados(){
    $conexao = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    $cadastroChamados = array();

    if($conexao->connect_error){
        echo "Problemas para conectar no banco. Verifique os dados!";
        $conexao->close();
    }else{
        $resultado = $conexao->query("SELECT * FROM chamados");
        while($chamado = $resultado->fetch_array(MYSQLI_ASSOC)){
            array_push($cadastroChamados,$chamado);
        }
        $conexao->close();
    }
    return $cadastroChamados;
}