/**
 * KickDropShoe MIS - Full Interactive Engine
 * Responsive Mobile Support + 100% Desktop Master-Detail Engine
 */

const ordersData = {
    '#0881': {
        title: 'Detail Pesanan #0881',
        subtitle: 'Budi Santoso • 08123456789',
        dateIn: '17 Okt 2026',
        statusPay: '<span class="font-extrabold text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded text-[10px]">LUNAS – QRIS</span>',
        dropPoint: 'Oro-oro Dowo',
        dateOut: 'Belum selesai',
        status: 'Sedang Diproses',
        items: `
            <div class="p-4 border border-slate-200 rounded-2xl flex justify-between items-center bg-white">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 border border-slate-200"><i class="fas fa-camera text-lg"></i></div>
                    <div><h5 class="font-extrabold text-slate-900 text-sm">Sepatu Nike Air Max <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded ml-1">Putih</span></h5><div class="text-xs text-slate-500 space-y-0.5 mt-1 font-medium"><p><i class="fas fa-check text-yellow-600 mr-1"></i> Basic & White Shoes (30K)</p><p><i class="fas fa-check text-yellow-600 mr-1"></i> Unyellowing (30K)</p><p><i class="fas fa-bolt text-blue-500 mr-1"></i> Express (+10K)</p></div></div>
                </div>
                <span class="font-black text-slate-900 text-sm">Rp 70.000</span>
            </div>
            <div class="p-4 border border-slate-200 rounded-2xl flex justify-between items-center bg-white">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 border border-slate-200"><i class="fas fa-upload text-sm"></i></div>
                    <div><h5 class="font-extrabold text-slate-900 text-sm">Tas Coach <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded ml-1">Hitam</span></h5><div class="text-xs text-slate-500 space-y-0.5 mt-1 font-medium"><p><i class="fas fa-check text-yellow-600 mr-1"></i> Deep Clean Tas M (35K)</p><p><i class="fas fa-clock text-slate-400 mr-1"></i> Reguler (Free)</p></div></div>
                </div>
                <span class="font-black text-slate-900 text-sm">Rp 35.000</span>
            </div>
        `,
        itemsCount: '2 Item',
        total: 'Rp 105.000'
    },
    '#0882': {
        title: 'Detail Pesanan #0882',
        subtitle: 'Sari Ayu • 08129876543',
        dateIn: '16 Okt 2026',
        statusPay: '<span class="font-extrabold text-slate-600 bg-slate-100 px-2 py-0.5 rounded text-[10px]">BELUM LUNAS</span>',
        dropPoint: 'Suhat',
        dateOut: 'Belum selesai',
        status: 'Diterima',
        items: `
            <div class="p-4 border border-slate-200 rounded-2xl flex justify-between items-center bg-white">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 border border-slate-200"><i class="fas fa-camera text-lg"></i></div>
                    <div><h5 class="font-extrabold text-slate-900 text-sm">Flatshoes <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded ml-1">Krem</span></h5><div class="text-xs text-slate-500 space-y-0.5 mt-1 font-medium"><p><i class="fas fa-check text-yellow-600 mr-1"></i> Flatshoes / Heels (25K)</p><p><i class="fas fa-clock text-slate-400 mr-1"></i> Reguler (Free)</p></div></div>
                </div>
                <span class="font-black text-slate-900 text-sm">Rp 35.000</span>
            </div>
        `,
        itemsCount: '1 Item',
        total: 'Rp 35.000'
    },
    '#0880': {
        title: 'Detail Pesanan #0880',
        subtitle: 'Andi • 08561234567',
        dateIn: '15 Okt 2026',
        statusPay: '<span class="font-extrabold text-emerald-600 bg-emerald-100 px-2 py-0.5 rounded text-[10px]">LUNAS – CASH</span>',
        dropPoint: 'Dieng',
        dateOut: '17 Okt 2026',
        status: 'Selesai Diproses',
        items: `
            <div class="p-4 border border-slate-200 rounded-2xl flex justify-between items-center bg-white">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-slate-100 rounded-xl flex items-center justify-center text-slate-400 border border-slate-200"><i class="fas fa-camera text-lg"></i></div>
                    <div><h5 class="font-extrabold text-slate-900 text-sm">Sepatu Converse <span class="text-[10px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded ml-1">Hitam</span></h5><div class="text-xs text-slate-500 space-y-0.5 mt-1 font-medium"><p><i class="fas fa-check text-yellow-600 mr-1"></i> Premium Deep Clean (50K)</p><p><i class="fas fa-bolt text-blue-500 mr-1"></i> Prioritas (+5K)</p></div></div>
                </div>
                <span class="font-black text-slate-900 text-sm">Rp 55.000</span>
            </div>
        `,
        itemsCount: '1 Item',
        total: 'Rp 55.000'
    }
};

