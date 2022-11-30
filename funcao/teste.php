<?php
    function escreverMensagem(){
        echo "Você é uma pessoa legal, tenha uma boa noite!";
    }
    escreverMensagem();
    
    // Funções com Parâmetro
    function somar($num1, $num2){
        $sum = $num1 + $num2;
        echo "A soma dos dois números é $sum <br>";
    }
    somar(10,10);
    
    //Funçoes com retorno
    function somar($num1, $num2){
        return = $num1 + $num2;
    }

    $retorno = somar(40,30);

    echo "retorno da função somar ".$retorno;
    

    function imprimirNome($contador){
        for($x = 1; $x <= $contador; $x++){
            echo "$x  - Francisco <br>";
        }
    }
    imprimirNome(3);

    function valodarNumeroPar($x){
        if($x % 2 ==0){
            echo "$x é par";
        }
    }
    //validarNumeropar(5);

    function validaCPF($cpf) {

        // Extrai somente os números

        $cpf = preg_replace('/[^0-9]/is', '', $cpf ); 

        // Verifica se foi informado todos os digitos corretamente

        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11

        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;    
    }
    //$validacao = boolval(validaCPF(30539181021)) ? 'true' : 'false';
    //echo $validacao;

    //valores padrão
    function xptoPrint($param = 01){
        echo $param;
    }
 
    //xptoPrint(100);

    //Função recursivas são funçoes que chamam a si mesmas

    function teste($valor){
        if($valor != 0){
            echo " Foi chamada a função passando o valor $valor <br>";
            teste($valor - 1);
        }
    }
    //teste(7);

    function fatorial($numero){
        if($numero == 1){
            return 1;
        }elseif($numero <= 0){
            return 0;
        }else{
            return $numero * fatorial($numero - 1);
        }
    }
    //echo fatorial(10);

    //Passsagem de parâmetro por preferência
    function mais5($numero){
        $numero += 5 ;
        echo $numero;
    }
    $xyz = 10;
    
    $x = 1000;

    mais5($xyz);
    */

?>