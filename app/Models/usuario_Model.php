<?php
namespace App\Models;
use CodeIgniter\Model;

class usuario_Model extends Model {
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass', 'perfil_id', 'baja', 'created_at'];

    public function getUsuarios(){
        
            return $this->where('baja', 'NO')->findAll();
        }

    

    public function DarBaja($id_usuario) {
        $data = ['baja' => 'SI'];

        $this->update($id_usuario, $data);
    }



}




