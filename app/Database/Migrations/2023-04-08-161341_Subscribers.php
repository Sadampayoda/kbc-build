<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subscribers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ], 
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('subscribers', true);
    }

    public function down()
    {
        $this->forge->dropTable('subscribers', true);
    }
}
