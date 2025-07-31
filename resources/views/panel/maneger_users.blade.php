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

        .customers-icon {
            background: rgba(23, 162, 184, 0.1);
            color: var(--info);
        }

        .active-icon {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .new-icon {
            background: rgba(212, 175, 55, 0.1);
            color: var(--primary);
        }

        .vip-icon {
            background: rgba(153, 51, 255, 0.1);
            color: #9933ff;
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

        /* Customers Table */
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

        .customer-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            margin-left: 10px;
        }

        .customer-info {
            display: flex;
            align-items: center;
        }

        .customer-details h4 {
            font-size: 15px;
            margin-bottom: 3px;
        }

        .customer-details p {
            color: var(--gray);
            font-size: 13px;
            margin: 0;
        }

        .status {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-active {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .status-inactive {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }

        .status-pending {
            background: rgba(255, 193, 7, 0.1);
            color: var(--warning);
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

        /* Customer Details Modal */
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
            max-width: 900px;
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

        .customer-profile {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
            padding-bottom: 25px;
            border-bottom: 1px solid #eee;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 36px;
            font-weight: bold;
        }

        .profile-info h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .profile-info p {
            color: var(--gray);
            margin-bottom: 5px;
        }

        .profile-stats {
            display: flex;
            gap: 30px;
            margin-top: 15px;
        }

        .profile-stat {
            text-align: center;
        }

        .profile-stat h4 {
            font-size: 20px;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .profile-stat p {
            color: var(--gray);
            font-size: 14px;
            margin: 0;
        }

        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 25px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 8px 8px 0 0;
            transition: all 0.3s ease;
        }

        .tab.active {
            background: var(--primary);
            color: white;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }

        .info-card {
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }

        .info-card h4 {
            font-size: 16px;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-label {
            color: var(--gray);
        }

        .info-value {
            font-weight: 500;
        }

        .orders-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .orders-table th, .orders-table td {
            padding: 12px;
            text-align: right;
            border-bottom: 1px solid #eee;
        }

        .orders-table th {
            background: #f8f9fa;
            font-weight: 600;
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
            
            .customer-profile {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-stats {
                justify-content: center;
            }
        }

        @media (max-width: 576px) {
            .content {
                padding: 20px 15px;
            }
            
            .info-grid {
                grid-template-columns: 1fr;
            }
            
            .profile-stats {
                flex-direction: column;
                gap: 15px;
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
                        <h1>مدیریت مشتریان</h1>
                        <p>مدیریت و پیگیری مشتریان فروشگاه</p>
                    </div>
                    <button class="btn btn-primary">
                        <i class="fas fa-user-plus"></i>
                        افزودن مشتری جدید
                    </button>
                </div>

                <!-- Stats Cards -->
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon customers-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۱,۲۴۸</h3>
                            <p>مجموع مشتریان</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon active-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۸۹۲</h3>
                            <p>مشتریان فعال</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon new-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۴۵</h3>
                            <p>مشتریان جدید (ماه)</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon vip-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <div class="stat-info">
                            <h3>۱۲</h3>
                            <p>مشتریان ویژه</p>
                        </div>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="filter-section">
                    <div class="filter-header">
                        <h3>فیلتر مشتریان</h3>
                    </div>
                    <div class="filter-grid">
                        <div class="form-group">
                            <label for="customerName">نام مشتری</label>
                            <input type="text" id="customerName" class="form-control" placeholder="نام مشتری">
                        </div>
                        <div class="form-group">
                            <label for="customerStatus">وضعیت</label>
                            <select id="customerStatus" class="form-control">
                                <option value="">همه وضعیت ها</option>
                                <option value="active">فعال</option>
                                <option value="inactive">غیرفعال</option>
                                <option value="pending">در انتظار</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="customerType">نوع مشتری</label>
                            <select id="customerType" class="form-control">
                                <option value="">همه انواع</option>
                                <option value="regular">عادی</option>
                                <option value="vip">ویژه</option>
                                <option value="wholesale">عمده فروش</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="registerDate">تاریخ ثبت نام</label>
                            <input type="date" id="registerDate" class="form-control">
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

                <!-- Customers Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>مشتری</th>
                                <th>شماره تماس</th>
                                <th>ایمیل</th>
                                <th>تاریخ ثبت نام</th>
                                <th>مجموع خرید</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="customer-info">
                                        <div class="customer-avatar">ا</div>
                                        <div class="customer-details">
                                            <h4>احمد محمدی</h4>
                                            <p>مشتری ویژه</p>
                                        </div>
                                    </div>
                                </td>
                                <td>09123456789</td>
                                <td>ahmad@example.com</td>
                                <td>۱۴۰۲/۰۵/۱۲</td>
                                <td>۱۲۵,۰۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-active">فعال</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('احمد محمدی')">
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
                                <td>
                                    <div class="customer-info">
                                        <div class="customer-avatar">ف</div>
                                        <div class="customer-details">
                                            <h4>فاطمه رضوی</h4>
                                            <p>مشتری عادی</p>
                                        </div>
                                    </div>
                                </td>
                                <td>09356789123</td>
                                <td>fatemeh@example.com</td>
                                <td>۱۴۰۲/۰۷/۲۲</td>
                                <td>۳۵,۰۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-active">فعال</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('فاطمه رضوی')">
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
                                <td>
                                    <div class="customer-info">
                                        <div class="customer-avatar">ع</div>
                                        <div class="customer-details">
                                            <h4>علی احمدی</h4>
                                            <p>مشتری عادی</p>
                                        </div>
                                    </div>
                                </td>
                                <td>09198765432</td>
                                <td>ali@example.com</td>
                                <td>۱۴۰۲/۰۶/۱۵</td>
                                <td>۵۲,۰۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-inactive">غیرفعال</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('علی احمدی')">
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
                                <td>
                                    <div class="customer-info">
                                        <div class="customer-avatar">ز</div>
                                        <div class="customer-details">
                                            <h4>زهرا حسینی</h4>
                                            <p>مشتری عمده فروش</p>
                                        </div>
                                    </div>
                                </td>
                                <td>09134567890</td>
                                <td>zahra@example.com</td>
                                <td>۱۴۰۲/۰۴/۱۸</td>
                                <td>۲۱۰,۰۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-active">فعال</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('زهرا حسینی')">
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
                                <td>
                                    <div class="customer-info">
                                        <div class="customer-avatar">م</div>
                                        <div class="customer-details">
                                            <h4>محمد کریمی</h4>
                                            <p>مشتری عادی</p>
                                        </div>
                                    </div>
                                </td>
                                <td>09112345678</td>
                                <td>mohammad@example.com</td>
                                <td>۱۴۰۲/۰۸/۰۵</td>
                                <td>۱۸,۰۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-pending">در انتظار</span></td>
                                <td>
                                    <button class="action-btn view-btn" onclick="openModal('محمد کریمی')">
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

    <!-- Customer Details Modal -->
    <div class="modal" id="customerModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>اطلاعات مشتری</h3>
                <button class="close-modal" onclick="closeModal()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="customer-profile">
                    <div class="profile-avatar" id="modalCustomerAvatar">ا</div>
                    <div class="profile-info">
                        <h2 id="modalCustomerName">احمد محمدی</h2>
                        <p>مشتری ویژه</p>
                        <div class="profile-stats">
                            <div class="profile-stat">
                                <h4>۱۲۵,۰۰۰,۰۰۰</h4>
                                <p>مجموع خرید (تومان)</p>
                            </div>
                            <div class="profile-stat">
                                <h4>۲۴</h4>
                                <p>تعداد سفارشات</p>
                            </div>
                            <div class="profile-stat">
                                <h4>۱۴۰۲/۰۵/۱۲</h4>
                                <p>تاریخ ثبت نام</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tabs">
                    <div class="tab active" onclick="switchTab('info')">اطلاعات شخصی</div>
                    <div class="tab" onclick="switchTab('orders')">سفارشات</div>
                    <div class="tab" onclick="switchTab('notes')">یادداشت ها</div>
                </div>

                <div class="tab-content active" id="info-tab">
                    <div class="info-grid">
                        <div class="info-card">
                            <h4>اطلاعات تماس</h4>
                            <div class="info-item">
                                <span class="info-label">شماره تماس:</span>
                                <span class="info-value" id="modalCustomerPhone">09123456789</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">ایمیل:</span>
                                <span class="info-value" id="modalCustomerEmail">ahmad@example.com</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">آدرس:</span>
                                <span class="info-value" id="modalCustomerAddress">تهران، خیابان ولیعصر، پلاک 123</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">کد پستی:</span>
                                <span class="info-value" id="modalCustomerPostal">1234567890</span>
                            </div>
                        </div>
                        <div class="info-card">
                            <h4>اطلاعات حساب</h4>
                            <div class="info-item">
                                <span class="info-label">وضعیت:</span>
                                <span class="info-value"><span class="status status-active">فعال</span></span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">نوع مشتری:</span>
                                <span class="info-value" id="modalCustomerType">ویژه</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">آخرین خرید:</span>
                                <span class="info-value" id="modalLastPurchase">۱۴۰۲/۰۸/۱۵</span>
                            </div>
                            <div class="info-item">
                                <span class="info-label">امتیاز وفاداری:</span>
                                <span class="info-value" id="modalLoyaltyPoints">۱,۲۵۰ امتیاز</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="orders-tab">
                    <h4 style="margin-bottom: 20px;">سفارشات اخیر</h4>
                    <table class="orders-table">
                        <thead>
                            <tr>
                                <th>شماره سفارش</th>
                                <th>تاریخ</th>
                                <th>مبلغ</th>
                                <th>وضعیت</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#ORD-001</td>
                                <td>۱۴۰۲/۰۸/۱۵</td>
                                <td>۱۲,۵۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-completed">تکمیل شده</span></td>
                            </tr>
                            <tr>
                                <td>#ORD-015</td>
                                <td>۱۴۰۲/۰۷/۲۲</td>
                                <td>۸,۳۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-completed">تکمیل شده</span></td>
                            </tr>
                            <tr>
                                <td>#ORD-028</td>
                                <td>۱۴۰۲/۰۶/۱۰</td>
                                <td>۱۵,۲۰۰,۰۰۰ تومان</td>
                                <td><span class="status status-completed">تکمیل شده</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="tab-content" id="notes-tab">
                    <h4 style="margin-bottom: 20px;">یادداشت ها</h4>
                    <div style="background: #f8f9fa; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
                        <p style="margin-bottom: 15px;">مشتری ویژه با خریدهای مکرر. ترجیح می دهد محصولات طلای ۱۸ عیار را خریداری کند.</p>
                        <p style="color: var(--gray); font-size: 13px;">آخرین به روز رسانی: ۱۴۰۲/۰۸/۱۰</p>
                    </div>
                    <div style="display: flex; gap: 10px;">
                        <textarea placeholder="افزودن یادداشت جدید..." style="flex: 1; padding: 15px; border: 1px solid #ddd; border-radius: 8px; height: 100px;"></textarea>
                        <button class="btn btn-primary" style="height: fit-content;">ذخیره</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-outline" onclick="closeModal()">
                    <i class="fas fa-times"></i>
                    بستن
                </button>
                <button class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                    ویرایش اطلاعات
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
        function openModal(customerName) {
            document.getElementById('modalCustomerName').textContent = customerName;
            document.getElementById('modalCustomerAvatar').textContent = customerName.charAt(0);
            document.getElementById('customerModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('customerModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('customerModal');
            if (event.target === modal) {
                closeModal();
            }
        }

        // Tab switching
        function switchTab(tabName) {
            // Remove active class from all tabs and tab contents
            document.querySelectorAll('.tab').forEach(tab => tab.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked tab
            event.target.classList.add('active');
            
            // Show the selected tab content
            document.getElementById(tabName + '-tab').classList.add('active');
        }

        // Action buttons functionality
        document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('ویرایش اطلاعات مشتری');
            });
        });

        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('آیا از حذف این مشتری اطمینان دارید؟')) {
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