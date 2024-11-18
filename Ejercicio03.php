<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio03</title>
</head>
<body>
    <h2>Contador de Frecuencia de Caracteres</h2>
    <form method="POST">
        <label for="texto">Ingrese una cadena de texto:</label><br>
        <input type="text" id="texto" name="texto" required><br><br>
        <button type="submit">Contar Frecuencia</button>
    </form>

    <?php
    // Verificar si el formulario ha sido enviado usando el método POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Obtener el texto ingresado por el usuario desde el formulario
        $texto = $_POST['texto'];

        // Función para contar la frecuencia de cada carácter en la cadena
        function frecuenciaDeCaracteres($cadena) {
            // Inicializar un array vacío para almacenar la frecuencia de los caracteres
            $frecuencia = array();

            // Recorrer cada carácter de la cadena
            for ($i = 0; $i < strlen($cadena); $i++) {
                $caracter = $cadena[$i]; // Obtener el carácter en la posición actual

                // Si el carácter ya está en el array, incrementar su conteo
                if (isset($frecuencia[$caracter])) {
                    $frecuencia[$caracter]++;
                } else {
                    // Si el carácter no está en el array, inicializar su conteo en 1
                    $frecuencia[$caracter] = 1;
                }
            }

            // Devolver el array con la frecuencia de los caracteres
            return $frecuencia;
        }

        // Llamar a la función para calcular la frecuencia de caracteres
        $resultado = frecuenciaDeCaracteres($texto);

        // Mostrar el resultado al usuario
        echo "<h3>Frecuencia de caracteres en '$texto':</h3>";
        foreach ($resultado as $caracter => $conteo) {
            // Imprimir cada carácter y su frecuencia
            echo "'$caracter' => $conteo<br>";
        }
    }
    ?>
</body>
</html>