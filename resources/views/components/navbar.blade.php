<nav class="navbar navbar-expand navbar-dark bg-transparent flex-column align-items-center p-0 justify-content-center">
    <div class="container-fluid flex-column align-items-center p-0">
        <div class="collapse navbar-collapse flex-column d-flex" id="navbarMenu">
            <!-- لوگو -->
            <a href="{{ route('dashboard') }}" class="navbar-brand my-3">
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="navbar-logo img-fluid">
            </a>
            <!-- منو -->
            <ul class="navbar-nav flex-column w-100">
                <li class="nav-item {{ request()->routeIs('dashboardd') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link text-white d-flex align-items-center justify-content-center justify-content-lg-between">
                        <span class="nav-text">داشبورد</span>
                        <i class="ri-home-6-line"></i>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('task') ? 'active' : '' }}">
                    <a href="{{ route('task') }}"
                        class="nav-link text-white d-flex align-items-center justify-content-center justify-content-lg-between">
                        <span class="nav-text">تسک‌ها</span>
                        <i class="ri-file-copy-line"></i>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('activiti') ? 'active' : '' }}">
                    <a href="{{ route('activiti') }}"
                        class="nav-link text-white d-flex align-items-center justify-content-center justify-content-lg-between">
                        <span class="nav-text">فعالیت</span>
                        <i class="ri-line-chart-line"></i>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('cleander') ? 'active' : '' }}">
                    <a href="{{ route('cleander') }}"
                        class="nav-link text-white d-flex align-items-center justify-content-center justify-content-lg-between">
                        <span class="nav-text">تاریخچه</span>
                        <i class="ri-calendar-2-line"></i>
                    </a>
                </li>
            </ul>
            <!-- خروج -->
            <a href="#"
                class="nav-link log-out  text-white mt-auto d-flex align-items-center justify-content-center gap-3">
                <span class="nav-text">خروج</span>
                <i class="ri-expand-left-fill"></i>
            </a>
        </div>
    </div>
</nav>