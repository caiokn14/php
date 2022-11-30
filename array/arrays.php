<?php
    $carros = array("Volvo","BMW","Toyota","Ford");
    // echo "Eu gosto de $carros[0], $carros[1] e $carros[2]";
    $tamanho = count($carros);
    for($x = 0; $x < $tamanho; $x++){
        //echo "$carros[$x] <br>";
    }

    //$laticinios=array(1 =>10.0,"presunto"=>10.9,"mortadela"=>4.3);
    //$laticinios=array("queijo"=>"10.0","presunto"=>"10.9","mortadela"=>"4.3");
    //print_r($laticinios);

    $jogo = array(
            array(1, "Zé", 11), 
            array(2, "José", 4),
            array(3, "Zéca", 22)
    );
    for($linha=0; $linha<3; $linha++) {
        for ($coluna=0; $coluna<3; $coluna++) {
            echo $jogo[$linha][$coluna]."  ";
        }
     echo "<br/> \n"; }

     $mulheres = array(1 => array(1=>"ANA",2=>"BEATRIZ",3=>"PAULA"),
                       2 => array(1=>"ADRIANA",2=>"RAFAELA",3=>"NATALIA"),     
                       3 => array(1=>"ERIKA",2=>"RAFA",3=>"POLIANA"); 

    for($i=1; $i<4;$i++){
        for($j=1; $j<4; $j++){
            echo $mulheres[$i][$j]." ";
        }
        echo"<br>";
    }


?>
