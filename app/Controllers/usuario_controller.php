<?php
namespace App\Controllers;
Use App\Models\usuario_Model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

  public function __construct(){
    helper (['form', 'url']);
  }

  public function create(){
    $dato['titulo']='Registro';
    echo view ('front/head_view',$dato);
    echo view ('front/navbar_view');
    echo view ('back/usuario/registro');
    echo view ('front/footer_view');
  }

  public function formValidation(){

    $input = $this ->validate ([
      'nombre' => 'required|min_length[3]',
      'apellido' => 'required|min_length[3]|max_length[25]',
      'usuario' => 'required|min_length[3]',
      'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
      'pass' => 'required|min_length[3]|max_length[10]'
    ],
  );

  $formModel = new usuario_Model();
  if (!$input)
  {
    $data['titulo']='Registro';
    echo view('front/head_view',$data);
    echo view('front/navbar_view');
    echo view('back/usuario/registro',['validation' => $this ->validator]);
    echo view('front/footer_view');

  } else {

    $formModel ->save ([
     'nombre' => $this ->request->getVar('nombre'),
      'apellido' => $this ->request->getVar('apellido'),
      'usuario' => $this ->request->getVar('usuario'),
      'email' => $this ->request->getVar('email'),
      'pass' => password_hash($this->request->getVar('pass'),PASSWORD_DEFAULT)
    ]);

    
    session()-> setFlashdata('success','Usuario registrado con exito! puede volver al Panel para ver los cambios');
    return $this->response->redirect('registro');
  }

  }
  

  /* Admin  edit*/
  public function index()
    {
        $model = new Usuario_Model();
        $data['usuarios'] = $model->findAll();
        return view('Back/usuario/navbar_view', $data);
    }

    public function edit($id)
    {
        $model = new Usuario_Model();
        $data['usuario'] = $model->find($id);
        $dato['titulo'] = 'Editar Usuario'; 
        $session = session();
        $nombre = $session->get('usuario'); 
        $perfil = $session->get('perfil_id');

        $data['perfil_id'] = $perfil;
        echo view('front/navbar_view', $dato);
        echo view('back/usuario/edit_view', $data);
        echo view('front/footer_view');
    }

    public function update($id)
    {
        $model = new Usuario_Model();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'email' => $this->request->getPost('email'),
            'usuario' => $this->request->getPost('usuario'),
            'apellido' => $this->request->getPost('apellido'),
        ];

        $model->update($id, $data);

        return redirect()->to('/panel');
    }

    public function delete($id)
    {
        $model = new Usuario_Model();
        $data = ['baja' => "SI"];
        $model->update($id, $data);

        return redirect()->to('/panel');
    }

    public function newUser()
    {
        helper(['form', 'url']);
        $data['titulo'] = 'Agregar Nuevo Usuario';
        echo view('front/navbar_view', $data);
        echo view('Back/usuario/new_user');
        echo view('front/footer_view');
    }

    public function saveNewUser()
    {
        helper(['form', 'url']);
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'pass' => 'required|min_length[6]'
        ]);

        if (!$input) {
            $data['titulo'] = 'Agregar Nuevo Usuario';
            echo view('front/navbar_view', $data);
            echo view('front/head_view');
            echo view('Back/usuario/new_user', [
                'validation' => $this->validator
            ]);
            echo view('front/footer_view');
        } else {
            $model = new Usuario_Model();
            $data = [
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'email' => $this->request->getVar('email'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            session()->setFlashdata('msg', 'Nuevo usuario agregado con éxito!');
            return redirect()->to('/panel');
        }
    }
    /* public function terminos()
    {
        echo view('front/terminos');
    }
 */





}