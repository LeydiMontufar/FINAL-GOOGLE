<?php namespace App\Models;
use CodeIgniter\Model;
class UsuarioModel extends Model {
    //listar
    public function Listar(){
        $Usuario = $this->db->query("select * from usuario");
         return $Usuario->getResult();
    }
      //insert                                                                                                  
    public function insertar($datos){
        $Usuario = $this->db->table('usuario');
        $Usuario->insert($datos);
        return $this->db->InsertId();
    }
//edita
    public function ObtenerbyId($data) {
        $Usuario =  $this->db->table('usuario');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }
    //login
    public function Login($usuario, $contra) {
        $Usuario = $this->db->query("SELECT * FROM `usuario` where usuario='$usuario' and  contraseña='$contra' ");
        return $Usuario->getResult();
    }
    //actulizar datos  -........recuperar contraseña 
    public function actualizar($data, $id) {
        $Usuario = $this->db->table('usuario');
        $Usuario->set($data);
        $Usuario->where('id_usuario', $id);
        return $Usuario->update();
    }
    
    
}

?>