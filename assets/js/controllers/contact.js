/*
 * Get Contact Form
 */
function getcontactForm(){
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.contact.php",
        data: {locate: "getContactForm"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });
}

/*
 * Send Contact Email
 */

function sendContactEmail(){
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.contact.php",
        data: {locate: "sendContactEmail"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}
