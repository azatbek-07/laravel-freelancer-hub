@extends('layouts.app')

@section('title', 'Loyihalar — FreelanceHub')

@section('content')

{{-- PAGE HEADER --}}
<section class="bg-gradient-to-br from-slate-50 via-white to-indigo-50 py-16">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-extrabold text-secondary mb-4">
                Mavjud <span class="gradient-text">loyihalar</span>
            </h1>
            <p class="text-gray-500 max-w-2xl mx-auto text-lg">
                O'zingizga mos loyihani toping va daromad olishni boshlang
            </p>
        </div>
    </div>
</section>

{{-- SEARCH & FILTERS --}}
<section class="py-8 bg-white border-b border-gray-100 sticky top-20 z-40">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-4 items-center">
            
            {{-- Search Input --}}
            <div class="flex-1 relative w-full">
                <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400"></i>
                <input type="text" 
                       placeholder="Loyiha qidirish..." 
                       class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-sm">
            </div>
            
            {{-- Filter Buttons --}}
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
                    <option>Byudjet bo'yicha</option>
                    <option>$0 - $500</option>
                    <option>$500 - $1000</option>
                    <option>$1000 - $5000</option>
                    <option>$5000+</option>
                </select>
                
                <select class="px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-2xl text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                    <option>Holati</option>
                    <option>Ochiq</option>
                    <option>Jarayonda</option>
                    <option>Yakunlangan</option>
                </select>
            </div>
        </div>
    </div>
</section>

