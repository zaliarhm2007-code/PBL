<?php
/**
 * Sidebar Component - KickDropShoe MIS (Mobile Responsive Off-Canvas & Desktop Fixed)
 */
$current_page = $current_page ?? '';
$user_role = $user_role ?? 'OWNER'; // 'OWNER' or 'KARYAWAN'
$user_name = $user_name ?? ($user_role === 'KARYAWAN' ? 'Bagas (Karyawan)' : 'Super Admin');
$user_initials = $user_initials ?? ($user_role === 'KARYAWAN' ? 'BK' : 'SA');
$is_print_hidden = !empty($is_invoice) ? 'print:hidden' : '';

$dashboard_link = ($user_role === 'KARYAWAN') ? 'dashboard_karyawan.php' : 'dashboard_owner.php';
?>
<!-- Mobile Backdrop Overlay -->
<div id="sidebar-backdrop" onclick="toggleSidebar()" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-30 hidden lg:hidden transition-opacity"></div>

<!-- Sidebar Navigation -->
<aside id="main-sidebar" class="fixed lg:static top-0 left-0 w-[280px] bg-brand-navy text-slate-300 flex flex-col justify-between shadow-2xl lg:shadow-xl shrink-0 z-40 h-screen transition-transform duration-300 -translate-x-full lg:translate-x-0 <?= $is_print_hidden ?>">
    <div class="overflow-y-auto">
        <!-- Brand Header with Close Button on Mobile -->
        <div class="p-6 border-b border-slate-800/60 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <img src="assets/logo.png" alt="Logo" class="w-10 h-10 rounded-full shadow-md border-2 border-slate-900 object-cover bg-white">
                <div>
                    <h1 class="text-base font-extrabold tracking-tight text-white leading-none">KICKDROPSHOE</h1>
                    <p class="text-[10px] text-brand-yellow font-bold uppercase tracking-widest mt-1"><?= htmlspecialchars($user_role) ?></p>
                </div>
            </div>
            <button type="button" onclick="toggleSidebar()" class="lg:hidden text-slate-400 hover:text-white p-1 rounded-lg">
                <i class="fas fa-times text-lg"></i>
            </button>
        </div>

        <!-- Navigation Links -->
        <nav class="p-4 space-y-2">
            <!-- Dashboard Link -->
            <?php if ($current_page === 'dashboard'): ?>
                <a href="<?= $dashboard_link ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-slate-800 text-white font-extrabold transition-all">
                    <i class="fas fa-pie-chart w-5"></i> Dashboard
                </a>
            <?php else: ?>
                <a href="<?= $dashboard_link ?>" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 text-slate-400 hover:text-white font-bold transition-all">
                    <i class="fas fa-pie-chart w-5"></i> Dashboard
                </a>
            <?php endif; ?>

            <!-- Laporan (Hanya OWNER) -->
            <?php if ($user_role === 'OWNER'): ?>
                <?php if ($current_page === 'laporan'): ?>
                    <a href="laporan.php" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-slate-800 text-white font-extrabold transition-all">
                        <i class="fas fa-chart-line w-5"></i> Laporan Pendapatan
                    </a>
                <?php else: ?>
                    <a href="laporan.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 text-slate-400 hover:text-white font-bold transition-all">
                        <i class="fas fa-chart-line w-5"></i> Laporan Pendapatan
                    </a>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Tambah Pesanan (Selalu Kuning Mencolok) -->
            <a href="tambah_pesanan.php" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-brand-yellow text-slate-900 font-extrabold shadow-lg shadow-brand-yellow/20 transition-all">
                <i class="fas fa-plus w-5"></i> Tambah Pesanan
            </a>

            <!-- Daftar Pesanan -->
            <?php if ($current_page === 'pesanan'): ?>
                <a href="pesanan.php" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-slate-800 text-white font-extrabold transition-all">
                    <i class="fas fa-list-ul w-5"></i> Daftar Pesanan
                </a>
            <?php else: ?>
                <a href="pesanan.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 text-slate-400 hover:text-white font-bold transition-all">
                    <i class="fas fa-list-ul w-5"></i> Daftar Pesanan
                </a>
            <?php endif; ?>

            <!-- Profil Akun -->
            <?php if ($current_page === 'akun'): ?>
                <a href="akun.php" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-slate-800 text-white font-extrabold transition-all">
                    <i class="fas fa-user w-5"></i> Profil Akun
                </a>
            <?php else: ?>
                <a href="akun.php" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-slate-800 text-slate-400 hover:text-white font-bold transition-all">
                    <i class="fas fa-user w-5"></i> Profil Akun
                </a>
            <?php endif; ?>
        </nav>
    </div>

    <!-- User Profile Pill at Bottom -->
    <div class="p-4 border-t border-slate-800/60 m-4 bg-slate-800/40 rounded-2xl shrink-0">
        <div class="flex items-center gap-3 mb-3">
            <div class="w-9 h-9 bg-brand-yellow text-slate-900 font-extrabold rounded-full flex items-center justify-center text-xs shadow-sm">
                <?= htmlspecialchars($user_initials) ?>
            </div>
            <div>
                <p class="text-xs font-extrabold text-white leading-tight"><?= htmlspecialchars($user_name) ?></p>
                <p class="text-[10px] text-emerald-400 font-semibold">Online</p>
            </div>
        </div>
        <a href="login.php" class="flex items-center justify-center gap-2 w-full py-2 bg-slate-800/80 hover:bg-slate-700 text-slate-300 rounded-xl text-xs font-bold transition-all border border-slate-700/50">
            <i class="fas fa-sign-out-alt"></i> Keluar
        </a>
    </div>
</aside>
