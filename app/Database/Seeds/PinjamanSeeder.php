<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PinjamanSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     'nama'      => 'Falahyan',
        //     'no_hp'     => '0987564213',
        //     'alamat'    => 'Way Halim',
        //     'gender'    => 'Pria',
        //     'created_at'=> Time::now(),
        //     'updated_at'=> Time::now()
        // ];

        $faker = \Faker\Factory::create('id_ID');
        
        for($i = 1 ; $i <= 50; $i++){
        $data = [
                'nama' => $faker->name,
                'jumlah_pinjaman'  => $faker->randomNumber(7, true),
                'alasan_pinjam'  => $faker->words(5, true),
                'created_at'=> Time::now(),
                'updated_at'=> Time::now()
            ];
        $this->db->table('pinjaman')->insert($data);
        }
        // Simple Queries
        // $this->db->query("INSERT INTO anggota (nama, no_hp, alamat, gender, created_at, updated_at) VALUES(:nama:, :no_hp:, :alamat:, :gender:, :created_at:, :updated_at:)", $data);

        // Using Query Builder
    }
}