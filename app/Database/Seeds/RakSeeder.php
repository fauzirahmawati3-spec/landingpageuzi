<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RakSeeder extends Seeder
{
    public function run()
    {
        $rak = [
            ['nama_rak' => 'Rak A', 'lokasi' => 'Ruang 1'],
            ['nama_rak' => 'Rak B', 'lokasi' => 'Ruang 2'],
            ['nama_rak' => 'Rak C', 'lokasi' => 'Ruang 3'],
            ['nama_rak' => 'Rak D', 'lokasi' => 'Ruang 4'],
            ['nama_rak' => 'Rak E', 'lokasi' => 'Ruang 5'],
        ];

        foreach ($rak as $data) {
            $ada = $this->db->table('rak')
                ->where('nama_rak', $data['nama_rak'])
                ->countAllResults();

            if ($ada === 0) {
                $this->db->table('rak')->insert($data);
            }
        }
    }
}
