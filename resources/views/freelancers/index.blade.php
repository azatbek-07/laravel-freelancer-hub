@extends('layouts.app')

@section('title', 'Freelancerlar — FreelanceHub')

@section('content')

<!-- ===== PAGE HEADER ===== -->
<section class="bg-gradient-to-br from-slate-50 via-white to-indigo-50 py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-extrabold text-secondary mb-4">
                Professional <span class="gradient-text">freelancerlar</span>
            </h1>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg">
                O'zingizga mos mutaxassisni toping va loyihangizni boshlang
            </p>
        </div>
    </div>
</section>

<!-- ===== SEARCH & FILTERS ===== -->
<section class="py-8 bg-white border-b border-gray-100 sticky top-20 z-40">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-4 items-center">
            
            <!-- Search Input -->
            <div class="flex-1 relative w-full">
                <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
                <input type="text" 
                       placeholder="Freelancer qidirish (dasturchi, dizayner, marketolog...)" 
                       class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-sm">
            </div>
            
            <!-- Filter Buttons -->
            <div class="flex gap-3 w-full lg:w-auto">
                <select class="px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                    <option>Barcha yo'nalishlar</option>
                    <option>Web Dasturlash</option>
                    <option>UI/UX Dizayn</option>
                    <option>Mobil Ilovalar</option>
                    <option>Digital Marketing</option>
                    <option>Kontent & Copywriting</option>
                    <option>Data & Analytics</option>
                </select>
                
                <select class="px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                    <option>Tajriba darajasi</option>
                    <option>Junior</option>
                    <option>Middle</option>
                    <option>Senior</option>
                    <option>Team Lead</option>
                </select>
                
                <button class="px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl text-sm font-medium text-gray-700 hover:bg-gray-100 transition flex items-center gap-2">
                    <i data-lucide="sliders-horizontal" class="w-4 h-4"></i>
                    <span class="hidden sm:inline">Filterlar</span>
                </button>
            </div>
        </div>
        
        <!-- Active Filters -->
        <div class="flex flex-wrap gap-2 mt-4">
            <span class="text-xs font-medium text-gray-500 py-1">Aktiv filterlar:</span>
            <button class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full flex items-center gap-1 hover:bg-indigo-100 transition">
                Web Dasturlash
                <i data-lucide="x" class="w-3 h-3"></i>
            </button>
            <button class="text-xs font-medium bg-purple-50 text-purple-600 px-3 py-1 rounded-full flex items-center gap-1 hover:bg-purple-100 transition">
                Senior
                <i data-lucide="x" class="w-3 h-3"></i>
            </button>
            <button class="text-xs font-medium text-red-500 hover:text-red-600 transition ml-2">
                Barchasini tozalash
            </button>
        </div>
    </div>
</section>

