

window.onload = function () {
   //alert("cargado...");
}

$(document).ready(function(){
  	libros = 5;
}); 

function abrir(libro){  
      for (var i = libros; i > 0; i--) {
            indice ="#"+ i;
              $(indice).removeClass("cajah");                  
      };

    indice ="#"+ libro;
    $(indice).addClass("cajah"); 
}

function mostrarinfo(libro, datos){     
    $('.interinfo').css('display','block');
    $('#titulo').html();

}

function prueba(dats){
  $.get('http://localhost/ihm/app/res/content/revistas.json', function(data) {
        alert(data[dats].title);
    });
  
}

function modal(){
  document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block';
}

function mostrar(){
  $('#modal').fadeIn();
  $('#modal-background').fadeTo( 500, .8);
}
function ocultar(){
  $('#modal,#modal-background').fadeOut();
}

function abrirRevista(revista){
  window.open('http://localhost/ihm/public/revista/'+revista);
}

function leerArchivo(){
  
  
  

}