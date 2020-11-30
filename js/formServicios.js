var validarServicio = function(){
  var servicio = document.getElementById("catservicio").value;
  var tipo = document.getElementById("tiposervicio").value;
  var descripcion = document.getElementById("descripcion").value;
  var precio = document.getElementById("precio").value;

  if(servicio === "disabled selected" || tipo === "" || descripcion === "" || precio === ""){
    console.log("Error todos los campos son obligatorios");
    return false;
  }

  if(servicio === "disabled selected"){
    console.log("Error seleccione una categoria deservicio");
    return false;
  }

  if(tipo === "" || tipo.length < 7){
    console.log("Error en el tipo de servicio");
    return false;
  }

  if(descripcion === "" || descripcion.length < 20){
    console.log("Error descipcion muy corta");
    return false;
  }

  if(precio !== ""){
    if(isNaN(precio)){
      console.log("Error valores ingresador no corresponden a un precio");
      return false;
    }

    if(precio < 0){
      console.log("Error precio no puede ser negativo");
      return false;
    }

    if(precio < 50000){
      console.log("Error el precio no cumple con nuestros estandares");
      return false;
    }
  }
}
