<?php
if (isset($_SESSION['correo'])) {
    
}else{
    header('Location: index.php?action=iniciarsesion');
}
?>
<h1>Solicitar Evento</h1>