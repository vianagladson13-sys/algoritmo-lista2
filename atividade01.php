<?php


/*

            Atividade 1- Compra no supermercado

Uma pessoa comprou arroz, feijão e leite. Armazene e calcule
● o preço e a quantidade de cada produto.
● calcule o valor de cada item.
● calcule o valor total da compra.
● exiba o valor de cada item e o total.
● calcule e exiba o valor final após o desconto.
● Se o total da compra for maior que R$ 100,00, exiba: “Você ganhou um
desconto de R$ 10,00.” 
*/
$Produto1 = "arroz";
$preco1 = 25.00;
$quantidade1 = 10;

$Produto2 = "feijão";
$preco2 = 10.00;
$quantidade2 = 10;

$Produto3 = "leite";
$preco3 = 4.50;
$quantidade3 = 10;

$ValortotalCompra = ($preco1 * $quantidade1) + ($preco2 * $quantidade2) + ($preco3 * $quantidade3);

$desconto = 0;

if ($ValortotalCompra >= 100.00) {
    //so executa aqui dentro se obter true no teste acima
    $desconto = $ValortotalCompra * 10 / 100;
}
$valorTotalcomDesconto = $ValortotalCompra - $desconto;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF</title>
</head>

<body>

</body>

</html>