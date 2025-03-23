<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qo'shimcha darslar - Najot Ta'lim Student Panel</title>
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
        .lessons-list {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
        }
        .lessons-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }
        .lesson-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            font-size: 14px;
            color: #333;
            border-bottom: 1px solid #e5e7eb;
        }
        .lesson-item:last-child {
            border-bottom: none;
        }
        .lesson-item:hover {
            background-color: #f8f9fa;
        }
        .lesson-item i {
            color: #6c757d;
        }
        @media (max-width: 768px) {
            .content-area {
                margin-left: 0;
                width: 100%;
            }
            .lesson-item {
                font-size: 12px;
                padding: 8px 0;
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
            <div class="page-title">Qo'shimcha darslar</div>
            <div>
                <button class="btn btn-sm btn-danger">
                    <i class="fas fa-sync-alt me-1"></i> Yangilash
                </button>
            </div>
        </div>

        <!-- Lessons List -->
        <div class="lessons-list">
            <div class="lessons-title">HR subattari kursi</div>
            <div class="lesson-item">
                <span>1. Ishlash va subattagacha bo‘lgan jaryonlar</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="lesson-item">
                <span>2. Ishlash va subattagacha bo‘lgan jaryonlar: Rezyume</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="lesson-item">
                <span>3. Ishlash va subattagacha bo‘lgan jaryonlar: LinkedIn</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="lesson-item">
                <span>4. Ish subattabi</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="lesson-item">
                <span>5. HR: Ishga kirgandan keyingi jaryonlar</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="lesson-item">
                <span>6. HR: Ishdan bo‘shash</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
