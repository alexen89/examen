alert();
function path(Folder){
// Obtiene Carpeta raiz
    if(!Folder){Folder='examen';}
    Folder = Folder + '/';
    var dominio = document.domain;
    var raiz = window.location.pathname.split(Folder);
    var ruta = raiz[0] + Folder;
    return ruta;
}
function buscar_user(){

    var uri = path()+'consulta/buscar';
    var buscar             = $('#buscar').val();
    jQuery.ajax({

        type: "POST",
        url: uri,
        dataType: 'json',
        data     : {buscar:buscar
            },
        success: function(data){
            if(data.success){
                jQuery('#tabla_contenido').html(data.table);
            }else{
                jQuery('#tabla_contenido').html('');
                jQuery('#msg').html(data.table);
            }
        }
    });
}