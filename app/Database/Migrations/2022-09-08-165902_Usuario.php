<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idusuario'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
            'correo'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 50
            
            ],
            'contraseña'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 20
                    
            ],
            'usuario' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 30
                    
            ],
        ]);
    $this->forge->addKey('idusuario', TRUE);
    $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuario');
    }
}

