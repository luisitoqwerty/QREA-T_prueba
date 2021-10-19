<?php

namespace App\Models;

use CodeIgniter\Model;


class modelcrud extends Model
{

    public function listar()
    {
        $nombres = $this->db->query("SELECT * FROM usuarios");
        return $nombres->getResult();
    }
    public function insertar($datos) {
        $Nombres = $this->db->table('usuarios');
        $Nombres->insert($datos);

        return $this->db->insertID();
    }

    public function obtenerNombre($data) {
        $Nombres =  $this->db->table('usuarios');
        $Nombres->where($data);
        return $Nombres->get()->getResultArray();
    }

    public function actualizar($data, $id) {
        $Nombres = $this->db->table('usuarios');
        $Nombres->set($data);
        $Nombres->where('id', $id);
        return $Nombres->update();
    }

    public function eliminar($data) {
        $Nombres = $this->db->table('usuarios');
        $Nombres->where($data);
        return $Nombres->delete();
    }
}
