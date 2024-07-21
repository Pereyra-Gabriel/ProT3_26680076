<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'Página Principal';
        return view('front/head_view', $data)
            . view('front/navbar_view')
            . view('front/principal')
            . view('front/footer_view');
    }

    public function quienes_somos()
    {
        $data['titulo'] = 'Quiénes Somos';
        return view('front/head_view', $data)
            . view('front/navbar_view')
            . view('front/quienes_somos')
            . view('front/footer_view');
    }

    public function acerca_de()
    {
        $data['titulo'] = 'Acerca de';
        return view('front/head_view', $data)
            . view('front/navbar_view')
            . view('front/acerca_de')
            . view('front/footer_view');
    }

    public function registro()
    {
        $data['titulo'] = 'Registro';
        return view('front/head_view', $data)
            . view('front/navbar_view')
            . view('back/usuario/registro')
            . view('front/footer_view');
    }

    public function login()
    {
        $data['titulo'] = 'login';
        return view('front/head_view', $data)
            . view('front/navbar_view')
            . view('back/usuario/login')
            . view('front/footer_view');
    }

    public function sugerencias()
    {
        $data['titulo'] = 'Sugerencias';
        return view('front/head_view', $data)
            . view('front/navbar_view')
            . view('front/sugerencias')
            . view('front/footer_view');
    }
    public function lamparas()
    {
        $data['titulo'] = 'lamparas';
        return view('front/head_view', $data)
            . view('front/navbar_view')
            . view('front/lamparas')
            . view('front/footer_view');
}
}