<!-- ===== FREELANCERS GRID ===== -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <!-- Results Count & Sort -->
        <div class="flex justify-between items-center mb-8">
            <p class="text-sm text-gray-500">
                <span class="font-semibold text-gray-900">2,450</span> ta freelancer topildi
            </p>
            <select class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                <option>Eng yaxshi baholangan</option>
                <option>Eng yangi</option>
                <option>Eng tajribali</option>
                <option>Arzon narx</option>
            </select>
        </div>
        
        <!-- Freelancers Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <!-- Freelancer Card 1 -->
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-indigo-100 transition-all duration-500 border border-gray-100 hover:border-indigo-100">
                <!-- Top Section -->
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://ui-avatars.com/api/?name=Aziz+Karimov&background=6366f1&color=fff&size=64&bold=true" 
                                 alt="Aziz Karimov" 
                                 class="w-16 h-16 rounded-2xl object-cover">
                            <span class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white" title="Online"></span>
                        </div>
                        <div>
                            <h3 class="font-bold text-secondary text-lg">Aziz Karimov</h3>
                            <p class="text-sm text-gray-500">Full Stack Developer</p>
                        </div>
                    </div>
                    <button class="text-gray-300 hover:text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                    </button>
                </div>
                
                <!-- Rating & Reviews -->
                <div class="flex items-center gap-2 mb-4">
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                        <span class="font-bold text-secondary text-sm">4.9</span>
                    </div>
                    <span class="text-gray-400 text-sm">(238 ta sharh)</span>
                </div>
                
                <!-- Skills -->
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1.5 rounded-full">React.js</span>
                    <span class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1.5 rounded-full">Node.js</span>
                    <span class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1.5 rounded-full">Laravel</span>
                    <span class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1.5 rounded-full">PostgreSQL</span>
                </div>
                
                <!-- Description -->
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">
                    6+ yillik tajribaga ega full-stack dasturchi. Murakkab web-ilovalar va RESTful API lar yaratish bo'yicha mutaxassis.
                </p>
                
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-3 mb-4">
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">245</div>
                        <div class="text-xs text-gray-500">Loyiha</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">6+</div>
                        <div class="text-xs text-gray-500">Yil</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">98%</div>
                        <div class="text-xs text-gray-500">Muvaffaqiyat</div>
                    </div>
                </div>
                
                <!-- Price & Action -->
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <span class="text-lg font-extrabold text-secondary">$25</span>
                        <span class="text-sm text-gray-500">/soat</span>
                    </div>
                    <button class="bg-secondary hover:bg-gray-800 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200">
                        Profilni ko'rish
                    </button>
                </div>
            </div>
            
            <!-- Freelancer Card 2 -->
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-purple-100 transition-all duration-500 border border-gray-100 hover:border-purple-100">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://ui-avatars.com/api/?name=Dilnoza+Rahimova&background=8b5cf6&color=fff&size=64&bold=true" 
                                 alt="Dilnoza Rahimova" 
                                 class="w-16 h-16 rounded-2xl object-cover">
                            <span class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white"></span>
                        </div>
                        <div>
                            <h3 class="font-bold text-secondary text-lg">Dilnoza Rahimova</h3>
                            <p class="text-sm text-gray-500">Senior UI/UX Designer</p>
                        </div>
                    </div>
                    <button class="text-gray-300 hover:text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                    </button>
                </div>
                
                <div class="flex items-center gap-2 mb-4">
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                        <span class="font-bold text-secondary text-sm">4.8</span>
                    </div>
                    <span class="text-gray-400 text-sm">(186 ta sharh)</span>
                </div>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs font-medium bg-purple-50 text-purple-600 px-3 py-1.5 rounded-full">Figma</span>
                    <span class="text-xs font-medium bg-purple-50 text-purple-600 px-3 py-1.5 rounded-full">Adobe XD</span>
                    <span class="text-xs font-medium bg-purple-50 text-purple-600 px-3 py-1.5 rounded-full">Prototype</span>
                </div>
                
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">
                    5 yillik tajriba. Murakkab interfeyslar va foydalanuvchi tajribasi dizayni bo'yicha expert.
                </p>
                
                <div class="grid grid-cols-3 gap-3 mb-4">
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">180</div>
                        <div class="text-xs text-gray-500">Loyiha</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">5+</div>
                        <div class="text-xs text-gray-500">Yil</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">96%</div>
                        <div class="text-xs text-gray-500">Muvaffaqiyat</div>
                    </div>
                </div>
                
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <span class="text-lg font-extrabold text-secondary">$20</span>
                        <span class="text-sm text-gray-500">/soat</span>
                    </div>
                    <button class="bg-secondary hover:bg-gray-800 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200">
                        Profilni ko'rish
                    </button>
                </div>
            </div>
            
            <!-- Freelancer Card 3 -->
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-green-100 transition-all duration-500 border border-gray-100 hover:border-green-100">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://ui-avatars.com/api/?name=Jasur+Umarov&background=059669&color=fff&size=64&bold=true" 
                                 alt="Jasur Umarov" 
                                 class="w-16 h-16 rounded-2xl object-cover">
                            <span class="absolute -bottom-1 -right-1 w-5 h-5 bg-yellow-500 rounded-full border-2 border-white"></span>
                        </div>
                        <div>
                            <h3 class="font-bold text-secondary text-lg">Jasur Umarov</h3>
                            <p class="text-sm text-gray-500">Mobile Developer</p>
                        </div>
                    </div>
                    <button class="text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-5 h-5 fill-current"></i>
                    </button>
                </div>
                
                <div class="flex items-center gap-2 mb-4">
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                        <span class="font-bold text-secondary text-sm">4.9</span>
                    </div>
                    <span class="text-gray-400 text-sm">(152 ta sharh)</span>
                </div>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs font-medium bg-green-50 text-green-600 px-3 py-1.5 rounded-full">Flutter</span>
                    <span class="text-xs font-medium bg-green-50 text-green-600 px-3 py-1.5 rounded-full">React Native</span>
                    <span class="text-xs font-medium bg-green-50 text-green-600 px-3 py-1.5 rounded-full">Swift</span>
                    <span class="text-xs font-medium bg-green-50 text-green-600 px-3 py-1.5 rounded-full">Kotlin</span>
                </div>
                
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">
                    4 yillik tajriba. iOS va Android platformalari uchun yuqori sifatli mobil ilovalar yaratish.
                </p>
                
                <div class="grid grid-cols-3 gap-3 mb-4">
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">120</div>
                        <div class="text-xs text-gray-500">Loyiha</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">4+</div>
                        <div class="text-xs text-gray-500">Yil</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">99%</div>
                        <div class="text-xs text-gray-500">Muvaffaqiyat</div>
                    </div>
                </div>
                
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <span class="text-lg font-extrabold text-secondary">$30</span>
                        <span class="text-sm text-gray-500">/soat</span>
                    </div>
                    <button class="bg-secondary hover:bg-gray-800 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200">
                        Profilni ko'rish
                    </button>
                </div>
            </div>
            
            <!-- Freelancer Card 4 -->
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-orange-100 transition-all duration-500 border border-gray-100 hover:border-orange-100">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://ui-avatars.com/api/?name=Malika+Yusupova&background=ea580c&color=fff&size=64&bold=true" 
                                 alt="Malika Yusupova" 
                                 class="w-16 h-16 rounded-2xl object-cover">
                            <span class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white"></span>
                        </div>
                        <div>
                            <h3 class="font-bold text-secondary text-lg">Malika Yusupova</h3>
                            <p class="text-sm text-gray-500">SEO Specialist</p>
                        </div>
                    </div>
                    <button class="text-gray-300 hover:text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                    </button>
                </div>
                
                <div class="flex items-center gap-2 mb-4">
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                        <span class="font-bold text-secondary text-sm">4.7</span>
                    </div>
                    <span class="text-gray-400 text-sm">(98 ta sharh)</span>
                </div>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs font-medium bg-orange-50 text-orange-600 px-3 py-1.5 rounded-full">SEO</span>
                    <span class="text-xs font-medium bg-orange-50 text-orange-600 px-3 py-1.5 rounded-full">Google Ads</span>
                    <span class="text-xs font-medium bg-orange-50 text-orange-600 px-3 py-1.5 rounded-full">Analytics</span>
                </div>
                
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">
                    3+ yillik tajriba. Web-saytlarni TOP-10 ga olib chiqish va trafikni oshirish bo'yicha mutaxassis.
                </p>
                
                <div class="grid grid-cols-3 gap-3 mb-4">
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">85</div>
                        <div class="text-xs text-gray-500">Loyiha</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">3+</div>
                        <div class="text-xs text-gray-500">Yil</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">94%</div>
                        <div class="text-xs text-gray-500">Muvaffaqiyat</div>
                    </div>
                </div>
                
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <span class="text-lg font-extrabold text-secondary">$18</span>
                        <span class="text-sm text-gray-500">/soat</span>
                    </div>
                    <button class="bg-secondary hover:bg-gray-800 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200">
                        Profilni ko'rish
                    </button>
                </div>
            </div>
            
            <!-- Freelancer Card 5 -->
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-blue-100 transition-all duration-500 border border-gray-100 hover:border-blue-100">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://ui-avatars.com/api/?name=Bobur+Normatov&background=2563eb&color=fff&size=64&bold=true" 
                                 alt="Bobur Normatov" 
                                 class="w-16 h-16 rounded-2xl object-cover">
                            <span class="absolute -bottom-1 -right-1 w-5 h-5 bg-gray-400 rounded-full border-2 border-white"></span>
                        </div>
                        <div>
                            <h3 class="font-bold text-secondary text-lg">Bobur Normatov</h3>
                            <p class="text-sm text-gray-500">DevOps Engineer</p>
                        </div>
                    </div>
                    <button class="text-gray-300 hover:text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                    </button>
                </div>
                
                <div class="flex items-center gap-2 mb-4">
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                        <span class="font-bold text-secondary text-sm">4.9</span>
                    </div>
                    <span class="text-gray-400 text-sm">(210 ta sharh)</span>
                </div>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs font-medium bg-blue-50 text-blue-600 px-3 py-1.5 rounded-full">Docker</span>
                    <span class="text-xs font-medium bg-blue-50 text-blue-600 px-3 py-1.5 rounded-full">Kubernetes</span>
                    <span class="text-xs font-medium bg-blue-50 text-blue-600 px-3 py-1.5 rounded-full">AWS</span>
                </div>
                
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">
                    7 yillik tajriba. Cloud infratuzilma va CI/CD piplinelarini sozlash bo'yicha ekspert.
                </p>
                
                <div class="grid grid-cols-3 gap-3 mb-4">
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">190</div>
                        <div class="text-xs text-gray-500">Loyiha</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">7+</div>
                        <div class="text-xs text-gray-500">Yil</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">97%</div>
                        <div class="text-xs text-gray-500">Muvaffaqiyat</div>
                    </div>
                </div>
                
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <span class="text-lg font-extrabold text-secondary">$35</span>
                        <span class="text-sm text-gray-500">/soat</span>
                    </div>
                    <button class="bg-secondary hover:bg-gray-800 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200">
                        Profilni ko'rish
                    </button>
                </div>
            </div>
            
            <!-- Freelancer Card 6 -->
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-pink-100 transition-all duration-500 border border-gray-100 hover:border-pink-100">
                <div class="flex items-start justify-between mb-4">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="https://ui-avatars.com/api/?name=Sevara+Aliyeva&background=db2777&color=fff&size=64&bold=true" 
                                 alt="Sevara Aliyeva" 
                                 class="w-16 h-16 rounded-2xl object-cover">
                            <span class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-500 rounded-full border-2 border-white"></span>
                        </div>
                        <div>
                            <h3 class="font-bold text-secondary text-lg">Sevara Aliyeva</h3>
                            <p class="text-sm text-gray-500">Content Strategist</p>
                        </div>
                    </div>
                    <button class="text-gray-300 hover:text-red-500 transition-colors">
                        <i data-lucide="heart" class="w-5 h-5"></i>
                    </button>
                </div>
                
                <div class="flex items-center gap-2 mb-4">
                    <div class="flex items-center gap-1">
                        <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-current"></i>
                        <span class="font-bold text-secondary text-sm">4.8</span>
                    </div>
                    <span class="text-gray-400 text-sm">(165 ta sharh)</span>
                </div>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs font-medium bg-pink-50 text-pink-600 px-3 py-1.5 rounded-full">Copywriting</span>
                    <span class="text-xs font-medium bg-pink-50 text-pink-600 px-3 py-1.5 rounded-full">Blog</span>
                    <span class="text-xs font-medium bg-pink-50 text-pink-600 px-3 py-1.5 rounded-full">SMM</span>
                </div>
                
                <p class="text-sm text-gray-500 mb-4 line-clamp-2">
                    4 yillik tajriba. Professional kontent strategiyasi va copywriting xizmatlari.
                </p>
                
                <div class="grid grid-cols-3 gap-3 mb-4">
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">140</div>
                        <div class="text-xs text-gray-500">Loyiha</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">4+</div>
                        <div class="text-xs text-gray-500">Yil</div>
                    </div>
                    <div class="text-center bg-gray-50 rounded-xl py-2">
                        <div class="text-sm font-bold text-secondary">95%</div>
                        <div class="text-xs text-gray-500">Muvaffaqiyat</div>
                    </div>
                </div>
                
                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                    <div>
                        <span class="text-lg font-extrabold text-secondary">$15</span>
                        <span class="text-sm text-gray-500">/soat</span>
                    </div>
                    <button class="bg-secondary hover:bg-gray-800 text-white px-5 py-2.5 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200">
                        Profilni ko'rish
                    </button>
                </div>
            </div>
            
        </div>
        
        <!-- ===== PAGINATION ===== -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center gap-2">
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-gray-50 transition disabled:opacity-50" disabled>
                    <i data-lucide="chevron-left" class="w-5 h-5"></i>
                </button>
                
                <button class="w-10 h-10 rounded-xl bg-secondary text-white font-semibold text-sm shadow-lg shadow-gray-200">1</button>
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition text-sm font-medium">2</button>
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition text-sm font-medium">3</button>
                <span class="px-2 text-gray-400">...</span>
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition text-sm font-medium">12</button>
                
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </button>
            </nav>
        </div>
        
    </div>
</section>

<!-- ===== BECOME FREELANCER CTA ===== -->
<section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-600 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="absolute top-0 right-0 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
        <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4">
            Freelancer bo'lmoqchimisiz?
        </h2>
        <p class="text-indigo-100 text-lg mb-8">
            O'z mahoratingizni namoyish eting va yuqori daromad oling
        </p>
        <button class="bg-white text-indigo-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl shadow-indigo-500/30">
            Hoziroq ro'yxatdan o'tish
        </button>
    </div>
</section>

<script>
    lucide.createIcons();
</script>

@endsection