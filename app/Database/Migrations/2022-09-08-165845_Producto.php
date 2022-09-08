<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Producto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idproducto'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => TRUE,
                    'auto_increment' => TRUE
            ],
            'nombreproducto'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 50
            
            ],
            'detallesproducto'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => 200
                    
            ],
            'precioproducto' => [
                    'type'           => 'DOUBLE'
                    
                    
            ],
            'cantidadproducto' => [
                'type'           => 'DOUBLE',
                
            ],
            'imagenproducto' => [
                'type'           => 'VARCHAR',
                'constraint'     => 200
                
            ],
        ]);
    $this->forge->addKey('idproducto', TRUE);
    $this->forge->createTable('producto');
    }

    public function down()
    {
        //
    }
}
