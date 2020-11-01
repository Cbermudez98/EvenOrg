<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
<!--../../controller/userController.php-->
<h1>Formulario de registro</h1>
<form action="../../controller/userController.php" id="form" method="post" >
    <input type="hidden" name="token" value="signup">
    <input type="text" name="primerNombre" placeholder="primer nombre" id="primerNombre">
    <input type="text" name="segundoNombre" placeholder="segundo nombre" id="segundoNombre"><br><br>
    <input type="text" name="primerApellido" placeholder="primer apellido" id="primerApellido">
    <input type="text" name="segundoApellido" placeholder="segundo apellido" id="segundoApellido"><br><br>
    <select name="tipoIdentificacion" id="tipoIdentificacion">
    <option value="0">Tipo Identificacion</option>
    <option value="cedula"><p>cedula</p></option>
    <option value="cedulaExtranjeria"><p>cedula de extranjero</p></option>
    </select><br><br>
    <input type="number" name="numIdentificacion" placeholder="numero de identificacion" id="numIdentificacion">
    <input type="date" name="fechaNacimiento" placeholder="fecha de nacimiento" id="fechaNacimiento"><br><br>
    <input type="text" name="correo" placeholder="correo" id="correo">
    <input type="password" name="password" placeholder="contraseña" id="password">
    <input type="password" placeholder="contraseña" id="passwordConfirmacion"><br><br>
    <input type="number" name="telefono" placeholder="telefono" id="telefono">
    <input type="number" name="celular" placeholder="celular" id="celular"><br><br>
    <input type="text" name="pais" placeholder="pais" id="pais">
    <input type="text" name="ciudad" placeholder="ciudad" id="ciudad"><br><br>
    <input type="submit" id="enviar" onclick="return validar()" value="enviar">
    
</form>
    
    <script src="../../js/signup.js"></script>

</body>
</html>