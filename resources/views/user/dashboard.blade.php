<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahifa - Najot Ta'lim Student Panel</title>
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
        .kumushlar-rating-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
            margin-bottom: 20px;
            width: 300px; /* Kalendar o‘lchamiga teng */
        }
        .kumushlar {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .kumushlar i {
            color: #dc3545;
        }
        .rating-item {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .rating-value {
            font-weight: 500;
            color: #333;
        }
        .stats-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
            margin-bottom: 20px;
            width: 300px; /* Kalendar o‘lchamiga teng */
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
        .calendar-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 15px;
            width: 300px; /* Kalendar o‘lchami rasmdagi kabi */
        }
        .calendar-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .calendar-title select {
            border: none;
            font-size: 14px;
            color: #333;
            font-weight: 500;
        }
        .calendar-title i {
            color: #6c757d;
            cursor: pointer;
        }
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            text-align: center;
        }
        .calendar-day {
            font-size: 12px;
            color: #6c757d;
            font-weight: 500;
        }
        .calendar-date {
            font-size: 12px;
            color: #333;
            padding: 5px;
            border-radius: 50%;
        }
        .calendar-date.marked {
            background-color: #dc3545;
            color: white;
        }
        .calendar-date.today {
            border: 1px solid #dc3545;
            color: #dc3545;
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
            .kumushlar-rating-section, .stats-section, .calendar-section {
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
        <!-- Kumushlar va Reyting (Bir konteynerda) -->
        <div class="kumushlar-rating-section">
            <div class="kumushlar">
                Kumushlar: 5171 <i class="fas fa-gem"></i>
            </div>
            <div class="stats-title">Reyting</div>
            <div class="rating-item">
                <span>Umumiy: 31-o‘rin</span>
                <span class="rating-value">Bootcamp Foundation</span>
            </div>
            <div class="rating-item">
                <span>Bootcamp PHP N3: 3-o‘rin</span>
                <span class="rating-value"></span>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="stats-section">
            <div class="stats-title">
                <i class="fas fa-chart-line"></i> Bosqich: 4
            </div>
            <div class="stats-content">
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

        <!-- Calendar Section -->
        <div class="calendar-section">
            <div class="calendar-title">
                <span>Dars jadvali</span>
                <div>
                    <i class="fas fa-chevron-left me-2"></i>
                    <select>
                        <option>Mart 2025</option>
                        <option>Aprel 2025</option>
                        <option>May 2025</option>
                    </select>
                    <i class="fas fa-chevron-right ms-2"></i>
                </div>
            </div>
            <div class="calendar-grid">
                <div class="calendar-day">D</div>
                <div class="calendar-day">S</div>
                <div class="calendar-day">C</div>
                <div class="calendar-day">P</div>
                <div class="calendar-day">J</div>
                <div class="calendar-day">S</div>
                <div class="calendar-day">Y</div>
                <div class="calendar-date"></div>
                <div class="calendar-date"></div>
                <div class="calendar-date">1</div>
                <div class="calendar-date">2</div>
                <div class="calendar-date marked">3</div>
                <div class="calendar-date marked">4</div>
                <div class="calendar-date marked">5</div>
                <div class="calendar-date marked">6</div>
                <div class="calendar-date marked">7</div>
                <div class="calendar-date marked">8</div>
                <div class="calendar-date marked">9</div>
                <div class="calendar-date marked">10</div>
                <div class="calendar-date marked">11</div>
                <div class.placeholder-date"></div>
            <div class="calendar-date marked">12</div>
            <div class="calendar-date marked">13</div>
            <div class="calendar-date marked">14</div>
            <div class="calendar-date marked">15</div>
            <div class="calendar-date marked">16</div>
            <div class="calendar-date marked">17</div>
            <div class="calendar-date marked">18</div>
            <div class="calendar-date marked">19</div>
            <div class="calendar-date marked">20</div>
            <div class="calendar-date marked">21</div>
            <div class="calendar-date marked">22</div>
            <div class="calendar-date today">23</div>
            <div class="calendar-date">24</div>
            <div class="calendar-date">25</div>
            <div class="calendar-date">26</div>
            <div class="calendar-date">27</div>
            <div class="calendar-date">28</div>
            <div class="calendar-date">29</div>
            <div class="calendar-date">30</div>
            <div class="calendar-date">31</div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
