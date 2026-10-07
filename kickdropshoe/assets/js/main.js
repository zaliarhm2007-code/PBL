/**
 * KickDropShoe MIS - Full Interactive Engine
 */

document.addEventListener('DOMContentLoaded', () => {
    console.log('KickDropShoe Engine Loaded.');

    initCategoryButtons();
    initExtraTreatmentCalculations();
    initPhotoUploads();
    initOrderFilter();
    initMasterDetailOrders();
    initAddItemButton();
});

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

// 1. Category Switcher Logic
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

// 2. Extra Treatment Calculations
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

// 3. Dynamic Add & Delete Item Cards
let itemCounter = 1;
function initAddItemButton() {
    const addBtn = document.querySelector('.add-item-btn-trigger');
    if (!addBtn) return;

    addBtn.addEventListener('click', () => {
        itemCounter++;
        const newId = itemCounter;
        const template = `
        <div id="item-container-${newId}" data-item-id="${newId}" class="item-dark-container bg-brand-darkCard text-white rounded-3xl p-8 shadow-xl space-y-6 animate-fade-in">
            <div class="flex justify-between items-center border-b border-slate-800 pb-4">
                <h3 class="text-sm font-extrabold flex items-center gap-3">
                    <span class="bg-brand-yellow text-slate-900 w-6 h-6 rounded-md flex items-center justify-center text-xs font-black">${newId}</span>
                    Detail Barang
                </h3>
                <button onclick="deleteItemCard(${newId})" class="px-3 py-1 bg-slate-800 hover:bg-red-500/20 hover:text-red-400 text-slate-400 rounded-lg text-xs font-semibold transition">
                    <i class="fas fa-trash mr-1"></i> Hapus
                </button>
            </div>

            <div class="grid grid-cols-2 gap-8">
                <div class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
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
                        
                        <div class="grid grid-cols-4 gap-2">
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

            <div class="grid grid-cols-2 gap-6 pt-2 border-t border-slate-800">
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

// 4. Photo Upload Preview Simulation
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
                            waBtn.className = 'wa-send-btn px-4 py-2 bg-brand-yellow hover:bg-brand-yellowHover text-slate-900 rounded-xl text-xs font-extrabold flex items-center gap-2 shadow-md transition cursor-pointer';
                        }
                    };
                    reader.readAsDataURL(file);
                }
            };
            input.click();
        };
    });
}

// 5. Master-Detail Order Selection
function initMasterDetailOrders() {
    const orderCards = document.querySelectorAll('.order-card-item');
    orderCards.forEach(card => {
        card.addEventListener('click', () => {
            orderCards.forEach(c => {
                c.className = 'order-card-item p-5 rounded-2xl border border-slate-200 bg-white hover:border-slate-300 cursor-pointer transition-all';
            });
            card.className = 'order-card-item p-5 rounded-2xl border-2 border-brand-yellow bg-yellow-50/30 shadow-sm cursor-pointer relative transition-all';
            
            // Tambahkan ini untuk menyamakan dropdown status di sebelah kanan
            const statusBadge = card.querySelector('span');
            if (statusBadge) {
                const currentStatus = statusBadge.innerText.trim();
                const detailSelect = document.querySelector('#detail-status-select');
                if (detailSelect) {
                    detailSelect.value = currentStatus;
                }
            }
        });
    });
}

// 6. Order Filter
function initOrderFilter() {
    const searchInput = document.querySelector('#order-search-input');
    const statusSelect = document.querySelector('#order-status-select');

    if (!searchInput) return;

    const filterHandler = () => {
        const query = searchInput.value.toLowerCase();
        const status = statusSelect ? statusSelect.value : 'Semua Status';
        const cards = document.querySelectorAll('.order-card-item');

        cards.forEach(card => {
            const text = card.innerText.toLowerCase();
            const matchesSearch = text.includes(query);
            const matchesStatus = status === 'Semua Status' || text.includes(status.toLowerCase());
            card.style.display = (matchesSearch && matchesStatus) ? 'block' : 'none';
        });
    };

    if (searchInput) searchInput.addEventListener('input', filterHandler);
    if (statusSelect) statusSelect.addEventListener('change', filterHandler);
}
