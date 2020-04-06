<?php 
    /** Requerir el header y footer html */
    require_once RUTA_APP . '/views/include/header.php';
    require_once RUTA_APP . '/views/include/footer.php';
    
?>

<h1>Prueba de carga vista views/home.php</h1>
<p><?php echo $data['title']; ?></p>