
$(document).ready(function () {
    $("#search").on('input', function (e) {
        e.preventDefault();
        var search_string = $(this).val().trim();
        var category_id = $("#category-tabs .active").data("category"); // Obtenez l'ID de la catégorie active

        // Envoie de la requête AJAX avec les données de recherche
        $.ajax({
            type: "GET",
            url: "/search-by-category",
            data: {
                search_string: search_string,
                category_id: category_id
            },
            dataType: "json",
            success: function (response) {
                $("#place").html("");
                console.log(response);
                appendResponse(response);
            },
            error: function (error) {
                $("#place").html(`
                    <div class="flex justify-center">
                        <p class="text-center text-2xl text-red-700 p-10">
                            Une erreur s'est produite lors de la recherche.
                        </p>
                    </div>
                `);
            }
        });
    });

    // Gérez le clic sur les onglets de catégorie
    $("#category-tabs .category-tab").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
        $("#search").trigger("input"); // Déclencher l'événement de saisie pour effectuer une nouvelle recherche
    });
});


// $(document).ready(function () {
//     $("#search").on('input', function (e) {
//         e.preventDefault();
//         performSearch();
//     });

//     $("#category-tabs .category-tab").click(function () {
//         var category_id = $(this).data("category");
//         performSearch(category_id);
//     });
// });




function performSearch(category_id = null) {
    var search_string = $("#search").val().trim();

    // Envoie de la requête AJAX avec les données de recherche
    $.ajax({
        type: "GET",
        url: "/search-by-category",
        data: {
            search_string: search_string,
            category_id: category_id // Envoyez le category_id si ce n'est pas null
        },
        dataType: "json",
        success: function (response) {
            $("#place").html(""); // Efface le contenu précédent
            appendResponse(response); // Ajoute les nouveaux résultats
        },
        error: function (error) {
            $("#place").html(`
                <div class="flex justify-center">
                    <p class="text-center text-2xl text-red-700 p-10">
                        Une erreur s'est produite lors de la recherche.
                    </p>
                </div>
            `);
        }
    });
}

function appendResponse(data) {
    if (data.length === 0) {
        // Afficher un message lorsque aucun résultat n'est trouvé
        $("#place").html(`
            <div class="flex justify-center">
                <p class="text-center text-2xl text-red-700 p-10">
                    Aucun résultat trouvé pour votre recherche.
                </p>
            </div>
        `);
    } else {
        // Traitez la réponse comme vous le souhaitez
        // Dans ce cas, vous pouvez ajouter du code pour afficher des produits ou faire d'autres traitements avec les données de réponse
        data.forEach(product => {
            $("#place").append(`
                <div id="card" class="relative m-4 w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="/product/${product.id}">
                <img class="pb-8g rounded-t-lg" src="/storage/${product.image}" alt="product image" />
            </a>
                    <div class="px-5 pb-5">
                        <div class="flex flex-row justify-between mb-4">
                            <div>
                                <a href="#">
                                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">${product.name}</h5>
                                </a>
                                <p>Al Karam</p>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5">
                                <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                    <!-- Rating stars SVGs here -->
                                </div>
                            </div>
                        </div>
                        <p class="mt-2">(4.1k) Customer Reviews</p>
                        <div class="mt-2 flex items-center justify-between">
                            <span class="text-3xl font-bold text-gray-900 dark:text-white">${product.price} $</span>
                            <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add to cart</a>
                        </div>
                    </div>
                </div>
            `);
        });
    }
}

