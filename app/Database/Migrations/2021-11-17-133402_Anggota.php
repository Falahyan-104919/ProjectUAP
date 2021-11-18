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
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'no_hp' => [
                'type' => 'VARCHAR',
                'constraint' => 13,
            ],
            'alamat' => [
                'type' => 'TEXT',
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
