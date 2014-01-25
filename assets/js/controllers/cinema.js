/*
 * Get the cinema news
 */
function getAllCinemaNews() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.cinema.php",
        data: {locate: "getAllCinemaNews"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}

/*
 * Get the cinema new outs
 */
function getAllCinemaNewOuts() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.cinema.php",
        data: {locate: "getAllCinemaNewOuts"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}