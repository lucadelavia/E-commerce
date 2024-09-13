<?php

class ModeloLogueo extends CI_Model {

 
    function __construct() { 
        parent::__construct();
        $this->load->database();

    }

    function valIngreso($usuario, $pass) {
        $consulta = $this->db->get_where('usuarios', array('email' => $usuario, 'contraseña' => $pass));
        
        if ($consulta->num_rows() == 1) {
             $usuario = $consulta->row();
             $rol = $usuario->rol;

             // Guarda el rol en la sesión
             $this->session->set_userdata('rol', $rol);
     
      
            
             return $usuario;
        } else {
            return false;
        }
    }

    public function obtenerRolPorUsuario($usuario) {
        // Realiza una consulta a la base de datos para obtener el rol basado en el usuario
        // Supongamos que tienes una tabla llamada "usuarios" con un campo "rol" y "usuario" (nombre de usuario o correo electrónico)
        $this->db->where('email', $usuario);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() == 1) {
            // Si se encuentra un usuario con el nombre de usuario o correo electrónico proporcionado
            $row = $query->row();
            return $row->rol;
        } else {
            // Si no se encuentra un usuario, puedes retornar un valor predeterminado
            return 'cliente'; // Valor predeterminado
        }
    }
}


