<?php namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel();
    }

    public function index()
    {
        return view('users', [ 
            'users' => $this->userModel->findAll() //ele busca todos os usuarios
        ]);
    }
    public function delete($id)
    {
       if($this->userModel->delete($id)){
           echo view('messages', [
               'message' => 'Usuário deletado com sucesso!'
           ]);
       } else {
           echo view('messages', [
               'message' => 'Erro ao deletar o usuário!'
           ]);
       }
    }
    public function create()
    {
        return view('form');
    }
    public function store(){
        if($this->userModel->save($this->request->getPost())){ //ele salva os dados do formulário
            return view('messages', [
                'message' => 'Usuário cadastrado com sucesso!'
            ]);
        } else {
            echo view('messages', [
                'message' => 'Erro ao cadastrar o usuário!'
            ]);
        }
    }
    public function edit($id)
    {
        return view('form', [
            'user' => $this->userModel->find($id)
        ]);
    }
}
