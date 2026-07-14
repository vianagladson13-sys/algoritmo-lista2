<?php 
/*Uma academia deseja calcular o valor do plano de um cliente. Armazene e calcule:  
● Armazene o nome do cliente. 
● Armazene o valor mensal do plano. 
● Armazene a quantidade de meses contratados. 
● Calcule o valor total do plano. 
● Calcule o valor do desconto. 
● Exiba o valor original, o desconto e o valor final. 
● Se forem contratados 6 meses ou mais, aplique um desconto de 15%.*/
 
$NomeCliente = "Gladson";
$ValorMensal = 100.00;
$QtdMesesContratado = 10;

$ValorTotal = $ValorMensal * $QtdMesesContratado;

if ($QtdMesesContratado >= 6) {
    $Desconto = $ValorTotal * 0.15;
} else {
    $Desconto = 0;
}
$ValorFinal = $ValorTotal - $Desconto;




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 10</title>
</head>
<body>
    <h3>Plano da academia</h3>
    <P><?php echo ("Valor mensal: " . $ValorMensal);  ?></P>
    <P><?php echo ("Valor de desconto: " . $Desconto);  ?></P>
    <P><?php echo ("Valor final: " . $ValorFinal);  ?></P>
   
   
    
</body>
</html>