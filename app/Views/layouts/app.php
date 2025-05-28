<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?> | SIPANDAKABULAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen text-gray-800">

    <!-- Header / Navbar -->
    <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-700">SIPANDAKABULAN</h1>
        <div>
            <!-- Ganti ini nanti sama nama user dari session -->
            <span class="text-sm text-gray-600">Halo, Operator!</span>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-white text-center text-sm text-gray-500 py-4 mt-10 shadow-inner">
        &copy; <?= date('Y') ?> SIPANDAKABULAN. All rights reserved.
    </footer>

</body>

</html>