$(function() {
    var firebaseConfig = {
        apiKey: 'AIzaSyBPfb0JjIxZrV_WUUKPycuhC6j5PvgcNuE',
        authDomain: 'lp-olozfera.firebaseapp.com',
        databaseURL: 'https://lp-olozfera.firebaseio.com',
        projectId: 'lp-olozfera',
        storageBucket: 'lp-olozfera.appspot.com',
        messagingSenderId: '986581798326',
        appId: '1:986581798326:web:c59f3efed908d60f250517',
        measurementId: 'G-2W6T0VGX5X',
    };
    firebase.initializeApp(firebaseConfig);
    /*---------------
              ValidaciÃ³n
          ---------------*/

    $('form #telefono')
        .keypress(function(e) {
            if (isNaN(this.value + String.fromCharCode(e.charCode))) return false;
        })
        .on('cut copy paste', function(e) {
            e.preventDefault();
        });
    /*----- Habilitar boton solamente cuando este validado el formulario--*/
    $('form').on('change keyup', function() {
        var form = $(this);
        var btn = form.find('#enviar');
        if (validarFormulario(form)) {
            btn.attr('disabled', false);
            console.log('habilitado');
        } else {
            btn.attr('disabled', true);

            console.log('deshabilitado');
        }
    });

    var validarFormulario = function(form) {
        form.validate({
            rules: {
                nombre: { required: true },
                telefono: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                correo: { required: true, email: true },
                empresa: { required: true },
                servicio: { required: true },
                mensaje: { required: true },
            },

            messages: {
                nombre: { required: 'El campo es obligatorio' },
                correo: {
                    required: 'El campo es obligatorio',
                    email: 'Ingresa un email valido',
                },
                telefono: {
                    required: 'El campo es obligatorio',
                    digits: 'Ingresa números solamente',
                    minlength: 'Mí­nimo {0} dígitos',
                    maxlength: 'Máximo {10} dígitos',
                },
                empresa: {
                    required: 'Esta campo es obligatorio',
                },
                servicio: {
                    required: 'Esta campo es obligatorio',
                },
                mensaje: {
                    required: 'Esta campo es obligatorio',
                },
            },
        });

        return form.valid();
    };

    $('form')
        .find('#enviar')
        .click(function(e) {
            console.log('click');
            var form = $('#formulario-hero');

            if (validarFormulario(form)) {
                $('#loader-page').removeClass('d-none');
                $('#loader-page').addClass('d-flex');
                $('#enviar').attr('disabled', 'true');
                //get DATA
                //let datosCrm = form.serializeObjectCRM();
                //datosCrm = editarMedio(datosCrm);
                //datosCrmJson = JSON.stringify(datosCrm);
                let datosForm = form.serializeObject();

                //send firebase
                enviarFirebase(datosForm);

                //send EXCEL
                enviarExcel(datosForm, form);
                console.log({
                    datosForm,
                });
            } else {}
        });
    $('form')
        .find('#enviar-m')
        .click(function(e) {
            console.log('click');
            var form = $('#formulario-inferior');

            if (validarFormulario(form)) {
                $('#loader-page').removeClass('d-none');
                $('#loader-page').addClass('d-flex');
                $('#enviar-m').attr('disabled', 'true');
                let datosForm = form.serializeObject();

                //send firebase
                enviarFirebase(datosForm);

                //send EXCEL
                enviarExcel(datosForm, form);
                console.log({
                    datosForm,
                });
            } else {}
        });
    $('input[type=radio]').on('change', function() {
        console.log(this.value);
    });

    /*    Formato Json
          ---------------------------*/
    $.fn.serializeObject = function() {
        var o = {};
        this.find('[name]').each(function() {
            if (this.name == 'interes') {
                if ($(this).is(':checked')) {
                    if ($(this).value == 'departamentos') {
                        o[this.name] = this.value;
                        o['objectId'] = 'YzY3NGUyOT';
                    } else {
                        o[this.name] = this.value;
                        o['objectId'] = 'ZmE5YTJkNT';
                    }
                }
            } else {
                o[this.name] = this.value;
            }
        });
        return o;
    };

    var resultado = function(form, btn, msj) {
        $('#formuario .titulo').val(msj);
        form[0].reset();
        console.log(msj);
    };

    function enviarExcel(datos, form) {
        var url = "https://script.google.com/macros/s/AKfycbzSOuGWgogDBm75dyoBzvCvOA9mldKBOfhcdJeZ4exyHOeGclRo-1r_YLNzMRpBOh90/exec";
        $.ajax({
            url: url,
            method: 'GET',
            data: datos,
            dataType: 'JSON',
            success: function(r) {
                console.log(r);
                // console.log('excel con exito');
                form.submit();
            },
            error: function(xhr) {
                console.log(xhr.status);
                console.log(xhr.responseText);
                form.submit();
                //fallo excel
            },
        });
    }

    function enviarFirebase(datos) {
        let id = new Date();
        firebase
            .database()
            .ref('lpMonlog/' + id)
            .set({
                nombre: datos.nombre,
                correo: datos.correo,
                telefono: datos.telefono,
                empresa: datos.empresa,
                servicio: datos.servicio,
                mensaje: datos.mensaje,
                utmCampaign: datos.utm_campaign ? datos.utm_campaign : 'null',
                utmContent: datos.utm_content ? datos.utm_content : 'null',
                utmMedium: datos.utm_medium ? datos.utm_medium : 'null',
                utmTerm: datos.utm_term ? datos.utm_term : 'null',
                utmSource: datos.utm_source ? datos.utm_source : 'null',
            })
    }
    // ---
});

/* OBTENER UTMS/**/

var obtener_utms = function(datos) {
    var utms = [
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term',
        'utm_content',
    ];
    for (utm of utms) {
        datos[utm] = getParameterByName(utm);
    }

    return datos;
};

function getParameterByName(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    var regex = new RegExp('[\\?&]' + name + '=([^&#]*)'),
        results = regex.exec(location.search);
    return results === null ?
        'null' :
        decodeURIComponent(results[1].replace(/\+/g, ' '));
}

var utms = [
    'utm_source',
    'utm_medium',
    'utm_campaign',
    'utm_term',
    'utm_content',
];


var utmFormulario = function() {
    let datos = {};
    datos = obtener_utms(datos);

    document.getElementById("utm_source").value = datos["utm_source"];
    document.getElementById("utm_content").value = datos["utm_content"];
    document.getElementById("utm_campaign").value = datos["utm_campaign"];
    document.getElementById("utm_term").value = datos["utm_term"];
    document.getElementById("utm_medium").value = datos["utm_medium"];

    document.getElementById("utm_source-m").value = datos["utm_source"];
    document.getElementById("utm_content-m").value = datos["utm_content"];
    document.getElementById("utm_campaign-m").value = datos["utm_campaign"];
    document.getElementById("utm_term-m").value = datos["utm_term"];
    document.getElementById("utm_medium-m").value = datos["utm_medium"];

    console.log(datos);
};

utmFormulario();