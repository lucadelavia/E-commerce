<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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


 <div class="container mt-5 mb-5">
 <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Lista de productos</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-auto"> <!-- Agregamos la clase "table-auto" -->
                            <thead>
        <thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Descripción</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Imagen</th>
                <?php if ($this->session->userdata('rol') === 'admin') { ?>     
                <th>Editar</th>
                <th>Borrar</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                <td><?php echo $producto->nombre; ?></td>
                <td><?php echo $producto->descripcion; ?></td>
                <td><?php echo $producto->stock; ?></td>
                <td><?php echo $producto->precio; ?></td>
                    <td>
                        <img src="<?= base_url('assets/imagenes/' . $producto->imagen); ?>" alt="<?= $producto->nombre; ?>" width="50">
                    </td>
                    <?php if ($this->session->userdata('rol') === 'admin') { ?> 
                    <td>
                        <a href="<?php echo base_url('productos/editarProducto/' . $producto->id_producto); ?>" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <a href="<?php echo base_url('productos/eliminarProducto/' . $producto->id_producto); ?>" class="btn btn-danger">Borrar</a>
                    </td>
                    <?php } ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php
                if ($this->session->flashdata('success')) { ?>
                    <div class="alert alert-success" role="alert">
                        Producto eliminado correctamente.
                    </div>
                <?php }
                ?>
                 <?php
                if ($this->session->flashdata('error')) { ?>
                    <div class="alert alert-danger" role="alert">
                        Error!
                    </div>
                <?php }
                if ($this->session->flashdata('edit')) { ?>
                    <div class="alert alert-success" role="alert">
                        Editado correctamente
                    </div>
                <?php }
                
                ?>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>

 <!-- Incluir el footer -->
 <?php $this->load->view('layouts/footer'); ?>

 <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>
