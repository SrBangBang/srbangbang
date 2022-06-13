function dataCountSeccion(seccion){
  $.ajax({
      url: "https://ideeolabs.com/medicalife/serviciosweb/stg.php",
      type: 'POST',
      dataType:'JSON',
      data : {type:3,seccion:seccion},
      success : function(response){
          //if (response.flagerror == 0) {
            $("#contadorView").html(response.ObjResult.tot);
          //}
      }
  });
}

// -----------------------------> FUNCIONES SWEET ALERT <-------------------------------------
function alertConfirm(title, message, action) {
  Swal.fire({
    title: title,
    text: message,
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Continuar',
    cancelButtonText: 'Cancelar',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      eval(action);
    }
  })
}
function alertOk(title, message, action) {
  Swal.fire({
    title: title,
    text: message,
    type: 'success',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      eval(action);
    }
  })
}
function alertForm(id, message) {
  Swal.fire({
    type: 'error',
    title: 'Datos incompletos',
    text: message,
    confirmButtonColor: 'red',
    confirmButtonText: 'ACEPTAR',
    //footer: '<a href>Why do I have this issue?</a>',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      setTimeout("$('#" + id + "').focus()", 1000);
    }
  })
}
function alertError(message, action) {
  Swal.fire({
    type: 'error',
    title: 'Error',
    confirmButtonColor: 'red',
    confirmButtonText: 'ACEPTAR',
    text: message,
    //footer: '<a href>Why do I have this issue?</a>',
    reverseButtons: true
  }).then((result) => {
    if (result.value) {
      eval(action);
    }
  })
}
// -----------------------------> FIN FUNCIONES SWEET ALERT <-------------------------------------
