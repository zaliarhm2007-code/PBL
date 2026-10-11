<?php
$page_title = 'Kelola Daftar Pesanan - KickDropShoe';
$current_page = 'pesanan';
$user_role = 'OWNER';
require_once 'includes/header.php';
?>
<div class="flex h-screen overflow-hidden bg-brand-slateBg">
    <?php require_once 'includes/sidebar.php'; ?>
    
    <main class="flex-1 flex flex-col h-full overflow-y-auto">
        <?php 
        $header_title = 'Kelola Daftar Pesanan';
        require 'includes/topbar.php'; 
        ?>

        <!-- Desktop: Split Master-Detail layout (100% Persis Desktop Asli) | Mobile: List View -->
        <div class="p-4 lg:p-8 flex flex-col lg:flex-row gap-6 lg:h-[calc(100vh-81px)] lg:overflow-hidden">
            <!-- Left Panel: Daftar Pesanan -->
            <div class="w-full lg:w-[380px] flex flex-col gap-4 shrink-0 lg:h-full lg:overflow-hidden">
                <div class="space-y-3 shrink-0">
                    <div class="relative">
                        <i class="fas fa-search absolute left-4 top-3.5 text-slate-400 text-sm"></i>
                        <input type="text" id="order-search-input" class="w-full bg-white border border-slate-200 rounded-xl pl-10 pr-4 py-3 text-xs font-medium focus:outline-none focus:ring-2 focus:ring-brand-yellow" placeholder="Cari ID / Nama Customer...">
                    </div>
                    <div class="flex gap-2">
                        <select id="order-status-select" class="flex-1 bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-xs font-bold text-slate-700 outline-none">
                            <option>Semua Status</option>
                            <option>Diterima</option>
                            <option>Diproses</option>
                            <option>Selesai</option>
                        </select>
                        <button class="w-10 h-10 bg-brand-darkCard text-white rounded-xl flex items-center justify-center text-xs font-bold shadow-sm">
                            <i class="fas fa-filter"></i>
                        </button>
                    </div>
                </div>

                <div class="flex-1 lg:overflow-y-auto space-y-3 lg:pr-1">
                    <!-- Order 1: Budi Santoso -->
                    <div class="order-card-item p-5 rounded-2xl border-2 border-brand-yellow bg-yellow-50/30 shadow-sm cursor-pointer relative transition-all">
                        <div class="flex justify-between items-start mb-1">
                            <h4 class="font-extrabold text-slate-900 text-sm">#0881 – Budi Santoso</h4>
                            <span class="px-2.5 py-1 bg-yellow-100 text-yellow-800 rounded-md text-[10px] font-extrabold">Diproses</span>
                        </div>
                        <p class="text-xs font-medium text-slate-500">2 Barang • Express (1–2 Hari)</p>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm font-black text-slate-900">Rp 105.000</p>
                            <!-- Tanda panah mobile -->
                            <span class="lg:hidden text-xs font-extrabold text-slate-700 flex items-center gap-1">
                                Detail <i class="fas fa-chevron-right text-[10px]"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Order 2: Sari Ayu -->
                    <div class="order-card-item p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 cursor-pointer transition-all">
                        <div class="flex justify-between items-start mb-1">
                            <h4 class="font-bold text-slate-900 text-sm">#0882 – Sari Ayu</h4>
                            <span class="px-2.5 py-1 bg-slate-100 text-slate-600 rounded-md text-[10px] font-extrabold">Diterima</span>
                        </div>
                        <p class="text-xs font-medium text-slate-500">1 Barang • Reguler</p>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm font-black text-slate-900">Rp 35.000</p>
                            <!-- Tanda panah mobile -->
                            <span class="lg:hidden text-xs font-extrabold text-slate-700 flex items-center gap-1">
                                Detail <i class="fas fa-chevron-right text-[10px]"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Order 3: Andi -->
                    <div class="order-card-item p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 cursor-pointer transition-all">
                        <div class="flex justify-between items-start mb-1">
                            <h4 class="font-bold text-slate-900 text-sm">#0880 – Andi</h4>
                            <span class="px-2.5 py-1 bg-emerald-100 text-emerald-700 rounded-md text-[10px] font-extrabold">Selesai</span>
                        </div>
                        <p class="text-xs font-medium text-slate-500">1 Barang • Prioritas</p>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm font-black text-slate-900">Rp 55.000</p>
                            <!-- Tanda panah mobile -->
                            <span class="lg:hidden text-xs font-extrabold text-slate-700 flex items-center gap-1">
                                Detail <i class="fas fa-chevron-right text-[10px]"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Panel: Desktop Master-Detail View (100% Persis Desain Asli Dekstop) -->
            <div class="hidden lg:flex flex-1 bg-white rounded-3xl border border-slate-200 shadow-sm flex-col h-full overflow-hidden">
                <div class="p-6 border-b border-slate-100 flex justify-between items-center shrink-0">
                    <div>
                        <h3 class="text-xl font-extrabold text-slate-900 tracking-tight detail-title">Detail Pesanan #0881</h3>
                        <p class="text-xs font-semibold text-slate-500 mt-1 detail-subtitle">Budi Santoso • 08123456789</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="edit_pesanan.php" class="px-4 py-2 bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-xl text-xs font-extrabold transition flex items-center gap-2">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <button type="button" class="px-4 py-2 bg-red-50 hover:bg-red-100 text-red-600 rounded-xl text-xs font-extrabold transition flex items-center gap-2">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </div>
                </div>

                <div class="flex-1 overflow-y-auto p-6 space-y-6">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="bg-slate-50/80 p-5 rounded-2xl border border-slate-100 space-y-2.5 text-xs font-medium">
                            <div class="flex justify-between"><span class="text-slate-400">Tanggal Masuk:</span><span class="font-bold text-slate-800 detail-date-in">17 Okt 2026</span></div>
                            <div class="flex justify-between"><span class="text-slate-400">Status Bayar:</span><span class="detail-status-pay"><span class="font-extrabold text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded text-[10px]">LUNAS – QRIS</span></span></div>
                            <div class="flex justify-between"><span class="text-slate-400">Drop Point:</span><span class="font-bold text-slate-800 detail-drop-point">Oro-oro Dowo</span></div>
                            <div class="flex justify-between"><span class="text-slate-400">Tanggal Selesai:</span><span class="font-bold text-slate-500 detail-date-out">Belum selesai</span></div>
                        </div>
                        <div class="bg-brand-darkCard text-white p-5 rounded-2xl flex flex-col justify-center items-center text-center">
                            <p class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 mb-2">Status Pengerjaan</p>
                            <div class="w-full">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">STATUS SAAT INI</p>
                                <select id="detail-status-select" class="w-full bg-slate-800 border border-slate-700 text-white font-extrabold text-sm rounded-xl px-3 py-2 outline-none focus:border-brand-yellow text-center text-center-last">
                                    <option>Diterima</option>
                                    <option selected>Sedang Diproses</option>
                                    <option>Selesai Diproses</option>
                                    <option>Diambil</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xs font-extrabold text-slate-800 uppercase tracking-wider mb-3 detail-items-count">Daftar Barang (2 Item)</h4>
                        <div class="space-y-3 detail-items-container">
                            <div class="p-4 border border-slate-200 rounded-2xl flex justify-between items-center bg-white">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 border border-slate-200"><i class="fas fa-camera text-lg"></i></div>
                                    <div>
                                        <h5 class="font-extrabold text-slate-900 text-sm">Sepatu Nike Air Max <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded ml-1">Putih</span></h5>
                                        <div class="text-xs text-slate-500 space-y-0.5 mt-1 font-medium">
                                            <p><i class="fas fa-check text-yellow-600 mr-1"></i> Basic & White Shoes (30K)</p>
                                            <p><i class="fas fa-check text-yellow-600 mr-1"></i> Unyellowing (30K)</p>
                                            <p><i class="fas fa-bolt text-blue-500 mr-1"></i> Express (+10K)</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="font-black text-slate-900 text-sm">Rp 70.000</span>
                            </div>
                            <div class="p-4 border border-slate-200 rounded-2xl flex justify-between items-center bg-white">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 border border-slate-200"><i class="fas fa-upload text-sm"></i></div>
                                    <div>
                                        <h5 class="font-extrabold text-slate-900 text-sm">Tas Coach <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded ml-1">Hitam</span></h5>
                                        <div class="text-xs text-slate-500 space-y-0.5 mt-1 font-medium">
                                            <p><i class="fas fa-check text-yellow-600 mr-1"></i> Deep Clean Tas M (35K)</p>
                                            <p><i class="fas fa-clock text-slate-400 mr-1"></i> Reguler (Free)</p>
                                        </div>
                                    </div>
                                </div>
                                <span class="font-black text-slate-900 text-sm">Rp 35.000</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-xs font-extrabold text-slate-800 uppercase tracking-wider mb-3">Dokumentasi Foto Sebelum & Sesudah</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-xs font-bold text-slate-700 mb-2">Foto Before / Sebelum Dicuci</p>
                                <div class="w-full h-40 bg-slate-200 rounded-2xl overflow-hidden border border-slate-200"><img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80" alt="Before" class="w-full h-full object-cover"></div>
                                <p class="text-[10px] text-slate-400 mt-1">Contoh foto • bukan foto pelanggan</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-700 mb-2">Upload Foto After / Sesudah Dicuci</p>
                                <div class="upload-box-trigger w-full h-40 border-2 border-dashed border-slate-300 rounded-2xl flex flex-col items-center justify-center text-center p-4 hover:bg-slate-50 cursor-pointer">
                                    <i class="fas fa-upload text-xl text-slate-400 mb-2"></i><span class="text-xs font-extrabold text-slate-700">Pilih Foto After</span><span class="text-[10px] text-slate-400 mt-0.5">JPG atau PNG • Maks. 5 MB</span>
                                </div>
                                <p class="text-[10px] text-slate-400 mt-1">Belum diunggah • Unggah hasil pengerjaan sebelum mengirim dokumentasi.</p>
                            </div>
                        </div>

                        <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-2xl flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-brand-yellow/20 text-yellow-800 flex items-center justify-center text-sm font-bold"><i class="fab fa-whatsapp"></i></div>
                                <div><h5 class="text-xs font-extrabold text-slate-900">Kirim Dokumentasi via WhatsApp</h5><p class="text-[10px] text-slate-500 font-medium">Budi Santoso • 08123456789</p><p class="text-[10px] text-yellow-800 font-medium mt-0.5">Foto After wajib diunggah sebelum dokumentasi penyelesaian dapat dikirim.</p></div>
                            </div>
                            <button disabled class="px-4 py-2 bg-slate-200 text-slate-400 rounded-xl text-xs font-bold cursor-not-allowed flex items-center gap-2"><i class="fas fa-paper-plane"></i> Kirim Foto After</button>
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-slate-100 flex justify-between items-center shrink-0 bg-white">
                    <div><p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Keseluruhan</p><h3 class="text-2xl font-black text-slate-900 detail-total">Rp 105.000</h3></div>
                    <a href="invoice.php" class="px-6 py-3.5 bg-brand-darkCard hover:bg-slate-800 text-white rounded-xl text-xs font-extrabold transition shadow-lg flex items-center gap-2"><i class="fas fa-print"></i> Cetak Invoice</a>
                </div>
            </div>
        </div>
    </main>
</div>
<?php require_once 'includes/footer.php'; ?>
