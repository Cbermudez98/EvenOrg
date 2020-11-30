var validarProveedor = function(){

var cComercio = document.getElementById('camcomercio').value;
var nummatricula = document.getElementById('nummatricula').value;
var nit = document.getElementById('nit').value;
var razonsocial = document.getElementById('razonsocial').value;
var tipoempresa = document.getElementById('tipoempresa').value;
var selectpais = document.getElementById('selectpais').value;
var selectciudad = document.getElementById('selectciudad').value;
var direccion = document.getElementById('direccion').value;
var telefono = document.getElementById('telefono').value;
var celular = document.getElementById('celular').value;
var correo = document.getElementById('email').value;

  if(cComercio === "disabled selected" || nummatricula === "" || nit === "" || razonsocial === "" || tipoempresa === "disabled selected" || selectpais === "disabled selected" || selectciudad === "disabled selected" || direccion === "" || telefono === "" || celular === "" || correo === ""){
    console.log("Error todos los campos son obligatorios");
    return false;
  }

  if(cComercio === "disabled selected"){
    console.log("Seleccione camara de comercio");
    return false;
  }

  if(nummatricula === ""){
    console.log("Error numero de matricula vacio");
    return false;
  }

  if(nit === "" || nit.length < 5){
    console.log("Error en el nit");
    return false;
  }

  if(razonsocial === "" || razonsocial.length < 7){
    console.log("Error en la razon social");
    return false;
  }

  if(tipoempresa === "disabled selected"){
    console.log("Error seleccione tipo empresa");
    return false;
  }

  if(selectpais === "disabled selected"){
    console.log("Error seleccione pais");
    return false;
  }

  if(selectciudad === "disabled selected"){
    console.log("Error seleccione ciudad");
    return false;
  }

  if(direccion === "" || direccion.length < 10){
    console.log("Error campo direccion es demasiado corto");
    return false;
  }

  if(telefono !== ""){
    if(isNaN(telefono)){
      console.log("Error el valor ingresado no es un numero de telefono");
      return false;
    }  

    if(telefono < 0){
      console.log("Error numero de telefono no puede ser negativo");
      return false;
    }

    if(telefono.length < 6){
      console.log("Error numero de telefono demasiado corto");
      return false;
    }

    if(telefono.length > 7){
      console.log("Error numero de telefono demasiado corto");
      return false;
    }
  }

  if(celular !== ""){
    if(isNaN(celular)){
      console.log("Error celular debe ser un numero");
      return false;
    }

    if(celular < 0){
      console.log("Error el celular no puede ser negativo");
      return false;
    }

    if(celular.length < 10){
      console.log("Error celular demasiado corto");
      return false;
    }

    if(celular.length > 11){
      console.log("Error celular demasiado largo");
      return false;
    }
  }
  
  if(correo !== ""){
    var x = correo.length;
    var res = false;
    for(let i = 0; i < x; i++){
      var letter = correo.charAt(i);
      if(letter === "@"){
	res = true;
      }
    }

    var end = correo.substring(x-4);
    if(end !== ".com"){
      res = false;
    }
    console.log(res);
    return res;
  }

}
