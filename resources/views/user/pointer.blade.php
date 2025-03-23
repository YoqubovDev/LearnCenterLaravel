<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ko'rsatgichlarim - Najot Ta'lim Student Panel</title>
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
        .stats-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
            margin-bottom: 20px;
        }
        .stats-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .stats-title i {
            margin-right: 8px;
            color: #6c757d;
        }
        .stats-content {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .stats-item {
            font-size: 14px;
            color: #6c757d;
        }
        .stats-value {
            font-weight: 500;
            color: #333;
        }
        .progress-bar-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .progress {
            height: 10px;
            border-radius: 5px;
            flex-grow: 1;
        }
        .monitoring-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
        }
        .monitoring-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }
        .monitoring-item {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .monitoring-value {
            font-weight: 500;
            color: #333;
        }
        .total-stats {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e5e7eb;
            font-size: 14px;
            color: #6c757d;
        }
        .total-value {
            font-weight: 600;
            color: #333;
        }
        @media (max-width: 768px) {
            .content-area {
                margin-left: 0;
                width: 100%;
            }
            .progress-bar-container {
                flex-direction: column;
                align-items: flex-start;
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
            <div class="page-title">Ko'rsatgichlarim</div>
            <div>
                <button class="btn btn-sm btn-danger">
                    <i class="fas fa-sync-alt me-1"></i> Yangilash
                </button>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats-section">
            <div class="stats-title">
                <i class="fas fa-chart-line"></i> Mening natijalarim
            </div>
            <div class="stats-content">
                <div class="stats-item">
                    Kumushlar: <span class="stats-value">5171</span>
                </div>
                <div class="stats-item">
                    Bosqich: <span class="stats-value">4</span>
                </div>
                <div class="progress-bar-container">
                    <div class="stats-item">1335 / 1500</div>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="stats-item">
                    XP: <span class="stats-value">1335</span>
                </div>
            </div>
        </div>

        <!-- Monitoring Section -->
        <div class="monitoring-section">
            <div class="monitoring-title">Yig'ilgan natijalar monitoringi</div>
            <div class="monitoring-item">
                <span>Darsga ishtirok bo'yicha jami XP: 495, Jami Kumush: 5207</span>
                <button class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <div class="monitoring-item">
                <span>Uyga vazifa bo'yicha jami XP: 797, Jami Kumush: 4658</span>
                <button class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <div class="monitoring-item">
                <span>Imtihondan o'tish bo'yicha jami XP: 35, Jami Kumush: 178</span>
                <button class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <div class="monitoring-item">
                <span>Administratsiya tomonidan berilgan jami XP: 8, Jami Kumush: 2952</span>
                <button class="btn btn-sm btn-outline-secondary">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            <div class="total-stats">
                Jami yig'ilgan XP: <span class="total-value">1335</span>, Jami yig'ilgan Kumushlar: <span class="total-value">5171</span>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
