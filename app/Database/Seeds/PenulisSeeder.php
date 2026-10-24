<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenulisSeeder extends Seeder
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
            $ada = $this->db->table('penulis')
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
