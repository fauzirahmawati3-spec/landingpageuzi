<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        $data = [
            [
                'nama'     => 'Admin Dummy',
                'email'    => 'admin.dummy@example.com',
                'username' => 'admin_dummy',
                'password' => password_hash('Admin123!', PASSWORD_DEFAULT),
                'role'     => 'admin',
                'status'   => 'aktif',
            ],
            [
                'nama'     => 'Petugas Dummy',
                'email'    => 'petugas.dummy@example.com',
                'username' => 'petugas_dummy',
                'password' => password_hash('Petugas123!', PASSWORD_DEFAULT),
                'role'     => 'petugas',
                'status'   => 'aktif',
            ],
            [
                'nama'     => 'Anggota Dummy',
                'email'    => 'anggota.dummy@example.com',
                'username' => 'anggota_dummy',
                'password' => password_hash('Anggota123!', PASSWORD_DEFAULT),
                'role'     => 'anggota',
                'status'   => 'aktif',
            ],
        ];

        foreach ($data as $user) {
            $sudahAda = $this->db->table('users')
                ->groupStart()
                    ->where('username', $user['username'])
                    ->orWhere('email', $user['email'])
                ->groupEnd()
                ->countAllResults();

            if ($sudahAda === 0) {
                $this->db->table('users')->insert($user);
            }
        }

        // Contoh penggunaan Faker untuk membuat data pengguna tambahan.
        for ($i = 1; $i <= 5; $i++) {
            $username = 'dummy_' . $i;
            $email = $username . '@example.com';

            $sudahAda = $this->db->table('users')
                ->groupStart()
                    ->where('username', $username)
                    ->orWhere('email', $email)
                ->groupEnd()
                ->countAllResults();

            if ($sudahAda === 0) {
                $this->db->table('users')->insert([
                    'nama'     => $faker->name(),
                    'email'    => $email,
                    'username' => $username,
                    'password' => password_hash('Dummy123!', PASSWORD_DEFAULT),
                    'role'     => 'anggota',
                    'status'   => 'aktif',
                ]);
            }
        }
    }
}
