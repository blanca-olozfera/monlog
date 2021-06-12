var winmed = window.matchMedia("(max-width: 768px)");
if (winmed.matches){ 
    $("a.section__boton, a.mas-info").click(function() {
        $('html, body').animate({
        scrollTop: $("#formulario-inferior").offset().top
        }, 2000);
    });
    $('a.section__boton').append( $( "<img src='assets/img/enviar.svg' class='seccion__title-imgEnviar' alt='logo aereo'>" ) );
    $('button').append( $( "<img src='assets/img/enviar.svg' class='seccion__title-imgEnviar-frmi' alt='logo aereo'>" ) );

} else{
    $( "a.section__boton, button" ).hover(
        function() {
            $( this ).append( $( "<img src='assets/img/enviar.svg' class='seccion__title-imgEnviar' alt='logo aereo'>" ) );
        }, function() {
            $( this ).find("img").last().remove();
        }
    );
    $("a.section__boton").click(function() {
    $('html, body').animate({
    scrollTop: $("#formulario-hero").offset().top
    }, 2000);
    
});}