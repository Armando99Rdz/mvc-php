<?php require_once RUTA_APP . '/views/include/header.php'; # traer header ?>

<h1>Prueba de carga vista views/home.php</h1>
<p><?php echo $data['title']; # de los datos recibidos; imprime la variable 'title' ?></p> 

<ul><?php foreach($data['products'] as $product) :  # de los datos de ejemplo recibidos recorre el array 'products' ?> 
    
    <li>
        <?php echo $product->titulo; # del array products de ejemplo imprime la columna titulo ?> <br> 
        <?php echo $product->descripcion; # del array products de ejemplo imprime la columna descripcion ?>
    </li>


    <?php endforeach; # termina el ciclo ?>
</ul>

<?php  require_once RUTA_APP . '/views/include/footer.php'; #traer footer ?>