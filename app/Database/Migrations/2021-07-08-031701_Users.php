<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 9,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'full_name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'unique' => true,
            ],
            'university' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'whatsapp_num' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'image_cp' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'image_uiux' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'image_photo' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'valid_cp' => [
                'type' => 'BOOLEAN',
                'default' => false
            ],
            'valid_uiux' => [
                'type' => 'BOOLEAN',
                'default' => false
            ],
            'valid_photography' => [
                'type' => 'BOOLEAN',
                'default' => false
            ],
            'created_at' => [
                'type' => 'TIMESTAMP'
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP',
                'null' => TRUE
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
