<?php
$page_title = 'Dashboard Operasional - KickDropShoe';
$current_page = 'dashboard';
$user_role = 'KARYAWAN';
$user_name = 'Bagas (Karyawan)';
$user_initials = 'BK';
require_once 'includes/header.php';
?>
<div class="flex h-screen overflow-hidden bg-brand-slateBg">
    <?php require_once 'includes/sidebar.php'; ?>
    
    <main class="flex-1 flex flex-col h-full overflow-y-auto">
        <?php 
        $header_title = 'Dashboard Operasional';
        require 'includes/topbar.php'; 
        ?>

        <div class="p-8 max-w-7xl mx-auto w-full space-y-6">
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <p class="text-xs font-extrabold text-slate-400 uppercase tracking-wider mb-2">TOTAL PESANAN</p>
                    <h3 class="text-5xl font-black text-slate-900">148</h3>
                </div>
                <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <p class="text-xs font-extrabold text-slate-400 uppercase tracking-wider mb-2">AKTIF</p>
                    <h3 class="text-5xl font-black text-emerald-500">12</h3>
                </div>
                <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <p class="text-xs font-extrabold text-slate-400 uppercase tracking-wider mb-2">SELESAI</p>
                    <h3 class="text-5xl font-black text-slate-900">136</h3>
                </div>
            </div>

            <div class="grid grid-cols-5 gap-6">
                <div class="col-span-3 bg-white rounded-3xl border border-slate-200 p-8 shadow-sm flex flex-col justify-between">
                    <div class="flex gap-4 items-end h-56">
                        <!-- Angka Sumbu Y di Samping Grafik -->
                        <div class="flex flex-col justify-between h-full pb-4 text-[10px] font-bold text-slate-400 shrink-0 select-none">
                            <span>50</span>
                            <span>40</span>
                            <span>30</span>
                            <span>20</span>
                            <span>10</span>
                            <span>0</span>
                        </div>

                        <!-- Batang Grafik dengan Stroke Tipis dan Angka di Atasnya -->
                        <div class="flex-1 h-full flex items-end justify-between px-4 pb-4 border-b border-l border-slate-200 relative">
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-[10px] font-bold text-slate-600">12</span>
                                <div class="w-8 bg-brand-yellow border border-yellow-400 rounded-t-lg h-24"></div>
                                <span class="text-[10px] font-bold text-slate-500 absolute -bottom-6">Mon</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-[10px] font-bold text-slate-600">18</span>
                                <div class="w-8 bg-brand-yellow border border-yellow-400 rounded-t-lg h-36"></div>
                                <span class="text-[10px] font-bold text-slate-500 absolute -bottom-6">Tue</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-[10px] font-bold text-slate-600">24</span>
                                <div class="w-8 bg-brand-yellow border border-yellow-400 rounded-t-lg h-48"></div>
                                <span class="text-[10px] font-bold text-slate-500 absolute -bottom-6">Wed</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-[10px] font-bold text-slate-600">16</span>
                                <div class="w-8 bg-brand-yellow border border-yellow-400 rounded-t-lg h-32"></div>
                                <span class="text-[10px] font-bold text-slate-500 absolute -bottom-6">Thu</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-[10px] font-bold text-slate-600">14</span>
                                <div class="w-8 bg-brand-yellow border border-yellow-400 rounded-t-lg h-28"></div>
                                <span class="text-[10px] font-bold text-slate-500 absolute -bottom-6">Fri</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-[10px] font-bold text-slate-600">22</span>
                                <div class="w-8 bg-brand-yellow border border-yellow-400 rounded-t-lg h-44"></div>
                                <span class="text-[10px] font-bold text-slate-500 absolute -bottom-6">Sat</span>
                            </div>
                            <div class="flex flex-col items-center gap-1">
                                <span class="text-[10px] font-bold text-slate-600">10</span>
                                <div class="w-8 bg-brand-yellow border border-yellow-400 rounded-t-lg h-20"></div>
                                <span class="text-[10px] font-bold text-slate-500 absolute -bottom-6">Sun</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
                    <h3 class="text-sm font-extrabold text-slate-800 tracking-tight mb-6">Pesanan Perlu Perhatian</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-5 bg-slate-50/80 rounded-2xl border border-slate-100">
                            <div>
                                <h4 class="font-extrabold text-slate-900 text-sm">#0881 – Budi</h4>
                                <p class="text-xs font-semibold text-slate-400 mt-0.5">Express (Sisa 1 Hari)</p>
                            </div>
                            <a href="pesanan.php" class="text-xs font-extrabold text-yellow-700 hover:underline">Cek</a>
                        </div>
                        <div class="flex justify-between items-center p-5 bg-slate-50/80 rounded-2xl border border-slate-100">
                            <div>
                                <h4 class="font-extrabold text-slate-900 text-sm">#0872 – Andi</h4>
                                <p class="text-xs font-semibold text-slate-400 mt-0.5">Prioritas (Sisa 2 Hari)</p>
                            </div>
                            <a href="pesanan.php" class="text-xs font-extrabold text-yellow-700 hover:underline">Cek</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php require_once 'includes/footer.php'; ?>
