<?php
$page_title = 'Edit Pesanan #0881 - KickDropShoe';
$current_page = 'tambah_pesanan';
$user_role = 'OWNER';
require_once 'includes/header.php';
?>
<div class="flex h-screen overflow-hidden bg-brand-slateBg">
    <?php require_once 'includes/sidebar.php'; ?>
    
    <main class="flex-1 flex flex-col h-full overflow-y-auto relative pb-28">
        <header class="bg-white border-b border-slate-200 px-8 py-5 flex justify-between items-center sticky top-0 z-20">
            <div>
                <h2 class="text-xl font-extrabold text-slate-900 tracking-tight">Edit Pesanan #0881</h2>
                <p class="text-xs font-semibold text-slate-400 mt-0.5">Perbarui data pelanggan, barang, dan pengerjaan pesanan.</p>
            </div>
            <div class="text-xs font-bold text-slate-600">Total: <span class="font-extrabold text-slate-900 grand-total-val">Rp 105.000</span></div>
        </header>

        <div class="p-4 md:p-8 max-w-6xl mx-auto w-full space-y-6">
            <div>
                <a href="pesanan.php" class="inline-flex items-center gap-2 text-xs font-bold text-slate-700 hover:text-slate-900">
                    <i class="fas fa-arrow-left"></i> Kembali ke Detail
                </a>
            </div>

            <div class="bg-white rounded-3xl border border-slate-200 p-6 md:p-8 shadow-sm space-y-5">
                <h3 class="text-xs font-extrabold text-slate-800 uppercase tracking-wider flex items-center gap-2">
                    <i class="fas fa-user-circle text-slate-400"></i> Informasi Pelanggan
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-5">
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">NAMA PELANGGAN</label>
                        <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-semibold text-slate-800 outline-none" value="Budi Santoso">
                    </div>
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">NO WHATSAPP</label>
                        <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-semibold text-slate-800 outline-none" value="08123456789">
                    </div>
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">DROP POINT</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-semibold text-slate-800 outline-none">
                            <option>3. Kopi Satu Arah (Oro-oro Dowo)</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-3 md:gap-4 pt-2">
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">TANGGAL MASUK</label>
                        <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-semibold text-slate-800 outline-none" value="17/10/2026">
                    </div>
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">TANGGAL SELESAI</label>
                        <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-semibold text-slate-800 outline-none" placeholder="dd/mm/yyyy">
                    </div>
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">NOMOR PESANAN</label>
                        <input type="text" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-semibold text-slate-800 outline-none" value="#0881" readonly>
                    </div>
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">STATUS PENGERJAAN</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-3 text-xs font-semibold text-slate-800 outline-none">
                            <option selected>Sedang Diproses</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">STATUS BAYAR</label>
                        <select class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-3 text-xs font-semibold text-slate-800 outline-none">
                            <option selected>LUNAS – QRIS</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Item 1 Dark Container -->
            <div id="item-container-1" data-item-id="1" class="item-dark-container bg-brand-darkCard text-white rounded-3xl p-6 md:p-8 shadow-xl space-y-6">
                <div class="flex justify-between items-center border-b border-slate-800 pb-4">
                    <h3 class="text-sm font-extrabold flex items-center gap-3">
                        <span class="bg-brand-yellow text-slate-900 w-6 h-6 rounded-md flex items-center justify-center text-xs font-black">1</span> Detail Barang
                    </h3>
                    <button type="button" onclick="deleteItemCard(1)" class="px-3 py-1 bg-slate-800 hover:bg-slate-700 text-slate-400 rounded-lg text-xs font-semibold transition">
                        <i class="fas fa-trash mr-1"></i> Hapus
                    </button>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">NAMA BARANG</label>
                                <input type="text" class="w-full bg-brand-darkInput border border-slate-700 rounded-xl px-4 py-3 text-xs font-medium text-white outline-none" value="Sepatu Nike Air Max">
                            </div>
                            <div>
                                <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">WARNA</label>
                                <input type="text" class="w-full bg-brand-darkInput border border-slate-700 rounded-xl px-4 py-3 text-xs font-medium text-white outline-none" value="Putih">
                            </div>
                        </div>
                        <div class="bg-slate-900/60 p-5 rounded-2xl border border-slate-800 space-y-3">
                            <label class="block text-[10px] font-extrabold text-brand-yellow uppercase">KATEGORI & LAYANAN UTAMA</label>
                            <div class="grid grid-cols-4 gap-2">
                                <button type="button" data-category="Shoes Care" class="cat-btn py-2 text-[10px] font-bold border border-brand-yellow bg-brand-yellow/10 text-brand-yellow rounded-lg">Shoes Care</button>
                                <button type="button" data-category="Others" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Others</button>
                                <button type="button" data-category="Repair" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Repair</button>
                                <button type="button" data-category="Package" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Package</button>
                            </div>
                            <div>
                                <select id="service-select-1" onchange="updateItemSubtotal(1)" class="service-select w-full bg-brand-darkInput border border-slate-700 rounded-xl px-3 py-2.5 text-xs text-white font-semibold">
                                    <option value="30000" selected>Basic & White Shoes – Rp 30.000</option>
                                </select>
                            </div>
                            <div>
                                <select class="w-full bg-brand-darkInput border border-slate-700 rounded-xl px-3 py-2.5 text-xs text-white font-semibold">
                                    <option selected>Unyellowing – Rp 30.000</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 flex flex-col justify-between">
                        <div class="bg-slate-900/80 p-5 rounded-2xl border border-slate-800 space-y-4">
                            <label class="block text-[10px] font-extrabold text-brand-yellow uppercase tracking-wider">EXTRA TREATMENT</label>
                            
                            <div class="grid grid-cols-3 gap-2">
                                <label class="p-3 border border-slate-700 rounded-xl flex flex-col items-center justify-center cursor-pointer transition">
                                    <input type="radio" name="speed-1" data-price="0" onchange="updateItemSubtotal(1)" class="text-brand-yellow mb-1">
                                    <span class="speed-title text-[10px] font-bold text-slate-400">Reguler</span>
                                    <span class="text-[9px] text-slate-400">4–5 Hari • Free</span>
                                </label>
                                <label class="p-3 border-2 border-brand-yellow bg-brand-yellow/10 rounded-xl flex flex-col items-center justify-center cursor-pointer transition">
                                    <input type="radio" name="speed-1" data-price="10000" checked onchange="updateItemSubtotal(1)" class="text-brand-yellow mb-1">
                                    <span class="speed-title text-[10px] font-bold text-brand-yellow">Express</span>
                                    <span class="text-[9px] text-slate-400">1–2 Hari • +10K</span>
                                </label>
                                <label class="p-3 border border-slate-700 rounded-xl flex flex-col items-center justify-center cursor-pointer transition">
                                    <input type="radio" name="speed-1" data-price="5000" onchange="updateItemSubtotal(1)" class="text-brand-yellow mb-1">
                                    <span class="speed-title text-[10px] font-bold text-slate-400">Prioritas</span>
                                    <span class="text-[9px] text-slate-400">3 Hari • +5K</span>
                                </label>
                            </div>

                            <div class="space-y-2 pt-1">
                                <label class="flex justify-between items-center p-3.5 border border-slate-700/90 bg-slate-800/50 rounded-xl cursor-pointer hover:border-slate-500 transition">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" data-price="15000" onchange="updateItemSubtotal(1)" class="extra-check-1 w-4 h-4 rounded text-brand-yellow bg-slate-900 border-slate-600 focus:ring-brand-yellow">
                                        <span class="text-xs font-bold text-white">Pipis Hewan (8 Hari)</span>
                                    </div>
                                    <span class="text-xs font-bold text-brand-yellow">+15K</span>
                                </label>
                                
                                <label class="flex justify-between items-center p-3.5 border border-slate-700/90 bg-slate-800/50 rounded-xl cursor-pointer hover:border-slate-500 transition">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" data-price="5000" onchange="updateItemSubtotal(1)" class="extra-check-1 w-4 h-4 rounded text-brand-yellow bg-slate-900 border-slate-600 focus:ring-brand-yellow">
                                        <span class="text-xs font-bold text-white">Noda Berat (5–8 Hari)</span>
                                    </div>
                                    <span class="text-xs font-bold text-brand-yellow">+5K</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="bg-black/60 p-4 rounded-xl border border-slate-800 flex justify-between items-center">
                            <span class="text-xs font-bold text-slate-400">Subtotal Barang Ini:</span>
                            <span id="subtotal-val-1" class="subtotal-val text-lg font-black text-brand-yellow">Rp 70.000</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 pt-2 border-t border-slate-800">
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-2">FOTO BARANG SEBELUM DICUCI (BEFORE)</label>
                        <div class="upload-box-trigger border-2 border-dashed border-slate-700 rounded-2xl p-6 flex flex-col items-center justify-center text-center cursor-pointer hover:bg-slate-800/40 transition">
                            <i class="fas fa-upload text-slate-400 text-lg mb-2"></i>
                            <span class="text-xs font-bold text-white">Upload Foto Before</span>
                            <span class="text-[10px] text-slate-500 mt-0.5">JPG atau PNG • Maks. 5 MB</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-2">CATATAN TAMBAHAN</label>
                        <textarea class="w-full bg-brand-darkInput border border-slate-700 rounded-2xl p-4 text-xs font-medium text-white outline-none h-24 resize-none" placeholder="–"></textarea>
                    </div>
                </div>
            </div>

            <!-- Item 2 Dark Container -->
            <div id="item-container-2" data-item-id="2" class="item-dark-container bg-brand-darkCard text-white rounded-3xl p-6 md:p-8 shadow-xl space-y-6">
                <div class="flex justify-between items-center border-b border-slate-800 pb-4">
                    <h3 class="text-sm font-extrabold flex items-center gap-3">
                        <span class="bg-brand-yellow text-slate-900 w-6 h-6 rounded-md flex items-center justify-center text-xs font-black">2</span> Detail Barang
                    </h3>
                    <button type="button" onclick="deleteItemCard(2)" class="px-3 py-1 bg-slate-800 hover:bg-slate-700 text-slate-400 rounded-lg text-xs font-semibold transition">
                        <i class="fas fa-trash mr-1"></i> Hapus
                    </button>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                    <div class="space-y-4">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">NAMA BARANG</label>
                                <input type="text" class="w-full bg-brand-darkInput border border-slate-700 rounded-xl px-4 py-3 text-xs font-medium text-white outline-none" value="Tas Coach">
                            </div>
                            <div>
                                <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-1.5">WARNA</label>
                                <input type="text" class="w-full bg-brand-darkInput border border-slate-700 rounded-xl px-4 py-3 text-xs font-medium text-white outline-none" value="Hitam">
                            </div>
                        </div>
                        <div class="bg-slate-900/60 p-5 rounded-2xl border border-slate-800 space-y-3">
                            <label class="block text-[10px] font-extrabold text-brand-yellow uppercase">KATEGORI & LAYANAN UTAMA</label>
                            <div class="grid grid-cols-4 gap-2">
                                <button type="button" data-category="Shoes Care" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Shoes Care</button>
                                <button type="button" data-category="Others" class="cat-btn py-2 text-[10px] font-bold border border-brand-yellow bg-brand-yellow/10 text-brand-yellow rounded-lg">Others</button>
                                <button type="button" data-category="Repair" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Repair</button>
                                <button type="button" data-category="Package" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Package</button>
                            </div>
                            <div>
                                <select id="service-select-2" onchange="updateItemSubtotal(2)" class="service-select w-full bg-brand-darkInput border border-slate-700 rounded-xl px-3 py-2.5 text-xs text-white font-semibold">
                                    <option value="35000" selected>Tas M – Rp 35.000</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4 flex flex-col justify-between">
                        <div class="bg-slate-900/80 p-5 rounded-2xl border border-slate-800 space-y-4">
                            <label class="block text-[10px] font-extrabold text-brand-yellow uppercase tracking-wider">EXTRA TREATMENT</label>
                            
                            <div class="grid grid-cols-3 gap-2">
                                <label class="p-3 border-2 border-brand-yellow bg-brand-yellow/10 rounded-xl flex flex-col items-center justify-center cursor-pointer transition">
                                    <input type="radio" name="speed-2" data-price="0" checked onchange="updateItemSubtotal(2)" class="text-brand-yellow mb-1">
                                    <span class="speed-title text-[10px] font-bold text-brand-yellow">Reguler</span>
                                    <span class="text-[9px] text-slate-400">4–5 Hari • Free</span>
                                </label>
                                <label class="p-3 border border-slate-700 rounded-xl flex flex-col items-center justify-center cursor-pointer transition">
                                    <input type="radio" name="speed-2" data-price="10000" onchange="updateItemSubtotal(2)" class="text-brand-yellow mb-1">
                                    <span class="speed-title text-[10px] font-bold text-slate-400">Express</span>
                                    <span class="text-[9px] text-slate-400">1–2 Hari • +10K</span>
                                </label>
                                <label class="p-3 border border-slate-700 rounded-xl flex flex-col items-center justify-center cursor-pointer transition">
                                    <input type="radio" name="speed-2" data-price="5000" onchange="updateItemSubtotal(2)" class="text-brand-yellow mb-1">
                                    <span class="speed-title text-[10px] font-bold text-slate-400">Prioritas</span>
                                    <span class="text-[9px] text-slate-400">3 Hari • +5K</span>
                                </label>
                            </div>

                            <div class="space-y-2 pt-1">
                                <label class="flex justify-between items-center p-3.5 border border-slate-700/90 bg-slate-800/50 rounded-xl cursor-pointer hover:border-slate-500 transition">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" data-price="15000" onchange="updateItemSubtotal(2)" class="extra-check-2 w-4 h-4 rounded text-brand-yellow bg-slate-900 border-slate-600 focus:ring-brand-yellow">
                                        <span class="text-xs font-bold text-white">Pipis Hewan (8 Hari)</span>
                                    </div>
                                    <span class="text-xs font-bold text-brand-yellow">+15K</span>
                                </label>
                                
                                <label class="flex justify-between items-center p-3.5 border border-slate-700/90 bg-slate-800/50 rounded-xl cursor-pointer hover:border-slate-500 transition">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" data-price="5000" onchange="updateItemSubtotal(2)" class="extra-check-2 w-4 h-4 rounded text-brand-yellow bg-slate-900 border-slate-600 focus:ring-brand-yellow">
                                        <span class="text-xs font-bold text-white">Noda Berat (5–8 Hari)</span>
                                    </div>
                                    <span class="text-xs font-bold text-brand-yellow">+5K</span>
                                </label>
                            </div>
                        </div>
                        
                        <div class="bg-black/60 p-4 rounded-xl border border-slate-800 flex justify-between items-center">
                            <span class="text-xs font-bold text-slate-400">Subtotal Barang Ini:</span>
                            <span id="subtotal-val-2" class="subtotal-val text-lg font-black text-brand-yellow">Rp 35.000</span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 pt-2 border-t border-slate-800">
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-2">FOTO BARANG SEBELUM DICUCI (BEFORE)</label>
                        <div class="upload-box-trigger border-2 border-dashed border-slate-700 rounded-2xl p-6 flex flex-col items-center justify-center text-center cursor-pointer hover:bg-slate-800/40 transition">
                            <i class="fas fa-upload text-slate-400 text-lg mb-2"></i>
                            <span class="text-xs font-bold text-white">Upload Foto Before</span>
                            <span class="text-[10px] text-slate-500 mt-0.5">JPG atau PNG • Maks. 5 MB</span>
                        </div>
                    </div>
                    <div>
                        <label class="block text-[10px] font-extrabold text-slate-400 uppercase mb-2">CATATAN TAMBAHAN</label>
                        <textarea class="w-full bg-brand-darkInput border border-slate-700 rounded-2xl p-4 text-xs font-medium text-white outline-none h-24 resize-none" placeholder="–"></textarea>
                    </div>
                </div>
            </div>

            <button type="button" class="add-item-btn-trigger w-full py-4 border-2 border-dashed border-slate-300 rounded-3xl text-slate-500 font-extrabold text-xs hover:bg-white hover:border-slate-400 hover:text-slate-800 transition flex items-center justify-center gap-2">
                <i class="fas fa-plus-circle"></i> Tambah Barang Cuci / Repair
            </button>

            <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm space-y-4">
                <h3 class="text-xs font-extrabold text-slate-800 uppercase tracking-wider">Dokumentasi Foto Sebelum & Sesudah</h3>
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <p class="text-xs font-bold text-slate-700 mb-2">Foto Before / Sebelum Dicuci</p>
                        <div class="w-full h-44 bg-slate-200 rounded-2xl overflow-hidden border border-slate-200">
                            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80" alt="Before" class="w-full h-full object-cover">
                        </div>
                        <p class="text-[10px] text-slate-400 mt-1">Contoh foto • bukan foto pelanggan</p>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-700 mb-2">Upload Foto After / Sesudah Dicuci</p>
                        <div class="upload-box-trigger w-full h-44 border-2 border-dashed border-slate-300 rounded-2xl flex flex-col items-center justify-center text-center p-4 hover:bg-slate-50 cursor-pointer">
                            <i class="fas fa-upload text-slate-400 text-xl mb-2"></i>
                            <span class="text-xs font-extrabold text-slate-700">Pilih Foto After</span>
                            <span class="text-[10px] text-slate-400 mt-0.5">JPG atau PNG • Maks. 5 MB</span>
                        </div>
                        <p class="text-[10px] text-slate-400 mt-1">Belum diunggah • Unggah hasil pengerjaan sebelum mengirim dokumentasi.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed bottom-0 right-0 w-full lg:w-[calc(100%-280px)] bg-white border-t border-slate-200 px-4 md:px-8 py-3.5 md:py-4 flex flex-col sm:flex-row justify-between items-center gap-3 z-30 shadow-[0_-10px_40px_rgba(0,0,0,0.05)]">
            <div class="w-full sm:w-auto flex justify-between sm:block">
                <p class="text-[10px] font-extrabold text-slate-400 uppercase tracking-wider">Total Tagihan Keseluruhan</p>
                <h3 class="text-2xl md:text-3xl font-black text-slate-900 grand-total-val">Rp 105.000</h3>
            </div>
            <div class="flex items-center gap-2 md:gap-4 w-full sm:w-auto justify-end">
                <div class="flex items-center gap-1.5 md:gap-2">
                    <span class="text-xs font-bold text-slate-500 hidden sm:inline">Metode pembayaran</span>
                    <select class="bg-slate-50 border border-slate-200 rounded-xl px-2.5 md:px-3 py-2 text-xs font-extrabold text-slate-800 outline-none">
                        <option selected>QRIS</option>
                        <option>Cash</option>
                        <option>Kartu</option>
                    </select>
                </div>
                <a href="pesanan.php" class="px-4 md:px-6 py-2.5 md:py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-extrabold rounded-xl text-xs transition inline-flex items-center">Batal</a>
                <button type="button" onclick="alert('Perubahan Berhasil Disimpan!')" class="flex-1 sm:flex-none justify-center px-4 md:px-6 py-2.5 md:py-3 bg-brand-yellow hover:bg-brand-yellowHover text-slate-900 font-extrabold rounded-xl text-xs transition shadow-lg shadow-brand-yellow/30">Simpan Perubahan</button>
            </div>
        </div>
    </main>
</div>
<?php require_once 'includes/footer.php'; ?>
