<?php
#declarar variables
$nombre = "Jose";
$edad = 28;
$num1 = 32;
$num2 = 20;
print("<h1>Hola $nombre </h1>");
echo "Bueno , ".$nombre." tu edad es ".$edad;
echo "<br>Suma: ".$num1 + $num2;
echo "<br>Resta: ".$num1 - $num2;
echo "<br>Mult: ".$num1 * $num2;
echo "<br>Div: ".$num1 / $num2;

echo "<br>Mayor que ".($num1 > $num2);
echo "<br>Menor que ".($num1 < $num2);
echo "<br>Mayor o igual que ".($num1 >= $num2);
echo "<br>Menor o igual que ".($num1 <= $num2);

?>
