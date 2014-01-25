/*
 * Get the music news
 */
function getAllMusiquesNews() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.musique.php",
        data: {locate: "getAllMusiquesNews"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}

/*
 * Get the music events
 */
function getAllMusiquesEvents() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.musique.php",
        data: {locate: "getAllMusiquesEvents"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}