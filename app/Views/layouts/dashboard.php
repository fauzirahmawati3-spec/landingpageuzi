<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-4">
    <div class="row g-4">
        <div class="col-xl-3 col-md-4 col-6">
            <a href="<?= base_url('buku') ?>" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Buku</h6>
                                <h3 class="mb-0 fw-bold"><?= $totalBuku ?></h3>
                                <h6 class="text-success mb-1">Tersedia : <b><?= $bukuTersedia ?></b></h6>
                                
<div class="small text-danger mt-1">
    Dipinjam: <?= $totalBukuDipinjam ?? 0 ?>
</div>

                            </div>
                            <div class="bg-primary bg-opacity-10 p-3 rounded">
                                <i class="bi bi-book-fill text-primary" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <small class="text-muted">Klik untuk melihat <i class="bi bi-arrow-right ms-1"></i></small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-6">
            <a href="<?= base_url('kategori') ?>" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Kategori</h6>
                                <h3 class="mb-0 fw-bold"><?= $totalKategori ?></h3>
                            </div>
                            <div class="bg-success bg-opacity-10 p-3 rounded">
                                <i class="bi bi-tags-fill text-success" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <small class="text-muted">Klik untuk melihat <i class="bi bi-arrow-right ms-1"></i></small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-6">
            <a href="<?= base_url('penulis') ?>" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Penulis</h6>
                                <h3 class="mb-0 fw-bold"><?= $totalPenulis ?></h3>
                            </div>
                            <div class="bg-warning bg-opacity-10 p-3 rounded">
                                <i class="bi bi-person-lines-fill text-warning" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <small class="text-muted">Klik untuk melihat <i class="bi bi-arrow-right ms-1"></i></small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-6">
            <a href="<?= base_url('penerbit') ?>" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Penerbit</h6>
                                <h3 class="mb-0 fw-bold"><?= $totalPenerbit ?></h3>
                            </div>
                            <div class="bg-info bg-opacity-10 p-3 rounded">
                                <i class="bi bi-building-fill text-info" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <small class="text-muted">Klik untuk melihat <i class="bi bi-arrow-right ms-1"></i></small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-6">
            <a href="<?= base_url('rak') ?>" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Rak</h6>
                                <h3 class="mb-0 fw-bold"><?= $totalRak ?></h3>
                            </div>
                            <div class="bg-secondary bg-opacity-10 p-3 rounded">
                                <i class="bi bi-bookshelf text-secondary" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <small class="text-muted">Klik untuk melihat <i class="bi bi-arrow-right ms-1"></i></small>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-xl-3 col-md-4 col-6">
            <a href="<?= base_url('peminjaman') ?>" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Peminjaman</h6>
                                <h3 class="mb-0 fw-bold"><?= $totalPeminjaman ?></h3>
                            </div>
                            <div class="bg-danger bg-opacity-10 p-3 rounded">
                                <i class="bi bi-journal-text text-danger" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <small class="text-muted">Klik untuk melihat <i class="bi bi-arrow-right ms-1"></i></small>
                    </div>
                </div>
            </a>
        </div>

    <?php if (session()->get('role') !== 'anggota'): ?>
        <div class="col-xl-3 col-md-4 col-6">
            <a href="<?= base_url('users') ?>" class="text-decoration-none text-dark">
                <div class="card border-0 shadow-sm h-100 hover-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="text-muted mb-1">Users</h6>
                                <h3 class="mb-0 fw-bold"><?= $totalUsers ?></h3>        
                            
<div class="mt-2" style="font-size: 11px; line-height: 1.7;">
    <?php foreach ([
        'admin' => 'Admin',
        'petugas' => 'Petugas',
        'anggota' => 'Anggota'
    ] as $role => $label): ?>

        <div class="d-flex align-items-center justify-content-between"
             style="max-width: 145px;">

            <span class="text-primary fw-semibold">
                <?= $label ?>
            </span>

            <span class="text-nowrap text-muted">
                <span class="text-success">
                    <?= $userStats[$role]['aktif'] ?? 0 ?>
                </span>
                <span class="mx-1">/</span>
                <span class="text-danger">
                    <?= $userStats[$role]['nonaktif'] ?? 0 ?>
                </span>
            </span>

        </div>

    <?php endforeach; ?>

    <div class="text-muted" style="font-size: 9px;">
        Aktif / Nonaktif
    </div>
</div>

                            </div>
                           <div class="bg-dark bg-opacity-10 p-3 rounded flex-shrink-0 ms-2">
                                <i class="bi bi-people-fill text-dark" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0">
                        <small class="text-muted">Klik untuk melihat <i class="bi bi-arrow-right ms-1"></i></small>
                    </div>
                </div>
            </a>
        </div>
    <?php endif; ?>
