<?php
/*
Uma empresa deseja calcular o salário de um funcionário. Armazene e calcule
● o nome do funcionário.
● o valor da hora trabalhada.
● a quantidade de horas trabalhadas.
● o salário bruto.
● exiba o nome, o salário bruto, o desconto e o salário final.
● Se o salário bruto for maior que R$ 2.500,00, desconte R$ 200,00.Caso
contrário, informe que o funcionário não possui desconto.
*/

//ENTRADAS

$NomeFuncionario = "Gladson";
$ValorHoraTraba = 800.00;
$QuantHorasTrab = 200;


$SalarioBruto = $ValorHoraTraba * $QuantHorasTrab;
$Desconto = 0;
$Frase = "";

if ($SalarioBruto > 2500) {
    $Desconto = 200.00;
} else {
    $Frase = "Funcionário não possui desconto.";
}

$SalarioLiquido = $SalarioBruto - $Desconto;
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
    <p><?php echo (" Salário bruto:") . $SalarioBruto  ?></p>
    <p><?php echo ("Desconto: " . $Desconto)  ?></p>
    <p><?php echo ("Salario final: " . $SalarioLiquido)  ?></p>
    <p><?php echo $Frase;  ?></p>
</body>

</html>