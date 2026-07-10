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
$SalarioBruto = $QuantHorasTrab * $ValorHoraTraba;
$SalarioLiquido = 0;

$desconto = 0;


if ($SalarioBruto > 2500) {
    $SalarioLiquido = $SalarioBruto - $desconto;

} else {
    $SalarioLiquido = $SalarioBruto;
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


    <h1> Folha de pagamento </h1>
    <br>
    <p><?php echo (" Funcionario: " . $NomeFuncionario);  ?></p>
    <p><?php echo (" Valor por hora: " . $ValorHoraTraba);  ?></p>
    <p><?php echo (" Qtds horas trabalhadas: " . $QuantHorasTrab);  ?></p>
    <p><?php echo (" Valor do desconto:  . R$200")  ?></p>
    <p><?php echo (" Salario liquido: " . $SalarioLiquido)  ?></p>
</body>

</html>