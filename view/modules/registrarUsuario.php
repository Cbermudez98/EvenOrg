<!--Start Title-->
<div class="font-weight-lighter w-150 p-3 text-center ">
 
  <h1>Registro de Datos</h1>

</div>
<!-- End Title-->

<!-- Start Form-->
<div class="container">
  <form action="../../controller/userController.php" method="POST" class="border mx-auto p-3 form">
  <input type="hidden" name="token" value="registrar">
    <div class="form-row ">
      <div class="col-md-6 mb-3">
        <label for="tipoidentificacion" >Tipo de identificación</label>
    <select class="form-control form-control-sm col-10" name="tipoidentificacion" id="tipoidentificacion" >
      <option value="selected disabled">Seleccione...</option>
      <option value="Cedula de ciudadania">Cedula de ciudadania</option>
      <option value="Cedula de extranjeria">Cedula extranjera</option>
      
    </select>
    <br>
        <label for="primernombre" >Primer nombre</label>
        <input type="text" class="form-control form-control-sm col-10" name="primernombre" id="primernombre"placeholder="Primer nombre" >
        <br>
        <label for="primerapellido">Primer apellido</label>
        <input type="text" class="form-control form-control-sm col-10" name="primerapellido" id="primerapellido" placeholder="Primer apellido" >
        <br>
        <label for="fechanacimiento">Fecha de nacimiento</label>
        <input type="date" class="form-control form-control-sm col-10" name="fechanacimiento" id="fechanacimiento" >
        <br>
        <label for="telefono">Télefono</label>
        <input type="number" class="form-control form-control-sm col-10"  name="telefono" id="telefono" placeholder="Télefono" >
        <br>
        <label for="selectpais">País</label>
        <select class="form-control form-control-sm col-10" name="selectpais" id="selectpais">
          <option value="disabled selected">Seleccione...</option>
          <option value="Colombia">Colombia</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Argentina">Argentina</option>
          <option value="Pero">Peru</option>
          <option value="Chile">Chile</option>
        </select>
        <br>
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control form-control-sm col-10" placeholder="***********" aria-describedby="passwordHelpInline">
      </div>
      <div class="col-md-6 mb-3">
        <label for="numdeidentificacion">Numero de identificación</label>
        <input type="text" class="form-control form-control-sm col-10" name="numdeidentificacion" id="numdeidentificacion"  placeholder="Numero de identificacion">
        <br>
        <label for="segundonombre">Segundo nombre</label>
        <input type="text" class="form-control form-control-sm col-10" name="segundonombre" id="segundonombre" placeholder="Segundo nombre">
        <br>
        <label for="segundoapellido">Segundo apellido</label>
        <input type="text" class="form-control form-control-sm col-10" name="segundoapellido" id="segundoapellido"placeholder="Segundo apellido" >
        <br>
        <label for="correo">Correo</label>
       <input type="email" class="form-control form-control-sm col-10" name="correo" id="correo" placeholder="Correo">
       <br>
       <label for="celular">Celular</label>
        <input type="number" class="form-control form-control-sm col-10" placeholder="Celular" name="celular" id="celular" >
        <br>
        <label for="selectciudad">Ciudad</label>
        <select class="form-control form-control-sm col-10" name="selectciudad" id="selectciudad">
          <option value="disabled selected">Seleccione...</option>
          <option value="Cartagena de Indias">Cartagena de indias</option>
          <option value="Barranquilla">Barranquilla</option>
          <option value="Medellin">Medellin</option>
          <option value="Medellin">Bogota</option>
          <option value="Cali">Cali</option>
        </select>
        <br>
        <label for="passwordconfirmacion"> Confirmar Contraseña</label>
        <input type="password" id="passwordconfirmacion" class="form-control form-control-sm col-10" placeholder="***********" aria-describedby="passwordHelpInline">
      </div>
    </div>
    <br>
    <div class=" text-center">
      <input type="submit" onclick="return validar()" class="btn btn-outline-primary btn-lg" value="Registrar">
      <input type="submit" class="btn btn-outline-primary btn-lg" value="Cancelar">
     
    </div>
   
  </form>
 
</div>
<script src="js/registrarUsuario.js"></script>
 <!--End Form-->

