<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do'kon - Najot Ta'lim Student Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
            margin: 0;
        }
        .sidebar {
            background-color: white;
            width: 185px;
            border-right: 1px solid #e5e7eb;
            position: fixed;
            height: 100vh;
            top: 0;
            left: 0;
        }
        .sidebar-item {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            color: #6b7280;
            text-decoration: none;
            font-size: 14px;
        }
        .sidebar-item:hover {
            background-color: #f3f4f6;
        }
        .sidebar-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
        .logo-container {
            padding: 15px;
            border-bottom: 1px solid #e5e7eb;
        }
        .content-area {
            background-color: #eef2f6;
            min-height: 100vh;
            margin-left: 220px;
            padding: 20px;
            width: calc(100% - 220px);
        }
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .page-title {
            font-size: 24px;
            font-weight: 600;
            color: #333;
        }
        /* Rasmdagi dizayn uchun stillar */
        .filter-section {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: center;
        }
        .filter-section select {
            padding: 8px 12px;
            border: 1px solid #e5e7eb;
            border-radius: 5px;
            font-size: 14px;
            color: #6c757d;
            background-color: white;
            width: 150px;
        }
        .filter-section select:focus {
            outline: none;
            border-color: #dc3545;
        }
        .filter-section .toggle-switch {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #6c757d;
        }
        .filter-section .form-check-input {
            width: 40px;
            height: 20px;
            margin: 0;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .product-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }
        .product-image {
            width: 100%;
            height: 150px;
            object-fit: contain;
            margin-bottom: 10px;
        }
        .product-title {
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 5px;
        }
        .product-price {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        .product-price i {
            color: #dc3545;
        }
        .product-action {
            font-size: 13px;
            padding: 5px 10px;
            border-radius: 5px;
            width: 100%;
        }
        .btn-available {
            background-color: #d1e7dd;
            color: #0f5132;
            border: none;
        }
        .btn-unavailable {
            background-color: #e5e7eb;
            color: #6c757d;
            border: none;
        }
        @media (max-width: 768px) {
            .content-area {
                margin-left: 0;
                width: 100%;
            }
            .filter-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            .filter-section select {
                width: 100%;
            }
            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }
    </style>
</head>
<body>
<div class="main-container">
    <!-- Sidebar (O'zgarishsiz qoldi) -->
    <x-sidebar></x-sidebar>

    <!-- Content Area (Rasmdagi dizaynga moslashtirildi) -->
    <div class="content-area">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title">Do'kon</div>
            <div>
                <button class="btn btn-sm btn-danger">
                    <i class="fas fa-sync-alt me-1"></i> Yangilash
                </button>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <select>
                <option>Kategoriya: Barchasi</option>
                <option>Kategoriya: Elektronika</option>
                <option>Kategoriya: Kiyim</option>
                <option>Kategoriya: Aksessuarlar</option>
            </select>
            <select>
                <option>Aksessuar qymati: Qidirish...</option>
                <option>Aksessuar qymati: 0-1000</option>
                <option>Aksessuar qymati: 1000-5000</option>
                <option>Aksessuar qymati: 5000+</option>
            </select>
            <div class="toggle-switch">
                <span>Kumushlarim yetadi</span>
                <input type="checkbox" class="form-check-input" id="kumushToggle">
            </div>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            <div class="product-card">
                <img src="/api/placeholder/150/150" alt="Najot Ta'lim ruchkasi" class="product-image">
                <div class="product-title">Najot Ta'lim ruchkasi</div>
                <div class="product-price">
                    <i class="fas fa-coins"></i> 800
                </div>
                <button class="product-action btn-available">Kumushlaringiz yetarli</button>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/150/150" alt="Najot Ta'lim stakani" class="product-image">
                <div class="product-title">Najot Ta'lim stakani</div>
                <div class="product-price">
                    <i class="fas fa-coins"></i> 1400
                </div>
                <button class="product-action btn-available">Kumushlaringiz yetarli</button>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/150/150" alt="Osmonqaldi Bolalar futbolkasi" class="product-image">
                <div class="product-title">Osmonqaldi Bolalar futbolkasi</div>
                <div class="product-price">
                    <i class="fas fa-coins"></i> 4400
                </div>
                <button class="product-action btn-available">Kumushlaringiz yetarli</button>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/150/150" alt="Najot Ta'lim futbolkasi" class="product-image">
                <div class="product-title">Najot Ta'lim futbolkasi</div>
                <div class="product-price">
                    <i class="fas fa-coins"></i> 4400
                </div>
                <button class="product-action btn-available">Kumushlaringiz yetarli</button>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/150/150" alt="Powerbank 10000 mAh" class="product-image">
                <div class="product-title">Powerbank 10000 mAh</div>
                <div class="product-price">
                    <i class="fas fa-coins"></i> 6300
                </div>
                <button class="product-action btn-unavailable">Kumushlaringiz yetarli emas</button>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/150/150" alt="Najot Ta'lim hudisi" class="product-image">
                <div class="product-title">Najot Ta'lim hudisi</div>
                <div class="product-price">
                    <i class="fas fa-coins"></i> 6600
                </div>
                <button class="product-action btn-unavailable">Kumushlaringiz yetarli emas</button>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/150/150" alt="Sumka" class="product-image">
                <div class="product-title">Sumka</div>
                <div class="product-price">
                    <i class="fas fa-coins"></i> 9000
                </div>
                <button class="product-action btn-unavailable">Kumushlaringiz yetarli emas</button>
            </div>
            <div class="product-card">
                <img src="/api/placeholder/150/150" alt="Sichqoncha" class="product-image">
                <div class="product-title">Sichqoncha</div>
                <div class="product-price">
                    <i class="fas fa-coins"></i> 9000
                </div>
                <button class="product-action btn-unavailable">Kumushlaringiz yetarli emas</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
