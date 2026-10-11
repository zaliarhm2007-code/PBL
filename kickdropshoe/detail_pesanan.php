<?php
$order_id = isset($_GET['id']) ? trim($_GET['id']) : '0881';
if (!str_starts_with($order_id, '#')) {
    $order_id_display = '#' . $order_id;
} else {
    $order_id_display = $order_id;
    $order_id = ltrim($order_id, '#');
}

// Master Data Pesanan
$orders_database = [
    '0881' => [
        'id' => '#0881',
        'customer' => 'Budi Santoso',
        'whatsapp' => '08123456789',
        'drop_point' => 'Oro-oro Dowo',
        'date_in' => '17 Okt 2026',
        'date_out' => 'Belum selesai',
        'status_kerja' => 'Sedang Diproses',
        'status_bayar' => 'LUNAS – QRIS',
        'is_paid' => true,
        'badge_status_kerja' => 'bg-yellow-100 text-yellow-800',
        'items_count' => '2 Item',
        'total' => 'Rp 105.000',
        'photo_before' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80',
        'items' => [
            [
                'name' => 'Sepatu Nike Air Max',
                'color' => 'Putih',
                'treatments' => [
                    ['label' => 'Basic & White Shoes (30K)', 'icon' => 'fas fa-check text-yellow-600'],
                    ['label' => 'Unyellowing (30K)', 'icon' => 'fas fa-check text-yellow-600'],
                    ['label' => 'Express (+10K)', 'icon' => 'fas fa-bolt text-blue-500'],
                ],
                'price' => 'Rp 70.000'
            ],
            [
                'name' => 'Tas Coach',
                'color' => 'Hitam',
                'treatments' => [
                    ['label' => 'Deep Clean Tas M (35K)', 'icon' => 'fas fa-check text-yellow-600'],
                    ['label' => 'Reguler (Free)', 'icon' => 'fas fa-clock text-slate-400'],
                ],
                'price' => 'Rp 35.000'
            ]
        ]
    ],
    '0882' => [
        'id' => '#0882',
        'customer' => 'Sari Ayu',
        'whatsapp' => '08129876543',
        'drop_point' => 'Suhat',
        'date_in' => '16 Okt 2026',
        'date_out' => 'Belum selesai',
        'status_kerja' => 'Diterima',
        'status_bayar' => 'BELUM LUNAS',
        'is_paid' => false,
        'badge_status_kerja' => 'bg-slate-100 text-slate-700',
        'items_count' => '1 Item',
        'total' => 'Rp 35.000',
        'photo_before' => 'https://images.unsplash.com/photo-1543163521-1bf539c55dd2?w=500&q=80',
        'items' => [
            [
                'name' => 'Flatshoes',
                'color' => 'Krem',
                'treatments' => [
                    ['label' => 'Flatshoes / Heels (25K)', 'icon' => 'fas fa-check text-yellow-600'],
                    ['label' => 'Reguler (Free)', 'icon' => 'fas fa-clock text-slate-400'],
                ],
                'price' => 'Rp 35.000'
            ]
        ]
    ],
    '0880' => [
        'id' => '#0880',
        'customer' => 'Andi',
        'whatsapp' => '08561234567',
        'drop_point' => 'Dieng',
        'date_in' => '15 Okt 2026',
        'date_out' => '17 Okt 2026',
        'status_kerja' => 'Selesai Diproses',
        'status_bayar' => 'LUNAS – CASH',
        'is_paid' => true,
        'badge_status_kerja' => 'bg-emerald-100 text-emerald-700',
        'items_count' => '1 Item',
        'total' => 'Rp 55.000',
        'photo_before' => 'https://images.unsplash.com/photo-1463100099107-aa0980c362e6?w=500&q=80',
        'items' => [
            [
                'name' => 'Sepatu Converse',
                'color' => 'Hitam',
                'treatments' => [
                    ['label' => 'Premium Deep Clean (50K)', 'icon' => 'fas fa-check text-yellow-600'],
                    ['label' => 'Prioritas (+5K)', 'icon' => 'fas fa-bolt text-blue-500'],
                ],
                'price' => 'Rp 55.000'
            ]
        ]
    ]
];

$order = $orders_database[$order_id] ?? $orders_database['0881'];

