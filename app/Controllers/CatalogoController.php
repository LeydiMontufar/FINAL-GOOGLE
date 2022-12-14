<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class CatalogoController extends BaseController
{
    public function index()
    {
        $catalogo = new ProductoModel();
        $resultado = $catalogo->listar();
        $datos =[
            "catalogo" => $resultado
           
        ];
        return view('catalogo/Catalogo', $datos);
    }

    public function editar($idproducto)
    {
        $catalogo = new ProductoModel();
        
        $datos =[
            "idproducto" => $idproducto
           
        ];
        $resultado = $catalogo->ObtenerbyId($datos);
        $enviar =[
            "producto" => $resultado
           
        ];
        return view('catalogo/EditarProducto', $enviar);
    }


    public function producto()
    {
        return view('catalogo/CrearProducto');
    }
    
    public function crearproducto()
    {
        $datos =[
            "nombreproducto"     => $_POST['nombreproducto'],
            "detallesproducto"     => $_POST['detalleproducto'],
            "precioproducto"     => $_POST['precioproducto'],
            "cantidadproducto"     => $_POST['cantidadproducto'],
            "imagenproducto"     => $_POST['imagenproducto'],
           
        ];
        $Categoria = new ProductoModel();
        $respuesta= $Categoria->insertar($datos);
        
        if($respuesta>0){
            return redirect()->to(base_url().'/catalogo');

        }else{
            return redirect()->to(base_url().'/producto');

        }
        
    }

    public function actualizar()
    {
        $datos =[
            "nombreproducto"     => $_POST['nombreproducto'],
            "detallesproducto"     => $_POST['detalleproducto'],
            "precioproducto"     => $_POST['precioproducto'],
            "cantidadproducto"     => $_POST['cantidadproducto'],
            "imagenproducto"     => $_POST['imagenproducto'],
           
        ];
        $Producto = new ProductoModel();
        $idproducto = $_POST['idproducto'];
        
        $respuesta= $Producto->actualizar($datos,$idproducto);
        
        if($respuesta>0){
            return redirect()->to(base_url().'/editar/producto/'.$idproducto);

        }else{
            return redirect()->to(base_url().'/catalogo');

        }
        
    }
}
