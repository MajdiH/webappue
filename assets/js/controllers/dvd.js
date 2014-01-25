
/*
 * Get the music news
 */
function getAllDVDNews() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.dvd.php",
        data: {locate: "getAllDVDNews"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}