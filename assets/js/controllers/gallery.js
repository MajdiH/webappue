/*
 * Get Gallery
 */
function getGallery(){
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.gallery.php",
        data: {locate: "getGallery"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });
}