<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    public function run()
    {
        $anggota = $this->db->table('anggota')
            ->select('id_anggota')
            ->get()
            ->getResultArray();

        $petugas = $this->db->table('petugas')
            ->select('id_petugas')
            ->get()
            ->getResultArray();

        $buku = $this->db->table('buku')
            ->select('id_buku')
            ->get()
            ->getResultArray();

        if (empty($anggota) || empty($petugas) || empty($buku)) {
            echo "Gagal: data anggota, petugas, atau buku masih kosong.\n";
            return;
        }

        $faker = \Faker\Factory::create('id_ID');

        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $tanggalPinjam = $faker->dateTimeBetween('-30 days', 'now');
            $tanggalKembali = (clone $tanggalPinjam)
                ->modify('+7 days');

            $status = $faker->randomElement([
                'dimohon',
                'dipinjam',
                'kembali',
                'terlambat',
            ]);

            $data[] = [
                'id_anggota' => $faker->randomElement($anggota)['id_anggota'],
                'id_petugas' => $faker->randomElement($petugas)['id_petugas'],
                'id_buku' => $faker->randomElement($buku)['id_buku'],
                'tanggal_pinjam' => $tanggalPinjam->format('Y-m-d'),
                'tanggal_kembali' => $tanggalKembali->format('Y-m-d'),
                'status' => $status,
            ];
        }

        $this->db->table('peminjaman')->insertBatch($data);

        echo "Berhasil menambahkan 10 data peminjaman.\n";
    }
}
