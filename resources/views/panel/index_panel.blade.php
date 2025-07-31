<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین - طلا فروشی</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #d4af37;
            --primary-dark: #b8860b;
            --secondary: #1a1a2e;
            --dark: #0f0f15;
            --light: #f8f9fa;
            --gray: #6c757d;
            --success: #28a745;
            --danger: #dc3545;
            --warning: #ffc107;
            --info: #17a2b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7fa;
            color: #333;
            direction: rtl;
            overflow-x: hidden;
        }

        .dashboard {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, var(--secondary), var(--dark));
            color: white;
            transition: all 0.3s ease;
            box-shadow: 3px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 100;
        }

        .sidebar-header {
            padding: 20px;
            background: rgba(0, 0, 0, 0.2);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo i {
            color: var(--primary);
            font-size: 24px;
        }

        .logo h2 {
            font-size: 20px;
            font-weight: 600;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-item {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            border-right: 3px solid transparent;
        }

        .menu-item:hover, .menu-item.active {
            background: rgba(212, 175, 55, 0.1);
            border-right: 3px solid var(--primary);
        }

        .menu-item i {
            width: 20px;
            text-align: center;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        .header {
            background: white;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-bar {
            display: flex;
            align-items: center;
            background: #f1f3f9;
            padding: 8px 15px;
            border-radius: 30px;
            width: 300px;
        }

        .search-bar input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            margin-right: 10px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .notification, .user-profile {
            position: relative;
            cursor: pointer;
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            left: -5px;
            background: var(--danger);
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* Content Area */
        .content {
            padding: 30px;
            flex: 1;
            overflow-y: auto;
        }

        .page-title {
            margin-bottom: 30px;
        }

        .page-title h1 {
            font-size: 28px;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .page-title p {
            color: var(--gray);
        }

        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            gap: 20px;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-info h3 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .stat-info p {
            color: var(--gray);
            font-size: 14px;
        }

        .sales-icon {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .revenue-icon {
            background: rgba(212, 175, 55, 0.1);
            color: var(--primary);
        }

        .orders-icon {
            background: rgba(23, 162, 184, 0.1);
            color: var(--info);
        }

        .customers-icon {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }

        /* Charts and Tables */
        .content-row {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .card-header h3 {
            font-size: 18px;
            color: var(--secondary);
        }

        .chart-container {
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .chart-placeholder {
            width: 100%;
            height: 100%;
            background: #f8f9fa;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gray);
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: right;
            border-bottom: 1px solid #eee;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: var(--secondary);
        }

        tr:hover {
            background: #f8f9fa;
        }

        .status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }

        .status-completed {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .status-cancelled {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }

        /* Recent Activity */
        .activity-list {
            list-style: none;
        }

        .activity-item {
            display: flex;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .activity-content h4 {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .activity-content p {
            color: var(--gray);
            font-size: 13px;
        }

        .activity-time {
            color: var(--gray);
            font-size: 12px;
            margin-top: 5px;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .content-row {
                grid-template-columns: 1fr;
            }
            
            .sidebar {
                width: 70px;
            }
            
            .sidebar .logo h2, .menu-text {
                display: none;
            }
            
            .sidebar .logo {
                justify-content: center;
            }
            
            .menu-item {
                justify-content: center;
                padding: 15px;
            }
            
            .menu-item i {
                margin: 0;
            }
        }

        @media (max-width: 768px) {
            .search-bar {
                width: 200px;
            }
            
            .header-actions .user-name {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .search-bar {
                display: none;
            }
            
            .content {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            @include('components.sider')

        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="جستجو...">
                </div>
                <div class="header-actions">
                    <div class="notification">
                        <i class="far fa-bell"></i>
                        <span class="notification-badge">3</span>
                    </div>
                    <div class="user-profile">
                        <div class="user-avatar">ادمین</div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="content">
                <div class="page-title">
                    <h1>داشبورد</h1>
                    <p>خلاصه عملکرد فروشگاه شما</p>
                </div>

                <!-- Stats Cards -->
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon sales-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-info">
                            <h3>1,248</h3>
                            <p>سفارشات جدید</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon revenue-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۲۴۵,۰۰۰,۰۰۰</h3>
                            <p>درآمد کل (تومان)</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon orders-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۱۲٪</h3>
                            <p>رشد فروش</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon customers-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>892</h3>
                            <p>مشتریان فعال</p>
                        </div>
                    </div>
                </div>

                <!-- Charts and Tables -->
                <div class="content-row">
                    <div class="card">
                        <div class="card-header">
                            <h3>فروش ماهانه</h3>
                            <select>
                                <option>۱۲ ماه گذشته</option>
                                <option>۶ ماه گذشته</option>
                            </select>
                        </div>
                        <div class="chart-container">
                            <div class="chart-placeholder">
                                <i class="fas fa-chart-bar fa-3x" style="color: #d4af37;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>سفارشات اخیر</h3>
                            <a href="#" style="color: var(--primary); text-decoration: none;">مشاهده همه</a>
                        </div>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>شماره سفارش</th>
                                        <th>مشتری</th>
                                        <th>مبلغ</th>
                                        <th>وضعیت</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#ORD-001</td>
                                        <td>احمد محمدی</td>
                                        <td>۱۲,۵۰۰,۰۰۰ تومان</td>
                                        <td><span class="status status-completed">تکمیل شده</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-002</td>
                                        <td>فاطمه رضوی</td>
                                        <td>۸,۳۰۰,۰۰۰ تومان</td>
                                        <td><span class="status status-pending">در انتظار</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-003</td>
                                        <td>علی احمدی</td>
                                        <td>۱۵,۲۰۰,۰۰۰ تومان</td>
                                        <td><span class="status status-completed">تکمیل شده</span></td>
                                    </tr>
                                    <tr>
                                        <td>#ORD-004</td>
                                        <td>زهرا حسینی</td>
                                        <td>۲۲,۰۰۰,۰۰۰ تومان</td>
                                        <td><span class="status status-cancelled">لغو شده</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity and Top Products -->
                <div class="content-row">
                    <div class="card">
                        <div class="card-header">
                            <h3>فعالیت اخیر</h3>
                        </div>
                        <ul class="activity-list">
                            <li class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-shopping-cart" style="color: var(--primary);"></i>
                                </div>
                                <div class="activity-content">
                                    <h4>سفارش جدید</h4>
                                    <p>احمد محمدی یک سفارش جدید ثبت کرد</p>
                                    <div class="activity-time">۲ دقیقه پیش</div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-user-plus" style="color: var(--success);"></i>
                                </div>
                                <div class="activity-content">
                                    <h4>عضویت جدید</h4>
                                    <p>فاطمه رضوی به عنوان مشتری جدید ثبت نام کرد</p>
                                    <div class="activity-time">۱۵ دقیقه پیش</div>
                                </div>
                            </li>
                            <li class="activity-item">
                                <div class="activity-icon">
                                    <i class="fas fa-box" style="color: var(--info);"></i>
                                </div>
                                <div class="activity-content">
                                    <h4>محصول جدید</h4>
                                    <p>زیورآلات طلا جدید به فروشگاه اضافه شد</p>
                                    <div class="activity-time">۱ ساعت پیش</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>پرفروش ترین محصولات</h3>
                        </div>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>محصول</th>
                                        <th>فروش</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>گردنبند طلا ۱۸ عیار</td>
                                        <td>۱۲۵ عدد</td>
                                    </tr>
                                    <tr>
                                        <td>دستبند الماس</td>
                                        <td>۸۹ عدد</td>
                                    </tr>
                                    <tr>
                                        <td>انگشتر نامزدی</td>
                                        <td>۷۶ عدد</td>
                                    </tr>
                                    <tr>
                                        <td>گوشواره نقره</td>
                                        <td>۶۴ عدد</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple interactivity for menu items
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Notification badge animation
        const notificationBadge = document.querySelector('.notification-badge');
        if (notificationBadge) {
            setInterval(() => {
                notificationBadge.style.transform = 'scale(1.2)';
                setTimeout(() => {
                    notificationBadge.style.transform = 'scale(1)';
                }, 300);
            }, 3000);
        }

        // Simulate loading charts
        document.addEventListener('DOMContentLoaded', function() {
            const chartPlaceholders = document.querySelectorAll('.chart-placeholder');
            chartPlaceholders.forEach(placeholder => {
                setTimeout(() => {
                    placeholder.innerHTML = '<canvas style="width: 100%; height: 100%;"></canvas>';
                }, 1000);
            });
        });
    </script>
</body>
</html>