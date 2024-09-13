<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperarDatos extends CI_Controller {
	
        public function RecibirGrabar(){
            
            /*Recibe los datos de user y pass y tiene que validarlos*/
            
            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS); //$_POST['usuario']
            
            $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_SPECIAL_CHARS);
            
            echo("nombre ".$nombre."<br> apellido ".$apellido);

            $this->load->model('InsertarEnClientes');
            $valido=$this->InsertarEnClientes->gurdarCliente($nombre,$apellido);
            

        }


        public function GrabarArtiulo(){
            
            /*Recibe los datos de nombre, descripcion y precio del articulo 
            para insertarlos en la tabla articulo*/
            
            $nombre_artic = $_POST['nombre'];
            $descrip_artic = $_POST['descripcion'];
            $precio_artic= $_POST['precio'];
            
            
            echo("nombre ".$nombre_artic."<br> apellido ".$descrip_artic. "<br> precio ".$precio_artic);

            $this->load->model('InsertarArticulo');
            $valido=$this->InsertarArticulo->gurdarArticulo($nombre_artic,$descrip_artic,$precio_artic);
            

        }
        //esta función carga en el arreglo $data_art los datos de la base de datos, que 
        //servirán para pasarlo a la vista que los va a mostrar
        public function listarProductos(){
        $this->load->model('InsertarArticulo');
        $data_art['artic']= $this->InsertarArticulo->getArticulo();
        
        $this->load->view('principal/lista_articulos',$data_art);

        }
}