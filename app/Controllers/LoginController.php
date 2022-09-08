<?php

namespace App\Controllers;


use App\Models\UsuarioModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('Usuario/LoginUsuario');
    }

    public function Login()
    {
        $usu = new UsuarioModel();
        
        $rpta= $usu->Login($_POST['correo'],$_POST['contraseña']);
        if($rpta>0){
            return redirect()->to(base_url().'/inicio');

        }else{
            return redirect()->to(base_url().'/loginusuario');

        }
        
        
    }
}
