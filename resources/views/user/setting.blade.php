<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sozlamalar - Najot Ta'lim Student Panel</title>
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
        .profile-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            padding: 20px;
            margin-bottom: 20px;
        }
        .profile-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 15px;
        }
        .profile-image-section {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        .profile-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
        }
        .upload-info {
            font-size: 12px;
            color: #6c757d;
        }
        .upload-info a {
            color: #dc3545;
            text-decoration: none;
        }
        .profile-details {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-bottom: 20px;
        }
        .detail-item {
            font-size: 14px;
            color: #6c757d;
        }
        .detail-value {
            font-weight: 500;
            color: #333;
        }
        .login-section {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }
        .login-section .detail-item {
            flex: 1;
        }
        .login-section input {
            width: 100%;
            padding: 8px;
            border: 1px solid #e5e7eb;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
        }
        .login-section input:focus {
            outline: none;
            border-color: #dc3545;
        }
        .notification-section {
            margin-bottom: 20px;
        }
        .notification-section .detail-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .conditions-section {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .conditions-section input {
            width: 40px;
            height: 20px;
            margin: 0;
        }
        @media (max-width: 768px) {
            .content-area {
                margin-left: 0;
                width: 100%;
            }
            .profile-details {
                grid-template-columns: 1fr;
            }
            .login-section {
                flex-direction: column;
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
            <div class="page-title">Sozlamalar</div>
            <div>
                <button class="btn btn-sm btn-danger">
                    <i class="fas fa-save me-1"></i> Saqlash
                </button>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="profile-section">
            <div class="profile-title">Shaxsiy ma'lumotlar</div>
            <div class="profile-image-section">
                <img src="/api/placeholder/80/80" alt="Profile Image" class="profile-image">
                <div>
                    <div class="upload-info">
                        500x500 o‘lcham, JPEG, JPG, PNG format, maksimum 2MB
                    </div>
                    <a href="#" class="upload-link">Tahrirlash</a>
                </div>
            </div>
            <div class="profile-details">
                <div class="detail-item">
                    Ism<br>
                    <span class="detail-value">Mexriddin</span>
                </div>
                <div class="detail-item">
                    Familiya<br>
                    <span class="detail-value">Nuriddinov</span>
                </div>
                <div class="detail-item">
                    Telefon raqam<br>
                    <span class="detail-value">(+998) 94 486 60 08</span>
                </div>
                <div class="detail-item">
                    Tug'ilgan sana<br>
                    <span class="detail-value">02 Okt, 2005</span>
                </div>
                <div class="detail-item">
                    Jinsi<br>
                    <span class="detail-value">Male</span>
                </div>
                <div class="detail-item">
                    HH ID<br>
                    <span class="detail-value">24526</span>
                </div>
            </div>
            <div class="login-section">
                <div class="detail-item">
                    Kirish<br>
                    <input type="text" value="24526" readonly>
                </div>
                <div class="detail-item">
                    Parol<br>
                    <input type="password" value="password" readonly>
                </div>
            </div>
            <div class="notification-section">
                <div class="detail-item">
                    Bildirishnoma sozlamalari
                    <i class="fas fa-pen"></i>
                </div>
            </div>
            <div class="conditions-section">
                <span>Shartnomalarim</span>
                <input type="text" value="Toshkent | Bootcamp Res..." readonly>
                <i class="fas fa-link"></i>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
