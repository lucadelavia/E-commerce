<?php

class ProductoModel extends CI_Model {

    public function getTodosLosProductos() {
        // Consulta para obtener todos los productos
        $query = $this->db->get('productos');
        
        // Verifica si se encontraron productos
        if ($query->num_rows() > 0) {
            return $query->result();
        }
        // Si no se encontraron productos, devuelve un arreglo vacío
        return array();
    }

    public function delete($id) {
        $this->db->where('id_producto', $id);
        $this->db->delete('productos');
    }
    
    public function obtenerProductoPorId($id) {
        $this->db->where('id_producto', $id);
        $query = $this->db->get('productos');
        return $query->row(); // Devuelve un solo producto
    }
    
    public function actualizar_producto($id, $nombre, $descripcion, $stock, $precio) {
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'stock' => $stock,
            'precio' => $precio
        );
    
        $this->db->where('id_producto', $id);
        $this->db->update('productos', $data);
    }
    
}