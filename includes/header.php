<!-- Top Navigation -->
<nav
    class="fixed top-0 z-50 w-full glass-effect border-b border-gray-100 dark:border-gray-800 transition-all duration-300">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            <!-- Logo -->
            <a href="#home" class="flex items-center gap-2 cursor-pointer nav-link" data-section="home">
                <div class="text-primary">
                    <span class="material-symbols-outlined text-4xl">travel_explore</span>
                </div>
                <span
                    class="text-xl font-bold tracking-tight text-secondary dark:text-white hidden sm:block">Maldives
                    Paradise</span>
            </a>
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a class="nav-link text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 transition-colors"
                    href="#about" data-section="about">Giới thiệu</a>
                <a class="nav-link text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 transition-colors"
                    href="#features" data-section="features">Trải nghiệm</a>
                <a class="nav-link text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 transition-colors"
                    href="#itinerary" data-section="itinerary">Lịch trình</a>
                <a class="nav-link text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 transition-colors"
                    href="#pricing" data-section="pricing">Bảng giá</a>
            </div>
            <!-- CTA Button -->
            <div class="flex items-center gap-4">
                <a class="nav-link hidden sm:flex items-center justify-center h-10 px-6 rounded-lg bg-primary hover:bg-primary-dark text-secondary font-bold text-sm transition-all transform hover:scale-105 shadow-lg shadow-primary/30"
                    href="#booking" data-section="booking">
                    Đặt Tour Ngay
                </a>
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button"
                    class="md:hidden p-2 rounded-md text-gray-700 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    <span id="menu-icon" class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white dark:bg-gray-900 border-t border-gray-100 dark:border-gray-800 shadow-lg">
            <div class="flex flex-col py-4">
                <a class="mobile-nav-link nav-link px-6 py-3 text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="#about" data-section="about">Giới thiệu</a>
                <a class="mobile-nav-link nav-link px-6 py-3 text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="#features" data-section="features">Trải nghiệm</a>
                <a class="mobile-nav-link nav-link px-6 py-3 text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="#itinerary" data-section="itinerary">Lịch trình</a>
                <a class="mobile-nav-link nav-link px-6 py-3 text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="#pricing" data-section="pricing">Bảng giá</a>
                <a class="mobile-nav-link nav-link px-6 py-3 text-sm font-medium text-gray-700 hover:text-primary dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors"
                    href="#booking" data-section="booking">Đặt Tour Ngay</a>
            </div>
        </div>
    </div>
</nav>

