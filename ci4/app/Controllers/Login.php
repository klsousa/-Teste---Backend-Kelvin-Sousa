<?php namespace App\Controllers;

use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function signIn() // Recebe os dados do formulário
    {
        $email = $this->request->getPost('inputEmail');
        $password = $this->request->getPost('inputPassword');

       /*  dd($email, $password); */ //dd é um helper do codeigniter para debugar

        $usuarioModel = new UsuarioModel();
        $dadosUsuario = $usuarioModel->getByEmail($email);
        
        if(is_countable($dadosUsuario) > 0){ // se o usuário existe
            $lastUsuario = $dadosUsuario['senha']; 
            if(password_verify($password, $lastUsuario)){ // se a senha está correta
                session()->set('UsuarioLogado', true);
                session()->set('nome', $dadosUsuario['nome']);
                return redirect()->to(base_url('/user'));
            } else {
                session()->setFlashdata('msg', 'Usuário ou senha incorretos'); //Deixei habilitado mesmo se erra a senha 
                return redirect()->to('/user');

                /* return redirect()->to('/login'); */  // aqui ele redireciona para a página de login e não para a página de user
            }
        } else {
            session()->setFlashdata('msg', 'Usuário ou senha incorretos'); //Deixei habilitado mesmo se erra a senha
            return redirect()->to('/user');
            
            /* return redirect()->to('/login'); */ //aqui ele redireciona para a página de login se erra a senha ou o usuário
        }
}
public function signOut()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
