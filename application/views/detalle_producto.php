<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
          .product-image {
            max-width: 80%; 
            height: auto;
        }
        body{
            height: 100%;
        }
        body{font-family:"Roboto" !important;}
       
            
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

<!-- Incluir el footer -->
<?php $this->load->view('layouts/cabecera'); ?>
<div class="container mt-5" style="height: 80vh;">
    <div class="card mb-3 mx-auto" style="max-width: 800px; height: 300px">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="<?= base_url('assets/imagenes/' . $producto->imagen); ?>" alt="<?= $producto->nombre; ?>" class="product-image img-fluid">
            </div>
            <div class="col-md-8 d-flex align-items-center">
                <div class="card-body">
                    <h4 class="card-title"><?= $producto->nombre; ?></h4>
                    <h6><?= $producto->descripcion; ?></h6>
                    <p class="card-text">Precio: $<?= $producto->precio; ?></p>
                    <p class="card-text"><small class="text-body-secondary">Stock: <?= $producto->stock; ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal">
  Abrir Modal
</button>
<div class="modal fade" id="miModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título del Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Aquí puedes agregar el contenido de tu modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div>
  </div>
</div>

<!-- Incluir el footer -->
<?php $this->load->view('layouts/footer'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>
