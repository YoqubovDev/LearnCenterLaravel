<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reyting - Najot Ta'lim Student Panel</title>
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
        /* Reyting uchun rasmdagi dizayn stillari */
        .filter-section {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
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
        .ranking-table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
        }
        .ranking-table table {
            width: 100%;
            border-collapse: collapse;
        }
        .ranking-table th, .ranking-table td {
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
            color: #333;
        }
        .ranking-table th {
            background-color: #f8f9fa;
            font-weight: 600;
            border-bottom: 1px solid #e5e7eb;
        }
        .ranking-table td {
            border-bottom: 1px solid #e5e7eb;
        }
        .ranking-table tr:last-child td {
            border-bottom: none;
        }
        .ranking-table tr:hover {
            background-color: #f8f9fa;
        }
        .ranking-table .position {
            font-weight: 600;
            color: #dc3545;
        }
        @media (max-width: 768px) {
            .content-area {
                margin-left: 0;
                width: 100%;
            }
            .filter-section {
                flex-direction: column;
                gap: 10px;
            }
            .filter-section select {
                width: 100%;
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
            <div class="page-title">Reyting</div>
            <div>
                <button class="btn btn-sm btn-danger">
                    <i class="fas fa-sync-alt me-1"></i> Yangilash
                </button>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <select>
                <option>Qamrov: Barchasi</option>
                <option>Qamrov: Guruh</option>
                <option>Qamrov: Umumiy</option>
            </select>
            <select>
                <option>Filial: Barchasi</option>
                <option>Filial: Toshkent</option>
                <option>Filial: Samarqand</option>
            </select>
            <select>
                <option>Bosqich: Barchasi</option>
                <option>Bosqich: 1</option>
                <option>Bosqich: 2</option>
                <option>Bosqich: 3</option>
                <option>Bosqich: 4</option>
                <option>Bosqich: 5</option>
            </select>
            <select>
                <option>Vaqt oralig'i: Boshlanish sanasi - Tugash sanasi</option>
                <option>Vaqt oralig'i: Oxirgi 30 kun</option>
                <option>Vaqt oralig'i: Oxirgi 7 kun</option>
            </select>
            <select>
                <option>Metod: Barchasi</option>
                <option>Metod: XP bo'yicha</option>
                <option>Metod: Kumushlar bo'yicha</option>
            </select>
        </div>

        <!-- Ranking Table -->
        <div class="ranking-table">
            <table>
                <thead>
                <tr>
                    <th>Reyting</th>
                    <th>Ism-familiya</th>
                    <th>Kurs</th>
                    <th>Holati</th>
                    <th>Bosqich</th>
                    <th>XP</th>
                    <th>Kumush</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="position">1</td>
                    <td>Samar Shakirov Dildor o'g'li</td>
                    <td>Bootcamp Full Stack NodeJS + VueJS</td>
                    <td>O'qiyabdi</td>
                    <td>5</td>
                    <td>1842</td>
                    <td>12584</td>
                </tr>
                <tr>
                    <td class="position">2</td>
                    <td>Ismoil Muhiddin Shuxrat o'g'li</td>
                    <td>Bootcamp Full Stack NodeJS + VueJS</td>
                    <td>O'qiyabdi</td>
                    <td>5</td>
                    <td>1720</td>
                    <td>11477</td>
                </tr>
                <tr>
                    <td class="position">3</td>
                    <td>Javohir Abdurahmonov Nural o'g'li</td>
                    <td>Bootcamp Full Stack NodeJS + VueJS</td>
                    <td>O'qiyabdi</td>
                    <td>5</td>
                    <td>1587</td>
                    <td>10369</td>
                </tr>
                <tr>
                    <td class="position">4</td>
                    <td>Abdulaziz Yusupov Alisher o'g'li</td>
                    <td>SMM PRO</td>
                    <td>O'qiyabdi</td>
                    <td>5</td>
                    <td>1574</td>
                    <td>9790</td>
                </tr>
                <tr>
                    <td class="position">5</td>
                    <td>Bekzodjon Qodir Murodjon o'g'li</td>
                    <td>Bootcamp Full Stack NodeJS + VueJS</td>
                    <td>O'qiyabdi</td>
                    <td>5</td>
                    <td>1520</td>
                    <td>9675</td>
                </tr>
                <tr>
                    <td class="position">6</td>
                    <td>Zufarbek Bobonov Karimbekovich</td>
                    <td>Bootcamp Full Stack NodeJS + VueJS</td>
                    <td>O'qiyabdi</td>
                    <td>4</td>
                    <td>1489</td>
                    <td>2810</td>
                </tr>
                <tr>
                    <td class="position">7</td>
                    <td>Alisher Sharipov Yunus o'g'li</td>
                    <td>Bootcamp Full Stack NodeJS + VueJS</td>
                    <td>O'qiyabdi</td>
                    <td>4</td>
                    <td>1428</td>
                    <td>7602</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
