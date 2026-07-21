@extends('layouts.app')

@section('title', 'FreelanceHub — Professional freelancerlar platformasi')

@section('content')

<!-- ===== HERO SECTION ===== -->
<section class="relative overflow-hidden bg-gradient-to-br from-slate-50 via-white to-indigo-50 py-24 lg:py-32">
    <!-- Background decorations -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-bl from-indigo-200/40 to-purple-200/40 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-200/30 to-cyan-200/30 rounded-full blur-3xl"></div>
    
    <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Content -->
            <div>
                <div class="inline-flex items-center gap-2 bg-white px-4 py-2 rounded-full shadow-sm border border-gray-100 mb-8">
                    <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                    <span class="text-sm font-medium text-gray-600">2,500+ freelancer online</span>
                </div>
                
                <h1 class="text-5xl lg:text-7xl font-extrabold text-secondary leading-[1.1] mb-6">
                    Professional 
                    <span class="gradient-text">freelancerlar</span> 
                    bilan ishlang
                </h1>
                
                <p class="text-lg text-gray-500 leading-relaxed mb-10 max-w-xl">
                    O'zbekistondagi eng tezkor va ishonchli freelance platforma. 
                    Loyihangizni professional mutaxassislarga ishonib topshiring.
                </p>
                
                <!-- Search Box -->
                <div class="bg-white p-2 rounded-2xl shadow-xl shadow-gray-200/50 flex items-center gap-3 max-w-xl">
                    <div class="flex-1 flex items-center gap-3 pl-4">
                        <i data-lucide="search" class="w-5 h-5 text-gray-400"></i>
                        <input type="text" placeholder="Qanday mutaxassis kerak?" 
                               class="w-full py-3 text-gray-700 placeholder-gray-400 focus:outline-none text-sm">
                    </div>
                    <button class="bg-secondary hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-300 flex items-center gap-2">
                        Qidirish
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                </div>
                
                <!-- Trust badges -->
                <div class="flex flex-wrap items-center gap-6 mt-8">
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center">
                            <i data-lucide="shield-check" class="w-5 h-5 text-green-600"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">Xavfsiz to'lov</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center">
                            <i data-lucide="headphones" class="w-5 h-5 text-blue-600"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">24/7 qo'llab-quvvatlash</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center">
                            <i data-lucide="zap" class="w-5 h-5 text-purple-600"></i>
                        </div>
                        <span class="text-sm font-semibold text-gray-700">Tezkor yetkazish</span>
                    </div>
                </div>
            </div>
            
            <!-- Right Content - Floating Cards -->
            <div class="relative hidden lg:block">
                <div class="relative w-full h-[500px]">
                    <!-- Main Card -->
                    <div class="absolute top-10 right-10 w-72 bg-white rounded-3xl shadow-2xl shadow-gray-200 p-6 animate-float">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-200">
                                <i data-lucide="code-2" class="w-7 h-7 text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-secondary">Web Developer</h3>
                                <p class="text-xs text-gray-500">3,200+ mutaxassis</p>
                            </div>
                        </div>
                        <div class="flex gap-2 flex-wrap">
                            <span class="text-xs bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full font-medium">React</span>
                            <span class="text-xs bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full font-medium">Laravel</span>
                            <span class="text-xs bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full font-medium">Vue.js</span>
                        </div>
                    </div>
                    
                    <!-- Floating Card 2 -->
                    <div class="absolute bottom-20 left-0 w-64 bg-white rounded-3xl shadow-xl shadow-gray-200 p-6 animate-float" style="animation-delay: 2s;">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-pink-500 rounded-2xl flex items-center justify-center shadow-lg shadow-orange-200">
                                <i data-lucide="star" class="w-6 h-6 text-white fill-current"></i>
                            </div>
                            <div>
                                <div class="text-2xl font-extrabold text-secondary">4.9</div>
                                <p class="text-xs text-gray-500">O'rtacha baho</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Card 3 -->
                    <div class="absolute top-40 -left-10 w-48 bg-white rounded-3xl shadow-xl shadow-gray-200 p-5 animate-float" style="animation-delay: 4s;">
                        <div class="text-center">
                            <div class="text-3xl font-extrabold gradient-text mb-1">8,500+</div>
                            <p class="text-xs text-gray-500">Bajarilgan loyihalar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== STATS SECTION ===== -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-extrabold gradient-text mb-2">12,500+</div>
                <p class="text-gray-500 text-sm">Faol freelancerlar</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-extrabold gradient-text mb-2">8,500+</div>
                <p class="text-gray-500 text-sm">Muvaffaqiyatli loyihalar</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-extrabold gradient-text mb-2">4.9/5</div>
                <p class="text-gray-500 text-sm">Mijozlar bahosi</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-extrabold gradient-text mb-2">98%</div>
                <p class="text-gray-500 text-sm">Mamnun mijozlar</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== CATEGORIES SECTION ===== -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-secondary mb-4">
                Ommabop <span class="gradient-text">yo'nalishlar</span>
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto">
                Eng ko'p talab qilinadigan sohalar bo'yicha professional mutaxassislar
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl hover:shadow-indigo-100 transition-all duration-500 cursor-pointer border border-gray-50 hover:border-indigo-100">
                <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-indigo-200 group-hover:scale-110 transition-transform duration-500">
                    <i data-lucide="code-2" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">Web Dasturlash</h3>
                <p class="text-gray-500 text-sm mb-4">Veb-saytlar va murakkab web-ilovalar yaratish</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm font-semibold text-indigo-600">3,200+ freelancer</span>
                    <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl hover:shadow-purple-100 transition-all duration-500 cursor-pointer border border-gray-50 hover:border-purple-100">
                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-purple-200 group-hover:scale-110 transition-transform duration-500">
                    <i data-lucide="palette" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">UI/UX Dizayn</h3>
                <p class="text-gray-500 text-sm mb-4">Zamonaviy interfeys va foydalanuvchi tajribasi dizayni</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm font-semibold text-purple-600">1,800+ freelancer</span>
                    <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 group-hover:text-purple-600 group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl hover:shadow-green-100 transition-all duration-500 cursor-pointer border border-gray-50 hover:border-green-100">
                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-green-200 group-hover:scale-110 transition-transform duration-500">
                    <i data-lucide="smartphone" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">Mobil Ilovalar</h3>
                <p class="text-gray-500 text-sm mb-4">iOS va Android platformalari uchun native ilovalar</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm font-semibold text-green-600">1,500+ freelancer</span>
                    <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 group-hover:text-green-600 group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl hover:shadow-orange-100 transition-all duration-500 cursor-pointer border border-gray-50 hover:border-orange-100">
                <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-orange-200 group-hover:scale-110 transition-transform duration-500">
                    <i data-lucide="trending-up" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">Digital Marketing</h3>
                <p class="text-gray-500 text-sm mb-4">SEO, SMM va raqamli marketing strategiyalari</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm font-semibold text-orange-600">2,100+ freelancer</span>
                    <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 group-hover:text-orange-600 group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl hover:shadow-pink-100 transition-all duration-500 cursor-pointer border border-gray-50 hover:border-pink-100">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-pink-200 group-hover:scale-110 transition-transform duration-500">
                    <i data-lucide="pen-tool" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">Kontent & Copywriting</h3>
                <p class="text-gray-500 text-sm mb-4">Professional matnlar, maqolalar va tarjimalar</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm font-semibold text-pink-600">950+ freelancer</span>
                    <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 group-hover:text-pink-600 group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="group bg-white rounded-3xl p-8 shadow-sm hover:shadow-2xl hover:shadow-blue-100 transition-all duration-500 cursor-pointer border border-gray-50 hover:border-blue-100">
                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-200 group-hover:scale-110 transition-transform duration-500">
                    <i data-lucide="database" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">Data & Analytics</h3>
                <p class="text-gray-500 text-sm mb-4">Ma'lumotlar tahlili va business intelligence</p>
                <div class="flex justify-between items-center">
                    <span class="text-sm font-semibold text-blue-600">620+ freelancer</span>
                    <i data-lucide="arrow-right" class="w-5 h-5 text-gray-400 group-hover:text-blue-600 group-hover:translate-x-1 transition-all"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== HOW IT WORKS ===== -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-extrabold text-secondary mb-4">
                Qanday <span class="gradient-text">ishlaydi</span>?
            </h2>
            <p class="text-gray-500 max-w-2xl mx-auto">
                3 oddiy qadamda professional freelancer bilan ishlashni boshlang
            </p>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-8 relative">
            <!-- Connection line (desktop only) -->
            <div class="hidden lg:block absolute top-20 left-0 right-0 h-0.5 bg-gradient-to-r from-indigo-200 via-purple-200 to-pink-200"></div>
            
            <div class="relative text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl shadow-indigo-200 relative z-10">
                    <span class="text-3xl font-extrabold text-white">1</span>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">Loyiha yarating</h3>
                <p class="text-gray-500 text-sm">Nima ish qilish kerakligini batafsil yozing va talablarni belgilang</p>
            </div>
            
            <div class="relative text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl shadow-purple-200 relative z-10">
                    <span class="text-3xl font-extrabold text-white">2</span>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">Freelancer tanlang</h3>
                <p class="text-gray-500 text-sm">Eng yaxshi takliflarni ko'rib chiqing va mos mutaxassisni tanlang</p>
            </div>
            
            <div class="relative text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-pink-500 to-rose-600 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-xl shadow-pink-200 relative z-10">
                    <span class="text-3xl font-extrabold text-white">3</span>
                </div>
                <h3 class="text-xl font-bold text-secondary mb-3">Natijani oling</h3>
                <p class="text-gray-500 text-sm">Tayyor ishni qabul qiling va xavfsiz to'lovni amalga oshiring</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA SECTION ===== -->
<section class="py-20 bg-secondary relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/20 to-purple-600/20"></div>
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
        <h2 class="text-4xl lg:text-6xl font-extrabold text-white mb-6">
            Loyihangizni bugunoq boshlang
        </h2>
        <p class="text-gray-300 text-lg mb-10 max-w-2xl mx-auto">
            12,500+ professional freelancerlar orasidan o'zingizga mosini toping va ishingizni sifatli bajaring
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <button class="bg-white text-secondary px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl shadow-white/20">
                Freelancer topish
            </button>
            <button class="bg-transparent text-white border-2 border-white/30 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white/10 transition-all duration-300">
                Loyiha e'lon qilish
            </button>
        </div>
    </div>
</section>

<script>
    lucide.createIcons();
</script>

@endsection