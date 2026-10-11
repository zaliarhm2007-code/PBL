<?php
$page_title = 'Pratinjau Invoice #0881 - KickDropShoe';
$current_page = 'pesanan';
$user_role = 'OWNER';
$is_invoice = true;
$body_class = 'font-sans antialiased bg-brand-slateBg print:bg-white';
require_once 'includes/header.php';
?>
<div class="flex h-screen overflow-hidden">
    <!-- Sidebar (Hilang hanya saat dicetak) -->
    <?php require_once 'includes/sidebar.php'; ?>
    
    <main class="flex-1 flex flex-col h-full overflow-y-auto print:overflow-visible">
        <!-- Header (Hilang hanya saat dicetak) -->
        <header class="bg-white border-b border-slate-200 px-4 md:px-8 py-4 md:py-5 flex justify-between items-center sticky top-0 z-10 shrink-0 print:hidden">
            <div class="flex items-center gap-3">
                <button type="button" onclick="toggleSidebar()" class="lg:hidden p-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition focus:outline-none" aria-label="Menu">
                    <i class="fas fa-bars text-base"></i>
                </button>
                <div>
                    <h2 class="text-lg md:text-xl font-extrabold text-slate-900 tracking-tight">Pratinjau Invoice</h2>
                    <p class="text-xs md:text-sm font-medium text-slate-500 mt-0.5">Periksa rincian pesanan #0881 sebelum mencetak.</p>
                </div>
            </div>
            <div class="bg-slate-100 px-3 md:px-4 py-1.5 md:py-2 rounded-full border border-slate-200 text-[11px] md:text-xs font-bold text-slate-600 flex items-center gap-2">
                <i class="far fa-calendar"></i> <span class="hidden sm:inline">17 Sep 2026</span><span class="sm:hidden">17 Sep</span>
            </div>
        </header>

        <div class="p-4 md:p-8 flex flex-col items-center gap-6 print:p-0">
            <!-- Tombol Aksi (Hilang hanya saat dicetak) -->
            <div class="w-full max-w-4xl flex flex-col sm:flex-row justify-between items-stretch sm:items-center gap-3 print:hidden">
                <a href="pesanan.php" class="justify-center px-5 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-900 rounded-xl text-sm font-extrabold transition flex items-center gap-2 shadow-sm">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar Pesanan
                </a>
                <div class="flex items-center gap-2.5 sm:gap-3">
                    <button type="button" onclick="window.print()" class="flex-1 sm:flex-none justify-center px-4 md:px-5 py-2.5 bg-white border border-slate-200 hover:bg-slate-50 text-slate-900 rounded-xl text-xs md:text-sm font-extrabold transition flex items-center gap-2 shadow-sm">
                        <i class="fas fa-file-pdf"></i> Unduh PDF
                    </button>
                    <button type="button" onclick="window.print()" class="flex-1 sm:flex-none justify-center px-4 md:px-5 py-2.5 bg-brand-yellow hover:bg-brand-yellowHover text-slate-900 rounded-xl text-xs md:text-sm font-extrabold transition flex items-center gap-2 shadow-sm">
                        <i class="fas fa-print"></i> Cetak Sekarang
                    </button>
                </div>
            </div>

            <!-- KERTAS INVOICE (Yang akan tercetak) -->
            <div class="w-full max-w-4xl bg-white shadow-xl border border-slate-200 print:shadow-none print:border-none print:max-w-full rounded-2xl md:rounded-3xl overflow-hidden">
                <!-- Garis Kuning Atas -->
                <div class="h-2 w-full bg-brand-yellow"></div>
                
                <div class="p-10 space-y-8">
                    <!-- Header Invoice -->
                    <div class="flex justify-between items-start">
                        <!-- Bagian Kiri (Logo & Alamat) -->
                        <div class="space-y-2">
                            <div class="flex items-center gap-3 mb-4">
                                <img src="assets/logo.png" alt="Logo" class="w-10 h-10 rounded-full shadow-md border-1.5 border-slate-900 object-cover bg-white">
                                <h2 class="text-2xl font-black text-slate-900">KickDropShoe</h2>
                            </div>
                            <p class="text-sm font-medium text-slate-500">Jl. Soekarno Hatta No. 12, Malang</p>
                            <p class="text-sm font-medium text-slate-500">Telp 0812-3456-7890</p>
                        </div>
                        
                        <!-- Bagian Kanan (Nomor Invoice) -->
                        <div class="text-right space-y-1">
                            <p class="text-lg font-black text-slate-900">NOTA TRANSAKSI</p>
                            <h1 class="text-3xl font-black text-slate-900">#0881</h1>
                            <p class="text-sm font-medium text-slate-500 mt-2">Tanggal: 17 Okt 2026</p>
                        </div>
                    </div>

                    <!-- Info Pelanggan -->
                    <div class="flex justify-between items-start">
                        <div class="space-y-1">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">PELANGGAN</p>
                            <p class="text-lg font-black text-slate-900">Budi Santoso</p>
                            <p class="text-sm font-medium text-slate-500">No WhatsApp: 08123456789</p>
                            <p class="text-sm font-medium text-slate-500">Drop Point: Oro-oro Dowo</p>
                        </div>
                        <div class="text-right space-y-2">
                            <div class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-md text-xs font-bold mb-1">LUNAS - QRIS</div>
                            <p class="text-sm font-medium text-slate-500">Status: Sedang Diproses</p>
                            <p class="text-sm font-medium text-slate-500">Tanggal Selesai: Belum selesai</p>
                        </div>
                    </div>

                    <!-- Tabel Pesanan -->
                    <div class="w-full overflow-x-auto">
                        <div class="min-w-[500px]">
                            <div class="bg-brand-darkCard text-white px-5 py-4 flex font-bold text-sm rounded-t-xl">
                                <div class="flex-1">Deskripsi / Barang</div>
                                <div class="w-20 text-center">Qty</div>
                                <div class="w-32 text-right">Harga</div>
                                <div class="w-32 text-right">Subtotal</div>
                            </div>
                        
                        <!-- Item 1 -->
                        <div class="px-5 py-4 border-b border-slate-200 flex text-sm">
                            <div class="flex-1 space-y-1">
                                <p class="font-extrabold text-slate-900">Sepatu Nike Air Max • Putih</p>
                                <p class="text-xs font-medium text-slate-500">Basic & White Shoes: Rp 30.000<br>Unyellowing: Rp 30.000<br>Express (1-2 Hari): Rp 10.000</p>
                            </div>
                            <div class="w-20 text-center font-medium text-slate-700">1</div>
                            <div class="w-32 text-right font-medium text-slate-700">Rp 70.000</div>
                            <div class="w-32 text-right font-extrabold text-slate-900">Rp 70.000</div>
                        </div>

                        <!-- Item 2 -->
                        <div class="px-5 py-4 border-b border-slate-200 flex text-sm">
                            <div class="flex-1 space-y-1">
                                <p class="font-extrabold text-slate-900">Tas Coach • Hitam</p>
                                <p class="text-xs font-medium text-slate-500">Deep Clean Tas M: Rp 35.000<br>Reguler (4-5 Hari): Free</p>
                            </div>
                            <div class="w-20 text-center font-medium text-slate-700">1</div>
                            <div class="w-32 text-right font-medium text-slate-700">Rp 35.000</div>
                            <div class="w-32 text-right font-extrabold text-slate-900">Rp 35.000</div>
                        </div>
                        </div>
                    </div>

                    <!-- Total Akhir -->
                    <div class="bg-slate-50 p-5 rounded-xl flex justify-between items-center border border-slate-100">
                        <p class="text-base font-bold text-slate-700">Total Akhir</p>
                        <p class="text-3xl font-black text-slate-900">Rp 105.000</p>
                    </div>

                    <!-- Ketentuan & Footer -->
                    <div class="space-y-6 pt-4">
                        <div>
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-2">KETENTUAN</p>
                            <p class="text-xs font-medium text-slate-700">* Barang yang sudah diambil tidak dapat dikembalikan.</p>
                        </div>
                        <hr class="border-slate-200">
                        <p class="text-center font-bold text-slate-900">Terima kasih atas kepercayaan Anda!</p>
                    </div>
                </div>
            </div>
            
            <p class="text-xs font-medium text-slate-400 print:hidden mt-2">Tombol dan navigasi tidak termasuk dalam hasil cetak.</p>
        </div>
    </main>
</div>
<?php require_once 'includes/footer.php'; ?>
