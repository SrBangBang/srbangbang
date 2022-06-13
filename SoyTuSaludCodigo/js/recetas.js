

document.addEventListener("DOMContentLoaded", function () { 


const queryString = window.location.search;

console.log(queryString);

const urlParams = new URLSearchParams(queryString);

const product = urlParams.get('id_Cliente')
console.log(product);



switch(product) {
    case '69': 
       
   var elements = document.getElementsByClassName('btn'); // get all elements
    for(var i = 0; i < elements.length; i++){
    elements[i].style.backgroundColor = "#EA619E";
    elements[i].style.color = "white";
}
    break;

    case '74': 
       
    var elements = document.getElementsByClassName('btn'); // get all elements
     for(var i = 0; i < elements.length; i++){
     elements[i].style.backgroundColor = "#47267E";
     elements[i].style.color = "white";
 }
     break;

     case '75': 
       
   var elements = document.getElementsByClassName('btn'); // get all elements
    for(var i = 0; i < elements.length; i++){
    elements[i].style.backgroundColor = "#4CB5E8";
    elements[i].style.color = "white";
}
    break;

     case '77': 
       
   var elements = document.getElementsByClassName('btn'); // get all elements
    for(var i = 0; i < elements.length; i++){
    elements[i].style.backgroundColor = "#EF8633";
    elements[i].style.color = "white";
}
    break;


     case '78': 
       
   var elements = document.getElementsByClassName('btn'); // get all elements
    for(var i = 0; i < elements.length; i++){
    elements[i].style.backgroundColor = "#A02B3F";
    elements[i].style.color = "white";
}
    break;

     case '82': 
       
   var elements = document.getElementsByClassName('btn'); // get all elements
    for(var i = 0; i < elements.length; i++){
    elements[i].style.backgroundColor = "#8A398D";
    elements[i].style.color = "white";
}
    break;


      case '20': 
       
   var elements = document.getElementsByClassName('btn'); // get all elements
    for(var i = 0; i < elements.length; i++){
    elements[i].style.backgroundColor = "#6F1D38";
    elements[i].style.color = "white";
}
    break;

     case '51': 
       
   var elements = document.getElementsByClassName('btn'); // get all elements
    for(var i = 0; i < elements.length; i++){
    elements[i].style.backgroundColor = "#A72A22";
    elements[i].style.color = "white";
}
    break;


     case '101': 
       
   var elements = document.getElementsByClassName('btn'); // get all elements
    for(var i = 0; i < elements.length; i++){
    elements[i].style.backgroundColor = "#74B52E";
    elements[i].style.color = "white";
}
    break;
    
    default:
      // NA
    break;
  }




});