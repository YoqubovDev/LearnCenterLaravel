<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guruhlarim - Najot Ta'lim Student Panel</title>
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
        .groups-table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
        }
        .groups-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .groups-table th, .groups-table td {
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
            color: #333;
        }
        .groups-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            border-bottom: 1px solid #e5e7eb;
        }
        .groups-table td {
            border-bottom: 1px solid #e5e7eb;
        }
        .groups-table tr:last-child td {
            border-bottom: none;
        }
        .groups-table tr:hover {
            background-color: #f8f9fa;
        }
        .groups-table .member-count {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 24px;
            height: 24px;
            background-color: #e5e7eb;
            border-radius: 50%;
            font-size: 12px;
            color: #6c757d;
        }
        @media (max-width: 768px) {
            .content-area {
                margin-left: 0;
                width: 100%;
            }
            .groups-table th, .groups-table td {
                font-size: 12px;
                padding: 8px;
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
            <div class="page-title">Guruhlarim</div>
            <div>
                <button class="btn btn-sm btn-danger">
                    <i class="fas fa-plus me-1"></i> Yangi guruhga qo'shilish
                </button>
            </div>
        </div>

        <!-- Groups Table -->
        <div class="groups-table">
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Guruh nomi</th>
                    <th>Yo'nalishi</th>
                    <th>O'qituvchi</th>
                    <th>Boshlash vaqti</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Bootcamp PHP N3</td>
                    <td>Dasturlash</td>
                    <td><span class="member-count">26</span></td>
                    <td>28 Okt, 2024</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
