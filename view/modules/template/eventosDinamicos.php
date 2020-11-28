<?php
$lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic incidunt dolore adipisci molestiae magnam repudiandae amet optio ipsa repellendus doloremque, veritatis sunt soluta nulla excepturi maiores iure praesentium nam fugit";
  require_once("../../../db/db.php");
  $con = Conectar::conexion();
  
  $select = "SELECT * FROM evento";
  $res = mysqli_query($con, $select);
  


?>
<!--main-->
<div class="content-wrapper">
<div class="card-deck d-flex ml-5 mr-5">
  <?php
  if($res){
    if(mysqli_num_rows($res)>0){
      while($fila = mysqli_fetch_array($res)){
        echo "
        <ul style='list-style-type: none'><li>
        <div class='card' style='width: 18rem;'>
        <div class='card-body'>
          <h5 class='card-title'>".$fila['nombreEvento']."</h5>
          
          <p class='card-text'>".$fila['descripcion']."</p>
          <a href='../../../controller/eventoController.php?asis=".$fila['id']."' class='card-link'>Asistir</a>
          
        </div>
      </div>
      </li></ul>
      ";
      }
    }
  }
  ?>

</div>
</div>
<!--main-->