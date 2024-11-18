<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio01</title>
</head>
<body>
    <form method="POST">
        <h1>Reordenamiento de arrays</h1>
        <input type="text" id="elemento" name="elemento" placeholder="Ingrese una cadena de texto">
        <button type="submit">Agregar a la lista</button>
    </form>

    <?php
        // Iniciar la sesión
        session_start();

        // Si la sesión 'array' no está configurada, inicializarla como un array vacío
        if (!isset($_SESSION['array'])) {
            $_SESSION['array'] = array();
        }

        // Verificar si el formulario ha sido enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Obtener el elemento ingresado por el usuario
            $elemento = $_POST['elemento'];
            
            // Agregar el elemento al array de la sesión
            array_push($_SESSION['array'], $elemento);
        }

        // Mostrar el array original
        echo "<p>Array original:</p>";
        foreach ($_SESSION['array'] as $array1) {
            echo "$array1 <br>";
        }

        // Invertir y mostrar el array
        $arrayInvertido = array_reverse($_SESSION['array']);
        echo "<br><p>Array inverso:</p>";
        foreach ($arrayInvertido as $arrayI) {
            echo "$arrayI <br>";
        }
    ?>
</body>
</html>