{{-- PROJECTS LIST --}}
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        {{-- Results Count & Sort --}}
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
            <p class="text-sm text-gray-500">
                <span class="font-semibold text-gray-900">1,850</span> ta loyiha topildi
            </p>
            <div class="flex gap-3">
                <select class="px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl text-sm font-medium text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 cursor-pointer">
                    <option>Eng yangi</option>
                    <option>Eng katta byudjet</option>
                    <option>Eng ko'p taklif</option>
                    <option>Tugashiga yaqin</option>
                </select>
                <div class="flex bg-gray-50 rounded-xl p-1">
                    <button class="px-3 py-1.5 rounded-lg bg-white shadow-sm text-sm font-medium">📋 List</button>
                    <button class="px-3 py-1.5 rounded-lg text-sm font-medium text-gray-500">🔲 Grid</button>
                </div>
            </div>
        </div>
        
        {{-- Projects List --}}
        <div class="space-y-4">
            
            {{-- Project 1 - Featured --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-indigo-100 transition-all duration-500 border border-gray-100 hover:border-indigo-200 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-indigo-500 to-purple-600"></div>
                <div class="absolute top-4 right-4">
                    <span class="bg-yellow-100 text-yellow-700 text-xs font-bold px-3 py-1.5 rounded-full">Muhim</span>
                </div>
                
                <div class="pl-2">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-secondary group-hover:text-indigo-600 transition mb-2">
                                E-commerce Platform yaratish
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-2 mb-3">
                                To'liq funksional onlayn do'kon platformasi kerak. Laravel va React texnologiyalarida ishlab chiqilishi kerak. 
                                To'lov tizimlari integratsiyasi, admin panel, mahsulot boshqaruvi va hisobotlar bo'lishi shart.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full">Laravel</span>
                                <span class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full">React.js</span>
                                <span class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full">MySQL</span>
                                <span class="text-xs font-medium bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full">REST API</span>
                                <span class="text-xs font-medium bg-gray-100 text-gray-600 px-3 py-1 rounded-full">+3</span>
                            </div>
                        </div>
                        
                        <div class="flex lg:flex-col items-center lg:items-end gap-4 lg:gap-2">
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$800 - $1,500</p>
                                <p class="text-xs text-gray-400">Fix price</p>
                            </div>
                            <button class="bg-secondary hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200 whitespace-nowrap">
                                Taklif berish
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4"></i>
                            <span>2 soat oldin</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            <span>12 ta taklif</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                            <span>245 ta ko'rish</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>Muddat: 30 kun</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="https://ui-avatars.com/api/?name=Client&background=6366f1&color=fff&size=24" 
                                 alt="Client" class="w-6 h-6 rounded-full">
                            <span>Tasdiqlangan mijoz</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Project 2 --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-purple-100 transition-all duration-500 border border-gray-100 hover:border-purple-200 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-purple-500 to-pink-600"></div>
                <div class="absolute top-4 right-4">
                    <span class="bg-red-100 text-red-700 text-xs font-bold px-3 py-1.5 rounded-full">Shoshilinch</span>
                </div>
                
                <div class="pl-2">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-secondary group-hover:text-purple-600 transition mb-2">
                                Mobil ilova UI/UX dizayni
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-2 mb-3">
                                Food delivery ilovasi uchun zamonaviy va qulay interfeys dizayni kerak. 
                                Figma'da ishlangan, to'liq prototiplar bilan. iOS va Android platformalari uchun.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs font-medium bg-purple-50 text-purple-600 px-3 py-1 rounded-full">Figma</span>
                                <span class="text-xs font-medium bg-purple-50 text-purple-600 px-3 py-1 rounded-full">Mobile UI</span>
                                <span class="text-xs font-medium bg-purple-50 text-purple-600 px-3 py-1 rounded-full">Prototyping</span>
                            </div>
                        </div>
                        
                        <div class="flex lg:flex-col items-center lg:items-end gap-4 lg:gap-2">
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$500 - $800</p>
                                <p class="text-xs text-gray-400">Fix price</p>
                            </div>
                            <button class="bg-secondary hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200 whitespace-nowrap">
                                Taklif berish
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4"></i>
                            <span>5 soat oldin</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            <span>8 ta taklif</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                            <span>180 ta ko'rish</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>Muddat: 14 kun</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Project 3 --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-green-100 transition-all duration-500 border border-gray-100 hover:border-green-200 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-green-500 to-emerald-600"></div>
                
                <div class="pl-2">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-secondary group-hover:text-green-600 transition mb-2">
                                REST API ishlab chiqish
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-2 mb-3">
                                Node.js va Express.js da RESTful API ishlab chiqish kerak. JWT autentifikatsiya, 
                                role-based access control, PostgreSQL ma'lumotlar bazasi bilan.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs font-medium bg-green-50 text-green-600 px-3 py-1 rounded-full">Node.js</span>
                                <span class="text-xs font-medium bg-green-50 text-green-600 px-3 py-1 rounded-full">Express</span>
                                <span class="text-xs font-medium bg-green-50 text-green-600 px-3 py-1 rounded-full">PostgreSQL</span>
                                <span class="text-xs font-medium bg-green-50 text-green-600 px-3 py-1 rounded-full">JWT</span>
                            </div>
                        </div>
                        
                        <div class="flex lg:flex-col items-center lg:items-end gap-4 lg:gap-2">
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$1,200 - $2,000</p>
                                <p class="text-xs text-gray-400">Fix price</p>
                            </div>
                            <button class="bg-secondary hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200 whitespace-nowrap">
                                Taklif berish
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4"></i>
                            <span>1 kun oldin</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            <span>15 ta taklif</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                            <span>320 ta ko'rish</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>Muddat: 45 kun</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Project 4 --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-orange-100 transition-all duration-500 border border-gray-100 hover:border-orange-200 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-orange-500 to-red-600"></div>
                
                <div class="pl-2">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-secondary group-hover:text-orange-600 transition mb-2">
                                SEO optimizatsiya va marketing
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-2 mb-3">
                                Veb-sayt uchun to'liq SEO audit, on-page va off-page optimizatsiya, 
                                Google Ads kampaniyasi va kontent strategiyasi kerak.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs font-medium bg-orange-50 text-orange-600 px-3 py-1 rounded-full">SEO</span>
                                <span class="text-xs font-medium bg-orange-50 text-orange-600 px-3 py-1 rounded-full">Google Ads</span>
                                <span class="text-xs font-medium bg-orange-50 text-orange-600 px-3 py-1 rounded-full">Analytics</span>
                                <span class="text-xs font-medium bg-orange-50 text-orange-600 px-3 py-1 rounded-full">Content</span>
                            </div>
                        </div>
                        
                        <div class="flex lg:flex-col items-center lg:items-end gap-4 lg:gap-2">
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$300 - $600</p>
                                <p class="text-xs text-gray-400">Soatbay</p>
                            </div>
                            <button class="bg-secondary hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200 whitespace-nowrap">
                                Taklif berish
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4"></i>
                            <span>3 kun oldin</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            <span>6 ta taklif</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                            <span>150 ta ko'rish</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>Muddat: 60 kun</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Project 5 --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-blue-100 transition-all duration-500 border border-gray-100 hover:border-blue-200 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-blue-500 to-cyan-600"></div>
                
                <div class="pl-2">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-secondary group-hover:text-blue-600 transition mb-2">
                                Telegram bot ishlab chiqish
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-2 mb-3">
                                E-commerce uchun to'liq avtomatlashtirilgan Telegram bot kerak. 
                                Python (Aiogram) yoki Node.js da ishlangan. To'lov tizimlari integratsiyasi bilan.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs font-medium bg-blue-50 text-blue-600 px-3 py-1 rounded-full">Python</span>
                                <span class="text-xs font-medium bg-blue-50 text-blue-600 px-3 py-1 rounded-full">Aiogram</span>
                                <span class="text-xs font-medium bg-blue-50 text-blue-600 px-3 py-1 rounded-full">Telegram API</span>
                            </div>
                        </div>
                        
                        <div class="flex lg:flex-col items-center lg:items-end gap-4 lg:gap-2">
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$400 - $700</p>
                                <p class="text-xs text-gray-400">Fix price</p>
                            </div>
                            <button class="bg-secondary hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200 whitespace-nowrap">
                                Taklif berish
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4"></i>
                            <span>1 hafta oldin</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            <span>22 ta taklif</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                            <span>410 ta ko'rish</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>Muddat: 21 kun</span>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Project 6 --}}
            <div class="group bg-white rounded-3xl p-6 shadow-sm hover:shadow-2xl hover:shadow-pink-100 transition-all duration-500 border border-gray-100 hover:border-pink-200 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-2 h-full bg-gradient-to-b from-pink-500 to-rose-600"></div>
                
                <div class="pl-2">
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-4">
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-secondary group-hover:text-pink-600 transition mb-2">
                                Kontent yozish (Copywriting)
                            </h3>
                            <p class="text-gray-500 text-sm line-clamp-2 mb-3">
                                Veb-sayt va blog uchun professional kontent kerak. 50+ maqola, 
                                SEO optimizatsiya qilingan, o'zbek va rus tillarida.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                <span class="text-xs font-medium bg-pink-50 text-pink-600 px-3 py-1 rounded-full">Copywriting</span>
                                <span class="text-xs font-medium bg-pink-50 text-pink-600 px-3 py-1 rounded-full">Blog</span>
                                <span class="text-xs font-medium bg-pink-50 text-pink-600 px-3 py-1 rounded-full">SEO Content</span>
                            </div>
                        </div>
                        
                        <div class="flex lg:flex-col items-center lg:items-end gap-4 lg:gap-2">
                            <div class="text-right">
                                <p class="text-2xl font-extrabold text-secondary">$200 - $400</p>
                                <p class="text-xs text-gray-400">Fix price</p>
                            </div>
                            <button class="bg-secondary hover:bg-gray-800 text-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-300 shadow-lg shadow-gray-200 whitespace-nowrap">
                                Taklif berish
                            </button>
                        </div>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <i data-lucide="clock" class="w-4 h-4"></i>
                            <span>2 hafta oldin</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4"></i>
                            <span>9 ta taklif</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="eye" class="w-4 h-4"></i>
                            <span>280 ta ko'rish</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i data-lucide="calendar" class="w-4 h-4"></i>
                            <span>Muddat: 90 kun</span>
                        </div>
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
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition text-sm font-medium">15</button>
                
                <button class="w-10 h-10 rounded-xl border border-gray-200 flex items-center justify-center text-gray-600 hover:bg-gray-50 transition">
                    <i data-lucide="chevron-right" class="w-5 h-5"></i>
                </button>
            </nav>
        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-16 bg-gradient-to-r from-indigo-600 to-purple-600 relative overflow-hidden">
    <div class="absolute inset-0 bg-black/10"></div>
    <div class="absolute top-0 right-0 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>
    
    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
        <h2 class="text-3xl lg:text-4xl font-extrabold text-white mb-4">
            Loyihangiz bormi?
        </h2>
        <p class="text-indigo-100 text-lg mb-8">
            Professional freelancerlar uchun loyihangizni e'lon qiling
        </p>
        <button class="bg-white text-indigo-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 shadow-xl shadow-indigo-500/30">
            Loyiha e'lon qilish
        </button>
    </div>
</section>



@endsection