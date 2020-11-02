var pnombre = document.getElementById('primernombre'),
    sn = document.getElementById('segundonombre'),
    pa = document.getElementById('primerapellido'),
    sa = document.getElementById('segundoapellido'),
    ti = document.getElementById('tipoidentificacion'),
    ni = document.getElementById('numdeidentificacion'),
    fn = document.getElementById('fechanacimiento'),
    co = document.getElementById('correo'),
    pw = document.getElementById('password'),
    pw2 = document.getElementById('passwordconfirmacion'),
    tl = document.getElementById('telefono'),
    cl = document.getElementById('celular'),
    ps = document.getElementById('selectpais'),
    cd = document.getElementById('selectciudad'),
    btn = document.getElementById('enviar');

    var vaidarPrimerNombre = function(){
        if (pnombre.value === null || pnombre.value === "") {
            console.log('Primer nombre requerido');
            return false;
        }
    }

    var validarPrimerApellido = function(){
        if(pa.value === null || pa.value === ""){
            console.log('Primer apellido requerido');
            return false;
        }
    }

    var validarSegundoApelligo = function(){
        if (sa.value === null || sa.value === "") {
            console.log('Segundo apellido requerido');
            return false;
        }
    }

    var validarTipoIdentificacion = function(){
        if(ti.value === "selected disabled"){
            console.log('Debe seleccionar un tipo identificacion');
            return false;
        }
    }
    /*Solucionar el error de tipo de documento y numero de identificacion 
    me esta retornando false en vez de true!!!.. */

    var validarNumeroIdentificacion = function(){
        

        if(ni.value === null || ni.value === "" || ni.value.length < 9 || isNaN(ni.value)){
            console.log('Error numero de identificacion');
            return false;
        }        
    }

    var validarCorreo = function(){
        var correo = co.value;
        if(correo === null || correo === ""){
            console.log('Error el campo correo no puede estar vacio');
            return false;
        }
        for (let i = 0; i < correo.length; i++) {
            let caracter = correo.charAt(i);
            if(caracter === "@"){
                console.log('correo permitido');
               
            }else{
                return false;
            }
            /*Pendiente la validacion del correo ¿porque se explota si esta bien?*/
            /*regex expresiones regulares: /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/ */
        }
    }

    var validarPassword = function(){
        var contr = pw.value,
            contr2 = pw2.value;
            if(contr === null || contr === ""){
                console.log('Error el campo contraseña no puede estar vacio');
                return false;
            }

            if(contr2 === null || contr2 === ""){
                console.log('Error el campo validar contraseña no puede estar vacio');
                return false;
            }

            if (contr.length < 6) {
                console.log('contraseña demasiado corta');
                return false;
            }

            if(contr !== contr2){
                console.log('La contraseña no coincide'); 
                return false;
            }
    }

    var validarTelefono = function(){
        /*La funcion isNaN nos permite validar si la el valor del campo es un numero o no
        si devuelve false entonces es porque ingresaste un numero, por lo tanto esta bien
        si devuelve true entonces es falso porque no ingresaste un numero */
        if (isNaN(tl.value)) {
            console.log('Error no es un numero');
            return false;
        }

        if(tl.value === null || tl.value === ""){
            console.log('Error el campo telefono no puede estar vacio');
            return false;
        }

        if (tl.value < 0) {
            console.log('Numero no puede ser negativo');
            return false;
        }

        if (tl.value.length < 7) {
            console.log('Numero de telefono muy corto');
            return false;
        }

        if(tl.value.length > 7){
            console.log('El numero es demasiado largo');
            return false;
        }

    }

    var validarCelular = function(){
        if (isNaN(cl.value)) {
            console.log('Error no es un numero');
            return false;
        }

        if(cl.value === null || cl.value === ""){
            console.log('Error el campo celular no puede estar vacio');
            return false;
        }

        if (cl.value < 0) {
            console.log('El Celular no puede ser negativo');
            return false;
        }

        if (cl.value.length < 10) {
            console.log('El Celular de telefono muy corto');
            return false;
        }

        if(cl.value.length > 11){
            console.log('El Celular es demasiado largo');
            return false;
        }
    }

    var validarPais = function(){
        if(ps.value === "disabled selected"){
            console.log('Error el campo pais no puede estar vacio');
            return false;
        }
    }

    var validarCiudad = function(){
        if(cd.value === "disabled selected"){
            console.log('Error seleccione una ciudad');
            return false;
        }
    }

    var validar = function(){
        return vaidarPrimerNombre(), validarPrimerApellido(),
        validarSegundoApelligo(),validarTipoIdentificacion(),validarNumeroIdentificacion(),validarCorreo(),
        validarPassword(),validarTelefono(),validarCelular(),validarPais(),validarCiudad();
        
    }


    

   
   