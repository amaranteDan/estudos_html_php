<?php
//Array - Matriz de dados
$array = array(40, 200, 100, 150, "School of net", true); //invocar um função
//declaração mais flexivel no uso de arrays
$array = array(40,
 200,
 100,
 150,
  "School of net",
   true);

   $array = array(40, 200, 100, 150, "School of net", true)[4]; //acesso direto a array e imprimindo a posição 4  
//echo $array;
echo $array[0]; //acessando uma posição especifica - Nesse caso o primeiro elemento
echo $array[1];

$array =[ //Usando arrays com colchetes -E aceito pela comunidade.
40,
 200,
 100,
 150,
  "School of net",
   true];