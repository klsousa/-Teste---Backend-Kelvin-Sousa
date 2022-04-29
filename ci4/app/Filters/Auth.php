<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
      /* if(!session()->has('UsuarioLogado') && $request->uri->getSegment(1) != 'login'){ 
        return redirect()->to('/login');
      } */
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}

/* if((bool)session()->UsuarioLogado != true){
    return redirect()->to('/login');
} */