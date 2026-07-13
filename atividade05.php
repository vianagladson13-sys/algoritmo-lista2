<?php
/*
Uma empresa deseja calcular o valor da conta de energia de um cliente. Armazene e 
calcule 
● Armazene o nome do cliente. 
● Armazene a quantidade de quilowatts consumidos. 
● Considere o preço de R$ 0,90 por quilowatt. 
● Calcule o valor da conta. 
● Exiba o consumo, o valor inicial, a taxa e o valor final. 
● Se o consumo for maior que 200 quilowatts, acrescente uma taxa de R$ 25,00.
*/

//ENTRADAS

$NomeCliente = "Gladson";
$QtdQuilowattsConsumido = 800.00;
$PrecoPorQuilowatts = 0.90;


// PROCESSAMENTO
$ValorInicial = $QtdQuilowattsConsumido * $PrecoPorQuilowatts;

$Taxa = 0;

if ($QtdQuilowattsConsumido > 200) {
    $Taxa = 25.00;
}

$ValorFinal = $ValorInicial + $Taxa;


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> atividade05 </title>
</head>

<body>


    <h1> Conta de energia </h1>
    <br>
    <p><?php echo (" Cliente : " . $NomeCliente);  ?></p>
    <p><?php echo (" Valor inicial : " . $ValorInicial);  ?></p>
    <p><?php echo (" Consumo : " . $QtdQuilowattsConsumido);  ?></p>
    <p><?php echo (" Taxa : " . $Taxa)  ?></p>
    <p><?php echo (" Valor final : " . $ValorFinal)  ?></p>
</body>

</html>