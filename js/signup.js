var pnombre = document.getElementById('primerNombre'),
    sn = document.getElementById('segundoNombre'),
    pa = document.getElementById('primerApellido'),
    sa = document.getElementById('segundoApellido'),
    ti = document.getElementById('tipoIdentificacion'),
    ni = document.getElementById('numIdentificacion'),
    fn = document.getElementById('fechaNacimiento'),
    co = document.getElementById('correo'),
    pw = document.getElementById('password'),
    pw2 = document.getElementById('passwordConfirmacion'),
    tl = document.getElementById('telefono'),
    cl = document.getElementById('celular'),
    ps = document.getElementById('pais'),
    cd = document.getElementById('ciudad'),
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

    var validarTipoyNumIdentificacion = function(){
        if(ti.value === "0" || ni.value === null || ni.value === "" || ni.length < 9 || ni.value <= 0){
            console.log('Tipo identificacion y numero requeridos');
            return false;
        }
    }
    /*Solucionar el error de tipo de documento y numero de identificacion 
    me esta retornando false en vez de true!!!.. */

    var validarCorreo = function(){
        var correo = co.value;
        if(correo === null || correo === ""){
            console.log('Error el campo no puede estar vacio');
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
                console.log('Error el campo no puede estar vacio');
                return false;
            }

            if(contr2 === null || contr2 === ""){
                console.log('Error el campo no puede estar vacio');
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
            console.log('Error el campo no puede estar vacio');
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
            console.log('Error el campo no puede estar vacio');
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
        if(ps.value === null || ps.value === ""){
            console.log('Error el campo pais no puede estar vacio');
            return false;
        }
    }

    var validarCiudad = function(){
        if(cd.value === null || cd.value === ""){
            console.log('Error el campo ciudad no puede estar vacio');
            return false;
        }
    }

    const validar = function(){
        return vaidarPrimerNombre(), validarPrimerApellido(),
        validarSegundoApelligo(),validarTipoyNumIdentificacion(),validarCorreo(),
        validarPassword(),validarTelefono(),validarCelular(),validarPais(),validarCiudad();
        
    }


    

   
   