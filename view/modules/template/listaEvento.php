<?php

require_once('../../../db/db.php');
$con = Conectar::conexion();
if(isset($_SESSION['id'])){
  
}else{
  
}
if($con){
  
  $id_p = $_SESSION['id'];
  $sel = "SELECT * FROM evento WHERE idOrganizador = $id_p";
  $res = mysqli_query($con,$sel);
  if($res){
    if(mysqli_num_rows($res)>0){
    echo "<table id='' class='table table-bordered table-hove'>";
    echo "<thead>
	<tr>
          <th>Nombre evento</th>
          <th>tipo Evento</th>
	  <th>Categoria Evento</th>
	  <th>descripcion</th>
	  <th>Fecha Inicio</th>
      <th>Fecha fin</th>
      <th>lugar</th>
      <th>Costo</th>
	<tr>
      </thead>

	<tbody>";
?>
<?php
      while($row = mysqli_fetch_array($res)){
      echo "<tr>";
      echo "<td>".$row['nombreEvento']."</br>";
      echo "<td>".$row['tipoEvento']."</td>";
      echo "<td>".$row['categoriaEvento']."</td>";
      echo "<td>".$row['descripcion']."</br>";
      echo "<td>".$row['horaInicio']."</br>";
      echo "<td>".$row['horaFin']."</br>";
      echo "<td>".$row['lugar']."</br>";
      echo "<td>".$row['costo']."</br>";
      echo "<td><a href='../../../controller/eventoController.php?token=".$row['id']."' type='button' class='btn-sm btn-block btn btn-danger'><i class='far fa-trash-alt'></i></a>
	</td>
     ";
  echo "<td><button type='button' class='btn btn-success' data-toggle='modal' data-target='#myModal'>
  <i class='fa fa-wrench' arial-hidden='true'><i/>
</button></td>";
      echo "</tr>";
      echo "<br>";
      } 
  echo "</tbody> 
	</table>";
    }
  }
}



?>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Actualizar Servicio</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
<div class="">
      <form action="../../../controller/serviciosController.php" onsubmit="return validarServicio();" method="POST" class=" form">
      <input type="hidden" name="token" value="registrar">
        <div class=" ">
          <div class="">
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
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Actualizar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>