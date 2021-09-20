<?php 

//trim verifica se ha espaços vazios
//empty verifica se se esta vazia a variavel
//Campos importantes de validação em formularios Web

$nome  = trim ($_POST['nome']);
$interesses = $_POST['interesse'] ?? null ;
$mensagem = strip_tags ($_POST["mensagem"]); //strip_tags inutiliza a injeção de scripts como java script o codigo malicioso html
//Tecnica chamada de scaping para evitar danos de codigo de invasão.

if(empty($nome)){
    echo "Informe o nome!<br>";

}
//Validando o checkbox
if(is_null($interesses)){
    echo "Selecione pelo menos um item de interesse!<br>";
}

echo $mensagem;