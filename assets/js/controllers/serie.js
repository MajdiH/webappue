/*
 * Get the cinema news
 */
function getAllSeriesNews() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.serie.php",
        data: {locate: "getAllSeriesNews"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}