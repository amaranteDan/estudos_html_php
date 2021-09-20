<?php 

//name do campo é o que vai ser captado pelo arquivo
//função para mostrar na tela a variavel e seu valor
//var_dump($_POST);

$nome = $_POST['nome'];
$email = $_POST['email'];
$interesses = $_POST['interesse'];
$onde_conheceu = $_POST['onde_conheceu'];
$mensagem = $_POST['mensagem'];
$redirecionar = $_POST['redirecionar'];

echo "<strong>Nome:</strong>" . $nome . "<br>";
echo "<strong>Email:</strong>" . $email . "<br>" ;

echo "<strong>Interesses:</strong><br>";
echo "<ul>";
foreach($interesses as $interesse){
    echo "<li>$interesse</li>";
}
echo "<ul>";

echo "<strong>Onde conheceu:</strong><br>" . $onde_conheceu . "<br>";
echo "<strong>Redirecionar:</strong><br>" . $redirecionar . "<br>";