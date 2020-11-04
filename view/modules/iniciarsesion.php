
<!--Start Title-->
<div class="font-weight-lighter w-150 p-3 text-center">
 
  <h1>Iniciar sesión</h1>

</div>

<!-- Start Form-->+
<div class="font-weight-lighter w-150 p-3 text-center">
<div class="container">
   <form action="#" class="border mx-auto p-3 form" style="max-width: 400px;" >
      <div class="form-group">
        <label for="user"></label>
        <input type="user" name="user" id="user" class="form-control" placeholder="Usuario o dirección de correo electrónico">
      </div>
      <div class="form-group">
        <label for="password"></label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
      </div>
      <button type="submit" onclick="return validarLogin()" class="btn btn-block btn-primary">Iniciar</button>
    </form>
</div>
</div>


<div class="font-weight-lighter w-150 p-3 text-center">
<a href="index.php=action=olviarContrasena">¿Olvidó su contraseña?</a>
<h6>¿No está registrado?<a href="index.php?action=registrarUsuario">¿Regístrese aquí?</a></h6>
</div>
<div class="font-weight-lighter w-150 p-3 text-center">
  <h6>Al hacer click en "Iniciar", acepto los <a href="index.php?action=terminosycondiciones">términos de servicio</a>,</h6>
  <h6> las <a href="hindex.php?action=directrices">directrices de la comunidad</a> y he leído la</h6>
  <h6><a href="index.php?action=politicas">política de privacidad</a> de <b>EvenOrg.</b></h6>
</div>

<!--End form--->

<br></br>
<script src="js/iniciarSesion.js"></script>