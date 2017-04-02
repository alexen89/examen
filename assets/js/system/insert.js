function path(Folder){
// Obtiene Carpeta raiz
    if(!Folder){Folder='examen';}
    Folder = Folder + '/';
    var dominio = document.domain;
    var raiz = window.location.pathname.split(Folder);
    var ruta = raiz[0] + Folder;
    return ruta;
}
function guardar(){

    var uri = path()+'nuevo/insert';
    var nombre             = $('#nombre').val();
    var paterno             = $('#paterno').val();
    var materno             = $('#materno').val();
    var ingreso             = $('#ingreso').val();
    var fecha_na             = $('#fecha_na').val();
    jQuery.ajax({

        type: "POST",
        url: uri,
        dataType: 'json',
        data     : {nombre:nombre,
                    paterno:paterno,
                    materno:materno,
                    ingreso:ingreso,
                    fecha_na:fecha_na
            },
        success: function(data){
            if(data.succes){
                jQuery('#msg').html(data.msgs);
                window.location.href = path()+"consultar";
            }else{
                jQuery('#msg').html(data.msgs);
            }
        }
    });
}