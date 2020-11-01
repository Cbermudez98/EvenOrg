<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<!-- Start Header-->
<nav class="navbar navbar-light sticky-top fixed-top container-fluid" style="background-color: #fff; ">
      <form class="form-inline">
      <a class="navbar-brand" href="#">
      <img src="{{asset('img/evenorg.png')}}" width="30" height="30" alt="" loading="lazy">
      
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
  <form action="" method="POST">
    <div class="form-row ">
      <div class="col-md-6 mb-3">
        <label for="tipoidentificacion" >Tipo de identificación</label>
    <select class="form-control form-control-sm col-10" id="tipoidentificacion " >
      <option>Seleccione...</option>
      <option>Cedula de ciudadania</option>
      <option>Cedula extranjera</option>
      
    </select>
    <br>
        <label for="primernombre" >Primer nombre</label>
        <input type="text" class="form-control form-control-sm col-10" id="primernombre"placeholder="Primer nombre" >
        <br>
        <label for="primerapellido">Primer apellido</label>
        <input type="text" class="form-control form-control-sm col-10" id="primerapellido" placeholder="Primer apellido" >
        <br>
        <label for="fechanacimiento">Fecha de nacimiento</label>
        <input type="date" class="form-control form-control-sm col-10" id="fechanacimiento" >
        <br>
        <label for="validationDefault01">Télefono</label>
        <input type="text" class="form-control form-control-sm col-10" id="telefono" placeholder="Télefono" >
        <br>
        <label for="selectpais">País</label>
        <select class="form-control form-control-sm col-10" id="selectpais">
          <option value="disabled selected">Seleccione...</option>
          <option>Colombia</option>
          <option>Venezuela</option>
          <option>Argentina</option>
          <option>Peru</option>
          <option>Chile</option>
        </select>
        <br>
        <label for="inputPassword6">Contraseña</label>
        <input type="password" id="inputPassword6" class="form-control form-control-sm col-10" aria-describedby="passwordHelpInline">
      </div>
      <div class="col-md-6 mb-3">
        <label for="numdeidentificacion">Numero de identificación</label>
        <input type="text" class="form-control form-control-sm col-10" id="numdeidentificacion"  placeholder="Numero de identificacion">
        <br>
        <label for="segundonombre">Segundo nombre</label>
        <input type="text" class="form-control form-control-sm col-10" id="segundonombre" placeholder="Segundo nombre">
        <br>
        <label for="segundoapellido">Segundo apellido</label>
        <input type="text" class="form-control form-control-sm col-10" id="segundoapellido"placeholder="Segundo apellido" >
        <br>
        <label for="correo">Correo</label>
       <input type="text" class="form-control form-control-sm col-10" id="correo" placeholder="Correo">
       <br>
       <label for="celular">Celular</label>
        <input type="text" class="form-control form-control-sm col-10" id="celular" >
        <br>
        <label for="selectciudad">Ciudad</label>
        <select class="form-control form-control-sm col-10" id="selectciudad">
          <option value="disabled selected">Seleccione...</option>
          <option>Cartagena de indias</option>
          <option>Barranquilla</option>
          <option>Medellin</option>
          <option>Bogota</option>
          <option>Cali</option>
        </select>
        <br>
        <label for="inputPassword6"> Confirmar Contraseña</label>
        <input type="password" id="inputPassword6" class="form-control form-control-sm col-10" aria-describedby="passwordHelpInline">
      </div>
    </div>
</form>
</div>

<br>
<div class=" text-center">
  <button type="button" class="btn btn-outline-primary btn-lg" >Registrar</button>
  
  <button type="button" class="btn btn-outline-primary btn-lg" >Cancelar</button>
</div>
<!-- End Form-->

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