</div>


<!-- Statistik tambahan -->
<div class="row g-4 mt-1">

    <!-- Buku dikembalikan -->
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card border-0 shadow-sm h-100 hover-card">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">Buku Dikembalikan</h6>
                    <h3 class="fw-bold mb-0">
                        <?= $peminjamanDikembalikan ?? 0 ?>
                    </h3>
                    <small class="text-success">Total pengembalian</small>
                </div>
                <div class="bg-success bg-opacity-10 p-3 rounded">
                    <i class="bi bi-journal-check text-success" style="font-size:2rem"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Peminjaman terlambat -->
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card border-0 shadow-sm h-100 hover-card">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">Peminjaman Terlambat</h6>
                    <h3 class="fw-bold mb-0">
                        <?= $totalPeminjamanTerlambat ?? 0 ?>
                    </h3>
                    <small class="text-danger">Perlu ditindaklanjuti</small>
                </div>
                <div class="bg-danger bg-opacity-10 p-3 rounded">
                    <i class="bi bi-clock-history text-danger" style="font-size:2rem"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Stok menipis -->
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card border-0 shadow-sm h-100 hover-card">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted mb-2">Buku Stok Menipis</h6>
                    <h3 class="fw-bold mb-0">
                        <?= count($stokMenipis ?? []) ?>
                    </h3>
                    <small class="text-warning">Stok 1–2 buku</small>
                </div>
                <div class="bg-warning bg-opacity-10 p-3 rounded">
                    <i class="bi bi-exclamation-triangle-fill text-warning" style="font-size:2rem"></i>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Grafik peminjaman bulanan -->
<div class="row mt-4">
    <div class="col-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="mb-0">
                    <i class="bi bi-bar-chart-line text-primary me-2"></i>
                    Grafik Peminjaman Bulanan
                </h5>
                <small class="text-muted">Statistik enam bulan terakhir</small>
            </div>
            <div class="card-body">
                <div style="height:300px; position:relative;">
                    <canvas id="grafikPeminjaman"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabel stok menipis -->
