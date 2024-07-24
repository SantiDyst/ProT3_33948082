<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model {
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at'];

    public function getUsuarios(){
        return $this-> findAll();
    }

    //Probando modelo Editar
    public function getUser($id_usuario) {

    return $this->where('id_usuario',$id_usuario)->first($id_usuario);
    }

}




