<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba tecnica PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="w-full h-screen flex flex-col justify-center items-center m-auto">
    <!-- Recursos de iconos tailwind: https://tailwindtoolbox.com/icons -->
    <header class="flex w-full flex-row justify-around relative">
        <div class="fixed min-h-screen left-0 top-0 w-1/5 flex shadow-xl border-r border-gray-600">
            <div class="w-full bg-gray-800 text-white flex flex-col items-center">
                <div class="flex items-center w-full justify-start px-6 py-4">
                    <a href="./">
                        <figure class="mt-2 -mb-20 w-full flex flex-row justify-center">
                            <img src="https://elreferente.es/wp-content/uploads/m/startups/Blinklearning.png" class="mb-6 text-lg font-normal text-gray-300 dark:text-gray-300 w-1/2 m-auto"></img>
                        </figure>
                    </a>
                </div>
                <hr class="border-gray-600">
                <nav class="flex-grow w-full flex-col flex items-left">
                    <a
                        href="./?pathFolder=Backend"
                        class="group flex m-auto items-center px-6 py-2 text-gray-300 hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-gray-500 group-hover:text-white">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg><span class="ml-4 text-xl">PruebaPHP</span>
                    </a>
                    <hr class="border-gray-600">
                    <a
                        href="./?pathFolder=FrontEndJQuery"
                        class="group flex m-auto items-center px-6 py-2 text-gray-300 hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-gray-500 group-hover:text-white">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg><span class="ml-4 text-xl">Prueba jquery</span>
                    </a>
                    <hr class="border-gray-600">
                    <a
                        href="./?pathFolder=React"
                        target="blank"
                        class="group flex m-auto items-center px-6 py-2 text-gray-300 hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-gray-500 group-hover:text-white">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg><span class="ml-4 text-xl">Prueba react</span>
                    </a>
                    <hr class="border-gray-600">
                    <a
                        class="group flex m-auto items-center px-6 py-2 text-gray-300 hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-gray-500 group-hover:text-white">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg><span class="ml-4 text-xl">Sistemas</span>
                    </a>
                </nav>
            </div>
        </div> 
    </header>
    <section class="<?php echo isset($_GET['pathFolder']) ? "hidden" : '' ?> w-full h-full text-gray-600 flex flex-col justify-center items-center ml-1/2 mt-1/2">
        <h1 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-500 md:text-5xl lg:text-6xl dark:text-white">Prueba tecnica FullStack</h1>
        <a href="./?pathFolder=Backend" class="flex items-center mt-4 justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Empecemos
        </a>
    </section>
    <section class="w-full h-screen text-gray-200 flex flex-col justify-center items-center">
        <?php require_once "./routeController.php" ?>
    </section>
</body>
</html>