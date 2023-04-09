<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courses extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'category_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => '150'
            ],
            'description' => [
                'type' => 'text',
            ],
            'price' => [
                'type' => 'float',
            ], 
            'promo' => [
                'type' => 'float',
                'null' => true,
            ], 
            'service' => [
                'type' => 'enum',
                'constraint' => ['coaching', 'consultation', 'group']
            ], 
            'type' => [
                'type' => 'varchar',
                'constraint' => '150'
            ], 
            'date_start' => [
                'type' => 'date',
            ], 
            'date_end' => [
                'type' => 'date',
            ], 
            'time_start' => [
                'type' => 'time',
            ], 
            'time_end' => [
                'type' => 'time'
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('category_id', 'categories', 'id');
        $this->forge->createTable('courses', true);
    }

    public function down()
    {
        $this->forge->dropTable('courses', true);
    }
}