<div class="row mt-4">
    <div class="col-lg-6 col-12">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="mb-0">
                    <i class="bi bi-exclamation-circle text-warning me-2"></i>
                    Buku dengan Stok Menipis
                </h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Judul Buku</th>
                                <th class="text-center">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($stokMenipis)): ?>
                                <?php foreach ($stokMenipis as $buku): ?>
                                    <tr>
                                        <td><?= esc($buku['judul']) ?></td>
                                        <td class="text-center">
                                            <span class="badge bg-warning text-dark">
                                                <?= esc($buku['tersedia']) ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="2" class="text-center text-muted py-4">
                                        <i class="bi bi-check-circle text-success me-1"></i>
                                        Tidak ada stok menipis
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Aktivitas terbaru -->
    <div class="col-lg-6 col-12 mt-4 mt-lg-0">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-header bg-white border-0 py-3">
                <h5 class="mb-0">
                    <i class="bi bi-activity text-primary me-2"></i>
                    Aktivitas Terbaru
                </h5>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Anggota</th>
                                <th>Buku</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($aktivitasTerbaru)): ?>
                                <?php foreach ($aktivitasTerbaru as $aktivitas): ?>
                                    <tr>
                                        <td>
                                            <?= esc($aktivitas['nama_anggota'] ?? '-') ?>
                                            <div class="small text-muted">
                                                <?= !empty($aktivitas['tanggal_pinjam'])
                                                    ? date('d/m/Y', strtotime($aktivitas['tanggal_pinjam']))
                                                    : '-' ?>
                                            </div>
                                        </td>
                                        <td><?= esc($aktivitas['judul_buku'] ?? '-') ?></td>
                                        <td>
                                            <?php
                                            $status = $aktivitas['status'] ?? '';
                                            $badge = match ($status) {
                                                'kembali' => 'success',
                                                'dipinjam' => 'primary',
                                                'dimohon' => 'warning',
                                                default => 'secondary',
                                            };

                                            $labelStatus = match ($status) {
                                                'kembali' => 'Dikembalikan',
                                                'dipinjam' => 'Dipinjam',
                                                'dimohon' => 'Menunggu',
                                                default => $status ?: '-',
                                            };
                                            ?>
                                            <span class="badge bg-<?= $badge ?>">
                                                <?= esc($labelStatus) ?>
                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-4">
                                        Belum ada aktivitas
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js untuk grafik -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const canvas = document.getElementById('grafikPeminjaman');

    if (!canvas || typeof Chart === 'undefined') return;

    const dataGrafik = <?= json_encode($grafikPeminjaman ?? []) ?>;

    const namaBulan = [
        'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
        'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
    ];

    const labels = dataGrafik.map(item => {
        const bagian = String(item.bulan).split('-');
        return namaBulan[parseInt(bagian[1], 10) - 1] + ' ' + bagian[0];
    });

    const nilai = dataGrafik.map(item => Number(item.total));

    new Chart(canvas, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Jumlah Peminjaman',
                data: nilai,
                borderColor: '#4e73df',
                backgroundColor: 'rgba(78, 115, 223, 0.12)',
                fill: true,
                tension: 0.35,
                borderWidth: 3,
                pointRadius: 4,
                pointHoverRadius: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });
});
</script>
</>

    <?php $session = session(); $role = $session->get('role'); ?>

    <?php if ($role === 'petugas' && !empty($pendingKonfirmasi)): ?>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="bi bi-hourglass-split text-warning me-2"></i>Menunggu Konfirmasi</h5>
                    <a href="<?= base_url('peminjaman') ?>" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Anggota</th>
                                    <th>Buku</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Status</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pendingKonfirmasi as $pinjam): ?>
                                <tr>
                                    <td>
                                        <div class="fw-medium"><?= esc($pinjam['nama_anggota']) ?></div>
                                        <small class="text-muted"><?= esc($pinjam['nis']) ?></small>
                                    </td>
                                    <td><?= esc($pinjam['judul_buku']) ?></td>
                                    <td><?= date('d/m/Y', strtotime($pinjam['tanggal_pinjam'])) ?></td>
                                    <td><span class="badge bg-warning text-dark">Menunggu</span></td>
                                    <td class="text-end">
                                        <a href="<?= base_url('peminjaman/detail/' . $pinjam['id_peminjaman']) ?>" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye me-1"></i>Detail
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php elseif ($role === 'petugas'): ?>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0"><i class="bi bi-hourglass-split text-warning me-2"></i>Menunggu Konfirmasi</h5>
                </div>
                <div class="card-body text-center py-4">
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                    <p class="mt-2 mb-0 text-muted">Tidak ada peminjaman menunggu konfirmasi</p>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($role === 'anggota' && !empty($activePeminjaman)): ?>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="bi bi-book text-primary me-2"></i>Peminjaman Aktif</h5>
                    <a href="<?= base_url('peminjaman') ?>" class="btn btn-sm btn-outline-primary">Lihat Semua</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Buku</th>
                                    <th>Tgl Pinjam</th>
                                    <th>Batas Waktu</th>
                                    <th>Sisa Hari</th>
                                    <th class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($activePeminjaman as $pinjam): 
                                    $today = new DateTime();
                                    $dueDate = new DateTime($pinjam['tanggal_kembali']);
                                    $diff = $today->diff($dueDate);
                                    $sisaHari = $diff->days;
                                    $isOverdue = $today > $dueDate;
                                ?>
                                <tr>
                                    <td>
                                        <?php if (!empty($pinjam['cover'])): ?>
                                        <img src="<?= base_url('uploads/buku/' . $pinjam['cover']) ?>" alt="" class="me-2" style="width: 40px; height: 50px; object-fit: cover; border-radius: 4px;">
                                        <?php endif; ?>
                                        <?= esc($pinjam['judul_buku']) ?>
                                    </td>
                                    <td><?= date('d/m/Y', strtotime($pinjam['tanggal_pinjam'])) ?></td>
                                    <td><?= date('d/m/Y', strtotime($pinjam['tanggal_kembali'])) ?></td>
                                    <td>
                                        <?php if ($isOverdue): ?>
                                            <span class="badge bg-danger">Terlambat <?= $sisaHari ?> hari</span>
                                        <?php elseif ($sisaHari <= 3): ?>
                                            <span class="badge bg-warning text-dark"><?= $sisaHari ?> hari</span>
                                        <?php else: ?>
                                            <span class="badge bg-success"><?= $sisaHari ?> hari</span>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-end">
                                        <a href="<?= base_url('peminjaman/detail/' . $pinjam['id_peminjaman']) ?>" class="btn btn-sm btn-primary">
                                            <i class="bi bi-eye me-1"></i>Detail
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php elseif ($role === 'anggota'): ?>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white border-0">
                    <h5 class="mb-0"><i class="bi bi-book text-primary me-2"></i>Peminjaman Aktif</h5>
                </div>
                <div class="card-body text-center py-4">
                    <i class="bi bi-book text-muted" style="font-size: 3rem;"></i>
                    <p class="mt-2 mb-0 text-muted">Anda tidak memiliki peminjaman aktif</p>
                    <a href="<?= base_url('buku') ?>" class="btn btn-primary mt-3"><i class="bi bi-plus me-1"></i>Pinjam Buku</a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>