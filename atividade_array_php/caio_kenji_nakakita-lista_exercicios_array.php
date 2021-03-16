Lista de Exercícios Arrays – PHP

1 –Calcule a média de 10 números digitados pelo usuário.
<?php
  $notas = array(5, 10, 4, 8, 9, 6, 7, 3, 2, 1);
  $smTotal = 0;

  for($i = 0; $i < count($notas); $i++){
    $smTotal += $notas[$i];
  }

  $resultado = $smTotal / count($notas);
  echo $resultado
?>

2 –Digite 5 números e verifique qual é o maior.
<?php
echo max(array(2, 4, 7, 1, 5)); 
?>

3–Peça ao usuário para digitar várias idades. Exiba quantas pessoas são maiores de idade (18 anos) e quantas são menores.
<?php
  $nome = "Fernanda";
  $idade = 21;

  if($idade >= 18){
    echo "{$nome} é maior de 18 e tem {$idade} Anos";
  }else{
    echo "{$nome} não é maior de 18 e tem {$idade} Anos";
  }
?>

4–Peça ao usuário para digitar vários nomes. Exiba na tela todos os nomes digitados, porém de maneira invertida (do último para o primeiro).
<?php
$nomes = array("Junior", "Daniel", "Fabrício", "Roberto", "José", "Maria"); 
$invertido = array_reverse($nomes);

print_r($invertido);
?>

5 –Peça para   o   usuário   digitar   uma   data.   Exiba separadamente o dia, o mês e o ano.
<?php
$date = array("22", "09", "2015");

echo "Dia $date[0] <br>";
echo "Mês $date[1] <br>";
echo "Ano $date[2]";
?>
