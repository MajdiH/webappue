$(document).ready(function() {

    var cinema = "assets/js/controllers/cinema.js";
    var serie = "assets/js/controllers/serie.js";
    var musique = "assets/js/controllers/musique.js";
    var dvd = "assets/js/controllers/dvd.js";
    var tele = "assets/js/controllers/tele.js";
    var contact = "assets/js/controllers/contact.js";
    var gallery = "assets/js/controllers/gallery.js";
    var charset = {charset: "utf-8"};

    include(cinema, charset);
    include(serie, charset);
    include(musique, charset);
    include(dvd, charset);
    include(tele, charset);
    include(contact, charset);
    include(gallery, charset);

    /*
     * Make menu active selected
     */
    $(".nav li").on("click", function() {
        $(".nav li").removeClass("active");
        $(this).addClass("active")
    });

    /*
     * 
     * @returns {All Views Actions}
     */

    $('body').on('click', '#home', function(e) {
        getBreadcrumb("#home");
        GetHome();
        e.preventDefault();
    });
    $('body').on('click', '#all-cinema-actu', function(e) {
        getBreadcrumb("#all-cinema-actu");
        getAllCinemaNews();
        e.preventDefault();
    });
    $('body').on('click', '#all-cinema-new-outs', function(e) {
        getBreadcrumb("#all-cinema-new-outs");
        getAllCinemaNewOuts();
        e.preventDefault();
    });
    $('body').on('click', '#all-series-news', function(e) {
        getBreadcrumb("#all-series-news");
        getAllSeriesNews();
        e.preventDefault();
    });
    $('body').on('click', '#all-musiques-news', function(e) {
        getBreadcrumb("#all-musiques-news");
        getAllMusiquesNews();
        e.preventDefault();
    });
    $('body').on('click', '#all-musiques-events', function(e) {
        getBreadcrumb("#all-musiques-events");
        getAllMusiquesEvents();
        e.preventDefault();
    });
    $('body').on('click', '#all-dvd-news', function(e) {
        getBreadcrumb("#all-dvd-news");
        getAllDVDNews();
        e.preventDefault();
    });
    $('body').on('click', '#all-tv-news', function(e) {
        getBreadcrumb("#all-tv-news");
        getAllTVNews();
        e.preventDefault();
    });
    $('body').on('click', '#all-tv-programs', function(e) {
        getBreadcrumb("#all-tv-programs");
        getAllTVPrograms();
        e.preventDefault();
    });
    $('body').on('click', '#all-tv-selections', function(e) {
        getBreadcrumb("#all-tv-selections");
        getAllTVSelections();
        e.preventDefault();
    });
    $('body').on('click', '#contact', function(e) {
        getBreadcrumb("#contact");
        getcontactForm();
        e.preventDefault();
    });
    $('body').on('click', '#sendContact', function(e) {
        getBreadcrumb("#contact");
        sendContactEmail();
        e.preventDefault();
    });
    $('body').on('click', '#gallery', function(e) {
        getBreadcrumb("#gallery");
        getGallery();
        e.preventDefault();
    });

    /*
     * Load Home page
     */
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.php",
        data: {locate: "AlaUne"}
    })
            .done(function(msg) {
        getBreadcrumb("#home");
        hideLoader();
        $("#content").html(msg);
    });

});

/*
 * Include file function
 */
function include(src, attributes)
{
    try {
        attributes = attributes || {};
        attributes.type = "text/javascript";
        attributes.src = src;

        var script = document.createElement("script");
        for (aName in attributes)
            script[aName] = attributes[aName];

        document.getElementsByTagName("head")[0].appendChild(script);
        return true;
    } catch (e) {
        return false;
    }
}

/*
 * Inirilize content Id
 */

function initilizeContentId() {
    $("#content").html('');
}

/*
 * Show hide Loader
 */

function showLoader() {
    $("#loading").show();
}
function hideLoader() {
    $("#loading").hide();
}

/*
 * Get Home Page
 */
function GetHome() {
    showLoader();
    initilizeContentId();
    $.ajax({
        type: "POST",
        url: "controllers/controller.php",
        data: {locate: "AlaUne"}
    })
            .done(function(msg) {
        hideLoader();
        $("#content").html(msg);
    });
}

/*
 * Get Breadcrumb Position
 */
function getBreadcrumb(bread) {
    $("#loading-bread").show();
    $.ajax({
        type: "POST",
        url: "controllers/controller.php",
        data: {bread: bread}
    })
            .done(function(msg) {
        $("#loading-bread").hide();
        $("#position").html(msg);
    });
}