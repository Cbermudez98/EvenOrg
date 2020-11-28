<section class="content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Eventos</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
	    <?php require_once('../../../db/db.php');
$con = Conectar::conexion();
if(isset($_SESSION['id'])){
  
}else{
  
}
if($con){
  
  $id_p = $_SESSION['id'];
  $sel = "SELECT * FROM asistente WHERE id_usuario = $id_p";
  $res = mysqli_query($con,$sel);
  if($res){
    if(mysqli_num_rows($res)>0){
    echo "<table id='' class='table table-bordered table-hove'>";
    echo "<thead>
	<tr>
          <th>Nombre evento</th>
	  
      </thead>

	<tbody>";
?>
<?php
      while($row = mysqli_fetch_array($res)){
      echo "<tr>";
      
      echo "<td>".$row['id']."</td>";
      
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
}?>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php


