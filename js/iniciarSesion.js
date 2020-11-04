var user = document.getElementById('user'),
    password = document.getElementById('password');

    var validarUser = function(){
        if (user.value === "" || user.value === null) {
            console.log('Error correo vacio');
            return false;
        }
    }

    var validarPassword = function(){
        if (password.value === "" || password.value === null) {
            console.log('Error campo contraseña vacio');
            return false;
        }
    }

    var validarLogin = function(){
        return validarUser(),validarPassword();
    }