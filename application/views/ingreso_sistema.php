<?php ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/inicio.css'); ?>">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Inicio de sesion</title>
        <style>

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
    <div class="container" style="height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="col-md-4" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 10px; padding: 20px; color: white;">
        <h3 class="panel-title text-center">Tienda de Zapatillas!</h3>
        <div class="panel-body">
            <form action="<?= base_url(); ?>Iniciar/ValidarUsuario" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Ingrese su email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Ingrese su contraseña</label>
                    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required="" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-succes" style="background-color: green; color: white;">Iniciar</button>
                <a href="<?= base_url('Iniciar/visitante'); ?>" style="text-decoration: none; color:white; margin-left:15px;">Visitar</a>
            </form>
            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger mt-3" role="alert">
                    Error email o contraseña incorrectos.
                </div>
            <?php } ?>
        </div>
    </div>
</div>

    </div>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>
</html>

