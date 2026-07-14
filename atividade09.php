<?php
/*Uma loja virtual precisa calcular o valor final de um pedido. Armazene e calcule:  
● Armazene o nome do produto. 
● Armazene o preço do produto. 
● Armazene a quantidade comprada. 
● Calcule o subtotal. 
● Calcule e exiba o valor final do pedido. 
● Considere um frete de R$ 20,00. 
● Se o subtotal for maior que R$ 200,00, o frete deverá ser zerado. */


$NomeDoProduto = "bacozim";
$Preco = 20.00;
$Quantidade = 200;

$ValorCompras = $Quantidade * $Preco; 


$Frete = 0;
if ($ValorCompras >200) {
    $Frete = 20.00;
}

?>

<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercico 09</title>
</head>

<body>
    <h3>Pedido de bacozim</h3>
    <P><?php echo ("Nome do hospede: " . $NomeHospede);  ?></P>
    <P><?php echo ("Valor inicial: " . $ValorInicial);  ?></P>
    <P><?php echo ("Desconto: " . $Desconto);  ?></P>
    <P><?php echo ("Valor Final: " . $ValorFinal);  ?></P>
</body>

</html>