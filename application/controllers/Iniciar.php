
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciar extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Cargar la sesión
    }
    public function index()
	{
        //funcion que agarre de la base d datos los productos y enviarlos a la vista ('productos',$data)
		$this->load->view('ingreso_sistema');
	}
    public function inicio($rol)
	{
		$this->load->model('ProductoModel');
        $productos = $this->ProductoModel->getTodosLosProductos();
        // Pasa los datos de los productos a la vista
        $data['productos'] = $productos;
        if($rol === 'cliente'){
			$this->load->view('layouts/cabecera_cliente');
			$this->load->view('productos', $data);
		} else {
			$this->session->set_userdata('rol', 'admin');
            $this->load->view('layouts/cabecera');
			$this->load->view('productos', $data);
		}
        
	}
    public function ValidarUsuario() {
        // Recibe los datos de usuario y contraseña y los filtra
        $usuario = $this->input->post('email', true); // Usar input->post es más seguro
        $pass = $this->input->post('contraseña', true);
    
        // Carga el modelo ModeloLogueo
        $this->load->model('ModeloLogueo');
    
        // Llama a la función valIngreso para validar al usuario
        $valido = $this->ModeloLogueo->valIngreso($usuario, $pass);
    
        if ($valido) {
            // El usuario es válido
            // Obtén todos los productos desde la base de datos
            $this->load->model('ProductoModel');
            $productos = $this->ProductoModel->getTodosLosProductos();
            // Pasa los datos de los productos a la vista
            $data['productos'] = $productos;
            if($this->session->userdata('rol')=='admin'){
                $this->load->view('layouts/cabecera');
                $this->load->view('productos', $data);
            } else{
                $this->load->view('layouts/cabecera_cliente');
                $this->load->view('productos', $data);
            }
        } else {
            // El usuario no es válido, puedes mostrar un mensaje de error
            $this->session->set_flashdata('error', 'Error');
            $this->load->view('ingreso_sistema');
        }
    }
    
    public function visitante(){
        $this->load->model('ProductoModel');
        $productos = $this->ProductoModel->getTodosLosProductos();
        // Pasa los datos de los productos a la vista
        $data['productos'] = $productos;
        $this->load->view('layouts/cabecera_visitante');
                $this->load->view('productos', $data);
    }
}