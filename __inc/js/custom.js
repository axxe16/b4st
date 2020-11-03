(function ($) {

//funzione per nascondere il preloader
function handlePageLoader() {
    $("#img-preloader").fadeIn(function() {
    $("#img-preloader").fadeOut(function(){
        $("#preloader").fadeOut();
    });
    });

    
}

//richiamo la funzione handlePageLoader a caricamento ultimato
$(window).on('load', function() {
        handlePageLoader();
        
});


})(jQuery);