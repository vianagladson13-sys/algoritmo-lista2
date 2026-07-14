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

$Subtotal = $Quantidade * $Preco;

$Frete = 20.00;

if ($Subtotal > 200) {
    $Frete = 0;
} else {
    $Frete = 20.00;
}

$ValorFinal = $Subtotal + $Frete;
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
    <P><?php echo ("Produto: " . $NomeDoProduto);  ?></P>
    <P><?php echo ("Preço: " . $Preco);  ?></P>
    <P><?php echo ("Quantidade: " . $Quantidade);  ?></P>
    <P><?php echo ("Subtotal: " . $Subtotal);  ?></P>
    <P><?php echo ("Frete: " . $Frete);  ?></P>
    <P><?php echo ("Valor final: " . $ValorFinal);  ?></P>
</body>

</html>