@extends('layouts.app')

@section('title', 'Buyurtmalar — FreelanceHub')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-gradient-to-br from-slate-50 via-white to-indigo-50 py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-extrabold text-secondary mb-4">
                Mening <span class="gradient-text">buyurtmalarim</span>
            </h1>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg">
                Barcha faol va yakunlangan buyurtmalaringizni kuzatib boring
            </p>
        </div>
    </div>
</section>

{{-- STATS OVERVIEW --}}
<section class="py-8 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            
            {{-- Total Orders --}}
            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-indigo-600 rounded-xl flex items-center justify-center">
                        <i data-lucide="package" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-2xl font-extrabold text-indigo-600">48</span>
                </div>
                <p class="text-gray-600 text-sm font-medium">Jami buyurtmalar</p>
            </div>
            
            {{-- Active Orders --}}
            <div class="bg-gradient-to-br from-green-50 to-emerald-100 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-green-600 rounded-xl flex items-center justify-center">
                        <i data-lucide="play-circle" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-2xl font-extrabold text-green-600">12</span>
                </div>
                <p class="text-gray-600 text-sm font-medium">Faol buyurtmalar</p>
            </div>
            
            {{-- Completed --}}
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center">
                        <i data-lucide="check-circle" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-2xl font-extrabold text-blue-600">34</span>
                </div>
                <p class="text-gray-600 text-sm font-medium">Yakunlangan</p>
            </div>
            
            {{-- Total Spent --}}
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-6">
                <div class="flex items-center justify-between mb-3">
                    <div class="w-12 h-12 bg-purple-600 rounded-xl flex items-center justify-center">
                        <i data-lucide="dollar-sign" class="w-6 h-6 text-white"></i>
                    </div>
                    <span class="text-2xl font-extrabold text-purple-600">$12,450</span>
                </div>
                <p class="text-gray-600 text-sm font-medium">Jami xarajat</p>
            </div>
        </div>
    </div>
</section>

{{-- TABS & FILTERS --}}
<section class="py-6 bg-white border-b border-gray-100 sticky top-20 z-40">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-4 items-center justify-between">
            
            {{-- Tabs --}}
            <div class="flex bg-gray-100 rounded-xl p-1.5">
                <button class="px-6 py-2.5 bg-white rounded-lg shadow-sm text-sm font-semibold text-secondary">
                    Barchasi (48)
                </button>
                <button class="px-6 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-gray-700 transition">
                    Faol (12)
                </button>
                <button class="px-6 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-gray-700 transition">
                    Kutilmoqda (2)
                </button>
                <button class="px-6 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-gray-700 transition">
                    Yakunlangan (34)
                </button>
                <button class="px-6 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-gray-700 transition">
                    Bekor qilingan (0)
                </button>
            </div>
            
            {{-- Search & Sort --}}
            <div class="flex gap-3 w-full lg:w-auto">
                <div class="relative flex-1 lg:w-64">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"></i>
                    <input type="text" 
                           placeholder="Buyurtma qidirish..." 
                           class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <select class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                    <option>Eng yangi</option>
                    <option>Eng eski</option>
                    <option>Narx bo'yicha</option>
                </select>
            </div>
        </div>
    </div>
</section>