document.addEventListener('DOMContentLoaded', () => {
    console.log('KickDropShoe Engine Loaded.');

    initCategoryButtons();
    initExtraTreatmentCalculations();
    initPhotoUploads();
    initOrderFilter();
    initMasterDetailOrders();
    initAddItemButton();
});

// Mobile Sidebar Toggle
function toggleSidebar() {
    const sidebar = document.getElementById('main-sidebar');
    const backdrop = document.getElementById('sidebar-backdrop');
    if (!sidebar) return;

    if (sidebar.classList.contains('-translate-x-full')) {
        sidebar.classList.remove('-translate-x-full');
        if (backdrop) backdrop.classList.remove('hidden');
    } else {
        sidebar.classList.add('-translate-x-full');
        if (backdrop) backdrop.classList.add('hidden');
    }
}

// 1. Pricelist Data
const PRICELIST_DATA = {
    'Shoes Care': [
        { name: 'Dark Shoes', price: 25000 },
        { name: 'Basic & White Shoes', price: 30000 },
        { name: 'Leather / Suede / Bludru', price: 30000 },
        { name: 'Premium Deep Clean ⭐', price: 50000 },
        { name: 'Caterpillar / Boots', price: 35000 },
        { name: 'Flatshoes / Heels', price: 25000 }
    ],
    'Others': [
        { name: 'Tas M', price: 35000 },
        { name: 'Tas L / Carrier', price: 40000 },
        { name: 'Helm Half Face', price: 30000 },
        { name: 'Helm Full Face', price: 40000 },
        { name: 'Dompet / Topi', price: 20000 },
        { name: 'Koper M', price: 80000 },
        { name: 'Stroller / Car Seat', price: 100000 }
    ],
    'Repair': [
        { name: 'Unyellowing', price: 30000 },
        { name: 'Repaint (Start From)', price: 100000 },
        { name: 'Recolour (Start From)', price: 120000 },
        { name: 'Reglue Shoes', price: 20000 },
        { name: 'Whitening', price: 30000 }
    ],
    'Package': [
        { name: 'Dark Shoes + Unyellowing', price: 45000 },
        { name: 'Basic Shoes + Unyellowing', price: 50000 },
        { name: 'White Shoes + Whitening', price: 35000 }
    ]
};

// 2. Category Switcher Logic
function initCategoryButtons() {
    document.addEventListener('click', (e) => {
        const btn = e.target.closest('.cat-btn');
        if (!btn) return;

        const container = btn.closest('.item-dark-container');
        if (!container) return;

        const itemId = container.dataset.itemId || 1;
        const category = btn.dataset.category;

        container.querySelectorAll('.cat-btn').forEach(b => {
            b.className = 'cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg transition-all cursor-pointer hover:border-slate-500';
        });
        btn.className = 'cat-btn py-2 text-[10px] font-bold border border-brand-yellow bg-brand-yellow/10 text-brand-yellow rounded-lg transition-all cursor-pointer';

        const select = container.querySelector('.service-select');
        if (select && PRICELIST_DATA[category]) {
            select.innerHTML = PRICELIST_DATA[category].map(item => 
                `<option value="${item.price}">${item.name} – Rp ${item.price.toLocaleString('id-ID')}</option>`
            ).join('');
            
            const catCaption = container.querySelector('.category-caption');
            if (catCaption) catCaption.innerText = category === 'Shoes Care' ? 'Deep Clean Shoes Care' : category;

            updateItemSubtotal(itemId);
        }
    });
}

