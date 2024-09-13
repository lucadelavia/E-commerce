<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
    <title>Nuevo usuario</title>
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
    
<!-- Incluir el footer -->
<?php $this->load->view('layouts/cabecera'); ?>

<div class="container text-white d-flex flex-column align-items-center justify-content-center vh-100">
    <h1 class="mt-5">Nuevo Cliente</h1>
    <form action="<?php echo base_url(); ?>Users/agregarClientes" class="mt-4" method="POST">
        <div class="row">
            <div class="col-12"> 
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control form-control-lg" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Contraseña</label>
                    <input type="text" name="contraseña" class="form-control form-control-lg" aria-describedby="emailHelp" placeholder="Contraseña">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12"> 
                <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
            </div>
        </div>
    </form>
    <?php
    if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success mt-3" role="alert">
            Agregado correctamente
        </div>
    <?php }
    ?>
    <?php
    if ($this->session->flashdata('error')) { ?>
        <div class="alert alert-danger mt-3" role="alert">
            Error!
        </div>
    <?php }
    ?>
</div>

<!-- Incluir el footer -->
<?php $this->load->view('layouts/footer'); ?>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>