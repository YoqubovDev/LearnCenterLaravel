<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To'lovlarim - Najot Ta'lim Student Panel</title>
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
        .payments-table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
        }
        .payments-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .payments-table th, .payments-table td {
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
            color: #333;
        }
        .payments-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            border-bottom: 1px solid #e5e7eb;
        }
        .payments-table td {
            border-bottom: 1px solid #e5e7eb;
        }
        .payments-table tr:last-child td {
            border-bottom: none;
        }
        .payments-table tr:hover {
            background-color: #f8f9fa;
        }
        .status-badge {
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 15px;
        }
        .badge-paid {
            background-color: #d1e7dd;
            color: #0f5132;
        }
        .badge-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        .badge-overdue {
            background-color: #f8d7da;
            color: #842029;
        }
        @media (max-width: 768px) {
            .content-area {
                margin-left: 0;
                width: 100%;
            }
            .payments-table th, .payments-table td {
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
            <div class="page-title">To'lovlarim</div>
            <div>
                <button class="btn btn-sm btn-danger">
                    <i class="fas fa-plus me-1"></i> Yangi to'lov
                </button>
            </div>
        </div>

        <!-- Payments Table -->
        <div class="payments-table">
            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Kurs nomi</th>
                    <th>Miqdori</th>
                    <th>Holati</th>
                    <th>To'lov vaqti</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Bootcamp PHP N3</td>
                    <td>500,000 so'm</td>
                    <td><span class="status-badge badge-overdue">Muddati o'tgan</span></td>
                    <td>10 Mart, 2025</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bootcamp PHP N3</td>
                    <td>500,000 so'm</td>
                    <td><span class="status-badge badge-pending">Kutilayotgan</span></td>
                    <td>10 Aprel, 2025</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bootcamp PHP N3</td>
                    <td>500,000 so'm</td>
                    <td><span class="status-badge badge-paid">To'langan</span></td>
                    <td>10 Fevral, 2025</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