// 3. Extra Treatment Calculations
function initExtraTreatmentCalculations() {
    document.addEventListener('change', (e) => {
        if (e.target.matches('input[type="radio"]') || e.target.matches('input[type="checkbox"]') || e.target.matches('.service-select')) {
            const container = e.target.closest('.item-dark-container');
            if (container) {
                const itemId = container.dataset.itemId || 1;
                updateItemSubtotal(itemId);
            }
        }
    });
}

function updateItemSubtotal(itemId) {
    const container = document.querySelector(`.item-dark-container[data-item-id="${itemId}"]`) || document.querySelector(`#item-container-${itemId}`);
    if (!container) return;

    const serviceSelect = container.querySelector('.service-select');
    const speedRadio = container.querySelector(`input[name="speed-${itemId}"]:checked`);
    const extraCheckboxes = container.querySelectorAll(`.extra-check-${itemId}:checked`);

    let total = serviceSelect ? (parseInt(serviceSelect.value) || 0) : 0;
    if (speedRadio) total += (parseInt(speedRadio.dataset.price) || 0);

    extraCheckboxes.forEach(cb => {
        total += (parseInt(cb.dataset.price) || 0);
    });

    container.querySelectorAll(`input[name="speed-${itemId}"]`).forEach(radio => {
        const label = radio.closest('label');
        const titleSpan = label.querySelector('.speed-title');
        if (radio.checked) {
            label.className = 'p-3 border-2 border-brand-yellow bg-brand-yellow/10 rounded-xl flex flex-col items-center justify-center cursor-pointer transition';
            if (titleSpan) titleSpan.className = 'speed-title text-[10px] font-bold text-brand-yellow';
        } else {
            label.className = 'p-3 border border-slate-700 rounded-xl flex flex-col items-center justify-center cursor-pointer transition hover:border-slate-500';
            if (titleSpan) titleSpan.className = 'speed-title text-[10px] font-bold text-slate-400';
        }
    });

    const subtotalEl = container.querySelector(`.subtotal-val`);
    if (subtotalEl) {
        subtotalEl.innerText = `Rp ${total.toLocaleString('id-ID')}`;
    }

    recalculateGrandTotal();
}

function recalculateGrandTotal() {
    let grandTotal = 0;
    document.querySelectorAll('.subtotal-val').forEach(el => {
        const val = parseInt(el.innerText.replace(/[^0-9]/g, '')) || 0;
        grandTotal += val;
    });

    document.querySelectorAll('.grand-total-val').forEach(el => {
        el.innerText = `Rp ${grandTotal.toLocaleString('id-ID')}`;
    });
}

