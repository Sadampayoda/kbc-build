<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Partners extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'picture' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('partners', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('partners', true);
    }
}
