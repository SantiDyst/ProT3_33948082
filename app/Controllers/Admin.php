<?php
namespace App\Controllers;

use App\Models\usuario_Model;
use CodeIgniter\Controller;

class Admin extends Controller
{
    public function index()
    {
        $model = new usuario_Model();
        $data['usuarios'] = $model->findAll();
        echo view('panel_admin', $data);
    }

    public function create()
    {
        echo view('create_user');
    }

    public function store()
    {
        $model = new usuario_Modell();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
        ];
        $model->save($data);
        return redirect()->to('/admin');
    }

    public function edit($id_usuario)
    {
        $model = new usuario_Model();
        $data['usuario'] = $model->find($id_usuario);
        echo view('edit_user', $data);
    }

    public function update($id_usuario)
    {
        $model = new usuario_Model();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
        ];
        $model->update($id_usuario, $data);
        return redirect()->to('/admin');
    }

   /*  public function delete($id_usuario)
    {
        $model = new usuario_Model();
        $model->delete($id_usuario);
        return redirect()->to('/admin');
    } */
}