// 4. Dynamic Add & Delete Item Cards
let itemCounter = 1;
function initAddItemButton() {
    const addBtn = document.querySelector('.add-item-btn-trigger');
    if (!addBtn) return;

    addBtn.addEventListener('click', () => {
        itemCounter++;
        const newId = itemCounter;
        const template = `
        <div id="item-container-${newId}" data-item-id="${newId}" class="item-dark-container bg-brand-darkCard text-white rounded-3xl p-6 md:p-8 shadow-xl space-y-6 animate-fade-in">
            <div class="flex justify-between items-center border-b border-slate-800 pb-4">
                <h3 class="text-sm font-extrabold flex items-center gap-3">
                    <span class="bg-brand-yellow text-slate-900 w-6 h-6 rounded-md flex items-center justify-center text-xs font-black">${newId}</span>
                    Detail Barang
                </h3>
                <button type="button" onclick="deleteItemCard(${newId})" class="px-3 py-1 bg-slate-800 hover:bg-red-500/20 hover:text-red-400 text-slate-400 rounded-lg text-xs font-semibold transition">
                    <i class="fas fa-trash mr-1"></i> Hapus
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 md:gap-8">
                <div class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[10px] font-extrabold text-slate-400 uppercase tracking-wider mb-1.5">NAMA BARANG</label>
                            <input type="text" class="w-full bg-brand-darkInput border border-slate-700/80 rounded-xl px-4 py-3 text-xs font-medium text-white outline-none" placeholder="Misal: Tas / Helm / Sepatu">
                        </div>
                        <div>
                            <label class="block text-[10px] font-extrabold text-slate-400 uppercase tracking-wider mb-1.5">WARNA</label>
                            <input type="text" class="w-full bg-brand-darkInput border border-slate-700/80 rounded-xl px-4 py-3 text-xs font-medium text-white outline-none" placeholder="Warna barang">
                        </div>
                    </div>

                    <div class="bg-slate-900/60 p-5 rounded-2xl border border-slate-800/80 space-y-3">
                        <label class="block text-[10px] font-extrabold text-brand-yellow uppercase tracking-wider">KATEGORI & LAYANAN UTAMA</label>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                            <button type="button" data-category="Shoes Care" class="cat-btn py-2 text-[10px] font-bold border border-brand-yellow bg-brand-yellow/10 text-brand-yellow rounded-lg">Shoes Care</button>
                            <button type="button" data-category="Others" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Others</button>
                            <button type="button" data-category="Repair" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Repair</button>
                            <button type="button" data-category="Package" class="cat-btn py-2 text-[10px] font-bold border border-slate-700 text-slate-400 rounded-lg">Package</button>
                        </div>

                        <p class="category-caption text-[9px] text-slate-500 font-semibold">Deep Clean Shoes Care</p>
                        <div>
                            <select id="service-select-${newId}" onchange="updateItemSubtotal(${newId})" class="service-select w-full bg-brand-darkInput border border-slate-700 rounded-xl px-3 py-2.5 text-xs text-white outline-none font-semibold">
                                <option value="25000" selected>Dark Shoes – Rp 25.000</option>
                                <option value="30000">Basic & White Shoes – Rp 30.000</option>
                                <option value="50000">Premium Deep Clean – Rp 50.000</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="space-y-4 flex flex-col justify-between">
                    <div class="bg-slate-900/80 p-5 rounded-2xl border border-slate-800 space-y-4">
                        <label class="block text-[10px] font-extrabold text-brand-yellow uppercase tracking-wider">EXTRA TREATMENT</label>
                        
                        <div class="grid grid-cols-3 gap-2">
                            <label class="p-3 border-2 border-brand-yellow bg-brand-yellow/10 rounded-xl flex flex-col items-center justify-center cursor-pointer transition">
                                <input type="radio" name="speed-${newId}" data-price="0" checked onchange="updateItemSubtotal(${newId})" class="text-brand-yellow mb-1">
                                <span class="speed-title text-[10px] font-bold text-brand-yellow">Reguler</span>
                                <span class="text-[9px] text-slate-400">4–5 Hari • Free</span>
                            </label>
                            <label class="p-3 border border-slate-700 rounded-xl flex flex-col items-center justify-center cursor-pointer transition hover:border-slate-500">
                                <input type="radio" name="speed-${newId}" data-price="10000" onchange="updateItemSubtotal(${newId})" class="text-brand-yellow mb-1">
                                <span class="speed-title text-[10px] font-bold text-slate-400">Express</span>
                                <span class="text-[9px] text-slate-400">1–2 Hari • +10K</span>
                            </label>
                            <label class="p-3 border border-slate-700 rounded-xl flex flex-col items-center justify-center cursor-pointer transition hover:border-slate-500">
                                <input type="radio" name="speed-${newId}" data-price="5000" onchange="updateItemSubtotal(${newId})" class="text-brand-yellow mb-1">
                                <span class="speed-title text-[10px] font-bold text-slate-400">Prioritas</span>
                                <span class="text-[9px] text-slate-400">3 Hari • +5K</span>
                            </label>
                        </div>

                        <div class="space-y-2 pt-1">
                            <label class="flex justify-between items-center p-3.5 border border-slate-700/90 bg-slate-800/50 rounded-xl cursor-pointer hover:border-slate-500 transition">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" data-price="15000" onchange="updateItemSubtotal(${newId})" class="extra-check-${newId} w-4 h-4 rounded text-brand-yellow bg-slate-900 border-slate-600 focus:ring-brand-yellow">
                                    <span class="text-xs font-bold text-white">Pipis Hewan (8 Hari)</span>
                                </div>
                                <span class="text-xs font-bold text-brand-yellow">+15K</span>
                            </label>
                            <label class="flex justify-between items-center p-3.5 border border-slate-700/90 bg-slate-800/50 rounded-xl cursor-pointer hover:border-slate-500 transition">
                                <div class="flex items-center gap-3">
                                    <input type="checkbox" data-price="5000" onchange="updateItemSubtotal(${newId})" class="extra-check-${newId} w-4 h-4 rounded text-brand-yellow bg-slate-900 border-slate-600 focus:ring-brand-yellow">
                                    <span class="text-xs font-bold text-white">Noda Berat (5–8 Hari)</span>
                                </div>
                                <span class="text-xs font-bold text-brand-yellow">+5K</span>
                            </label>
                        </div>
                    </div>

                    <div class="bg-black/60 p-4 rounded-xl border border-slate-800 flex justify-between items-center">
                        <span class="text-xs font-bold text-slate-400">Subtotal Barang Ini:</span>
                        <span id="subtotal-val-${newId}" class="subtotal-val text-lg font-black text-brand-yellow">Rp 25.000</span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 pt-2 border-t border-slate-800">
                <div>
                    <label class="block text-[10px] font-extrabold text-slate-400 uppercase tracking-wider mb-2">FOTO BARANG SEBELUM DICUCI (BEFORE)</label>
                    <div class="upload-box-trigger border-2 border-dashed border-slate-700 rounded-2xl p-6 flex flex-col items-center justify-center text-center cursor-pointer hover:bg-slate-800/40 transition">
                        <i class="fas fa-upload text-slate-400 text-lg mb-2"></i>
                        <span class="text-xs font-bold text-white">Upload Foto Before</span>
                        <span class="text-[10px] text-slate-500 mt-0.5">JPG atau PNG • Maks. 5 MB</span>
                    </div>
                </div>

                <div>
                    <label class="block text-[10px] font-extrabold text-slate-400 uppercase tracking-wider mb-2">CATATAN TAMBAHAN</label>
                    <textarea class="w-full bg-brand-darkInput border border-slate-700 rounded-2xl p-4 text-xs font-medium text-white outline-none h-24 resize-none placeholder:text-slate-500" placeholder="Ketik noda khusus, robek, atau keluhan lainnya di sini..."></textarea>
                </div>
            </div>
        </div>
        `;

        addBtn.insertAdjacentHTML('beforebegin', template);
        initPhotoUploads();
        recalculateGrandTotal();
    });
}

