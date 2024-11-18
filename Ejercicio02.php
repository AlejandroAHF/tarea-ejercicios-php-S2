<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio02</title>
</head>
<body>
    <form method="POST">
        <h1>Problema de Suma de Números Pares</h1>
        <input type="text" id="elemento" name="elemento" placeholder="Ingrese una cadena de texto">
        <button type="submit">Agregar a la lista</button>
    </form>
    <?php
        // Iniciar la sesión
        session_start();
    
        // Si la sesión 'array' no está configurada, inicializarla como un array vacío
        if(!isset($_SESSION['array'])){
            $_SESSION['array'] = array();
        }

        //Verificar si el formulario ha sido enviado
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Obtener el elemento ingresado por el usuario
            $elemento = $_POST['elemento'];

            // Agregar el elemento al array de la sesión
            array_push($_SESSION['array'],$elemento);

            //Declaramos la variable en la que se van almacenar la sumatoria de los numeros pares
            $sumatoria = 0;

            //Recorremos el array
            foreach($_SESSION['array'] as $a){
                //Imprimimos los elementos dentro de el array
                echo "$a <br>"; 
                //Verificamos si el elemento es numero par
                if($a % 2 == 0){
                    $sumatoria += $a; 
                }
            }

            //Imprimimos el resultado de la sumatoria
            echo "sumatoria de numeros pares: $sumatoria";
        }
    ?>
</body>
</html>