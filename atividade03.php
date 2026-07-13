<?php
/* Uma pessoa realizou uma viagem de carro. Armazene e calcule
● a distância percorrida.
● a quantidade de combustível consumida.
● Calcule o consumo médio: consumo médio = distância ÷ combustível
● Exiba a distância, o combustível gasto e o consumo médio.
● Se o consumo médio for maior ou igual a 12 km/l, exiba: O veículo teve um bom
consumo.
*/

$DistanciaPercorrida = 10;
$QtdcombustivelConsumido = 4;

$ConsumoMedio = $DistanciaPercorrida / $QtdcombustivelConsumido;

$frase = "";
if ($ConsumoMedio>= 12 ) {
    $frase = "o veiculo teve um bom consumo";
}else {
    $frase = "O veículo teve um consumo ruim.";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo</title>
</head>

<body>
<h3>Media de consumo </h3>
<p><?php echo (" Distancia percorrida: " . $DistanciaPercorrida);  ?></p>
<p><?php echo (" Combustivel gasto: " . $QtdcombustivelConsumido);  ?></p>
<P><?php echo (" Consumo medio: " . $ConsumoMedio);  ?></P>
<P><?php echo ("Frase: " . $frase);  ?></P>
</body>

</html>