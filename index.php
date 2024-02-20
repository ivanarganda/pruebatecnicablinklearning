<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba tecnica PHP</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!-- Recursos de iconos tailwind: https://tailwindtoolbox.com/icons -->
    <section class="flex w-full flex-row justify-around">
        <div class="h-screen w-[400px] min-w-[350px] flex shadow-xl border-r border-gray-600">
            <div class="w-full bg-gray-800 text-white flex flex-col items-center">
                <div class="flex items-center justify-start px-6 py-4"><svg class="m-auto"
                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="h-6 w-6 text-white">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                </div>
                <hr class="border-gray-600">
                <nav class="flex-grow">
                    <button
                        class="group flex items-center px-6 py-2 text-gray-300 hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-gray-500 group-hover:text-white">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg><span class="ml-4">PruebaPHP</span>
                    </button>
                    <hr class="border-gray-600">
                    <button
                        class="group flex items-center px-6 py-2 text-gray-300 hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-gray-500 group-hover:text-white">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg><span class="ml-4">PruebaReact</span>
                    </button>
                    <hr class="border-gray-600">
                    <button
                        class="group flex items-center px-6 py-2 text-gray-300 hover:text-white"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="h-6 w-6 text-gray-500 group-hover:text-white">
                            <polyline points="16 18 22 12 16 6"></polyline>
                            <polyline points="8 6 2 12 8 18"></polyline>
                        </svg><span class="ml-4">Sistemas</span>
                    </button>
                </nav>
            </div>
        </div>
        <div class="w-full text-gray-200 flex flex-col justify-center items-center">
            <h1 className="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-200 md:text-5xl lg:text-6xl dark:text-white">We offer you, shorted links</h1>
            <p className="mb-6 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-300">They facility to understand their aim and main function.You could search shorted links available and save them your profile and sign in to create your own shorted links</p>
            <div className="flex flex-row flex-flow m-auto items-center justify-center w-full gap-10">
            <a href="#" className="inline-flex items-center flex-1-auto mt-4 self-start flex-grow-0 justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
            <svg className="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
              <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
            </a>
            </div>
            </div>
        </div>
    </section>
</body>
<script type="text/javascript" src="https://cdn.tailwindcss.com"></script>

</html>