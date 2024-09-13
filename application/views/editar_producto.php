<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
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
       
                 
       
       </style>
</head>
<body>

<!-- Incluir la cabecera -->
<?php $this->load->view('layouts/cabecera'); ?>

<div class="container text-white d-flex flex-column align-items-center justify-content-center vh-100">
    <h1 class="mt-5">Editar Producto</h1>
    <form action="<?= base_url('Productos/actualizarProducto'); ?>" method="POST" style="width:100%;">
        <div class="row">
        <div class="col-12">
        <input type="hidden" name="id" value="<?= $productos->id_producto; ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text"  class="form-control form-control-lg" id="nombre" name="nombre" value="<?= $productos->nombre; ?>">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción:</label>
            <textarea class="form-control form-control-lg"id="descripcion" name="descripcion"><?= $productos->descripcion; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock:</label>
            <input type="number"  class="form-control form-control-lg" id="stock" name="stock" value="<?= $productos->stock; ?>">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="number"  class="form-control form-control-lg" id="precio" name="precio" value="<?= $productos->precio; ?>">
        </div>
        <div class="mb-3">
        <button type="submit" class="btn btn-dark btn-lg btn-block">Actualizar</button>
        </div>    
    </div>
        </div>
    </form>
</div>
</div>


<!-- Incluir el footer -->
<?php $this->load->view('layouts/footer'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
