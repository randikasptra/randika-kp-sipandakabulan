<?= $this->extend('layouts/app') ?>
<?= $this->section('title') ?>Dashboard Operator<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4 text-blue-700">Dashboard Operator</h1>
    <p class="text-gray-700">Selamat datang, Operator! Di sini kamu bisa mengelola data dan memantau status laporan.</p>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-md rounded-xl p-6">
            <h2 class="font-semibold text-gray-800 mb-2">Jumlah Laporan Masuk</h2>
            <p class="text-3xl text-blue-600">123</p>
        </div>
        <div class="bg-white shadow-md rounded-xl p-6">
            <h2 class="font-semibold text-gray-800 mb-2">Proses Verifikasi</h2>
            <p class="text-3xl text-yellow-500">45</p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>