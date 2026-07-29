@extends('layouts.app')

@section('title', 'FreelanceHub — Ro\'yxatdan o\'tish')

@section('content')
<div class="min-h-[80vh] flex items-center justify-center px-6 py-12 bg-gray-50">
    <div class="w-full max-w-md">

        <!-- Logo va Sarlavha -->
        <div class="text-center mb-8">
            <a href="/" class="inline-flex items-center gap-3 group mb-6">
                <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-indigo-200 group-hover:shadow-xl transition-all duration-300">
                    <i data-lucide="briefcase" class="w-6 h-6 text-white"></i>
                </div>
                <span class="text-3xl font-extrabold text-secondary">Freelance<span class="text-indigo-600">Hub</span></span>
            </a>
            <h1 class="text-3xl font-bold text-secondary mb-2">Ro'yxatdan o'tish</h1>
            <p class="text-gray-600">Yangi hisob yarating va ish boshlashni bugunoq boshlang</p>
        </div>

        <!-- Register Formasi -->
        <div class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 p-8 border border-gray-100">
            
            <!-- Xatoliklar -->
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 rounded-xl p-4 mb-6">
                    <div class="flex items-center gap-3 text-red-600 mb-2">
                        <i data-lucide="alert-circle" class="w-5 h-5"></i>
                        <span class="font-semibold text-sm">Xatolik yuz berdi</span>
                    </div>
                    <ul class="list-disc list-inside text-sm text-red-500 space-y-1 ml-8">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register.post') }}" method="POST" class="space-y-5">
                @csrf
                
                <!-- Ism -->
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                        To'liq ismingiz
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="user" class="w-5 h-5 text-gray-400"></i>
                        </div>
                        <input 
                            type="text" 
                            name="name" 
                            id="name"
                            value="{{ old('name') }}"
                            placeholder="Abdullayev Abdulla"
                            class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50 transition"
                            required
                            autofocus
                        />
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                        Email manzil
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="mail" class="w-5 h-5 text-gray-400"></i>
                        </div>
                        <input 
                            type="email" 
                            name="email" 
                            id="email"
                            value="{{ old('email') }}"
                            placeholder="sizning@email.com"
                            class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50 transition"
                            required
                        />
                    </div>
                </div>

                <!-- Parol -->
                <div>
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                        Parol
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="lock" class="w-5 h-5 text-gray-400"></i>
                        </div>
                        <input 
                            type="password" 
                            name="password" 
                            id="password"
                            placeholder="Kamida 8 ta belgi"
                            class="w-full pl-12 pr-12 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50 transition"
                            required
                        />
                        <button 
                            type="button"
                            onclick="togglePassword('password', 'eyeIcon1')"
                            class="absolute inset-y-0 right-0 pr-4 flex items-center"
                        >
                            <i id="eyeIcon1" data-lucide="eye" class="w-5 h-5 text-gray-400 hover:text-gray-600 transition"></i>
                        </button>
                    </div>
                </div>

                <!-- Parolni tasdiqlash -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
                        Parolni tasdiqlang
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="check-circle" class="w-5 h-5 text-gray-400"></i>
                        </div>
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            id="password_confirmation"
                            placeholder="Parolni qayta kiriting"
                            class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50 transition"
                            required
                        />
                    </div>
                </div>

                <!-- Foydalanuvchi turi -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">
                        Siz kim sifatida ro'yxatdan o'tmoqchisiz?
                    </label>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="relative flex items-center justify-center p-4 bg-gray-50 border-2 border-gray-200 rounded-xl cursor-pointer hover:bg-gray-100 transition-all duration-300 has-[:checked]:border-indigo-500 has-[:checked]:bg-indigo-50">
                            <input type="radio" name="role" value="freelancer" class="sr-only" checked />
                            <div class="text-center">
                                <i data-lucide="code" class="w-6 h-6 text-gray-400 mb-2 mx-auto"></i>
                                <span class="text-sm font-semibold text-gray-700">Freelancer</span>
                                <p class="text-xs text-gray-500 mt-1">Ish bajaruvchi</p>
                            </div>
                        </label>
                        <label class="relative flex items-center justify-center p-4 bg-gray-50 border-2 border-gray-200 rounded-xl cursor-pointer hover:bg-gray-100 transition-all duration-300 has-[:checked]:border-indigo-500 has-[:checked]:bg-indigo-50">
                            <input type="radio" name="role" value="client" class="sr-only" />
                            <div class="text-center">
                                <i data-lucide="building" class="w-6 h-6 text-gray-400 mb-2 mx-auto"></i>
                                <span class="text-sm font-semibold text-gray-700">Mijoz</span>
                                <p class="text-xs text-gray-500 mt-1">Ish beruvchi</p>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Shartlar -->
                <div class="flex items-start gap-2">
                    <input 
                        type="checkbox" 
                        name="terms" 
                        id="terms"
                        class="w-4 h-4 mt-1 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                        required
                    />
                    <label for="terms" class="text-sm text-gray-600">
                        Men <a href="#" class="text-indigo-600 hover:text-indigo-700 font-semibold">Foydalanish shartlari</a> va 
                        <a href="#" class="text-indigo-600 hover:text-indigo-700 font-semibold">Maxfiylik siyosati</a> bilan tanishdim
                    </label>
                </div>

                <!-- Submit tugma -->
                <button 
                    type="submit"
                    class="w-full py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-indigo-200 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center gap-2"
                >
                    <i data-lucide="user-plus" class="w-5 h-5"></i>
                    Ro'yxatdan o'tish
                </button>
            </form>

            <!-- Ajratuvchi -->
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-500">yoki</span>
                </div>
            </div>

            <!-- Kirish havolasi -->
            <p class="text-center text-sm text-gray-600">
                Hisobingiz bormi? 
                <a href="{{ route('login') }}" class="text-indigo-600 hover:text-indigo-700 font-semibold transition">
                    Kirish
                </a>
            </p>
        </div>

        <!-- Orqaga qaytish -->
        <div class="text-center mt-6">
            <a href="/" class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-indigo-600 transition">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                Bosh sahifaga qaytish
            </a>
        </div>
    </div>
</div>

<!-- Parol ko'rsatish/yashirish -->
<script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const eyeIcon = document.getElementById(iconId);
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.setAttribute('data-lucide', 'eye-off');
        } else {
            passwordInput.type = 'password';
            eyeIcon.setAttribute('data-lucide', 'eye');
        }
        
        // Lucide ikonkalarni yangilash
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    }
</script>
@endsection