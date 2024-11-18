<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio04</title>
</head>
<body>
    <center>
        <?php
            // Bucle externo que controla el número de filas
            for ($i = 1; $i <= 5; $i++) {
                // Bucle interno para imprimir los espacios
                for ($j = 1; $j <= 5 - $i; $j++) {
                    echo " "; // Espacio simple para alinear la pirámide
                }
                
                // Bucle interno para imprimir los asteriscos
                for ($k = 1; $k <= (2 * $i - 1); $k++) {
                    echo "*";
                }
                
                // Imprimir un salto de línea al final de cada fila
                echo "<br>";
            }
        ?>
    </center>
</body>
</html>