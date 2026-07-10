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
$Produto1 = "Arroz";
$preco1 = 25.00;
$quantidade1 = 10;
$TotalProduto1 = $preco1 * $quantidade1;

$Produto2 = "Feijão";
$preco2 = 10.00;
$quantidade2 = 10;
$TotalProduto2 = $preco2 * $quantidade2;

$Produto3 = "Leite";
$preco3 = 4.50;
$quantidade3 = 10;
$TotalProduto3 = $preco3 * $quantidade3;

$ValortotalCompra = $TotalProduto1 + $TotalProduto2 + $TotalProduto3;

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

    <h2>Notinha fiscal - Compras </h2>
    <br>
    <p><?php echo ("PRODUTO: " . $Produto1 . " -> QUANTIDADE: " . $quantidade1 . " -> PREÇO UNITARIO " . $preco1 . " -> TOTAL PRODUTO: " . $TotalProduto1); ?></p>
    <p><?php echo ("PRODUTO: " . $Produto2 . " -> QUANTIDADE: " . $quantidade2 . " -> PREÇO UNITARIO " . $preco2 . " -> TOTAL PRODUTO: " . $TotalProduto2); ?></p>
    <p><?php echo ("PRODUTO: " . $Produto3 . " -> QUANTIDADE: " . $quantidade3 . " -> PREÇO UNITARIO " . $preco3 . " -> TOTAL PRODUTO: " . $TotalProduto3); ?></p>
    <br>
    <p><?php echo ("VALOR TOTAL: " . $ValortotalCompra); ?></p>
    <p><?php echo ("VALOR DESCONTO: " . $desconto); ?></p>
    <p><?php echo ("VALOR FINAL COM DESCONTO: " . $valorTotalcomDesconto); ?></p>



</body>

</html>