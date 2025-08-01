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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .page-title h1 {
            font-size: 28px;
            color: var(--secondary);
            margin-bottom: 5px;
        }

        .page-title p {
            color: var(--gray);
        }

        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .filter-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .filter-header h3 {
            font-size: 18px;
            color: var(--secondary);
        }

        .filter-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .form-group {
            margin-bottom: 0;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary);
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: border 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }

        .filter-actions {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        /* Orders Table */
        .table-container {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            overflow-x: auto;
            margin-bottom: 30px;
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

        .status-processing {
            background: rgba(23, 162, 184, 0.1);
            color: var(--info);
        }

        .action-btn {
            padding: 8px 12px;
            border-radius: 8px;
            border: 1px solid #eee;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-left: 5px;
        }

        .action-btn:hover {
            background: #f8f9fa;
        }

        .view-btn {
            color: var(--info);
        }

        .edit-btn {
            color: var(--primary);
        }

        .delete-btn {
            color: var(--danger);
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

        .orders-icon {
            background: rgba(23, 162, 184, 0.1);
            color: var(--info);
        }

        .revenue-icon {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .pending-icon {
            background: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }

        .cancelled-icon {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }

        /* Order Details Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background: white;
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
        }

        .modal-header {
            padding: 20px 25px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-header h3 {
            font-size: 20px;
            color: var(--secondary);
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--gray);
        }

        .modal-body {
            padding: 25px;
        }

        .order-details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }

        .detail-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }

        .detail-card h4 {
            font-size: 16px;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .detail-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .detail-label {
            color: var(--gray);
        }

        .detail-value {
            font-weight: 500;
        }

        .order-items {
            margin-top: 25px;
        }

        .order-items h4 {
            font-size: 18px;
            margin-bottom: 15px;
            color: var(--secondary);
        }

        .item-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .item-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .item-image {
            width: 60px;
            height: 60px;
            background: #f8f9fa;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .item-details h5 {
            font-size: 15px;
            margin-bottom: 5px;
        }

        .item-details p {
            color: var(--gray);
            font-size: 13px;
        }

        .item-price {
            text-align: left;
        }

        .modal-footer {
            padding: 20px 25px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }

        .page-item {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .page-item.active {
            background: var(--primary);
            color: white;
        }

        .page-item:hover:not(.active) {
            background: #f8f9fa;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
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
            
            .page-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .filter-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .content {
                padding: 20px 15px;
            }
            
            .order-details-grid {
                grid-template-columns: 1fr;
            }
            
            .item-row {
                flex-direction: column;
                gap: 15px;
            }
            
            .item-price {
                text-align: right;
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
                    <div>
                        <h1>مدیریت سفارشات</h1>
                        <p>مدیریت و پیگیری سفارشات مشتریان</p>
                    </div>
                    <button class="btn btn-primary">
                        <i class="fas fa-download"></i>
                        خروجی گزارش
                    </button>
                </div>

                <!-- Stats Cards -->
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon orders-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۱۲۴</h3>
                            <p>سفارشات جدید</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon revenue-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۱۲۵,۰۰۰,۰۰۰</h3>
                            <p>درآمد امروز (تومان)</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon pending-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۲۴</h3>
                            <p>سفارشات در انتظار</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon cancelled-icon">
                            <i class="fas fa-times-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۸</h3>
                            <p>سفارشات لغو شده</p>
                        </div>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="filter-section">
                    <div class="filter-header">
                        <h3>فیلتر سفارشات</h3>
                    </div>
                    <div class="filter-grid">
                        <div class="form-group">
                            <label for="orderNumber">شماره سفارش</label>
                            <input type="text" id="orderNumber" class="form-control" placeholder="شماره سفارش">
                        </div>
                        <div class="form-group">
                            <label for="customerName">نام مشتری</label>
                            <input type="text" id="customerName" class="form-control" placeholder="نام مشتری">
                        </div>
                        <div class="form-group">
                            <label for="orderStatus">وضعیت سفارش</label>
                            <select id="orderStatus" class="form-control">
                                <option value="">همه وضعیت ها</option>
                                <option value="pending">در انتظار</option>
                                <option value="processing">در حال پردازش</option>
                                <option value="completed">تکمیل شده</option>
                                <option value="cancelled">لغو شده</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="orderDate">تاریخ سفارش</label>
                            <input type="date" id="orderDate" class="form-control">
                        </div>
                    </div>
                    <div class="filter-actions">
                        <button class="btn btn-primary">
                            <i class="fas fa-filter"></i>
                            اعمال فیلتر
                        </button>
                        <button class="btn btn-outline">
                            <i class="fas fa-redo"></i>
                            بازنشانی
                        </button>
                    </div>
                </div>

                <!-- Orders Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>شماره سفارش</th>
                                <th>تاریخ</th>
                                <th>مشتری</th>
                                <th>مبلغ کل</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-001</td>
                                <td>۱۴۰۲/۰۸/۱۵</td>
                                <td>احمد محمدی</td>
                                <td>۱۲,۵۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-completed">تکمیل شده</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('ORD-001')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn edit-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-002</td>
                                <td>۱۴۰۲/۰۸/۱۵</td>
                                <td>فاطمه رضوی</td>
                                <td>۸,۳۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-pending">در انتظار</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('ORD-002')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn edit-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-003</td>
                                <td>۱۴۰۲/۰۸/۱۴</td>
                                <td>علی احمدی</td>
                                <td>۱۵,۲۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-processing">در حال پردازش</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('ORD-003')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn edit-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-004</td>
                                <td>۱۴۰۲/۰۸/۱۴</td>
                                <td>زهرا حسینی</td>
                                <td>۲۲,۰۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-cancelled">لغو شده</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('ORD-004')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn edit-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>#ORD-005</td>
                                <td>۱۴۰۲/۰۸/۱۳</td>
                                <td>محمد کریمی</td>
                                <td>۳۵,۰۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-completed">تکمیل شده</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('ORD-005')">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="action-btn edit-btn">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <div class="page-item active">1</div>
                    <div class="page-item">2</div>
                    <div class="page-item">3</div>
                    <div class="page-item">4</div>
                    <div class="page-item">5</div>
                    <div class="page-item">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Details Modal -->
    <div class="modal" id="orderModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>جزئیات سفارش #<span id="modalOrderNumber">ORD-001</span></h3>
                <button class="close-modal" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="order-details-grid">
                    <div class="detail-card">
                        <h4>اطلاعات مشتری</h4>
                        <div class="detail-item">
                            <span class="detail-label">نام و نام خانوادگی:</span>
                            <span class="detail-value" id="customerName">احمد محمدی</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">شماره تماس:</span>
                            <span class="detail-value" id="customerPhone">09123456789</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">ایمیل:</span>
                            <span class="detail-value" id="customerEmail">ahmad@example.com</span>
                        </div>
                    </div>
                    <div class="detail-card">
                        <h4>اطلاعات سفارش</h4>
                        <div class="detail-item">
                            <span class="detail-label">تاریخ سفارش:</span>
                            <span class="detail-value" id="orderDate">۱۴۰۲/۰۸/۱۵</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">وضعیت:</span>
                            <span class="detail-value"><span class="status status-completed" id="orderStatus">تکمیل شده</span></span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">شیوه پرداخت:</span>
                            <span class="detail-value" id="paymentMethod">کارت بانکی</span>
                        </div>
                    </div>
                    <div class="detail-card">
                        <h4>آدرس تحویل</h4>
                        <div class="detail-item">
                            <span class="detail-label">آدرس:</span>
                            <span class="detail-value" id="deliveryAddress">تهران، خیابان ولیعصر، پلاک 123</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">کد پستی:</span>
                            <span class="detail-value" id="postalCode">1234567890</span>
                        </div>
                    </div>
                    <div class="detail-card">
                        <h4>هزینه ها</h4>
                        <div class="detail-item">
                            <span class="detail-label">جمع کل:</span>
                            <span class="detail-value" id="totalAmount">۱۲,۵۰۰,۰۰۰ تومان</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">هزینه ارسال:</span>
                            <span class="detail-value" id="shippingCost">۰ تومان</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">قابل پرداخت:</span>
                            <span class="detail-value" id="payableAmount">۱۲,۵۰۰,۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>

                <div class="order-items">
                    <h4>آیتم های سفارش</h4>
                    <div class="item-row">
                        <div class="item-info">
                            <div class="item-image">
                                <img src="https://placehold.co/50x50/d4af37/white?text=طلایی" alt="طلایی" style="border-radius: 6px; width: 100%; height: 100%;">
                            </div>
                            <div class="item-details">
                                <h5>گردنبند طلای ۱۸ عیار</h5>
                                <p>وزن: ۵ گرم</p>
                            </div>
                        </div>
                        <div class="item-price">
                            <div>تعداد: ۱</div>
                            <div style="font-weight: bold; margin-top: 5px;">۱۲,۵۰۰,۰۰۰ تومان</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                    بستن
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-print"></i>
                    چاپ فاکتور
                </button>
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

        // Modal functionality
        function openModal(orderId) {
            document.getElementById('modalOrderNumber').textContent = orderId;
            document.getElementById('orderModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('orderModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('orderModal');
            if (event.target === modal) {
                closeModal();
            }
        }

        // Action buttons functionality
        document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('ویرایش سفارش');
            });
        });

        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('آیا از حذف این سفارش اطمینان دارید؟')) {
                    this.closest('tr').remove();
                }
            });
        });

        // Stat card hover effect
        document.querySelectorAll('.stat-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.05)';
            });
        });
    </script>
</body>
</html>