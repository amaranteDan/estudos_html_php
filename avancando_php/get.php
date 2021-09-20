<?php
/*echo $_GET['planeta'];

echo '<br>';

echo $_GET['cor'];
*/
// ?planeta=Marte&cor=azul = Query string

//isset() verifica se a variavel que será consultada pela query foi definida
$planeta = isset($_GET['planeta']) ? $_GET['planeta'] : false;

if($planeta != false){
    echo $planeta;
}else{
    echo "Planeta Não informado!";
}
/*echo '<br>';
//essa funcionalidade coalesce so funciona no php 7 ...
$cor = $_GET['cor'] ?? "Cor não informada!";

echo $cor;
*/