{{-- ORDERS LIST --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="space-y-6">
            
            {{-- Order 1 - Active --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-indigo-100 transition-all duration-500 border border-gray-100">
                <div class="flex flex-col lg:flex-row gap-6">
                    
                    {{-- Order Image --}}
                    <div class="w-full lg:w-48 h-40 lg:h-32 rounded-2xl overflow-hidden bg-gradient-to-br from-indigo-400 to-indigo-600 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="shopping-cart" class="w-12 h-12 text-white"></i>
                    </div>
                    
                    {{-- Order Info --}}
                    <div class="flex-1">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-3">
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                    <h3 class="text-lg font-bold text-secondary">E-commerce Platform</h3>
                                    <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full">Faol</span>
                                </div>
                                <p class="text-sm text-gray-500">Buyurtma #ORD-2024-0012</p>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$1,200</p>
                                <p class="text-xs text-gray-400">Fix price</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                            To'liq funksional onlayn do'kon platformasi. Laravel va React texnologiyalarida ishlab chiqilmoqda.
                            To'lov tizimlari integratsiyasi, admin panel va mahsulot boshqaruvi mavjud.
                        </p>
                        
                        {{-- Progress --}}
                        <div class="mb-4">
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-500">Bajarilish darajasi</span>
                                <span class="font-bold text-indigo-600">65%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-indigo-500 to-purple-600 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Aziz+Karimov&background=6366f1&color=fff&size=32" 
                                     alt="Freelancer" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="font-medium text-gray-700 text-xs">Aziz Karimov</p>
                                    <p class="text-xs text-gray-400">Full Stack Developer</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                <span>Muddat: 15-yanvar, 2025</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                                <span>Qolgan: 12 kun</span>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Actions --}}
                    <div class="flex lg:flex-col gap-2 justify-center">
                        <button class="px-6 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm transition shadow-lg shadow-indigo-200">
                            Ko'rish
                        </button>
                        <button class="px-6 py-2.5 border-2 border-gray-200 hover:border-indigo-300 text-gray-600 hover:text-indigo-600 rounded-xl font-semibold text-sm transition">
                            Chat
                        </button>
                    </div>
                </div>
            </div>
            
            {{-- Order 2 - Pending --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-yellow-100 transition-all duration-500 border border-gray-100">
                <div class="flex flex-col lg:flex-row gap-6">
                    
                    <div class="w-full lg:w-48 h-40 lg:h-32 rounded-2xl overflow-hidden bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="smartphone" class="w-12 h-12 text-white"></i>
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-3">
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                    <h3 class="text-lg font-bold text-secondary">Mobil Ilova UI/UX</h3>
                                    <span class="bg-yellow-100 text-yellow-700 text-xs font-bold px-3 py-1 rounded-full">Kutilmoqda</span>
                                </div>
                                <p class="text-sm text-gray-500">Buyurtma #ORD-2024-0015</p>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$650</p>
                                <p class="text-xs text-gray-400">Fix price</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                            Food delivery ilovasi uchun zamonaviy UI/UX dizayn. Figma'da prototiplar tayyorlanmoqda.
                            iOS va Android platformalari uchun moslashtirilgan dizayn.
                        </p>
                        
                        <div class="mb-4">
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-500">Bajarilish darajasi</span>
                                <span class="font-bold text-yellow-600">To'lov kutilmoqda</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-yellow-400 to-orange-500 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Dilnoza+Rahimova&background=8b5cf6&color=fff&size=32" 
                                     alt="Freelancer" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="font-medium text-gray-700 text-xs">Dilnoza Rahimova</p>
                                    <p class="text-xs text-gray-400">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                <span>Muddat: 5-dekabr, 2024</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-600 font-medium">To'lov tasdiqlanishini kutmoqda</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex lg:flex-col gap-2 justify-center">
                        <button class="px-6 py-2.5 bg-yellow-500 hover:bg-yellow-600 text-white rounded-xl font-semibold text-sm transition shadow-lg shadow-yellow-200">
                            To'lash
                        </button>
                        <button class="px-6 py-2.5 border-2 border-gray-200 hover:border-indigo-300 text-gray-600 hover:text-indigo-600 rounded-xl font-semibold text-sm transition">
                            Chat
                        </button>
                    </div>
                </div>
            </div>
            
            {{-- Order 3 - Completed --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-green-100 transition-all duration-500 border border-gray-100">
                <div class="flex flex-col lg:flex-row gap-6">
                    
                    <div class="w-full lg:w-48 h-40 lg:h-32 rounded-2xl overflow-hidden bg-gradient-to-br from-green-400 to-emerald-600 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="code-2" class="w-12 h-12 text-white"></i>
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-3">
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                    <h3 class="text-lg font-bold text-secondary">REST API Backend</h3>
                                    <span class="bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1 rounded-full">Yakunlangan</span>
                                </div>
                                <p class="text-sm text-gray-500">Buyurtma #ORD-2024-0008</p>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-green-600">$1,800</p>
                                <p class="text-xs text-gray-400">To'langan</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                            Node.js va Express da RESTful API ishlab chiqildi. JWT autentifikatsiya, 
                            role-based access control va PostgreSQL ma'lumotlar bazasi bilan.
                        </p>
                        
                        <div class="mb-4">
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-500">Bajarilish darajasi</span>
                                <span class="font-bold text-green-600">100%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-green-400 to-emerald-600 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Jasur+Umarov&background=059669&color=fff&size=32" 
                                     alt="Freelancer" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="font-medium text-gray-700 text-xs">Jasur Umarov</p>
                                    <p class="text-xs text-gray-400">Backend Developer</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                <span>Yakunlangan: 20-noyabr, 2024</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                                <span>5.0 baho</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex lg:flex-col gap-2 justify-center">
                        <button class="px-6 py-2.5 bg-green-600 hover:bg-green-700 text-white rounded-xl font-semibold text-sm transition shadow-lg shadow-green-200">
                            Sharh qoldirish
                        </button>
                        <button class="px-6 py-2.5 border-2 border-gray-200 hover:border-indigo-300 text-gray-600 hover:text-indigo-600 rounded-xl font-semibold text-sm transition">
                            Qayta buyurtma
                        </button>
                    </div>
                </div>
            </div>
            
            {{-- Order 4 - Active --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-orange-100 transition-all duration-500 border border-gray-100">
                <div class="flex flex-col lg:flex-row gap-6">
                    
                    <div class="w-full lg:w-48 h-40 lg:h-32 rounded-2xl overflow-hidden bg-gradient-to-br from-orange-400 to-red-600 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="trending-up" class="w-12 h-12 text-white"></i>
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-3">
                            <div>
                                <div class="flex items-center gap-3 mb-1">
                                    <h3 class="text-lg font-bold text-secondary">SEO Optimizatsiya</h3>
                                    <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1 rounded-full">Faol</span>
                                </div>
                                <p class="text-sm text-gray-500">Buyurtma #ORD-2024-0018</p>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$450</p>
                                <p class="text-xs text-gray-400">Soatbay</p>
                            </div>
                        </div>
                        
                        <p class="text-gray-500 text-sm mb-4 line-clamp-2">
                            Veb-sayt uchun to'liq SEO audit va optimizatsiya. Google reytingini ko'tarish 
                            va organik trafikni oshirish ishlari olib borilmoqda.
                        </p>
                        
                        <div class="mb-4">
                            <div class="flex justify-between text-xs mb-2">
                                <span class="text-gray-500">Bajarilish darajasi</span>
                                <span class="font-bold text-indigo-600">40%</span>
                            </div>
                            <div class="w-full h-2 bg-gray-100 rounded-full overflow-hidden">
                                <div class="h-full bg-gradient-to-r from-orange-400 to-red-600 rounded-full" style="width: 40%"></div>
                            </div>
                        </div>
                        
                        <div class="flex flex-wrap items-center gap-4 text-sm text-gray-500">
                            <div class="flex items-center gap-2">
                                <img src="https://ui-avatars.com/api/?name=Malika+Yusupova&background=ea580c&color=fff&size=32" 
                                     alt="Freelancer" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="font-medium text-gray-700 text-xs">Malika Yusupova</p>
                                    <p class="text-xs text-gray-400">SEO Specialist</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i>
                                <span>Muddat: 28-fevral, 2025</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                                <span>Qolgan: 55 kun</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex lg:flex-col gap-2 justify-center">
                        <button class="px-6 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white rounded-xl font-semibold text-sm transition shadow-lg shadow-indigo-200">
                            Ko'rish
                        </button>
                        <button class="px-6 py-2.5 border-2 border-gray-200 hover:border-indigo-300 text-gray-600 hover:text-indigo-600 rounded-xl font-semibold text-sm transition">
                            Chat
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- PAGINATION --}}
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center gap-2">
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-gray-50 transition disabled:opacity-50" disabled>
                    <i data-lucide="chevron-left" class="w-5 h-5"></i>
                </button>
                
                <button class="w-10 h-10 rounded-xl bg-secondary text-white font-semibold text-sm shadow-lg shadow-gray-200">1</button>
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition text-sm font-medium">2</button>
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition text-sm font-medium">3</button>
                <span class="px-2 text-gray-400">...</span>
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition text-sm font-medium">8</button>
                
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </button>
            </nav>
        </div>
    </div>
</section>

{{-- QUICK ACTIONS --}}
<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 cursor-pointer">
                <div class="w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="file-text" class="w-6 h-6 text-indigo-600"></i>
                </div>
                <h3 class="font-bold text-secondary mb-2">Hisobot yuklash</h3>
                <p class="text-sm text-gray-500">Barcha buyurtmalar bo'yicha hisobot</p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 cursor-pointer">
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="download" class="w-6 h-6 text-green-600"></i>
                </div>
                <h3 class="font-bold text-secondary mb-2">Chek yuklash</h3>
                <p class="text-sm text-gray-500">To'lov cheklarini ko'chirib olish</p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-lg transition-all duration-300 cursor-pointer">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mb-4">
                    <i data-lucide="headphones" class="w-6 h-6 text-purple-600"></i>
                </div>
                <h3 class="font-bold text-secondary mb-2">Yordam olish</h3>
                <p class="text-sm text-gray-500">Qo'llab-quvvatlash xizmatiga murojaat</p>
            </div>
        </div>
    </div>
</section>


@endsection