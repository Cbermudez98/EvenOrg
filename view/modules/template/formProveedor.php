<div class="content-wrapper">
  <form action="../../../controller/proveedorController.php" method="POST" onsubmit="return validarProveedor();" id="formProveedor" class="border mx-auto p-3 form">
  <input type="hidden" name="token" value="registrarProveedor">
    <div class="form-row ">
      <div class="col-md-6 mb-3">
      <input type="hidden" class="form-control" value="<?php echo $_SESSION['id'];?>" name="idusuario" id="idusuario" >
        
        <label for="camcomercio">Camara de Comercio</label>
        <select name="camcomercio" id="camcomercio" class="form-control">
          <option value="disabled selected" selected>Seleccione...</option>
          <option value="Sociedad por accion Simplificada">Sociedad por Acciones Simplificada</option>
          <option value="Sociedad Limitada">Sociedad Limitada</option>
          <option value="Sociedad Anonima">Sociedad Anónima</option>
          <option value="Empresa Unipersonal">Empresa Unipersonal</option>
          <option value="Sociedad Colectiva">Sociedad Colectiva</option>
          <option value="Soiciedad Comandita Simple">Sociedad Comandita Simple</option>
          <option value="Sociedad Comandita por Acciones">Sociedad Comandita por Acciones</option>
          <option value="Empresa Asiciativa de Trabajo">Empresa Asociativa de trabajo</option>
        </select>
    <br>

        <label for="nummatricula">Numero de Matricula</label>
        <input type="text" class="form-control" name="nummatricula" id="nummatricula" placeholder="Número de Matricula" >
        <br>
        <label for="nit">Nit</label>
        <input type="text" class="form-control" id="nit" name="nit" placeholder="Nit">
        <br>
        <label for="razon Social">Razón Social</label>
        <input type="text" class="form-control" id="razonsocial" name="razonsocial" placeholder="Razon Social" >
        <br>
        <label for="tipoempresa">Tipo de Empresa</label>
        <select id="tipoempresa" name="tipoempresa" class="form-control">
          <option value="disabled selected" selected>Seleccione...</option>
          <option value="Sociedades por Acciones Simplificadas">Sociedades por Acciones Simplificadas (S.A.S)</option>
          <option value="Sociedad Colectiva">Sociedad Colectiva</option>
          <option value="Sociedad Anónima (S.A)">Sociedad Anónima (S.A.)</option>
          <option value="Soiciedad de Responsabilidad Limitada (Ltda)">Sociedad de Responsabilidad Limitada (Ltda.)</option>
          <option value="Sociedad en Comitidas Simple (S. en C.)">Sociedad en Comandita Simple (S. en C.)</option>
          <option value="Sociedad comandita por acciones (S.C.A)">Sociedad Comandita por Acciones (S.C.A.)</option>
        </select>
        <br>
        <label for="correo">Correo</label>
       <input type="email" class="form-control " name="correo" id="email" placeholder="Correo">
      </div>
      <div class="col-md-6 mb-3">
        <label for="selectpais">País</label>
        <select class="form-control " name="selectpais" id="selectpais">
          <option value="disabled selected">Seleccione...</option>
          <option value="Colombia">Colombia</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Argentina">Argentina</option>
          <option value="Pero">Peru</option>
          <option value="Chile">Chile</option>
        </select>
        <br>
        <label for="selectciudad">Ciudad</label>
        <select class="form-control" name="selectciudad" id="selectciudad" >
          <option value="disabled selected">Seleccione...</option>
          <option value="Cartagena de Indias">Cartagena de indias</option>
          <option value="Barranquilla">Barranquilla</option>
          <option value="Medellin">Medellin</option>
          <option value="Medellin">Bogota</option>
          <option value="Cali">Cali</option>
        </select>
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="dirección">
        <br>
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control " placeholder="Telefono" name="telefono" id="telefono" >
        <br>
        <label for="celular">Celular</label>
        <input type="text" class="form-control " placeholder="Celular" name="celular" id="celular" >
        <br>
       

        <br>
      </div>  
	<div class="col-md-6 mb-3">
<button type="submit" class="btn btn-block btn-primary">Crear</button>
    </div>
</div>
    </form>
  </div>
<script src="../../../js/formProveedor.js"></script>
