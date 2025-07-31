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

        /* Tabs */
        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
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

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            height: 200px;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .product-image img {
            max-width: 80%;
            max-height: 80%;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--primary);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
        }

        .product-info {
            padding: 20px;
        }

        .product-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--secondary);
        }

        .product-description {
            color: var(--gray);
            font-size: 14px;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .product-price {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .product-actions {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            flex: 1;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #eee;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .action-btn:hover {
            background: #f8f9fa;
        }

        .edit-btn {
            color: var(--info);
        }

        .delete-btn {
            color: var(--danger);
        }

        /* Form Styles */
        .form-container {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--secondary);
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

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-row .form-group {
            flex: 1;
        }

        /* Table Styles */
        .table-container {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
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

        .status-active {
            background: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .status-inactive {
            background: rgba(220, 53, 69, 0.1);
            color: var(--danger);
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
            .products-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
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
            
            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .page-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .content {
                padding: 20px 15px;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
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
                        <h1>مدیریت محصولات</h1>
                        <p>مدیریت محصولات فروشگاه</p>
                    </div>
                    <button class="btn btn-primary" id="addProductBtn">
                        <i class="fas fa-plus"></i>
                        افزودن محصول جدید
                    </button>
                </div>

                <!-- Tabs -->
                <div class="tabs">
                    <div class="tab active">همه محصولات</div>
                    <div class="tab">طلا</div>
                    <div class="tab">نقره</div>
                    <div class="tab">الماس</div>
                    <div class="tab">زیورآلات</div>
                </div>

                <!-- Products Grid -->
                <div class="products-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://placehold.co/200x200/d4af37/white?text=گردنبند+طلایی" alt="گردنبند طلایی">
                            <div class="product-badge">جدید</div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">گردنبند طلای ۱۸ عیار</h3>
                            <p class="product-description">گردنبند طلای ۱۸ عیار با طراحی مدرن و زیبا</p>
                            <div class="product-price">۱۲,۵۰۰,۰۰۰ تومان</div>
                            <div class="product-actions">
                                <button class="action-btn edit-btn">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete-btn">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://placehold.co/200x200/c0c0c0/white?text=دستبند+نقره" alt="دستبند نقره">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">دستبند نقره اکسید</h3>
                            <p class="product-description">دستبند نقره اکسید با سنگ های قیمتی</p>
                            <div class="product-price">۸,۳۰۰,۰۰۰ تومان</div>
                            <div class="product-actions">
                                <button class="action-btn edit-btn">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete-btn">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://placehold.co/200x200/00bcd4/white?text=گوشواره+الماس" alt="گوشواره الماس">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">گوشواره الماس طبیعی</h3>
                            <p class="product-description">گوشواره الماس طبیعی با طراحی لوکس</p>
                            <div class="product-price">۴۵,۰۰۰,۰۰۰ تومان</div>
                            <div class="product-actions">
                                <button class="action-btn edit-btn">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete-btn">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="https://placehold.co/200x200/d4af37/white?text=انگشتر+نامزدی" alt="انگشتر نامزدی">
                            <div class="product-badge">پرفروش</div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-title">انگشتر نامزدی طلای سفید</h3>
                            <p class="product-description">انگشتر نامزدی طلای سفید با الماس</p>
                            <div class="product-price">۳۲,۵۰۰,۰۰۰ تومان</div>
                            <div class="product-actions">
                                <button class="action-btn edit-btn">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="action-btn delete-btn">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Product Form -->
                <div class="form-container" id="addProductForm" style="display: none;">
                    <h3 style="margin-bottom: 20px; color: var(--secondary);">افزودن محصول جدید</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="productName">نام محصول</label>
                            <input type="text" id="productName" class="form-control" placeholder="نام محصول را وارد کنید">
                        </div>
                        <div class="form-group">
                            <label for="productCategory">دسته بندی</label>
                            <select id="productCategory" class="form-control">
                                <option value="">انتخاب دسته بندی</option>
                                <option value="gold">طلا</option>
                                <option value="silver">نقره</option>
                                <option value="diamond">الماس</option>
                                <option value="jewelry">زیورآلات</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">قیمت (تومان)</label>
                            <input type="number" id="productPrice" class="form-control" placeholder="قیمت محصول">
                        </div>
                        <div class="form-group">
                            <label for="productStock">موجودی</label>
                            <input type="number" id="productStock" class="form-control" placeholder="تعداد موجود">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="productDescription">توضیحات</label>
                        <textarea id="productDescription" class="form-control" rows="4" placeholder="توضیحات محصول"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="productImage">تصویر محصول</label>
                            <input type="file" id="productImage" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="productStatus">وضعیت</label>
                            <select id="productStatus" class="form-control">
                                <option value="active">فعال</option>
                                <option value="inactive">غیرفعال</option>
                            </select>
                        </div>
                    </div>
                    <div style="display: flex; gap: 10px; margin-top: 20px;">
                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            ذخیره محصول
                        </button>
                        <button class="btn" style="background: #f8f9fa; border: 1px solid #ddd;" id="cancelBtn">
                            <i class="fas fa-times"></i>
                            انصراف
                        </button>
                    </div>
                </div>

                <!-- Products Table -->
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>تصویر</th>
                                <th>نام محصول</th>
                                <th>دسته بندی</th>
                                <th>قیمت</th>
                                <th>موجودی</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="https://placehold.co/40x40/d4af37/white?text=طلایی" alt="طلایی" style="border-radius: 8px;">
                                </td>
                                <td>گردنبند طلای ۱۸ عیار</td>
                                <td>طلا</td>
                                <td>۱۲,۵۰۰,۰۰۰ تومان</td>
                                <td>۲۵</td>
                                <td><span class="status status-active">فعال</span></td>
                                <td>
                                    <button class="action-btn edit-btn" style="margin-left: 5px;">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://placehold.co/40x40/c0c0c0/white?text=نقره" alt="نقره" style="border-radius: 8px;">
                                </td>
                                <td>دستبند نقره اکسید</td>
                                <td>نقره</td>
                                <td>۸,۳۰۰,۰۰۰ تومان</td>
                                <td>۱۵</td>
                                <td><span class="status status-active">فعال</span></td>
                                <td>
                                    <button class="action-btn edit-btn" style="margin-left: 5px;">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://placehold.co/40x40/00bcd4/white?text=الماس" alt="الماس" style="border-radius: 8px;">
                                </td>
                                <td>گوشواره الماس طبیعی</td>
                                <td>الماس</td>
                                <td>۴۵,۰۰۰,۰۰۰ تومان</td>
                                <td>۸</td>
                                <td><span class="status status-inactive">غیرفعال</span></td>
                                <td>
                                    <button class="action-btn edit-btn" style="margin-left: 5px;">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="action-btn delete-btn">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://placehold.co/40x40/d4af37/white?text=طلایی" alt="طلایی" style="border-radius: 8px;">
                                </td>
                                <td>انگشتر نامزدی طلای سفید</td>
                                <td>طلا</td>
                                <td>۳۲,۵۰۰,۰۰۰ تومان</td>
                                <td>۱۲</td>
                                <td><span class="status status-active">فعال</span></td>
                                <td>
                                    <button class="action-btn edit-btn" style="margin-left: 5px;">
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

    <script>
        // Simple interactivity for menu items
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Tab switching
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Add product form toggle
        const addProductBtn = document.getElementById('addProductBtn');
        const addProductForm = document.getElementById('addProductForm');
        const cancelBtn = document.getElementById('cancelBtn');

        addProductBtn.addEventListener('click', function() {
            addProductForm.style.display = 'block';
            addProductForm.scrollIntoView({ behavior: 'smooth' });
        });

        cancelBtn.addEventListener('click', function() {
            addProductForm.style.display = 'none';
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

        // Product card hover effect enhancement
        document.querySelectorAll('.product-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.05)';
            });
        });

        // Action buttons functionality
        document.querySelectorAll('.edit-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('ویرایش محصول');
            });
        });

        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('آیا از حذف این محصول اطمینان دارید؟')) {
                    this.closest('tr, .product-card').remove();
                }
            });
        });
    </script>
</body>
</html>