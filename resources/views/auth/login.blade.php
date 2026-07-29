@extends('layouts.app')

@section('title', 'FreelanceHub — Kirish')

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
            <h1 class="text-3xl font-bold text-secondary mb-2">Xush kelibsiz!</h1>
            <p class="text-gray-600">Hisobingizga kiring va ish topishni davom eting</p>
        </div>

        <!-- Login Formasi -->
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

            <!-- Muvaffaqiyatli xabar -->
            @if (session('status'))
                <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6">
                    <div class="flex items-center gap-3 text-green-600">
                        <i data-lucide="check-circle" class="w-5 h-5"></i>
                        <span class="text-sm">{{ session('status') }}</span>
                    </div>
                </div>
            @endif

            <form action="{{ route('login.post') }}" method="POST" class="space-y-5">
                @csrf
                
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
                            autofocus
                        />
                    </div>
                </div>

                <!-- Password -->
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
                            placeholder="••••••••"
                            class="w-full pl-12 pr-12 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 placeholder-gray-400 focus:outline-none focus:border-indigo-500 focus:ring-4 focus:ring-indigo-50 transition"
                            required
                        />
                        <button 
                            type="button"
                            onclick="togglePassword()"
                            class="absolute inset-y-0 right-0 pr-4 flex items-center"
                        >
                            <i id="eyeIcon" data-lucide="eye" class="w-5 h-5 text-gray-400 hover:text-gray-600 transition"></i>
                        </button>
                    </div>
                </div>

                <!-- Qo'shimcha imkoniyatlar -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-gray-600 cursor-pointer select-none">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            class="w-4 h-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                        />
                        Eslab qolish
                    </label>
                    <a href="" class="text-indigo-600 hover:text-indigo-700 font-semibold transition">
                        Parolni unutdingizmi?
                    </a>
                </div>

                <!-- Submit tugma -->
                <button 
                    type="submit"
                    class="w-full py-3.5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold rounded-xl hover:shadow-lg hover:shadow-indigo-200 transition-all duration-300 hover:-translate-y-0.5 active:translate-y-0 flex items-center justify-center gap-2"
                >
                    <i data-lucide="log-in" class="w-5 h-5"></i>
                    Kirish
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

            <!-- Ro'yxatdan o'tish havolasi -->
            <p class="text-center text-sm text-gray-600">
                Hisobingiz yo'qmi? 
                <a href="{{ route('register') }}" class="text-indigo-600 hover:text-indigo-700 font-semibold transition">
                    Ro'yxatdan o'tish
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
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.setAttribute('data-lucide', 'eye-off');
        } else {
            passwordInput.type = 'password';
            eyeIcon.setAttribute('data-lucide', 'eye');
        }
        
        // Lucide ikonkalarni yangilash
        lucide.createIcons();
    }
</script>
@endsection