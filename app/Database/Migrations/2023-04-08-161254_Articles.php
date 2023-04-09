<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Articles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'content' => [
                'type' => 'TEXT'
            ],
            'created_at' => [
                'type' => 'datetime',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
                'null' => true
            ],
            'updated_at' => [
                'type' => 'datetime',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('articles', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('articles', TRUE);
    }
}
