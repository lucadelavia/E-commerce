<!doctype html>
<html lang="es">
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

    <title>Lista de usuarios</title>
  </head>
  <body>

  <!-- Incluir la cabecera -->


<div class="container mt-5 mb-5" style="height: 100vh; ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Lista de usuarios</h5>
                    <div class="table-responsive">
                        <table class="table table-bordered table-auto"> <!-- Agregamos la clase "table-auto" -->
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Email</th>
                                    <th>Rol</th>
                                    <?php if ($this->session->userdata('rol') === 'admin') { ?> 
                                    <th>Contraseña</th>
                                    <th>Opciones</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; foreach($usuarios as $row) { ?>
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['rol']?></td>
                                    <?php if ($this->session->userdata('rol') === 'admin') { ?> 
                                    <td><?=$row['contraseña']?></td>
                                    <td>
                                        <a href="<?=base_url()?>Users/editar/<?=$row['id_usuario']?>" class="btn btn-sm btn-primary">Editar</a>
                                        <a href="<?=base_url()?>Users/eliminar/<?=$row['id_usuario']?>" onclick="return confirm('Are you sure want to delete this user ?')" class="btn btn-sm btn-danger">Eliminar</a>
                                    </td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success" role="alert">
                            Agregado correctamente
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('deleted')) { ?>
                        <div class="alert alert-success" role="alert">
                            eliminado correctamente
                        </div>
                    <?php } ?>
                    <?php if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-danger" role="alert">
                            Error!
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Incluir el footer -->
<?php $this->load->view('layouts/footer'); ?>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        
        <?php if($this->session->flashdata("success")): ?>

            Swal.fire({
                icon: 'success',
                title: 'Good...',
                text: '<?php echo $this->session->flashdata("success"); ?>',
            });
        <?php endif; ?>

    </script>
  </body>
</html>