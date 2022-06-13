// JavaScript Document

function fondo(actual, change, remove) {
  $(actual).addClass(change);
  $(actual).removeClass(remove);
}
function encabezado(actual, change, remove) {
  $(actual).addClass(change);
  $(actual).removeClass(remove);
}

$(document).ready(function () {
  // Handler for .ready() called.
  
  var cliente = $("#idTipoEmpleado").val();
  switch (cliente) {
    case '78': 
       fondo(".blue-grey.lighten-4", " blue darken-2", "blue-grey lighten-4");
      fondo(".blue-grey.lighten-5", " blue darken-1", "blue-grey lighten-5");
      var a=document.getElementsByClassName("titulo");
    for (var i=0; i<a.length; i++) a[i].style.color="white"

      var a=document.getElementsByClassName("Estilo16");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
      var a=document.getElementsByClassName("Estilo17");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
        document.getElementById('guardaPacienteCita').style.backgroundColor = '#4CB5E8' ;

    break;
    case '71':
      fondo(".blue-grey.lighten-4", "pink  lighten-1", "blue-grey lighten-4");
      fondo(".blue-grey.lighten-5", "pink  lighten-4", "blue-grey lighten-5");
       var a=document.getElementsByClassName("titulo");
    for (var i=0; i<a.length; i++) a[i].style.color="white"

      var a=document.getElementsByClassName("Estilo16");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
      var a=document.getElementsByClassName("Estilo17");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
     document.getElementById('guardaPacienteCita').style.backgroundColor = '#E9457A' ;

    break;

    
    case '76':
      fondo(".blue-grey.lighten-4", "#b388ff deep-purple accent-1", "blue-grey lighten-4");
      fondo(".blue-grey.lighten-5", "#7e57c2 deep-purple lighten-13", "blue-grey lighten-5");
       var a=document.getElementsByClassName("titulo");
    for (var i=0; i<a.length; i++) a[i].style.color="white"

      var a=document.getElementsByClassName("Estilo16");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
      var a=document.getElementsByClassName("Estilo17");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
     document.getElementById('guardaPacienteCita').style.backgroundColor = '#7e57c2' ;

    break;
    case '83':
      fondo(".blue-grey.lighten-4", "#ff5252 red accent-2", "blue-grey lighten-4");
      fondo(".blue-grey.lighten-5", "#ff5252 red accent-3", "blue-grey lighten-5");
       var a=document.getElementsByClassName("titulo");
    for (var i=0; i<a.length; i++) a[i].style.color="white"

      var a=document.getElementsByClassName("Estilo16");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
      var a=document.getElementsByClassName("Estilo17");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
     document.getElementById('guardaPacienteCita').style.backgroundColor = '#ff5252' ;

    break;
    case '80':
      fondo(".blue-grey.lighten-4", "#c62828 red darken-3", "blue-grey lighten-4");
      fondo(".blue-grey.lighten-5", "#ff1744 red accent-3", "blue-grey lighten-5");
       var a=document.getElementsByClassName("titulo");
    for (var i=0; i<a.length; i++) a[i].style.color="white"

      var a=document.getElementsByClassName("Estilo16");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
      var a=document.getElementsByClassName("Estilo17");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
     document.getElementById('guardaPacienteCita').style.backgroundColor = '#ff1744' ;

    break;

    case '85':
      fondo(".blue-grey.lighten-4", "#b71c1c red darken-4", "blue-grey lighten-4");
      fondo(".blue-grey.lighten-5", "#c62828 red darken-3", "blue-grey lighten-5");
       var a=document.getElementsByClassName("titulo");
    for (var i=0; i<a.length; i++) a[i].style.color="white"

      var a=document.getElementsByClassName("Estilo16");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
      var a=document.getElementsByClassName("Estilo17");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
     document.getElementById('guardaPacienteCita').style.backgroundColor = '#ff1744' ;

    break;

     case '42':
      fondo(".blue-grey.lighten-4", "#c62828 red darken-2", "blue-grey lighten-4");
      fondo(".blue-grey.lighten-5", "#c62828 red darken-3", "blue-grey lighten-5");
       var a=document.getElementsByClassName("titulo");
    for (var i=0; i<a.length; i++) a[i].style.color="white"

      var a=document.getElementsByClassName("Estilo16");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
      var a=document.getElementsByClassName("Estilo17");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
     document.getElementById('guardaPacienteCita').style.backgroundColor = '#c62828' ;

    break;

    case '79':
      fondo(".blue-grey.lighten-4", "#ff9800 orange", "blue-grey lighten-4");
      fondo(".blue-grey.lighten-5", "#fb8c00 orange darken-1", "blue-grey lighten-5");
       var a=document.getElementsByClassName("titulo");
    for (var i=0; i<a.length; i++) a[i].style.color="white"

      var a=document.getElementsByClassName("Estilo16");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
      var a=document.getElementsByClassName("Estilo17");
    for (var i=0; i<a.length; i++) a[i].style.color="white"
     document.getElementById('guardaPacienteCita').style.backgroundColor = '#ff9800' ;

    break;
    default:
      // NA
    break;
  }


});



