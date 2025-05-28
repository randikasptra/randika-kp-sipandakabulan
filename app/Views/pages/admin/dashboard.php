<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>Dashboard Admin<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4 text-green-700">Dashboard Verifikator Administrasi</h1>
    <p class="text-gray-700">Selamat datang, Verifikator! Berikut data laporan yang perlu diverifikasi.</p>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow-md rounded-xl p-6">
            <h2 class="font-semibold text-gray-800 mb-2">Laporan Baru</h2>
            <p class="text-3xl text-blue-500">27</p>
        </div>
        <div class="bg-white shadow-md rounded-xl p-6">
            <h2 class="font-semibold text-gray-800 mb-2">Sudah Diverifikasi</h2>
            <p class="text-3xl text-green-500">89</p>
        </div>
        <div class="bg-white shadow-md rounded-xl p-6">
            <h2 class="font-semibold text-gray-800 mb-2">Ditolak</h2>
            <p class="text-3xl text-red-500">7</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>