<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Font Roboto CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}
.navbar-light .navbar-nav .nav-item .nav-link:hover {
    background-color: #343a40; 
    border-radius: 25px;
    color: white; 
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Estilo para el enlace activo o seleccionado */
.navbar-light .navbar-nav .nav-item.active .nav-link {
    background-color: #007BFF; 
    color: white; 
}

.cerrarSesion:hover{
    background-color: #990509; 
    border-radius: 25px; 
    color: white; 
    transition: background-color 0.3s ease, color 0.3s ease;
}

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>Iniciar/inicio/admin">CRUD E-commerce</a>
        <div class="navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>Productos/listaProductos/admin">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>Users/index/admin">Clientes</a>
                </li>
               
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>Productos/index">Agregar Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url(); ?>Users/agregarClientes">Agregar Clientes</a>
                    </li>
                
                <li class="nav-item">
                    <a class="nav-link cerrarSesion" style="color: red;" href="<?= base_url(); ?>Users/cerrarSesion">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Agrega aquí el contenido de tu página -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
