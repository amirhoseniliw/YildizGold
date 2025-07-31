<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلای ایمانپور  - فروشگاه طلا و جواهرات</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Vazirmatn', sans-serif;
        }
        
        :root {
            --gold: #D4AF37;
            --dark-gold: #b8860b;
            --black: #1a1a1a;
            --white: #ffffff;
            --gray: #f5f5f5;
            --dark-gray: #333;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            background-color: var(--white);
            color: var(--black);
            overflow-x: hidden;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Header Styles */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .top-bar {
            background-color: var(--black);
            color: var(--white);
            padding: 8px 0;
            font-size: 14px;
        }
        
        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .contact-info span {
            margin-left: 20px;
        }
        
        .social-icons a {
            color: var(--white);
            margin-left: 15px;
            font-size: 16px;
            transition: var(--transition);
        }
        
        .social-icons a:hover {
            color: var(--gold);
        }
        
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--gold);
        }
        
        .logo span {
            color: var(--black);
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--black);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }
        
        nav ul li a:hover {
            color: var(--gold);
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--gold);
            transition: var(--transition);
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }
        
        .header-icons {
            display: flex;
            align-items: center;
        }
        
        .header-icons a {
            color: var(--black);
            font-size: 20px;
            margin-left: 20px;
            position: relative;
            transition: var(--transition);
        }
        
        .header-icons a:hover {
            color: var(--gold);
        }
        
        .cart-count {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: var(--gold);
            color: var(--white);
            font-size: 12px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://placehold.co/1200x600/1a1a1a/ffffff?text=طلای+رفیع') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            align-items: center;
            color: var(--white);
            text-align: center;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--gold);
            color: var(--black);
            text-decoration: none;
            border-radius: 30px;
            font-weight: 500;
            transition: var(--transition);
            border: 2px solid var(--gold);
        }
        
        .btn:hover {
            background-color: transparent;
            color: var(--gold);
        }
        
        .btn-outline {
            background-color: transparent;
            color: var(--gold);
            margin-right: 15px;
        }
        
        .btn-outline:hover {
            background-color: var(--gold);
            color: var(--black);
        }
        
        /* Categories Section */
        .section-title {
            text-align: center;
            margin: 60px 0 40px;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--black);
            display: inline-block;
            padding: 0 20px;
            background-color: var(--white);
            position: relative;
            z-index: 1;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80%;
            height: 2px;
            background-color: var(--gold);
            z-index: 0;
        }
        
        .categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .category-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            padding: 30px 20px;
        }
        
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .category-icon {
            font-size: 50px;
            color: var(--gold);
            margin-bottom: 20px;
        }
        
        .category-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        
        /* Products Section */
        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }
        
        .product-card {
            background-color: var(--white);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--gold);
            color: var(--black);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            z-index: 1;
        }
        
        .product-image {
            height: 250px;
            overflow: hidden;
        }
        
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .product-card:hover .product-image img {
            transform: scale(1.1);
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-category {
            color: var(--gold);
            font-size: 14px;
            margin-bottom: 5px;
        }
        
        .product-name {
            font-size: 1.2rem;
            margin-bottom: 10px;
            font-weight: 500;
        }
        
        .product-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 15px;
        }
        
        .price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--gold);
        }
        
        .old-price {
            text-decoration: line-through;
            color: #999;
            font-size: 1rem;
            margin-left: 10px;
        }
        
        .add-to-cart {
            background-color: var(--black);
            color: var(--white);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .add-to-cart:hover {
            background-color: var(--gold);
            color: var(--black);
        }
        
        /* Features Section */
        .features {
            background-color: var(--gray);
            padding: 60px 0;
            margin: 60px 0;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            text-align: center;
            padding: 30px 20px;
            background-color: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-icon {
            font-size: 40px;
            color: var(--gold);
            margin-bottom: 20px;
        }
        
        .feature-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
        }
        
        /* Testimonials */
        .testimonials {
            margin: 60px 0;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background-color: var(--white);
            border-radius: 10px;
            padding: 30px;
            box-shadow: var(--shadow);
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 60px;
            color: var(--gold);
            opacity: 0.3;
            font-family: serif;
        }
        
        .testimonial-text {
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-left: 15px;
        }
        
        .author-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
        }
        
        .author-info p {
            color: #777;
            font-size: 0.9rem;
        }
        
        /* Newsletter */
        .newsletter {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('https://placehold.co/1200x400/1a1a1a/ffffff?text=طلای+رفیع') no-repeat center center/cover;
            padding: 80px 0;
            text-align: center;
            color: var(--white);
            margin: 60px 0;
        }
        
        .newsletter h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .newsletter p {
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }
        
        .newsletter-form {
            max-width: 500px;
            margin: 0 auto;
            display: flex;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 30px 0 0 30px;
            font-size: 1rem;
        }
        
        .newsletter-form button {
            padding: 15px 30px;
            background-color: var(--gold);
            color: var(--black);
            border: none;
            border-radius: 0 30px 30px 0;
            font-weight: 500;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .newsletter-form button:hover {
            background-color: var(--dark-gold);
        }
        
        /* Footer */
        footer {
            background-color: var(--black);
            color: var(--white);
            padding: 60px 0 30px;
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50px;
            height: 2px;
            background-color: var(--gold);
        }
        
        .footer-column p {
            margin-bottom: 20px;
            opacity: 0.8;
            line-height: 1.6;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 12px;
        }
        
        .footer-links a {
            color: #ccc;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: var(--gold);
            padding-right: 5px;
        }
        
        .contact-info-footer {
            list-style: none;
        }
        
        .contact-info-footer li {
            display: flex;
            margin-bottom: 15px;
        }
        
        .contact-info-footer i {
            color: var(--gold);
            margin-left: 10px;
            min-width: 20px;
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid #333;
            opacity: 0.7;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .top-bar-content {
                flex-direction: column;
                text-align: center;
            }
            
            .contact-info span {
                margin: 5px 0;
            }
            
            .main-header {
                flex-direction: column;
                text-align: center;
            }
            
            nav ul {
                margin: 20px 0;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 5px 15px;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-form input,
            .newsletter-form button {
                width: 100%;
                border-radius: 30px;
                margin-bottom: 10px;
            }
        }
        
        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .btn {
                display: block;
                margin: 10px auto;
                text-align: center;
            }
            
            .btn-outline {
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="top-bar">
            <div class="container top-bar-content">
                <div class="contact-info">
                    <span><i class="fas fa-phone"></i> 021-12345678</span>
                    <span><i class="fas fa-envelope"></i> info@tala-refie.com</span>
                    <span><i class="fas fa-map-marker-alt"></i> تهران، خیابان ولیعصر</span>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
        
        <div class="container main-header">
            <div class="logo">طلای <span>رفیع</span></div>
            <nav>
                <ul>
                    <li><a href="#">خانه</a></li>
                    <li><a href="#">محصولات</a></li>
                    <li><a href="#">دسته‌بندی‌ها</a></li>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">تماس با ما</a></li>
                </ul>
            </nav>
            <div class="header-icons">
                <a href="#"><i class="fas fa-search"></i></a>
                <a href="#"><i class="fas fa-user"></i></a>
                <a href="#">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>طلای اصیل و جواهرات لوکس</h1>
            <p>مجموعه‌ای منحصر به فرد از طلا، نقره و الماس با بالاترین کیفیت و طراحی‌های شگفت‌انگیز</p>
            <div class="hero-buttons">
                <a href="#" class="btn">مشاهده محصولات</a>
                <a href="#" class="btn btn-outline">درباره ما</a>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="container">
        <div class="section-title">
            <h2>دسته‌بندی محصولات</h2>
        </div>
        <div class="categories">
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-ring"></i>
                </div>
                <h3>انگشتر طلا</h3>
                <p>انگشترهای طلا با طراحی‌های متنوع و الماس‌های اصیل</p>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <h3>گردنبند الماس</h3>
                <p>گردنبندهای الماس با کیفیت بالا و طراحی‌های خیره‌کننده</p>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-earmark"></i>
                </div>
                <h3>گوشواره طلا</h3>
                <p>گوشواره‌های طلا با طراحی‌های کلاسیک و مدرن</p>
            </div>
            <div class="category-card">
                <div class="category-icon">
                    <i class="fas fa-watch"></i>
                </div>
                <h3>ساعت لوکس</h3>
                <p>ساعت‌های طلا و الماس از برندهای معتبر جهانی</p>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="container">
        <div class="section-title">
            <h2>جدیدترین محصولات</h2>
        </div>
        <div class="products">
            <div class="product-card">
                <span class="product-badge">جدید</span>
                <div class="product-image">
                    <img src="https://placehold.co/300x250/D4AF37/ffffff?text=انگشتر+طلای+الماس" alt="انگشتر طلای الماس">
                </div>
                <div class="product-info">
                    <div class="product-category">انگشتر</div>
                    <h3 class="product-name">انگشتر طلای 18 عیار الماس</h3>
                    <div class="product-price">
                        <div>
                            <span class="old-price">۱۲,۰۰۰,۰۰۰ تومان</span>
                            <span class="price">۱۰,۸۰۰,۰۰۰ تومان</span>
                        </div>
                        <button class="add-to-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <span class="product-badge">تخفیف</span>
                <div class="product-image">
                    <img src="https://placehold.co/300x250/D4AF37/ffffff?text=گردنبند+طلای+الماس" alt="گردنبند طلای الماس">
                </div>
                <div class="product-info">
                    <div class="product-category">گردنبند</div>
                    <h3 class="product-name">گردنبند طلای 18 عیار الماس</h3>
                    <div class="product-price">
                        <div>
                            <span class="old-price">۲۵,۰۰۰,۰۰۰ تومان</span>
                            <span class="price">۲۲,۵۰۰,۰۰۰ تومان</span>
                        </div>
                        <button class="add-to-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://placehold.co/300x250/D4AF37/ffffff?text=گوشواره+طلای+ساده" alt="گوشواره طلای ساده">
                </div>
                <div class="product-info">
                    <div class="product-category">گوشواره</div>
                    <h3 class="product-name">گوشواره طلای 18 عیار ساده</h3>
                    <div class="product-price">
                        <div>
                            <span class="price">۳,۵۰۰,۰۰۰ تومان</span>
                        </div>
                        <button class="add-to-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <span class="product-badge">پرفروش</span>
                <div class="product-image">
                    <img src="https://placehold.co/300x250/D4AF37/ffffff?text=ساعت+طلای+الماس" alt="ساعت طلای الماس">
                </div>
                <div class="product-info">
                    <div class="product-category">ساعت</div>
                    <h3 class="product-name">ساعت طلای 18 عیار الماس</h3>
                    <div class="product-price">
                        <div>
                            <span class="price">۴۵,۰۰۰,۰۰۰ تومان</span>
                        </div>
                        <button class="add-to-cart">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>ویژگی‌های ما</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>ضمانت اصالت</h3>
                    <p>تمام محصولات دارای گارانتی اصالت و کیفیت می‌باشند</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>ارسال رایگان</h3>
                    <p>ارسال رایگان برای خریدهای بالای ۵ میلیون تومان</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>پشتیبانی ۲۴ ساعته</h3>
                    <p>تیم پشتیبانی ما همیشه آماده کمک به شماست</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>بازگشت وجه</h3>
                    <p>امکان بازگشت وجه تا ۳۰ روز پس از خرید</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="container testimonials">
        <div class="section-title">
            <h2>نظرات مشتریان</h2>
        </div>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p class="testimonial-text">کیفیت محصولات فوق‌العاده است. انگشتری که خریداری کردم کاملاً مطابق با توضیحات بود و بسته‌بندی آن نیز بسیار زیبا و لوکس بود.</p>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://placehold.co/50x50/cccccc/ffffff?text=س" alt="سارا محمدی">
                    </div>
                    <div class="author-info">
                        <h4>سارا محمدی</h4>
                        <p>مشتری وفادار</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">خدمات پس از فروش عالی و پرسنل بسیار حرفه‌ای. خرید از این فروشگاه تجربه‌ای بی‌نظیر بود. قطعاً دوباره خرید خواهم کرد.</p>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://placehold.co/50x50/cccccc/ffffff?text=م" alt="محمد رضایی">
                    </div>
                    <div class="author-info">
                        <h4>محمد رضایی</h4>
                        <p>مشتری وفادار</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">تنوع محصولات بسیار زیاد و قیمت‌های مناسب. سرعت ارسال نیز بسیار بالا بود. از تمامی دوستان توصیه می‌کنم این فروشگاه را امتحان کنند.</p>
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="https://placehold.co/50x50/cccccc/ffffff?text=ف" alt="فاطمه احمدی">
                    </div>
                    <div class="author-info">
                        <h4>فاطمه احمدی</h4>
                        <p>مشتری جدید</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <div class="container">
            <h2>عضویت در خبرنامه</h2>
            <p>برای دریافت اطلاع از تخفیف‌ها و محصولات جدید، در خبرنامه ما عضو شوید</p>
            <form class="newsletter-form">
                <input type="email" placeholder="آدرس ایمیل خود را وارد کنید" required>
                <button type="submit">عضویت</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>طلای رفیع</h3>
                    <p>فروشگاه طلا و جواهرات با بیش از ۲۰ سال سابقه درخشان در زمینه فروش طلا، نقره و الماس با بالاترین کیفیت و طراحی‌های منحصر به فرد.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>لینک‌های مفید</h3>
                    <ul class="footer-links">
                        <li><a href="#">خانه</a></li>
                        <li><a href="#">محصولات</a></li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">تماس با ما</a></li>
                        <li><a href="#">قوانین و مقررات</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>دسته‌بندی‌ها</h3>
                    <ul class="footer-links">
                        <li><a href="#">انگشتر طلا</a></li>
                        <li><a href="#">گردنبند الماس</a></li>
                        <li><a href="#">گوشواره طلا</a></li>
                        <li><a href="#">ساعت لوکس</a></li>
                        <li><a href="#">سرویس طلا</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>تماس با ما</h3>
                    <ul class="contact-info-footer">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>تهران، خیابان ولیعصر، پلاک ۱۲۳</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>۰۲۱-۱۲۳۴۵۶۷۸</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>info@tala-refie.com</span>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span>شنبه تا پنجشنبه: ۹ تا ۲۱</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; ۱۴۰۲ طلای رفیع. تمامی حقوق محفوظ است.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simple JavaScript for cart functionality
        document.addEventListener('DOMContentLoaded', function() {
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartCount = document.querySelector('.cart-count');
            let count = 3;
            
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    count++;
                    cartCount.textContent = count;
                    
                    // Add animation effect
                    this.style.transform = 'scale(1.2)';
                    setTimeout(() => {
                        this.style.transform = 'scale(1)';
                    }, 300);
                    
                    // Show notification
                    alert('محصول به سبد خرید اضافه شد!');
                });
            });
            
            // Smooth scrolling for navigation links
            document.querySelectorAll('nav a').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>