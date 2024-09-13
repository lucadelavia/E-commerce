<?php

class UsersModel extends CI_Model {

    function insertUser($data)
    {
        $this->db->insert('usuarios',$data);
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }

    function getUsers()
    {
        $query = $this->db->get('usuarios');
        return $query->result_array();
    }

    function deleteUser($id)
    {
        $this->db->where('id_usuario',$id);
        $this->db->delete('usuarios');
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }

    function getUser($id)
    {
        $this->db->where('id_usuario', $id);
        $query = $this->db->get('usuarios');
        return $query->row();
        


    }

    function updateUser($data,$id)
    {
        $this->db->where('id_usuario',$id);
        $this->db->update('usuarios',$data);
        if ($this->db->affected_rows() >= 0) {
            return true; 
        } else {
            return false; 
        }
    }
}
