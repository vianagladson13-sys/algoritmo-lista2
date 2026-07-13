<?php
/* Um professor precisa calcular a média de um aluno. Armazene e calcule: 
● Armazene o nome do aluno. 
● Armazene três notas. 
● Calcule a soma das notas. 
● Calcule a média. 
● Exiba o nome, as notas e a média. 
● Se a média for maior ou igual a 60, exiba: Aluno aprovado.
*/

$NomeDoAluno = "Gladson";
$QtdMaterias = 3;
$Nota01 = 90;
$Nota02 = 90;
$Nota03 = 90;

$SomaDasNotas = $Nota01 + $Nota02 + $Nota03 ; 
$Media = $SomaDasNotas / $QtdMaterias;


if ($Media>= 60 ) {
    $frase = "O aluno foi aprovado";
} else {
    $frase = "O aluno foi reprovado.";
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>

<body>
<h3>Media do aluno </h3>
<p><?php echo (" Nome do aluno: " . $NomeDoAluno);  ?></p>
<p><?php echo (" Matematica : " . $Nota01);  ?></p>
<P><?php echo (" Fisica: " . $Nota02);  ?></P>
<P><?php echo ("Biologia: " . $Nota03);  ?></P>
<P><?php echo ("Soma das notas: " . $SomaDasNotas);  ?></P>
<P><?php echo ("Media das notas: " . $Media);  ?></P>
<P><?php echo ("O aluno foi aprovado: " . $frase);  ?></P>
</body>

</html>