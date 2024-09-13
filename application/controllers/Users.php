<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct()
    {
        parent::__construct();
		$this->load->model('UsersModel');
        $this->load->library('session');

    }

	function index($rol)
    {
    
        // Establece la sesión 'rol' con el valor correspondiente
        $data['usuarios'] = $this->UsersModel->getUsers();
        if($rol === 'cliente'){
            $this->load->view('layouts/cabecera_cliente');
            $this->load->view('listado_clientes', $data);
        } else {
            $this->session->set_userdata('rol', 'admin');
            $this->load->view('layouts/cabecera');
            $this->load->view('listado_clientes', $data);
        }
    }

    function cerrarSesion()
    {
        $variables_a_eliminar = array('admin', 'rol');
        $this->session->unset_userdata($variables_a_eliminar);
        $this->load->view('ingreso_sistema');

    }
	public function agregarClientes()
	{
        $this->session->set_userdata('rol', 'admin');
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$email = $this->input->post('email');
        	$contraseña = $this->input->post('contraseña');
			$data = array(
				'email' => $email,
				'contraseña' => $contraseña,
			);

			$status =  $this->UsersModel->insertUser($data);
			if ($status == true) {
				ob_clean();
				$this->session->set_flashdata('success', 'successfully Added');

				$this->load->view('agregar_cliente');
			} else {

				$this->session->set_flashdata('error', 'Error');
				$this->load->view('agregar_cliente');
			}
		} else {

			$this->load->view('agregar_cliente');
		}	
    }


	function eliminar($id)
    {
        if(is_numeric($id))
        {
            $status =$this->UsersModel->deleteUser($id);
            if ($status == true) {
                $this->session->set_flashdata('deleted', 'successfully Deleted');
                $data['usuarios'] = $this->UsersModel->getUsers();

        		$this->load->view('listado_clientes', $data);
            } else {
                $this->session->set_flashdata('error', 'Error');
                $data['usuarios'] = $this->UsersModel->getUsers();
        		$this->load->view('listado_clientes', $data);
            }
        }
    }

	function editar($id)
    {
        $data['user'] = $this->UsersModel->getUser($id);
        $data['id'] = $id;
        $this->load->view('editar_cliente', $data);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $this->input->post('email');
            $contraseña = $this->input->post('contraseña');
            $data = array(
            	'email' => $email,
                'contraseña' => $contraseña,
            );

            $status =  $this->UsersModel->updateUser($data, $id);
            if ($status == true) {
                $this->session->set_flashdata('success', 'successfully Updated');
                $data['user'] = $this->UsersModel->getUser($id);
                $data['id'] = $id;
                $this->load->view('editar_cliente', $data);
            } else {
                $this->session->set_flashdata('error', 'Error');
                $data['usuarios'] = $this->UsersModel->getUsers();
        		$this->load->view('listado_clientes', $data);
            }
        }

    }

}