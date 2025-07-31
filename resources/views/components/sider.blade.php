 <div class="sidebar-header">
                <div class="logo">
                    <i class="fas fa-crown"></i>
                    <h2>طلا فروشی ایمانپور (یللدیز)</h2>
                </div>
            </div>
            <div class="sidebar-menu">
                <a style="all: unset;" href="{{ route('admin_panel_index') }}">
    <div class="menu-item {{ Route::currentRouteName() == 'admin_panel_index' ? 'active' : '' }}">
        <i class="fas fa-home"></i>
        <span class="menu-text">داشبورد</span>
    </div>
</a>

<a style="all: unset;" href="{{ route('admin_panel_orders') }}">
    <div class="menu-item {{ Route::currentRouteName() == 'admin_panel_orders' ? 'active' : '' }}">
        <i class="fas fa-shopping-cart"></i>
        <span class="menu-text">سفارشات</span>
    </div>
</a>

<a style="all: unset;" href="{{ route('admin_panel_products') }}">
    <div class="menu-item {{ Route::currentRouteName() == 'admin_panel_products' ? 'active' : '' }}">
        <i class="fas fa-box"></i>
        <span class="menu-text">محصولات</span>
    </div>
</a>

<a style="all: unset;" href="{{ route('admin_panel_users') }}">
    <div class="menu-item {{ Route::currentRouteName() == 'admin_panel_users' ? 'active' : '' }}">
        <i class="fas fa-users"></i>
        <span class="menu-text">مشتریان</span>
    </div>
</a>

                <a style="all: unset;" href=""> <div class="menu-item">
                    <i class="fas fa-chart-bar"></i>
                    <span class="menu-text">گزارشات</span>
                </div></a>
                <a style="all: unset;" href=""> <div class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span class="menu-text">تنظیمات</span>
                </div></a>
               <a style="all: unset;" href="">  <div class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="menu-text">خروج</span>
                </div></a>
            </div>