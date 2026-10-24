<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenerbitSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'Andrea Hirata',
            'Tere Liye',
            'Dee Lestari',
            'Ahmad Fuadi',
            'Habiburrahman El Shirazy',
            'Pramoedya Ananta Toer',
            'Ayu Utami',
            'Nh. Dini',
        ];

        foreach ($data as $nama) {
            $builder = $this->db->table('penulis');
            $ada = $builder
                ->where('nama_penulis', $nama)
                ->countAllResults();

            if ($ada == 0) {
                $this->db->table('penulis')->insert([
                    'nama_penulis' => $nama,
                ]);
            }
        }
    }
}
