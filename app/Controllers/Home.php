<?php

namespace App\Controllers;

use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PenulisModel;
use App\Models\PenerbitModel;
use App\Models\RakModel;
use App\Models\PeminjamanModel;
use App\Models\UsersModel;
use App\Models\AnggotaModel;
use App\Models\PetugasModel;

class Home extends BaseController
{
    public function index(): string
    {
        $bukuModel       = new BukuModel();
        $kategoriModel   = new KategoriModel();
        $penulisModel    = new PenulisModel();
        $penerbitModel   = new PenerbitModel();
        $rakModel        = new RakModel();
        $peminjamanModel = new PeminjamanModel();
        $usersModel      = new UsersModel();
        
        $data = [
            'stokMenipis' => $bukuModel->getBukuStokMenipis(2),
            'totalPeminjamanTerlambat' => $peminjamanModel->getTotalPeminjamanTerlambat(),
            'grafikPeminjaman' => $peminjamanModel->getGrafikPeminjaman(),
            'aktivitasTerbaru' => $peminjamanModel->getAktivitasTerbaru(5),
            'totalBuku'           => $bukuModel->countAllResults(),
            'bukuTersedia'        => count($bukuModel->bukuTersedia()),
            'bukuTidakTersedia'   => $bukuModel->where('tersedia', 0)->countAllResults(),
            'totalKategori'       => $kategoriModel->countAllResults(),
            'totalPenulis'        => $penulisModel->countAllResults(),
            'totalPenerbit'       => $penerbitModel->countAllResults(),
            'totalRak'            => $rakModel->countAllResults(),
            'totalPeminjaman'     => $peminjamanModel->countAllResults(),
            'peminjamanDipinjam'  => count($peminjamanModel->getPeminjamanDipinjam()),
            'peminjamanMenunggu'  => count($peminjamanModel->getPendingKonfirmasi(1000)),
            'peminjamanDikembalikan' => $peminjamanModel->where('status', 'kembali')->countAllResults(),
            'totalUsers'          => $usersModel->countAllResults(),
            'usersAdmin'          => $usersModel->where('role', 'admin')->countAllResults(),
            'usersPetugas'        => $usersModel->where('role', 'petugas')->countAllResults(),
            'usersAnggota'        => $usersModel->where('role', 'anggota')->countAllResults(),
        ];

        $session = session();
        $role    = $session->get('role');

        if ($role === 'petugas') {
            $data['pendingKonfirmasi'] = $peminjamanModel->getPendingKonfirmasi(5);
        } elseif ($role === 'anggota') {
            $anggotaModel = new AnggotaModel();
            $anggota      = $anggotaModel->getByUserId($session->get('id'));
            if ($anggota) {
                $data['activePeminjaman'] = $peminjamanModel->getActivePeminjamanByAnggota($anggota['id_anggota'], 5);
                $data['myTotalPeminjaman']     = $peminjamanModel->getPeminjamanCountByAnggota($anggota['id_anggota']);
                $data['myPeminjamanDipinjam']  = $peminjamanModel->getPeminjamanDipinjamByAnggota($anggota['id_anggota']);
                $data['myPeminjamanMenunggu']  = $peminjamanModel->getPeminjamanMenungguByAnggota($anggota['id_anggota']);
                $data['myPeminjamanDikembalikan'] = $peminjamanModel->getPeminjamanDikembalikanByAnggota($anggota['id_anggota']);
            }
        }

        $db = \Config\Database::connect();

$data['totalUsers'] = $db->table('users')->countAllResults();

foreach (['admin', 'petugas', 'anggota'] as $role) {
    $data['userStats'][$role]['aktif'] = $db->table('users')
        ->where('role', $role)
        ->where('status', 'Aktif')
        ->countAllResults();

    $data['userStats'][$role]['nonaktif'] = $db->table('users')
        ->where('role', $role)
        ->where('status', 'Tidak Aktif')
        ->countAllResults();
}

        return view('layouts/dashboard', $data);
    }

    public function profile(): string
    {
        return view('layouts/profile');
    }
}