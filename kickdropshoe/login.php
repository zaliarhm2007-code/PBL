<?php
$page_title = 'Login - KickDropShoe';
$body_class = 'bg-brand-navy min-h-screen flex items-center justify-center p-4 font-sans antialiased';
require_once 'includes/header.php';
?>
    <div class="bg-white rounded-3xl w-full max-w-md p-10 shadow-2xl relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-2.5 bg-brand-yellow"></div>
        <div class="text-center mb-8 pt-2">
            <img src="assets/logo.png" alt="Logo KickDropShoe" class="w-24 h-24 mx-auto mb-4 object-contain mix-blend-multiply">
            <h1 class="text-2xl font-extrabold text-slate-900 tracking-tight">KICKDROPSHOE</h1>
            <p class="text-xs text-slate-500 font-medium mt-1">Sistem Informasi Manajemen</p>
        </div>

        <form id="login-form" action="dashboard_owner.php" class="space-y-5">
            <div>
                <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-2">Username / Email</label>
                <input type="text" id="username" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm font-medium text-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-yellow" value="admin@kickdrop.com" required>
            </div>
            <div class="relative">
                <label class="block text-xs font-extrabold text-slate-700 uppercase tracking-wider mb-2">Password</label>
                <input type="password" id="password" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3.5 text-sm font-medium text-slate-800 focus:outline-none focus:ring-2 focus:ring-brand-yellow" value="password123" required>
                <button type="button" id="togglePassword" class="absolute right-4 top-10 text-slate-400 hover:text-slate-600 focus:outline-none">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <button type="submit" class="w-full py-4 bg-brand-yellow hover:bg-brand-yellowHover text-slate-900 font-extrabold text-sm rounded-xl transition-all shadow-lg shadow-brand-yellow/30 mt-4 tracking-wide border border-slate-900/10">
                Login
            </button>
        </form>
    </div>

    <script src="js/main.js"></script>
    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const username = document.getElementById('username').value.toLowerCase();
            if (username.includes('karyawan') || username.includes('bagas')) {
                window.location.href = 'dashboard_karyawan.php';
            } else {
                window.location.href = 'dashboard_owner.php';
            }
        });

        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        if (togglePassword && password) {
            togglePassword.addEventListener('click', function (e) {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
            });
        }
    </script>
</body>
</html>
