
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Cargar la sesión
    }
    public function index()
	{
		$this->load->view('agregar_producto');
		
	}
    
	public function agregarProducto() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$nombre = $this->input->post('nombre');
			$precio = $this->input->post('precio');
			$descripcion = $this->input->post('descripcion');
			$stock = $this->input->post('stock');
	

			$config['upload_path'] = './assets/imagenes/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$this->load->library('upload', $config);
	
			if ($this->upload->do_upload('imagen')) {
				$upload_data = $this->upload->data();
				$imagen = $upload_data['file_name'];  // Usar el nombre del archivo
			
	
				// Guardar la información del producto en la base de datos
				$data = array(
					'nombre' => $nombre,
					'precio' => $precio,
					'descripcion' => $descripcion,
					'imagen' => $imagen,
					'stock' => $stock,
				);
	
				$this->db->insert('productos', $data);
				//se sube la imagen bien
				$this->session->set_flashdata('success', 'successfully Added');
				$this->load->view('agregar_producto');
			} else {
				//error al subi la imagen
				$this->session->set_flashdata('error', 'Error');
				$this->load->view('agregar_producto');
			}
		} else {
			
			$this->load->view('agregar_producto');
		}
	}

	public function listaProductos($rol){
		$this->load->model('ProductoModel');
        $productos = $this->ProductoModel->getTodosLosProductos();
        $data['productos'] = $productos;
		if($rol === 'cliente'){
			$this->load->view('layouts/cabecera_cliente');
			$this->load->view('listado_productos', $data);
		} else {
			$this->session->set_userdata('rol', 'admin');
            $this->load->view('layouts/cabecera');
			$this->load->view('listado_productos', $data);
		}
	}

	public function eliminarProducto($id) {
		$this->load->model('ProductoModel');
		$this->ProductoModel->delete($id);
	
		$this->load->model('ProductoModel');
        $productos = $this->ProductoModel->getTodosLosProductos();
        $data['productos'] = $productos;

        $this->session->set_flashdata('success', 'successfully Added');
		$this->load->view('listado_productos', $data);
	}
	
	public function editarProducto($id) {
		// Carga el producto desde la base de datos utilizando el ID
		$this->load->model('ProductoModel');
		$data['productos'] = $this->ProductoModel->obtenerProductoPorId($id);
	
		// Carga la vista del formulario de edición
		$this->load->view('editar_producto', $data);
	}
	
	public function actualizarProducto() {
		// Obtiene los datos del formulario de edición
		$id = $this->input->post('id');
		$nombre = $this->input->post('nombre');
		$descripcion = $this->input->post('descripcion');
		$stock = $this->input->post('stock');
		$precio = $this->input->post('precio');
	
		// Actualiza el producto en la base de datos
		$this->load->model('ProductoModel');
		$this->ProductoModel->actualizar_producto($id, $nombre, $descripcion, $stock, $precio);
        $productos = $this->ProductoModel->getTodosLosProductos();
        $data['productos'] = $productos;

        $this->session->set_flashdata('edit', 'successfully Edit');
		$this->load->view('layouts/cabecera');
		$this->load->view('listado_productos', $data);
	}

	public function detalle($id) {
		$this->load->model('ProductoModel');
		$data['producto'] = $this->ProductoModel->obtenerProductoPorId($id);
		$this->load->view('detalle_producto', $data);
	}
	
	private function determinarRol($usuario) {
        // Carga el modelo ModeloLogueo (si aún no lo has cargado)
        $this->load->model('ModeloLogueo');
    
        // Supongamos que tu modelo ModeloLogueo tiene un método para obtener el rol basado en el usuario
        $rol = $this->ModeloLogueo->obtenerRolPorUsuario($usuario);
    
        if ($rol === 'admin') {
            return 'admin'; // El usuario es un administrador
        } elseif ($rol === 'cliente') {
            return 'cliente'; // El usuario es un cliente
        } else {
            // Si el rol no es 'admin' ni 'cliente, puedes asignar un valor predeterminado como 'cliente'
            return 'cliente';
        }
    }
	
}