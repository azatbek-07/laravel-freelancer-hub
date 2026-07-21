@extends('layouts.app')

@section('title', ' | FreelanceHub')

@section('content')

{{-- BREADCRUMB --}}
<section class="bg-gray-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-5">
        <div class="flex items-center gap-2 text-sm text-gray-500">

            <a href="{{ route('home') }}"
               class="hover:text-indigo-600 transition">
                Bosh sahifa
            </a>

            <i data-lucide="chevron-right" class="w-4 h-4"></i>

            <a href="{{ route('freelancers.index') }}"
               class="hover:text-indigo-600 transition">
                Freelancerlar
            </a>

            <i data-lucide="chevron-right" class="w-4 h-4"></i>

            <span class="text-gray-900 font-medium">
                {{ $freelancer->name }}
            </span>

        </div>
    </div>
</section>


{{-- MAIN CONTENT --}}
<section class="py-12 bg-white">

    <div class="max-w-7xl mx-auto px-6">

        {{-- PROFILE HEADER --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- LEFT PROFILE CARD --}}
            <div class="lg:col-span-1">

                <div class="bg-gray-50 rounded-3xl p-8 text-center">

                    {{-- IMAGE --}}
                    <div class="relative inline-block">

                        <img src="{{ $freelancer->image }}"
                             alt="{{ $freelancer->name }}"
                             class="w-40 h-40 rounded-full object-cover mx-auto ring-8 ring-white shadow-xl">

                        {{-- STATUS --}}
                        <span class="absolute bottom-2 right-2
                            w-5 h-5 rounded-full border-4 border-gray-50
                            {{ $freelancer->status === 'online' ? 'bg-green-500' : 'bg-gray-400' }}">
                        </span>

                    </div>


                    {{-- NAME --}}
                    <h1 class="text-3xl font-bold text-gray-900 mt-6">
                        {{ $freelancer->name }}
                    </h1>


                    {{-- JOB --}}
                    <p class="text-indigo-600 font-semibold mt-2">
                        {{ $freelancer->job }}
                    </p>


                    {{-- STATUS TEXT --}}
                    <div class="flex items-center justify-center gap-2 mt-4 text-sm">

                        <span class="w-2 h-2 rounded-full
                            {{ $freelancer->status === 'online' ? 'bg-green-500' : 'bg-gray-400' }}">
                        </span>

                        <span class="text-gray-500">
                            {{ $freelancer->status === 'online' ? 'Hozir online' : 'Hozir offline' }}
                        </span>

                    </div>


                    {{-- RATING --}}
                    <div class="flex items-center justify-center gap-2 mt-6">

                        <i data-lucide="star"
                           class="w-5 h-5 text-yellow-400 fill-yellow-400">
                        </i>

                        <span class="text-xl font-bold text-gray-900">
                            {{ $freelancer->rating }}
                        </span>

                        <span class="text-gray-500">
                            ({{ $freelancer->reviews }} ta sharh)
                        </span>

                    </div>


                    {{-- PRICE --}}
                    <div class="border-t border-gray-200 mt-7 pt-7">

                        <p class="text-sm text-gray-500">
                            Soatlik narx
                        </p>

                        <p class="text-3xl font-bold text-gray-900 mt-1">
                            ${{ $freelancer->price }}
                            <span class="text-base font-normal text-gray-500">
                                / soat
                            </span>
                        </p>

                    </div>


                    {{-- BUTTONS --}}
                    <div class="flex flex-col gap-3 mt-7">

                        <button
                            class="flex items-center justify-center gap-3
                            bg-indigo-600 hover:bg-indigo-700
                            text-white py-4 rounded-2xl
                            font-bold transition">

                            <i data-lucide="message-circle" class="w-5 h-5"></i>

                            Xabar yuborish

                        </button>


                        <button
                            class="flex items-center justify-center gap-3
                            border-2 border-gray-200
                            hover:border-indigo-600
                            hover:text-indigo-600
                            py-4 rounded-2xl
                            font-bold transition">

                            <i data-lucide="heart" class="w-5 h-5"></i>

                            Saqlash

                        </button>

                    </div>

                </div>

            </div>


            {{-- RIGHT CONTENT --}}
            <div class="lg:col-span-2">

                {{-- INTRO --}}
                <div>

                    <div class="flex items-center gap-2 text-indigo-600 font-semibold mb-4">

                        <i data-lucide="briefcase" class="w-5 h-5"></i>

                        Professional freelancer

                    </div>


                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">

                        {{ $freelancer->name }}

                        <span class="text-indigo-600">
                            sizga yordam berishga tayyor
                        </span>

                    </h2>


                    <p class="text-lg text-gray-600 leading-relaxed mt-6 max-w-3xl">

                        {{ $freelancer->description }}

                    </p>

                </div>


                {{-- STATS --}}
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-10">

                    <div class="p-6 bg-gray-50 rounded-2xl">

                        <i data-lucide="folder-check"
                           class="w-7 h-7 text-indigo-600">
                        </i>

                        <p class="text-3xl font-bold text-gray-900 mt-4">
                            {{ $freelancer->projects }}
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Tugallangan loyihalar
                        </p>

                    </div>


                    <div class="p-6 bg-gray-50 rounded-2xl">

                        <i data-lucide="clock-3"
                           class="w-7 h-7 text-indigo-600">
                        </i>

                        <p class="text-3xl font-bold text-gray-900 mt-4">
                            {{ $freelancer->experience }}
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Yillik tajriba
                        </p>

                    </div>


                    <div class="p-6 bg-gray-50 rounded-2xl">

                        <i data-lucide="trending-up"
                           class="w-7 h-7 text-indigo-600">
                        </i>

                        <p class="text-3xl font-bold text-gray-900 mt-4">
                            {{ $freelancer->success }}
                        </p>

                        <p class="text-sm text-gray-500 mt-1">
                            Muvaffaqiyat darajasi
                        </p>

                    </div>

                </div>


                {{-- SKILLS --}}
                <div class="mt-12">

                    <h3 class="text-2xl font-bold text-gray-900 mb-5">
                        Ko'nikmalar
                    </h3>

                    <div class="flex flex-wrap gap-3">

                        @foreach ($freelancer->skills as $skill)

                            <span class="px-4 py-2
                                bg-indigo-50
                                text-indigo-600
                                rounded-xl
                                font-semibold
                                text-sm">

                                {{ $skill }}

                            </span>

                        @endforeach

                    </div>

                </div>


                {{-- DESCRIPTION --}}
                <div class="mt-12 pt-10 border-t border-gray-100">

                    <p class="text-indigo-600 font-semibold mb-3">
                        Freelancer haqida
                    </p>

                    <h3 class="text-3xl font-bold text-gray-900 mb-6">
                        Batafsil ma'lumot
                    </h3>

                    <p class="text-gray-600 text-lg leading-relaxed">

                        {{ $freelancer->description }}

                        {{ $freelancer->name }}
                        {{ $freelancer->job }} yo'nalishida professional xizmat ko'rsatadi.

                        U hozirgacha
                        {{ $freelancer->projects }} ta loyihani muvaffaqiyatli yakunlagan
                        va {{ $freelancer->experience }} yildan ortiq tajribaga ega.

                    </p>

                </div>

            </div>

        </div>


        {{-- BOTTOM CONTACT SECTION --}}
        <div class="mt-20 bg-gray-950 rounded-3xl p-8 md:p-12 text-white">

            <div class="flex flex-col md:flex-row
                        items-center
                        justify-between
                        gap-8">

                <div>

                    <div class="w-14 h-14
                                bg-indigo-600
                                rounded-2xl
                                flex items-center
                                justify-center">

                        <i data-lucide="rocket"
                           class="w-7 h-7">
                        </i>

                    </div>


                    <h3 class="text-3xl font-bold mt-6">
                        Loyihangizni boshlashga tayyormisiz?
                    </h3>


                    <p class="text-gray-400 mt-3 max-w-xl">

                        {{ $freelancer->name }}
                        bilan bog'laning va loyihangizni professional darajaga olib chiqing.

                    </p>

                </div>


                <button
                    class="flex items-center gap-3
                           bg-indigo-600
                           hover:bg-indigo-500
                           px-7 py-4
                           rounded-2xl
                           font-bold
                           transition
                           whitespace-nowrap">

                    <i data-lucide="send" class="w-5 h-5"></i>

                    Bog'lanish

                </button>

            </div>

        </div>

    </div>

</section>