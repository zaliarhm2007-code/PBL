<?php
/**
 * Topbar / Header Component - KickDropShoe MIS (Mobile Responsive with Hamburger)
 */
$header_title = $header_title ?? 'Dashboard';
$header_date = $header_date ?? '17 Sep 2026';
$header_extra = $header_extra ?? '';
?>
<header class="bg-white border-b border-slate-200 px-4 md:px-8 py-4 md:py-5 flex justify-between items-center sticky top-0 z-10 shrink-0">
    <div class="flex items-center gap-3">
        <!-- Mobile Hamburger Button -->
        <button type="button" onclick="toggleSidebar()" class="lg:hidden p-2 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-700 transition focus:outline-none" aria-label="Menu">
            <i class="fas fa-bars text-base"></i>
        </button>
        <div>
            <h2 class="text-lg md:text-xl font-extrabold text-slate-900 tracking-tight leading-tight"><?= $header_title ?></h2>
            <?php if (!empty($header_subtitle)): ?>
                <p class="text-xs font-semibold text-slate-400 mt-0.5"><?= $header_subtitle ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="flex items-center gap-2 md:gap-3">
        <?= $header_extra ?>
        <div class="bg-slate-100 px-3 md:px-4 py-1.5 md:py-2 rounded-full border border-slate-200 text-[11px] md:text-xs font-bold text-slate-600 flex items-center gap-1.5 md:gap-2">
            <i class="far fa-calendar"></i> <span class="hidden sm:inline"><?= htmlspecialchars($header_date) ?></span><span class="sm:hidden">17 Sep</span>
        </div>
    </div>
</header>
