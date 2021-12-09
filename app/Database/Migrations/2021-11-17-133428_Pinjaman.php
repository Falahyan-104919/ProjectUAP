<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pinjaman extends Migration
{
    public function up()
    {
        // $this->forge->addField([
        //     'id_pinjaman' => [
        //         'type' => 'INT',
        //         'constraint' => 12,
        //         'unsigned' => true,
        //         'auto_increment' => true,
        //     ],
        //     'nama' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => 255,
        //     ],
        //     'jumlah_pinjaman' => [
        //         'type' => 'INT',
        //         'constraint' => 12,
        //     ],
        //     'alasan_pinjam' => [
        //         'type' => 'TEXT',
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

        // $this->forge->addKey('id_pinjaman', true);
        // $this->forge->createTable('pinjaman');

    }

    public function down()
    {
        $this->forge->dropTable('pinjaman');
    }
}
