<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV. Madding Fresh - UI/UX Prototype</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-sm p-5 flex justify-between items-center border-b border-gray-100">
        <h1 class="text-2xl font-black text-emerald-600 tracking-tight">🍉 Madding<span class="text-gray-800">Fresh.</span></h1>
        <ul class="hidden md:flex space-x-8 text-gray-500 font-semibold">
            <li><a href="#" class="text-emerald-600 border-b-2 border-emerald-600 pb-1">Dashboard</a></li>
            <li><a href="#" class="hover:text-emerald-500 transition">Inventori Gudang</a></li>
            <li><a href="#" class="hover:text-emerald-500 transition">Laporan Penjualan</a></li>
        </ul>
        <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 font-bold border-2 border-white shadow">
            H
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="max-w-6xl mx-auto mt-12 p-8 bg-white rounded-2xl shadow-sm border border-gray-100 flex flex-col md:flex-row items-center">
        <div class="md:w-3/5 pr-8">
            <span class="bg-emerald-100 text-emerald-700 text-sm font-bold px-3 py-1 rounded-full">UI/UX Implementation</span>
            <h2 class="text-4xl font-extrabold text-gray-800 mt-4 mb-4 leading-tight">Sistem Manajemen Gudang Buah Modern & Efisien</h2>
            <p class="text-gray-500 mb-8 text-lg leading-relaxed">
                Antarmuka ini dirancang menggunakan pendekatan <i>User-Centered Design</i>. Berfokus pada kemudahan navigasi bagi staf gudang CV. Madding Fresh Fruit untuk mencatat stok, mengurangi kelelahan visual, dan menghindari <i>overthinking</i> saat operasional.
            </p>
            <button class="bg-emerald-500 text-white font-bold px-8 py-3 rounded-lg shadow-lg shadow-emerald-200 hover:bg-emerald-600 hover:-translate-y-1 transition transform duration-200">
                Lihat Prototipe Interaktif
            </button>
        </div>
        <div class="md:w-2/5 mt-8 md:mt-0 flex justify-center">
            <!-- Dekorasi Visual Sederhana -->
            <div class="relative w-72 h-72">
                <div class="absolute inset-0 bg-emerald-100 rounded-full animate-pulse opacity-50"></div>
                <div class="absolute inset-4 bg-emerald-200 rounded-full flex items-center justify-center text-7xl shadow-inner">
                    🍍🍏
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Cards / Mockup Analytics -->
    <div class="max-w-6xl mx-auto mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:border-emerald-300 transition cursor-pointer">
            <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-xl mb-4">📦</div>
            <h3 class="text-xl font-bold text-gray-800">Manajemen Stok</h3>
            <p class="text-gray-500 mt-2 text-sm">UI pencatatan barang masuk/keluar yang minim klik untuk efisiensi waktu.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:border-emerald-300 transition cursor-pointer">
            <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center text-xl mb-4">📊</div>
            <h3 class="text-xl font-bold text-gray-800">Visualisasi Data</h3>
            <p class="text-gray-500 mt-2 text-sm">Grafik pergerakan buah paling laris dengan warna kontras yang ramah mata.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:border-emerald-300 transition cursor-pointer">
            <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center text-xl mb-4">⚡</div>
            <h3 class="text-xl font-bold text-gray-800">Cepat & Terukur</h3>
            <p class="text-gray-500 mt-2 text-sm">Layout yang pragmatis tanpa elemen visual yang mendistraksi staf operasional.</p>
        </div>
    </div>
</body>
</html>