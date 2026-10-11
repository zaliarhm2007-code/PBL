<?php
$page_title = 'Pengaturan Akun - KickDropShoe';
$current_page = 'akun';
$user_role = 'OWNER';
require_once 'includes/header.php';
?>
<div class="flex h-screen overflow-hidden bg-brand-slateBg">
    <?php require_once 'includes/sidebar.php'; ?>
    
    <main class="flex-1 flex flex-col h-full overflow-y-auto">
        <?php 
        $header_title = 'Pengaturan Akun';
        require 'includes/topbar.php'; 
        ?>

        <div class="p-4 md:p-8 max-w-4xl mx-auto w-full">
            <div class="bg-white rounded-3xl border border-slate-200 p-6 md:p-8 shadow-sm space-y-6">
                <h3 class="text-base font-extrabold text-slate-900 tracking-tight">Pengaturan Profil</h3>
                <div class="flex items-center gap-6 pb-6 border-b border-slate-100">
                    <div class="w-20 h-20 bg-brand-yellow rounded-full flex items-center justify-center text-slate-900 font-black text-2xl shadow-inner">K</div>
                    <div>
                        <h4 class="text-2xl font-black text-slate-900 tracking-tight">SUPER ADMIN</h4>
                        <span class="inline-block mt-1 px-3 py-1 bg-yellow-50 text-yellow-700 border border-yellow-200 rounded-full text-[10px] font-black uppercase tracking-wider">OWNER</span>
                    </div>
                </div>
                <div class="space-y-4 max-w-lg">
                    <div>
                        <label class="block text-xs font-extrabold text-slate-400 uppercase tracking-wider mb-2">Ganti Password</label>
                        <input type="password" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-xs font-medium text-slate-800 outline-none focus:ring-2 focus:ring-brand-yellow" placeholder="Masukkan password baru...">
                    </div>
                    <button type="button" onclick="alert('Password berhasil diperbarui!')" class="px-6 py-3.5 bg-brand-darkCard hover:bg-slate-800 text-white text-xs font-extrabold rounded-xl transition shadow-md">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </main>
</div>
<?php require_once 'includes/footer.php'; ?>
