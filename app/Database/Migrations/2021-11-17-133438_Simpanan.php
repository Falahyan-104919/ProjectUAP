<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Simpanan extends Migration
{
    public function up()
    {
        // $this->forge->addField([
        //     'id_simpanan' => [
        //         'type' => 'INT',
        //         'constraint' => 12,
        //         'unsigned' => true,
        //         'auto_increment' => true,
        //     ],
        //     'nama' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => 255,
        //     ],
        //     'jumlah_simpanan' => [
        //         'type' => 'INT',
        //         'constraint' => 12,
        //     ],
        //     'metode' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => 15
        //     ],
        //     'created_at' => [
        //         'type' => 'DATETIME',
        //         'null' => true,
        //     ],
        //     'updated_at' => [
        //         'type' => 'DATETIME',
        //         'null' => true,
        //     ],
        // ]);

        // $this->forge->addKey('id_simpanan', true);
        // $this->forge->createTable('simpanan');
    }

    public function down()
    {
        $this->forge->dropTable('simpanan');
    }
}
