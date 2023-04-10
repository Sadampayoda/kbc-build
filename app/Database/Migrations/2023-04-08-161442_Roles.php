<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'integer',
                'unsigned' => true,
                'auto_increment' => true,
            ], 
            'name' => [
                'type' =>'varchar',
                'constraint' => '50'
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('roles', true);
    }

    public function down()
    {
        $this->forge->dropTable('roles', true);
    }
}
