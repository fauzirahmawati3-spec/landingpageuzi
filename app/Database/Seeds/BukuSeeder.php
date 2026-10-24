<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class BukuSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');

        // Ambil ID relasi yang sudah tersedia di database
        $kategori = $this->db->table('kategori')
            ->select('id_kategori')
            ->get()
            ->getResultArray();

        $penulis = $this->db->table('penulis')
            ->select('id_penulis')
            ->get()
            ->getResultArray();

        $penerbit = $this->db->table('penerbit')
            ->select('id_penerbit')
            ->get()
            ->getResultArray();

        if (empty($kategori) || empty($penulis) || empty($penerbit)) {
            echo "Gagal: data kategori, penulis, atau penerbit masih kosong.\n";
            return;
        }

        for ($i = 0; $i < 20; $i++) {
            $jumlah = $faker->numberBetween(5, 50);

            $this->db->table('buku')->insert([
                'isbn'          => $faker->unique()->numerify('978#########'),
                'judul'         => $faker->sentence(4),
                'id_kategori'   => $faker->randomElement($kategori)['id_kategori'],
                'id_penulis'    => $faker->randomElement($penulis)['id_penulis'],
                'id_penerbit'   => $faker->randomElement($penerbit)['id_penerbit'],
                'tahun_terbit'  => $faker->numberBetween(2000, 2026),
                'jumlah'        => $jumlah,
                'tersedia'      => $jumlah,
                'deskripsi'     => $faker->paragraph(),
                'cover'         => null,
            ]);
        }

        echo "Berhasil menambahkan 20 data buku.\n";
    }
}
