<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

     public function insere()
    {
        $dados = [
            'nome' => 'admin',
            'email' => 'admin@admin',
            'senha' => password_hash('admin', PASSWORD_DEFAULT),
        ];

        (new \App\Models\UsuarioModel())->save($dados);
    }    
}
