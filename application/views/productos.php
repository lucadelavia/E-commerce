<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Zapatillas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}


body {
    background-image:  url('<?php echo base_url('assets/imagenes/fondo1.jpg'); ?>');  
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
} 
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);  
}

.modal-producto-imagen {
    max-width: 100%; 
    height: auto; 
    display: block; 
    margin: 0 auto;
}
          

</style>
</head>
<body>

<div class="container" style="margin-top: 20px;">
    <div class="row">
        <?php foreach ($productos as $producto) { ?>
            <div class="col-lg-3 mb-4">
                <div class="card h-100 mb-4">
                 <!--   <a href="<?= base_url('productos/detalle/' . $producto->id_producto); ?>">-->
                        <img src="<?= base_url('assets/imagenes/' . $producto->imagen); ?>" alt="<?= $producto->nombre; ?>" class="card-img-top">
                    <!--</a>--> 
                    <div class="card-body">
                        <h5 class="card-title"><?= $producto->nombre; ?></h5>
                        <p class="card-text">Precio: $<?= $producto->precio; ?></p>
                    </div>
                    <button type="button" class="btn btn-dark ver-mas-btn" style="margin: 5px;" data-bs-toggle="modal" data-bs-target="#miModal" data-producto-nombre="<?= $producto->nombre; ?>" data-producto-descripcion="<?= $producto->descripcion; ?>" data-producto-precio="<?= $producto->precio; ?>" data-producto-stock="<?= $producto->stock; ?>">
                        Ver más
                    </button>

                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-title">Título del Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nombre del producto:</strong> <span id="modal-producto-nombre"></span></p>
        <img id="modal-producto-imagen" src="" alt="Imagen del producto" class="modal-producto-imagen">
        <p><strong>Descripción:</strong> <span id="modal-producto-descripcion"></span></p>
        <p><strong>Precio:</strong> $<span id="modal-producto-precio"></span></p>
        <p><strong>Stock:</strong> <span id="modal-producto-stock"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



<!-- Incluir el footer -->
<?php $this->load->view('layouts/footer'); ?>
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></scrip>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- CSS de Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- JavaScript de Bootstrap 5 (incluye jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('.ver-mas-btn').click(function() {
        var productoNombre = $(this).data('producto-nombre');
        var productoDescripcion = $(this).data('producto-descripcion');
        var productoPrecio = $(this).data('producto-precio');
        var productoImagenSrc = $(this).closest('.card').find('img').attr('src');
        var productoStock = $(this).data('producto-stock'); // Obten el valor de stock

        $('#modal-title').text(productoNombre);
        $('#modal-producto-nombre').text(productoNombre);
        $('#modal-producto-imagen').attr('src', productoImagenSrc);
        $('#modal-producto-descripcion').text(productoDescripcion);
        $('#modal-producto-precio').text(productoPrecio);
        $('#modal-producto-stock').text(productoStock);
    });
});

</script>


</body>
</html>