$page_title = 'Detail Pesanan ' . $order['id'] . ' - KickDropShoe';
$current_page = 'pesanan';
$user_role = 'OWNER';
require_once 'includes/header.php';
?>
<div class="flex h-screen overflow-hidden bg-brand-slateBg">
    <?php require_once 'includes/sidebar.php'; ?>
    
    <main class="flex-1 flex flex-col h-full overflow-y-auto">
        <?php 
        $header_title = 'Detail Pesanan ' . htmlspecialchars($order['id']);
        $header_subtitle = htmlspecialchars($order['customer']) . ' • ' . htmlspecialchars($order['whatsapp']);
        require 'includes/topbar.php'; 
        ?>

        <div class="p-4 md:p-8 max-w-5xl mx-auto w-full space-y-6">
            <!-- Navigation Back & Quick Action Buttons -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                <a href="pesanan.php" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-slate-200 rounded-xl text-xs font-bold text-slate-700 hover:text-slate-900 hover:bg-slate-50 transition shadow-sm">
                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar Pesanan
                </a>
                <div class="flex items-center gap-2.5 w-full sm:w-auto">
                    <a href="edit_pesanan.php" class="flex-1 sm:flex-none justify-center px-4 py-2 bg-blue-50 hover:bg-blue-100 text-blue-600 rounded-xl text-xs font-extrabold transition flex items-center gap-2">
                        <i class="fas fa-edit"></i> Edit Pesanan
                    </a>
                    <button type="button" onclick="if(confirm('Yakin ingin menghapus pesanan ini?')) window.location.href='pesanan.php';" class="flex-1 sm:flex-none justify-center px-4 py-2 bg-red-50 hover:bg-red-100 text-red-600 rounded-xl text-xs font-extrabold transition flex items-center gap-2">
                        <i class="fas fa-trash"></i> Hapus
                    </button>
                </div>
            </div>

            <!-- Customer Info & Status Pengerjaan Card -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6">
                <!-- Info Pelanggan -->
                <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm space-y-3.5 text-xs font-medium">
                    <h3 class="text-xs font-extrabold text-slate-800 uppercase tracking-wider mb-2 flex items-center gap-2">
                        <i class="fas fa-user-circle text-slate-400 text-sm"></i> Informasi Pelanggan
                    </h3>
                    <div class="flex justify-between py-1 border-b border-slate-100"><span class="text-slate-400">Nama Pelanggan:</span><span class="font-extrabold text-slate-900"><?= htmlspecialchars($order['customer']) ?></span></div>
                    <div class="flex justify-between py-1 border-b border-slate-100"><span class="text-slate-400">No WhatsApp:</span><span class="font-bold text-slate-800"><?= htmlspecialchars($order['whatsapp']) ?></span></div>
                    <div class="flex justify-between py-1 border-b border-slate-100"><span class="text-slate-400">Drop Point:</span><span class="font-bold text-slate-800"><?= htmlspecialchars($order['drop_point']) ?></span></div>
                    <div class="flex justify-between py-1 border-b border-slate-100"><span class="text-slate-400">Tanggal Masuk:</span><span class="font-bold text-slate-800"><?= htmlspecialchars($order['date_in']) ?></span></div>
                    <div class="flex justify-between py-1 border-b border-slate-100"><span class="text-slate-400">Tanggal Selesai:</span><span class="font-bold text-slate-500"><?= htmlspecialchars($order['date_out']) ?></span></div>
                    <div class="flex justify-between py-1 items-center">
                        <span class="text-slate-400">Status Bayar:</span>
                        <?php if ($order['is_paid']): ?>
                            <span class="font-extrabold text-emerald-600 bg-emerald-100 px-2.5 py-1 rounded-md text-[10px]"><?= htmlspecialchars($order['status_bayar']) ?></span>
                        <?php else: ?>
                            <span class="font-extrabold text-slate-600 bg-slate-100 px-2.5 py-1 rounded-md text-[10px]"><?= htmlspecialchars($order['status_bayar']) ?></span>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Status Pengerjaan (Centered UI) -->
                <div class="bg-brand-darkCard text-white p-6 rounded-3xl shadow-xl flex flex-col justify-center items-center text-center">
                    <p class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 mb-2">Status Pengerjaan</p>
                    <div class="w-full max-w-sm">
                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2">STATUS SAAT INI</p>
                        <select id="detail-status-select" onchange="alert('Status berhasil diubah ke: ' + this.value)" class="w-full bg-slate-800 border border-slate-700 text-white font-extrabold text-sm rounded-xl px-4 py-3 outline-none focus:border-brand-yellow text-center transition cursor-pointer">
                            <option <?= $order['status_kerja'] === 'Diterima' ? 'selected' : '' ?>>Diterima</option>
                            <option <?= ($order['status_kerja'] === 'Sedang Diproses' || $order['status_kerja'] === 'Diproses') ? 'selected' : '' ?>>Sedang Diproses</option>
                            <option <?= $order['status_kerja'] === 'Selesai Diproses' ? 'selected' : '' ?>>Selesai Diproses</option>
                            <option <?= $order['status_kerja'] === 'Diambil' ? 'selected' : '' ?>>Diambil</option>
                        </select>
                        <p class="text-[10px] text-slate-400 mt-2">Pilih untuk memperbarui status pengerjaan secara langsung</p>
                    </div>
                </div>
            </div>

            <!-- Daftar Barang -->
            <div class="bg-white p-6 md:p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <h4 class="text-xs font-extrabold text-slate-800 uppercase tracking-wider">
                    Daftar Barang (<?= htmlspecialchars($order['items_count']) ?>)
                </h4>
                <div class="space-y-3">
                    <?php foreach ($order['items'] as $item): ?>
                        <div class="p-4 border border-slate-200 rounded-2xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3 bg-white hover:border-slate-300 transition">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 md:w-14 md:h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 border border-slate-200 shrink-0">
                                    <i class="fas fa-tshirt text-lg"></i>
                                </div>
                                <div>
                                    <h5 class="font-extrabold text-slate-900 text-sm">
                                        <?= htmlspecialchars($item['name']) ?> 
                                        <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded ml-1"><?= htmlspecialchars($item['color']) ?></span>
                                    </h5>
                                    <div class="text-xs text-slate-500 space-y-0.5 mt-1 font-medium">
                                        <?php foreach ($item['treatments'] as $treat): ?>
                                            <p><i class="<?= $treat['icon'] ?> mr-1.5"></i> <?= htmlspecialchars($treat['label']) ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                            <span class="font-black text-slate-900 text-sm self-end sm:self-center"><?= htmlspecialchars($item['price']) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Dokumentasi Foto Sebelum & Sesudah -->
            <div class="bg-white p-6 md:p-8 rounded-3xl border border-slate-200 shadow-sm space-y-4">
                <h4 class="text-xs font-extrabold text-slate-800 uppercase tracking-wider">Dokumentasi Foto Sebelum & Sesudah</h4>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <p class="text-xs font-bold text-slate-700 mb-2">Foto Before / Sebelum Dicuci</p>
                        <div class="w-full h-44 bg-slate-200 rounded-2xl overflow-hidden border border-slate-200">
                            <img src="<?= htmlspecialchars($order['photo_before']) ?>" alt="Before" class="w-full h-full object-cover">
                        </div>
                        <p class="text-[10px] text-slate-400 mt-1">Dokumentasi saat barang pertama kali diterima.</p>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-700 mb-2">Upload Foto After / Sesudah Dicuci</p>
                        <div class="upload-box-trigger w-full h-44 border-2 border-dashed border-slate-300 rounded-2xl flex flex-col items-center justify-center text-center p-4 hover:bg-slate-50 cursor-pointer transition">
                            <i class="fas fa-upload text-xl text-slate-400 mb-2"></i>
                            <span class="text-xs font-extrabold text-slate-700">Pilih Foto After</span>
                            <span class="text-[10px] text-slate-400 mt-0.5">JPG atau PNG • Maks. 5 MB</span>
                        </div>
                        <p class="text-[10px] text-slate-400 mt-1">Belum diunggah • Unggah hasil pengerjaan sebelum mengirim dokumentasi.</p>
                    </div>
                </div>

                <!-- WA Documentation Banner -->
                <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-2xl flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-full bg-brand-yellow/20 text-yellow-800 flex items-center justify-center text-sm font-bold shrink-0">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <div>
                            <h5 class="text-xs font-extrabold text-slate-900">Kirim Dokumentasi via WhatsApp</h5>
                            <p class="text-[10px] text-slate-500 font-medium"><?= htmlspecialchars($order['customer']) ?> • <?= htmlspecialchars($order['whatsapp']) ?></p>
                            <p class="text-[10px] text-yellow-800 font-medium mt-0.5">Foto After wajib diunggah sebelum dokumentasi penyelesaian dapat dikirim.</p>
                        </div>
                    </div>
                    <button type="button" disabled class="wa-send-btn w-full sm:w-auto px-4 py-2.5 bg-slate-200 text-slate-400 rounded-xl text-xs font-bold cursor-not-allowed flex items-center justify-center gap-2 transition">
                        <i class="fas fa-paper-plane"></i> Kirim Foto After
                    </button>
                </div>
            </div>

            <!-- Footer Summary & Cetak Invoice -->
            <div class="bg-white p-6 rounded-3xl border border-slate-200 shadow-sm flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                <div>
                    <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Keseluruhan</p>
                    <h3 class="text-2xl font-black text-slate-900"><?= htmlspecialchars($order['total']) ?></h3>
                </div>
                <div class="flex items-center gap-3 w-full sm:w-auto">
                    <a href="invoice.php" class="w-full sm:w-auto text-center px-6 py-3.5 bg-brand-darkCard hover:bg-slate-800 text-white rounded-xl text-xs font-extrabold transition shadow-lg flex items-center justify-center gap-2">
                        <i class="fas fa-print"></i> Cetak Invoice
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>
<?php require_once 'includes/footer.php'; ?>
