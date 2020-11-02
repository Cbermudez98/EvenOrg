<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Start Header-->
<nav class="navbar navbar-light sticky-top fixed-top container-fluid" style="background-color: #fff; ">
      <form class="form-inline">
      <a class="navbar-brand" href="#">
      <img src="../img/evenorg.png" width="100" height="100" alt="" loading="lazy">
      
        <input class="form-control input-sm col-md-12 mb-6" type="search" placeholder="Search" aria-label="Search">
        <span class="input-group-addon">
          <i class="glyphicon glyphicon-search"></i>
        </span>
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </a>
    <div class="">
      <div class="dropdown">
        <a class="btn btn-link dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ayuda
        </a>
      
      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Cómo funciona</a>
          <a class="dropdown-item" href="#">¿Cuánto cuesta crear un evento?</a>
          <a class="dropdown-item" href="#">¿Dónde estan mis entradas?</a>
          <a class="dropdown-item" href="#">Cómo ponerse en contacto con el organizador del evento</a>
      </div>

        <button type="button" class="btn btn-link primary m-1 p-1">Solicitar evento</button>
        <button type="button" class="btn btn-link m-1 p-1" >Iniciar sesion</button>
      </div>
    </div>
</nav>

<!--Start Title-->
<div class="font-weight-lighter w-150 p-3 text-center">
 
  <h1>Registrarse</h1>

</div>
<!-- End Title-->

<!-- Start Form-->
<div class="container">
  <form action="../../controller/userController.php" method="POST">
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


<script src="../../js/signup.js"></script>
 <!--End Form-->

<br><br><br><br>

<!-- Start Footer-->
<div class="navbar navbar-light"style="background-color: #fff; ">
  <div class="row">
    <div class="col-sm m-1 text-primary">
      <h5 class="font-weight-bold">EvenOrg</h5>
    </div>
    <div class="col-sm">
      <i class="fas fa-phone ">  66666666</i>
      <i class="fas fa-envelope">evengorg@evenorg.com</i>
    </div>
    <div class="col-sm">
      <i class="fab fa-facebook-square"></i>
      <br>
      <i class="fab fa-twitter-square"></i>
    </div>
    <div class="col-sm text-dark">
      <a href="#" >Proveedores</a>
      <a href="#" >Desarrolladores</a>
    </div>
    <br>
    <div class="col-sm text-dark">
      <a href="#" >Terminos y condiciones</a>
      
    </div>
    <div class="col-sm text-dark">
      <a href="#" >Blog</a>
    </div>
    
  
  </div>
    <div class="  row-cols-md-4 text-primary">
      <div color="blue">
      <h6 color="blue">EvenOrg © 2020</h6>
      </div>
    </div>
</div>
<!-- End Footer-->