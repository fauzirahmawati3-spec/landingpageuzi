
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $kategori = [
            'Fiksi',
            'Pembelajaran',
            'Non Fiksi',
            'Teknologi',
            'Sejarah',
            'Agama',
            'Sains',
            'Sastra',
        ];

        foreach ($kategori as $nama) {
            $ada = $this->db->table('kategori')
                ->where('nama_kategori', $nama)
                ->countAllResults();

            if ($ada === 0) {
                $this->db->table('kategori')->insert([
                    'nama_kategori' => $nama,
                ]);
            }
        }
    }
}
