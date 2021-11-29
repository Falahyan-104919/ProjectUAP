<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Anggota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_anggota' =>[
                'type' => 'INT',
                'constraint' => 12,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'username' =>[
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'password' =>[
                'type' => 'VARCHAR',
                'constraint'=> 20,
            ],
            'email' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 13,
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id_anggota', true);
        $this->forge->createTable('anggota');

    }

    public function down()
    {
        $this->forge->dropTable('anggota');
    }
}
