$(document).ready(function() {
    $(".menu-link").click(function(e) {
        e.preventDefault();
        var page = $(this).data("page");

        // Effet de fade-out et affichage du loader
        $("#content").fadeOut(300, function() {
            $("#loader").fadeIn(200);

            // AJAX pour récupérer le contenu
            $.ajax({
                url: "content.php",
                type: "GET",
                data: { page: page },
                success: function(response) {
                    // Mise à jour du contenu avec un effet
                    $("#loader").fadeOut(200, function() {
                        $("#content").html(response).fadeIn(300);
                    });
                },
                error: function() {
                    $("#loader").fadeOut(200);
                    $("#content").html("<p style='color: red;'>Erreur de chargement, réessayez.</p>").fadeIn(300);
                }
            });
        });
    });
});
