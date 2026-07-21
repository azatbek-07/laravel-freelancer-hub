<!DOCTYPE html>
<html lang="uz" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FreelanceHub')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'jakarta': ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        primary: '#6366f1',
                        secondary: '#0f172a',
                    }
                }
            }
        }
    </script>
    
    <style>
        * { font-family: 'Plus Jakarta Sans', sans-serif; }
        body { background-color: #ffffff; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #a855f7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="font-jakarta antialiased">

    <!-- ===== HEADER ===== -->
    <header class="fixed top-0 left-0 right-0 z-50 glass-effect">
        <nav class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Logo -->
                <a href="/" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-200 group-hover:shadow-xl transition-all duration-300">
                        <i data-lucide="briefcase" class="w-5 h-5 text-white"></i>
                    </div>
                    <span class="text-2xl font-extrabold text-secondary">Freelance<span class="text-indigo-600">Hub</span></span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-8">
                    <a href="/" class="text-sm font-semibold text-indigo-600 relative after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-indigo-600 after:rounded-full">
                        Bosh sahifa
                    </a>
                    <a href="/freelancers" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">
                        Freelancerlar
                    </a>
                    <a href="/projects" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">
                        Loyihalar
                    </a>
                    <a href="/orders" class="text-sm font-medium text-gray-600 hover:text-indigo-600 transition-colors">
                        Buyurtmalar
                    </a>
                </div>

                <!-- Right Side -->
                <div class="hidden lg:flex items-center gap-4">
                    <button class="text-sm font-semibold text-gray-700 hover:text-indigo-600 transition-colors px-4 py-2">
                        Kirish
                    </button>
                    <button class="text-sm font-semibold text-white bg-secondary hover:bg-gray-800 px-6 py-2.5 rounded-xl transition-all duration-300 shadow-lg shadow-gray-200">
                        Ro'yxatdan o'tish
                    </button>
                </div>

                <!-- Mobile menu button -->
                <button onclick="toggleMenu()" class="lg:hidden p-2 hover:bg-gray-100 rounded-xl transition">
                    <i data-lucide="menu" class="w-6 h-6 text-gray-700"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="hidden lg:hidden py-6 border-t border-gray-100">
                <div class="flex flex-col gap-3">
                    <a href="/" class="text-sm font-semibold text-indigo-600 py-3 px-4 bg-indigo-50 rounded-xl">Bosh sahifa</a>
                    <a href="/freelancers" class="text-sm font-medium text-gray-600 py-3 px-4 hover:bg-gray-50 rounded-xl">Freelancerlar</a>
                    <a href="/projects" class="text-sm font-medium text-gray-600 py-3 px-4 hover:bg-gray-50 rounded-xl">Loyihalar</a>
                    <a href="/orders" class="text-sm font-medium text-gray-600 py-3 px-4 hover:bg-gray-50 rounded-xl">Buyurtmalar</a>
                    <div class="grid grid-cols-2 gap-3 pt-4">
                        <button class="text-sm font-semibold text-gray-700 border-2 border-gray-200 py-3 rounded-xl">Kirish</button>
                        <button class="text-sm font-semibold text-white bg-secondary py-3 rounded-xl">Ro'yxatdan o'tish</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Spacer for fixed header -->
    <div class="h-20"></div>

    <!-- ===== MAIN CONTENT ===== -->
    <main>
        @yield('content')
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-secondary text-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Top Footer -->
            <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
                
                <!-- Brand -->
                <div class="lg:col-span-2">
                    <a href="/" class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center">
                            <i data-lucide="briefcase" class="w-5 h-5 text-indigo-600"></i>
                        </div>
                        <span class="text-2xl font-extrabold text-white">Freelance<span class="text-indigo-400">Hub</span></span>
                    </a>
                    <p class="text-gray-400 mb-6 max-w-sm">
                        O'zbekistondagi eng yirik freelance platforma. Biznesingiz uchun professional mutaxassislarni toping.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-indigo-600 rounded-xl flex items-center justify-center transition-all duration-300">
                            <i data-lucide="twitter" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-indigo-600 rounded-xl flex items-center justify-center transition-all duration-300">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-indigo-600 rounded-xl flex items-center justify-center transition-all duration-300">
                            <i data-lucide="instagram" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Links -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Platforma</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Bosh sahifa</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Freelancerlar</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Loyihalar</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Narxlar</a></li>
                    </ul>
                </div>

                <!-- Qo'llab-quvvatlash -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Yordam</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Qo'llanma</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Xizmatlar</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition text-sm">Aloqa</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Bog'lanish</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-gray-400 text-sm">
                            <i data-lucide="mail" class="w-4 h-4 text-indigo-400"></i>
                            info@freelancehub.uz
                        </li>
                        <li class="flex items-center gap-3 text-gray-400 text-sm">
                            <i data-lucide="phone" class="w-4 h-4 text-indigo-400"></i>
                            +998 90 123 45 67
                        </li>
                        <li class="flex items-center gap-3 text-gray-400 text-sm">
                            <i data-lucide="map-pin" class="w-4 h-4 text-indigo-400"></i>
                            Toshkent, O'zbekiston
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="py-6 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">&copy; 2024 FreelanceHub. Barcha huquqlar himoyalangan.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition">Privacy Policy</a>
                    <a href="#" class="text-gray-500 hover:text-white text-sm transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Mobile menu toggle
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }
        
        // Re-initialize icons after DOM changes
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();
        });
    </script>

</body>
</html>