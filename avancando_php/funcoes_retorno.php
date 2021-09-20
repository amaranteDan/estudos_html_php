<?php 
//posso atribuir o valor para as variaveis = $a = 10 , $b = 15
function soma($a , $b){
    echo $a + $b . "<br>";
}
soma (2 , 3);

function multiplcar($c , $d){
    return $c * $d;

}
$resultado  = multiplcar(2 , 3);
echo "Resultado com a função retorno = " . $resultado . "<br>";

echo "Usando o resultado para multiplicar com 7 = " . $resultado * 7;