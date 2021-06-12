$( "a.section__boton, button" ).hover(
    function() {
        $( this ).append( $( "<img src='assets/img/enviar.svg' class='seccion__title-imgEnviar' alt='logo aereo'>" ) );
    }, function() {
        $( this ).find("img").last().remove();
    }
    );
