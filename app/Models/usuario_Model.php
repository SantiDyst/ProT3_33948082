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
    public function getUser($perfil_id) {

    return $this->where ('perfil_id',$perfil_id)->first($perfil_id);


    }

    
}




