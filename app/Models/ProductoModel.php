<?php namespace App\Models;
use CodeIgniter\Model;
class ProductoModel extends Model {
    //listar
    public function Listar(){
        $Producto = $this->db->query("select * from producto");
         return $Producto->getResult();
    }
      //insert                                                                                                  
    public function insertar($datos){
        $Producto = $this->db->table('producto');
        $Producto->insert($datos);
        return $this->db->InsertId();
    }
//edita
    public function ObtenerbyId($data) {
        $Producto =  $this->db->table('producto');
        $Producto->where($data);
        return $Producto->get()->getResultArray();
    }
    
    //actulizar datos  -........recuperar contraseña 
    public function actualizar($data, $id) {
        $Producto = $this->db->table('producto');
        $Producto->set($data);
        $Producto->where('idproducto', $id);
        return $Producto->update();
    }
    
    
}

?>