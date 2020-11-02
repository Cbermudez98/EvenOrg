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
    <input type="hidden" name="token" value="registrar">
    <input type="text" name="primernombre" placeholder="primer nombre" id="primernombre">
    <input type="text" name="segundonombre" placeholder="segundo nombre" id="segundoNombre"><br><br>
    <input type="text" name="primerapellido" placeholder="primer apellido" id="primerapellido">
    <input type="text" name="segundoapellido" placeholder="segundo apellido" id="segundoapellido"><br><br>
    <select name="tipoidentificacion" id="tipoIdentificacion">
    <option value="selected disabled">Tipo Identificacion</option>
    <option value="cedula"><p>cedula</p></option>
    <option value="cedulaExtranjeria"><p>cedula de extranjero</p></option>
    </select><br><br>
    <input type="number" name="numdeidentificacion" placeholder="numero de identificacion" id="numdeidentificacion">
    <input type="date" name="fechanacimiento" placeholder="fecha de nacimiento" id="fechanacimiento"><br><br>
    <input type="text" name="correo" placeholder="correo" id="correo">
    <input type="password" name="password" placeholder="contraseña" id="password">
    <input type="password" placeholder="contraseña" id="passwordconfirmacion"><br><br>
    <input type="number" name="telefono" placeholder="telefono" id="telefono">
    <input type="number" name="celular" placeholder="celular" id="celular"><br><br>
    <input type="text" name="selectpais" placeholder="pais" id="selectpais">
    <input type="text" name="selectciudad" placeholder="ciudad" id="selectciudad"><br><br>
    <input type="submit" id="enviar" onclick="return validar()" value="enviar">
    
</form>
    
    <script src="../../js/signup.js"></script>

</body>
</html>