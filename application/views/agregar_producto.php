<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
       
       </style>
    
    <title>Nuevo Producto</title>
  </head>
  <body>

<!-- Incluir la cabecera -->
<?php $this->load->view('layouts/cabecera'); ?>
<div class="container text-white d-flex flex-column align-items-center justify-content-center vh-100">
    <h1 class="mt-5">Nuevo producto</h1>
    <form action="<?php echo base_url(); ?>Productos/agregarProducto" class="mt-4" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Producto</label>
                    <input type="text" name="nombre" class="form-control form-control-lg" placeholder="Nombre del Producto">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control form-control-lg" placeholder="Precio">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <input type="text" name="descripcion" class="form-control form-control-lg" placeholder="Descripción">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control form-control-lg" placeholder="Stock">
                </div>
            </div>
            <div class="col-lg-12 d-flex justify-content-center justify-content-center">
                <div class="mb-6 justify-content-center">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="file" name="imagen" class="form-control-file form-control-lg">
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
            </div>
        </div>
    </form>
    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success mt-3" role="alert">
            Agregado correctamente
        </div>
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger mt-3" role="alert">
            Error!
        </div>
    <?php } ?>
</div>

<!-- Incluir el footer -->
<?php $this->load->view('layouts/footer'); ?>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>