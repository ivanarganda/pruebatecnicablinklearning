<link rel='stylesheet' href='https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.css'>
<?php 

// Definición de la función sumaArray
function sumaArray($ar) {
    // Inicialización de la variable suma
    $suma = 0;
    
    // Iteración sobre los elementos del array
    foreach ($ar as $elemento) {
        // Verificar si el elemento es un array
        if (is_array($elemento)) {
            // Si es un array, llamar recursivamente a la función sumaArray
            $suma += sumaArray($elemento);
        } 
        // Verificar si el elemento es numérico
        elseif (is_numeric($elemento)) {
            // Si es numérico, sumarlo a la variable suma
            $suma += $elemento;
        }
    }
    // Devolver la suma total
    return $suma;
}

// Ejemplos de arrays
$lista1 = [1, 4, 3, 0];
$lista2 = [1, 2, [5, 8], 4];
$lista3 = [0, [6, 2], null, 7, 1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuestas</title>
    <!-- Enlace al archivo CSS de Tailwind -->
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>

<body class="py-8">
    <div class="max-w-3xl w-full mt-20 p-4 bg-gray-800 shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Respuestas</h2>
        <div class="mb-8 w-full">
            <h3 class="text-xl font-semibold mb-2 w-full">1. Implementar la función en PHP sumaArray para calcular la suma de
                los elementos de un array numérico:</h3>
            <div class="flex flex-row gap-5 w-full">
                <div class="flex flex-col w-1/2">
                    <p class="mb-4">Respuesta:</p>
                    <ul class="list-disc ml-6">
                        <li>Suma de lista1: <?php echo sumaArray($lista1); ?></li>
                        <li>Suma de lista2: <?php echo sumaArray($lista2); ?></li>
                        <li>Suma de lista3: <?php echo sumaArray($lista3); ?></li>
                    </ul>
                </div>
                <div class="flex flex-col w-1/2 pl-2 bg-gray-700">
                    <span class="mb-4 w-full flex flex-row">
                        Codigo:
                    </span>
                    <div class="bg-gray-700 p-2 w-full h-full relative">
                        <img src="<?php echo file_get_contents('./../assets/img/data1.txt') ?>" alt="code php: sumar arrays">
                    </div>
                </div>
            </div>      
        </div>
        <div class="mb-8">
            <h3 class="text-xl font-semibold mb-2">2. ¿Cuál es la salida de este código: $i=0;while ($i=1) echo ++$i;?
            </h3>
            <p class="mb-4">Respuesta:</p>
            <p class="mb-4">No hay una salida, se va estar ejecutando infinitamente ya que la condición es $i = 1, por
                lo que siempre será verdadera.</p>
        </div>
        <div class="mb-8">
            <h3 class="text-xl font-semibold mb-2">3. ¿Qué función en PHP utilizarías para quitar todos los espacios de
                un string?</h3>
            <p class="mb-4">Respuesta:</p>
            <p class="mb-4">Hay 2 funciones:</p>
            <ul class="list-disc ml-6">
                <li>El <strong>str_replace()</strong></li>
                <li>El <strong>preg_replace()</strong></li>
            </ul>
            <p class="mb-4 mt-3">La función <strong>trim()</strong> podría eliminar también los espacios en blanco pero
                solo los del inicio y los del final, o especificando a partir de donde los quieres eliminar asignando un
                valor como segundo parámetro.</p>
        </div>
    </div>
</body>
</html>