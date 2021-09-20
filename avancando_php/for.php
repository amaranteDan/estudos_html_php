<?php 
//$i indice; condição; incremento
/*for ($i = 0; $i <= 10; $i++){
    echo $i . "\n";
}*/

$frutas = [
    "Banana",
    "Laranja",
    "Morango",
    "Abacaxi",
    "Melancia"
];

for($i = 0; $i < count($frutas); $i++){
    echo $frutas[$i] . "\n";
}

//$i indice; condição; decremento
/*for ($i = 10; $i >= 1; $i--){
    echo $i . "\n";
}*/