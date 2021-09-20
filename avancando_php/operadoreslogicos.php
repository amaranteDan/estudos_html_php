<?php 
/**
 * Operador Logico E (&&)
 * V V V
 * V F F
 * F V F
 * F F F
 * 
 * Operador OU (||)
 * V V V
 * V F V
 * F V V
 * F F F
 * 
 * Operador Não (!)
 * V = F
 * F = V
 *  * 
 */

 $media = 7;
 $frequencia = 75;

 $media_aluno = 6;
 $frequencia_aluno = 50;

 /*if ($media_aluno >= $media && $frequencia_aluno >= $frequencia){
     echo "Aluno Aprovado!";
 }else {
     echo "Aluno Reprovado!";

 }*/

 /*if ($media_aluno >= $media || $frequencia_aluno >= $frequencia){
     echo "Aluno AProvado!";

 }else {
     echo "Aluno Reprovado!";
 }*/

 $chovendo = true;

 //Negando o valor do booleano com !
 if (!$chovendo){
     echo " Vou ficar em casa!";
 }else {
     echo "Vou pro sitio comer churrasco!";
 }
