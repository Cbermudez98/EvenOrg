var validarFormEvento = function(){
  var nombreEvento = document.getElementById("nomevento").value;
  var tipoServicio = document.getElementById("tipoevento").value;
  var catEvento = document.getElementById("catevento").value;
  var dEvento = document.getElementById("descripcion_evento").value;
  var fechaHoraInicio = document.getElementById("fechaHoraInicio").value;
var fechaHoraFin = document.getElementById("fechaHoraFin").value;
var ubicacion = document.getElementById("lugar").value;
  var costo = document.getElementById("costo").value;

  if(nombreEvento === "" || tipoServicio === "disabled selected" || catEvento === "disabled selected" || dEvento === "" || fechaHoraInicio === "" || fechaHoraFin === "" || lugar === "" || costo === ""){
    console.log("Error todos los campos son requeridos");
    return false;
  }
  
  if(nombreEvento !== ""){
    if(nombreEvento.length < 5){
      console.log("Error nombre muy corto");
      return false;
    }
  }
  if(tipoServicio === "disabled selected"){
    console.log("Error debe escoger un tipo de evento");
    return false;
  }
  if(catEvento === "disabled selected"){
    console.log("Error debe escocger una categoria");
    return false;
  }
  if(dEvento !== ""){
    if(dEvento.length < 10){
      console.log("Error la descripcion es demasiado corta");
    }

  }
  
  if(ubicacion !== ""){
    if(lugar.length < 8){
      console.log("Error lugar es demasiado corto");
      return false;
    }
  }

  if(costo !== ""){
    if(isNaN(costo)){
      console.log("Error el valor ingresado no es una cantidad");
      return false;
    }
  }
  
}
