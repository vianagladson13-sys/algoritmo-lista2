<?php
/* Um cinema deseja calcular o valor de uma compra. Armazene e calcule  
● Armazene a quantidade de ingressos. 
● Considere que cada ingresso custa R$ 30,00. 
● Calcule o valor total da compra. 
● Calcule e exiba o desconto. 
● Exiba o valor final da compra. 
● Se forem comprados mais de 5 ingressos, aplique um desconto de 10%.
*/

$QuantidadeIngressos = 50;
$ValorDeCadaIngresso = 30;
$TotalCompra = $QuantidadeIngressos * $ValorDeCadaIngresso;

$Desconto = 0;

if ($QuantidadeIngressos > 5) {
    $Desconto = $TotalCompra * 0.10; 
}





?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 06</title>
</head>

<body>
<h3>Venda de ingressos</h3>
<P><?php echo (" Quantidade de ingressos: " . $QuantidadeIngressos);  ?></P>
<P><?php echo ("Valor do ingresso: " . $ValorDeCadaIngresso);  ?></P>
<p><?php echo (" Desconto: " . $Desconto);  ?></p>
<p><?php echo (" Valor total da compra: " . $TotalCompra);  ?></p>

</body>

</html>