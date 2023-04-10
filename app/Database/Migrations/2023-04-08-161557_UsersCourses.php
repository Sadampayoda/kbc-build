<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UsersCourses extends Migration
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
            'course_id' => [
                'type' => 'int',
                'unsigned' => true,
            ], 
            'favorited' => [
                'type' => 'tinyint',
                'constraint' => '1', 
                'default' => 0,
                'null' => true,
            ], 
            'rate' => [
                'type' => 'enum',
                'constraint' => ['1', '2', '3', '4', '5'], 
                'null' => true,
            ], 
            'comment' => [
                'type' => 'text',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('course_id', 'courses', 'id');
        $this->forge->createTable('users_courses', true);
    }

    public function down()
    {
        $this->forge->dropTable('users_courses', true);
    }
}
