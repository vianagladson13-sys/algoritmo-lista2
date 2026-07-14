<?php
/*Uma loja paga comissão aos vendedores. Armazene e calcule:  
● Armazene o nome do vendedor. 
● Armazene o valor total vendido. 
● Calcule uma comissão de 5% sobre as vendas. 
● Calcule o valor total recebido em comissão e bônus. 
● Exiba todos os resultados. 
● Se o valor vendido for maior que R$ 5.000,00, acrescente um bônus de R$ 
200,00.
*/

$Vendedor = "Gladson";
$ValorTotalVendido = 6000.00;

$Comissao = $ValorTotalVendido * 0.5;

$Bonus = 0;

if ($ValorTotalVendido > 5000.00) {
    $Bonus = 200.00;
}
$TotalRecebido = $Comissao + $Bonus;




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 07</title>
</head>

<body>
    <h3>Vendas do Gladson</h3>
    <P><?php echo ("Valor de vendas: " . $ValorTotalVendido);  ?></P>
    <P><?php echo ("Valor bonus: " . $Bonus);  ?></P>
    <p><?php echo (" Valor total recebido: " . $TotalRecebido);  ?></p>

</body>

</html>