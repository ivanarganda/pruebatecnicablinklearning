<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prueba front end jquery</title>
        <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet">
    </head>
    <body class="bg-gray-100 relative">
        <div class="max-w-3xl absolute top-2 w-full p-4 bg-gray-800 shadow-md rounded-lg">
            <!-- Container for input and button -->
            <div id="nombre"
                class="container mx-auto py-8 w-full flex items-center justify-center">
                <!-- Label for input -->
                <span class="text-lg font-semibold mr-2">Nombre:</span>
                <!-- Input field for entering fruit name -->
                <input id="nombre_fruta"
                    class="texto px-4 py-2 w-2/4 border border-gray-300 rounded-md"
                    type="text" placeholder="Ingrese el nombre de la fruta">
                <!-- Button for adding fruit -->
                <button type="button"
                    class="agregar px-4 py-2 bg-blue-500 text-white rounded-md ml-2 hover:bg-blue-600 focus:outline-none">Agregar</button>
            </div>

            <!-- Container for list of fruits -->
            <div id="listado_frutas"
                class="container mx-auto flex flex-row justify-center">
                <!-- Unordered list to display fruits -->
                <ul class="mt-4 w-1/2 flex flex-col justify-center items-center"></ul>
            </div>
        </div>

        <!-- jQuery and app.js scripts -->
        <script src="<?php echo strtok($_SERVER['REQUEST_URI'], '?'); ?>/js/jquery.js"></script>
        <script src="<?php echo strtok($_SERVER['REQUEST_URI'], '?'); ?>/js/app.js"></script>
    </body>
</html>
