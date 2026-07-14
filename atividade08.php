<?php
/* Um hotel deseja calcular o valor de uma hospedagem. Armazene e calcule:  
● Armazene o nome do hóspede. 
● Armazene a quantidade de diárias. 
● Considere o valor de R$ 180,00 por diária. 
● Calcule o valor da hospedagem. 
● Exiba o nome do hóspede, o valor inicial, o desconto e o valor final. 
● Se a quantidade de diárias for maior ou igual a 5, aplique um desconto de R$ 
100,00. */


$NomeHospede = "Gladson";
$QtdDiaria = 7;
$ValorDiaria = 180.00;


$CustoTotalDiarias = $ValorDiaria * $QtdDiaria;
$ValorInicial = $ValorDiaria * $QtdDiaria;

$Desconto = 0;
if ($QtdDiaria >= 5) {
    $Desconto = 100.00;
}
$ValorFinal = $ValorInicial - $Desconto;

?>

<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 08</title>
</head>

<body>
    <h3>Valor da hospedagem</h3>
    <P><?php echo ("Nome do hospede: " . $NomeHospede);  ?></P>
    <P><?php echo ("Valor inicial: " . $ValorInicial);  ?></P>
    <P><?php echo ("Desconto: " . $Desconto);  ?></P>
    <P><?php echo ("Valor Final: " . $ValorFinal);  ?></P>
</body>

</html>