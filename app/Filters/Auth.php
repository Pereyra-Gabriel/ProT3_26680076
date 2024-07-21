<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
public function before(RequestInterface $request, $arguments = null)
{
// Si el usuario no está logueado
     if (!session()->get('logged_in')) {
// Entonces redirecciona a la página de login
            return redirect()->to('/login');
}
}

//----------------------------------------------------------------------
public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
{
// Aquí puedes realizar alguna acción después de la solicitud
}
}
