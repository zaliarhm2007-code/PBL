<?php
$page_title = 'Laporan & Keuangan - KickDropShoe';
$current_page = 'laporan';
$user_role = 'OWNER';
require_once 'includes/header.php';
?>
<div class="flex h-screen overflow-hidden bg-brand-slateBg">
    <?php require_once 'includes/sidebar.php'; ?>
    
    <main class="flex-1 flex flex-col h-full overflow-y-auto">
        <?php 
        $header_title = 'Laporan & Keuangan';
        require 'includes/topbar.php'; 
        ?>

        <div class="p-4 md:p-8 max-w-7xl mx-auto w-full space-y-6">
            <div class="bg-white rounded-3xl border border-slate-200 p-4 md:p-6 shadow-sm flex flex-col md:flex-row gap-4 justify-between items-stretch md:items-center">
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 md:gap-4">
                    <div class="relative">
                        <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-semibold text-slate-600 outline-none pr-10" placeholder="dd/mm/yyyy">
                        <i class="far fa-calendar absolute right-3.5 top-3.5 text-slate-400 text-xs"></i>
                    </div>
                    <span class="text-xs font-semibold text-slate-400 text-center sm:text-left">sampai</span>
                    <div class="relative">
                        <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-semibold text-slate-600 outline-none pr-10" placeholder="dd/mm/yyyy">
                        <i class="far fa-calendar absolute right-3.5 top-3.5 text-slate-400 text-xs"></i>
                    </div>
                    <button class="px-6 py-3 bg-brand-yellow hover:bg-brand-yellowHover text-slate-900 text-xs font-extrabold rounded-xl transition shadow-md shadow-brand-yellow/20">Filter Data</button>
                </div>
                <button class="px-6 py-3 bg-brand-darkCard hover:bg-slate-800 text-white text-xs font-extrabold rounded-xl transition shadow-md flex items-center justify-center gap-2">
                    <i class="fas fa-file-pdf"></i> Export PDF
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                <div class="bg-brand-darkCard text-white rounded-3xl p-8 shadow-xl">
                    <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-3">PESANAN SELESAI</p>
                    <h3 class="text-3xl font-black text-brand-yellow">145</h3>
                </div>
                <div class="bg-brand-darkCard text-white rounded-3xl p-8 shadow-xl">
                    <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-3">BARANG DICUCI</p>
                    <h3 class="text-3xl font-black text-brand-yellow">210</h3>
                </div>
                <div class="bg-brand-darkCard text-white rounded-3xl p-8 shadow-xl">
                    <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-widest mb-3">TOTAL PENDAPATAN</p>
                    <h3 class="text-3xl font-black text-emerald-400">Rp 8.550.000</h3>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm space-y-6">
                <h3 class="text-sm font-extrabold text-slate-800 tracking-tight border-b border-slate-100 pb-4">Rincian Transaksi Berdasarkan Metode Pembayaran</h3>
                <div class="space-y-4">
                    <div class="p-5 border border-slate-200 rounded-2xl flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-lg shadow-sm">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <h4 class="font-extrabold text-slate-900 text-sm">Cash (Tunai)</h4>
                        </div>
                        <span class="font-black text-slate-900 text-base">Rp 4.200.000</span>
                    </div>
                    <div class="p-5 border border-slate-200 rounded-2xl flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center text-lg shadow-sm">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <h4 class="font-extrabold text-slate-900 text-sm">QRIS</h4>
                        </div>
                        <span class="font-black text-slate-900 text-base">Rp 3.100.000</span>
                    </div>
                    <div class="p-5 border border-slate-200 rounded-2xl flex justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center text-lg shadow-sm">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <h4 class="font-extrabold text-slate-900 text-sm">Transfer</h4>
                        </div>
                        <span class="font-black text-slate-900 text-base">Rp 1.250.000</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php require_once 'includes/footer.php'; ?>
