<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Testimonials extends Migration
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
                'constraint' => '50',
            ],
            'comment' => [
                'type' => 'TEXT'
            ],
            'rate' => [
                'type' => 'enum',
                'constraint' => ['1', '2', '3', '4', '5'],
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('testimonials', true);
    }

    public function down()
    {
        $this->forge->dropTable('testimonials', true);
    }
}