function deleteItemCard(id) {
    const card = document.getElementById(`item-container-${id}`);
    if (card) {
        card.remove();
        recalculateGrandTotal();
    }
}

// 5. Photo Upload Preview Simulation
function initPhotoUploads() {
    const uploadBoxes = document.querySelectorAll('.upload-box-trigger');
    uploadBoxes.forEach(box => {
        box.onclick = () => {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            input.onchange = (e) => {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (event) => {
                        box.innerHTML = `<img src="${event.target.result}" class="w-full h-full object-cover rounded-2xl">`;
                        box.classList.remove('border-2', 'border-dashed');
                        
                        const waBtn = document.querySelector('.wa-send-btn');
                        if (waBtn) {
                            waBtn.disabled = false;
                            waBtn.className = 'wa-send-btn w-full sm:w-auto px-4 py-2.5 bg-brand-yellow hover:bg-brand-yellowHover text-slate-900 rounded-xl text-xs font-extrabold flex items-center justify-center gap-2 shadow-md transition cursor-pointer';
                        }
                    };
                    reader.readAsDataURL(file);
                }
            };
            input.click();
        };
    });
}

// 6. Master-Detail Order Selection:
// - On Desktop: Seamless in-place switch on right panel (Persis 100% Desain Asli)
// - On Mobile: Navigate to detail_pesanan.php without scrolling
function initMasterDetailOrders() {
    const orderCards = document.querySelectorAll('.order-card-item');
    orderCards.forEach(card => {
        card.addEventListener('click', (e) => {
            const titleEl = card.querySelector('h4');
            const orderId = titleEl ? titleEl.innerText.split(' ')[0] : '#0881'; // e.g. #0881
            const orderNum = orderId.replace('#', '');

            // Jika di Mobile (< 1024px): Buka halaman detail_pesanan.php
            if (window.innerWidth < 1024) {
                window.location.href = `detail_pesanan.php?id=${orderNum}`;
                return;
            }

            // Jika di Desktop (>= 1024px): Ganti panel kanan di tempat (Desain Asli)
            orderCards.forEach(c => {
                c.className = 'order-card-item p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 cursor-pointer transition-all';
            });
            card.className = 'order-card-item p-5 rounded-2xl border-2 border-brand-yellow bg-yellow-50/30 shadow-sm cursor-pointer relative transition-all';
            
            const data = ordersData[orderId];
            if (data) {
                const elTitle = document.querySelector('.detail-title');
                if (elTitle) elTitle.innerText = data.title;
                const elSub = document.querySelector('.detail-subtitle');
                if (elSub) elSub.innerText = data.subtitle;
                const elDateIn = document.querySelector('.detail-date-in');
                if (elDateIn) elDateIn.innerText = data.dateIn;
                const elStatusPay = document.querySelector('.detail-status-pay');
                if (elStatusPay) elStatusPay.innerHTML = data.statusPay;
                const elDropPoint = document.querySelector('.detail-drop-point');
                if (elDropPoint) elDropPoint.innerText = data.dropPoint;
                const elDateOut = document.querySelector('.detail-date-out');
                if (elDateOut) elDateOut.innerText = data.dateOut;
                const elItemsCount = document.querySelector('.detail-items-count');
                if (elItemsCount) elItemsCount.innerText = 'Daftar Barang (' + data.itemsCount + ')';
                const elTotal = document.querySelector('.detail-total');
                if (elTotal) elTotal.innerText = data.total;
                const elItemsContainer = document.querySelector('.detail-items-container');
                if (elItemsContainer) elItemsContainer.innerHTML = data.items;

                const detailSelect = document.querySelector('#detail-status-select');
                if (detailSelect) {
                    Array.from(detailSelect.options).forEach(opt => {
                        if (opt.text.includes(data.status)) {
                            opt.selected = true;
                        } else {
                            opt.selected = false;
                        }
                    });
                }
            }
        });
    });
}

// 7. Order Filter
function initOrderFilter() {
    const searchInput = document.querySelector('#order-search-input');
    const statusSelect = document.querySelector('#order-status-select');

    if (!searchInput && !statusSelect) return;

    const filterHandler = () => {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
        const status = statusSelect ? statusSelect.value : 'Semua Status';
        const cards = document.querySelectorAll('.order-card-item');

        cards.forEach(card => {
            const text = card.innerText.toLowerCase();
            const matchesSearch = query === '' || text.includes(query);
            
            let matchesStatus = true;
            if (status !== 'Semua Status') {
                if (status === 'Diproses') {
                    matchesStatus = text.includes('diproses') || text.includes('sedang diproses');
                } else {
                    matchesStatus = text.includes(status.toLowerCase());
                }
            }

            card.style.display = (matchesSearch && matchesStatus) ? 'block' : 'none';
        });
    };

    if (searchInput) searchInput.addEventListener('input', filterHandler);
    if (statusSelect) statusSelect.addEventListener('change', filterHandler);
}
