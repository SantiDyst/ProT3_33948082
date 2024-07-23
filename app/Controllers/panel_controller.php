<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_Model;

class Panel_controller extends Controller {
    public function index() {
        $session = session();
        $nombre = $session->get('usuario'); 
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;
        $dato['titulo'] = 'Panel del Usuario'; 
        
        //probando metodo para tabla de usuarios
        $model = new usuario_Model();
        $usuarios = $model->getUsuarios();
        

        //head y nav
        echo view('front/head_view', $dato); 
        echo view('front/navbar_view');

            // Vista Admin
                if ($perfil == 1) {

                    
                echo view ('Back/usuario/usuario_logueado', $data);  

                echo view('Back/usuario/panel_admin', compact('usuarios')); 
                /* echo view('Back/usuario/panel_Edit',compact('dato')); */




            // Vista para cliente 
                } elseif ($perfil == 2) {


                
                    $data['perfil_id']= $perfil;

                    $dato['titulo']='panel del usuario'; 
            
        
                    echo view ('Back/usuario/usuario_logueado', $data); 
            
            }

        echo view('front/footer_view');
    }


        //Probando metodo para editar
    /* public function edit($perfil_id) {
        $model = new usuario_Model();
        $dato = $model->getUser($perfil_id);

        echo view('Front/head_view', $data);
        echo view('Front/navbar_view');
        echo view('Back/usuario/panel_Edit', compact('dato'));
        echo view('Front/footer_view');
    }
     */







} 



