<?php
//@ formas de array - Por padrão usar a de colchetes.
$dias =  array('Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta' );
//Contagem a partir da array 0 - nâo esquecer
$meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril'];
echo $meses[1];
?>

<?php
    $dias = [];
    $meses = [];

    $dias = [];
    $dias = [];

    array_push($meses, 'Janeiro');
    array_push($meses, 'Fevereiro');
    ?>
<?php
    $pessoa = [];
    $alunos = [];

    $pessoa ['nome'] = 'Linus';
    $pessoa ['sistema'] = 'Linux';
    $pessoa ['linguagem'] = 'C';

    array_push($alunos, 'Maria', 'Joana', 'Paulo', 'Pedro');

    echo $pessoa['nome'];
    echo $alunos[1];

?>    


