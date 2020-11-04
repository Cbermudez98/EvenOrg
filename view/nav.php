
<?php
if (isset($_SESSION['correo'])) {
  $sesion = $_SESSION['correo'];
}

?>

<!--Start Header-->
<nav class="navbar navbar-light fixed-top container-fluid" style="background-color: #fff; ">
  <form class="form-inline">
  <a class="navbar-brand" href="index.php">
    <img src="view/img/evenorg.png" width="120" height="120" alt="" loading="lazy">
      <input class="form-control input-sm col-md-12 mb-6" type="search" placeholder="Search" aria-label="Search">
      <span class="input-group-addon">
        <i class="glyphicon glyphicon-search"></i>
      </span>
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </a>
  <div class="">
    <div class="dropdown">
      <a class="btn btn-link dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ayuda</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">Cómo funciona</a>
            <a class="dropdown-item" href="#">¿Cuánto cuesta crear un evento?</a>
            <a class="dropdown-item" href="#">¿Dónde estan mis entradas?</a>
            <a class="dropdown-item" href="#">Cómo ponerse en contacto con el organizador del evento</a>
        </div>
      
      <a href="index.php?action=solicitarEvento" type="button" class="btn btn-link primary m-1 p-1">Crear evento</a>
      <a href="index.php?action=iniciarsesion" type="button" id="iniciarSesion" class="btn btn-link m-1 p-1">Iniciar sesion</a>
      <!--<a href="controller/userController.php?var=cerrarsesion" type="button" class="btn btn-link m-1 p-1">cerrar sesion</a>-->
    </div>
  </div>
</nav>
<!--End Header-->

<!--Modificar el comportamiento de las etiquetas a para que cuando
 se inicie sesion cambie el texto y el link a cerrar sesion-->
 <script >
  var bar = "<?php echo $sesion?>";
  
  if (bar !== null || bar !== "") {
    var sesion = document.getElementById('iniciarSesion').innerHTML = "<a href='controller/userController.php?var=cerrarsesion' type='button' class='btn btn-link m-1 p-1'>cerrar sesion</a>";
    
    
  }else{
    
  }
</script>


<br><br><br><br><br><br>
