<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'role_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'profession_id' => [
                'type' => 'int',
                'unsigned' => true,
                'null' => true,
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => '50',
            ],
            'phone' => [
                'type' => 'varchar',
                'constraint' => '15',
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => '100',
            ],
            'password' => [
                'type' => 'varchar',
                'constraint' => '255',
            ],
            'gender' => [
                'type' => 'enum',
                'constraint' => ['m', 'f'],
                'null' => true,
            ],
            'date_of_birth' => [
                'type' => 'date',
                'null' => true,
            ],
            'address' => [
                'type' => 'text',
                'null' => true,
            ],
            'picture' => [
                'type' => 'varchar',
                'constraint' => '100',
                'null' => true,
            ],
            'profile_consultant' => [
                'type' => 'text',
                'null' => true,
            ],
            'token' => [
                'type' => 'varchar', 
                'constraint' => '128', 
                'null' => true
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('role_id', 'roles', 'id');
        $this->forge->addForeignKey('profession_id', 'professions', 'id');
        $this->forge->createTable('users', true);
    }

    public function down()
    {
        $this->forge->dropTable('users', true);
    }
}
