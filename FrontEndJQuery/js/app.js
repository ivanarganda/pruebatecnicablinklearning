// Selecting elements
const botonAgregar = $("#nombre .agregar");
const inputFruta = $("#nombre #nombre_fruta");
const listadoFrutas = $("#listado_frutas ul");

// Event handler for adding fruit
$(botonAgregar).on('click', (event) => {
    event.preventDefault();
    
    // Getting the fruit name from input
    let nombreFruta = inputFruta.val();

    inputFruta.removeClass("border-8 border-red-800").removeClass("border-8").removeClass("text-red-500").addClass("border-gray-300");
    
    // Checking if the input is empty
    if (!nombreFruta){
        inputFruta.addClass("border-red-800").addClass("border-8").addClass("text-red-500").removeClass("border-gray-300");
        return;
    } 
    
    // Appending the fruit item to the list
    $(listadoFrutas).append(`
        <li class="flex items-center justify-between px-4 py-2 border-b border-gray-200">
            ${nombreFruta} &nbsp; &nbsp;
            <button class="bg-red-300 hover:bg-red-200 text-white active:bg-red-400 rounded-md p-2 transition-all" type="button">
                Borrar
            </button>
        </li>
    `);

    // Adding event listener to each delete button
    const frutas = $("#listado_frutas ul li");
    frutas.each((index, li) => {
        $(li).find('button').on('click', (e) => {
            $(li).remove();
        });
    });

    inputFruta.val('');
    
});
