<div class="content-wrapper">
      <form action="../../../controller/serviciosController.php" onsubmit="return validarServicio();" method="POST" class="border mx-auto p-3 form">
      <input type="hidden" name="token" value="registrar">
        <div class="form-row ">
          <div class="col-md-5 mb-3">
            <label for="catservicio">Categoria de Servicio</label>
<select class='form-control ' name='catservicio' id='catservicio'>
<option value="disabled selected">Seleccione...</option>
<option value="1" >Servicio de Transporte</option> 
<option value="2" >Servicio de Catering</option> 
<option value="3" >Servicio de Mobiliario</option> 
<option value="4" >Servicio de Audiovisuales</option> 

</select>
<br>
            <label for="tiposervicio">Tipo de Servicio</label>
            <input type="text" class="form-control" id="tiposervicio" name="tiposervicio" placeholder="Tipo de Servicio">
            <br>
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
            <br>
            <div class="col-md-5 mb-3">
            <label for="precio">Precio</label>
            <input type="number" class="form-control form-sm-6" name="precio" id="precio" placeholder="Precio">
           </div>
	    <div class="col-md-6 mb-3">
	    <button type="submit" name="insertar" class="btn btn-block btn-primary">Crear</button>
	  </div>
          </div>          
	  
      </div>
    </form>
  </div>
<script src="../../../js/formServicios.js"></script>
