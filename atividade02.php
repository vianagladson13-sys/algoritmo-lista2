<?php
/*
Uma empresa deseja calcular o salário de um funcionário. Armazene e calcule
● o nome do funcionário.
● o valor da hora trabalhada.
● a quantidade de horas trabalhadas.
● o salário bruto.
● exiba o nome, o salário bruto, o desconto e o salário final.
● Se o salário bruto for maior que R$ 2.500,00, desconte R$ 200,00.
*/

//ENTRADAS

$NomeFuncionario = "Gladson"; 
$ValorHoraTraba = 300.00;
$QuantHorasTrab = 200;
$SalarioBruto = $QuantHorasTrab * $ValorHoraTraba ; 

var_dump($SalarioBruto);


 if ($desconto = $SalarioBruto > 2500){
    $desconto = $SalarioBruto - 200;
 }



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>