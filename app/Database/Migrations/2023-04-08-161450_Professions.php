<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Professions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ], 
            'name' => [
                'type' => 'varchar',
                'constraint' => '100',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('professions', true);
    }

    public function down()
    {
        $this->forge->dropTable('professions', true);
    }
}
