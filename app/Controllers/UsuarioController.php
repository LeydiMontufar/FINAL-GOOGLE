<?php

namespace App\Controllers;


use App\Models\UsuarioModel;


class UsuarioController extends BaseController
{
    public function index()
    {
        return view('Usuario/CrearUsuario');
    }

    public function editar($idusuario)
    {
        $usuario = new UsuarioModel();
        
        $datos =[
            "idusuario" => $idusuario
           
        ];
        $resultado = $usuario->ObtenerbyId($datos);
        $enviar =[
            "usuario" => $resultado
           
        ];
        return view('Usuario/EditarUsuario', $enviar);
    }

    public function insertar(){
       
        $datos =[
            "correo"     => $_POST['correo'],
            "contraseña"     => $_POST['contraseña'],
            "usuario"     => $_POST['usuario'],
           
        ];
        $Categoria = new UsuarioModel();
        $respuesta= $Categoria->insertar($datos);
        
        if($respuesta>0){
            return redirect()->to(base_url().'/loginusuario');

        }else{
            return redirect()->to(base_url().'/crearusuario');

        }
        
    }

    public function actualizar()
    {
        $datos =[
            "idusuario"     => $_POST['idusuario'],
            "correo"     => $_POST['correo'],
            "contraseña"     => $_POST['contraseña'],
            "usuario"     => $_POST['usuario'],
           
        ];
        $Producto = new UsuarioModel();
        $idusuario = $_POST['idusuario'];
        
        $respuesta= $Producto->actualizarUsuario($datos,$idusuario);
        
        if($respuesta>0){
            return redirect()->to(base_url().'/editar/usuario/'.$idusuario);

        }else{
            return redirect()->to(base_url().'/crearusuario');

        }
        
    }

}
