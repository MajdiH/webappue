
/*
 * Get the TV news
 */
function getAllTVNews() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.tele.php",
        data: {locate: "getAllTVNews"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}

/*
 * Get the TV programs
 */
function getAllTVPrograms() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.tele.php",
        data: {locate: "getAllTVPrograms"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}

/*
 * Get the TV selections
 */
function getAllTVSelections() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.tele.php",
        data: {locate: "getAllTVSelections"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });

}