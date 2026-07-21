<?php

namespace Database\Seeders;

use App\Models\Freelance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FreelanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $freelancers = [
            [
                'name' => 'Aziz Karimov',
                'job' => 'Full Stack Developer',
                'image' => 'https://ui-avatars.com/api/?name=Aziz+Karimov&background=6366f1&color=fff&size=256&bold=true',
                'rating' => 4.9,
                'reviews' => 238,
                'skills' => ['React.js', 'Node.js', 'Laravel', 'PostgreSQL'],
                'description' => '6+ yillik tajribaga ega full-stack dasturchi.',
                'projects' => 245,
                'experience' => '6+',
                'success' => '98%',
                'price' => 25,
                'color' => 'indigo',
                'status' => 'online',
            ],

            [
                'name' => 'Dilnoza Rahimova',
                'job' => 'Senior UI/UX Designer',
                'image' => 'https://ui-avatars.com/api/?name=Dilnoza+Rahimova&background=8b5cf6&color=fff&size=256&bold=true',
                'rating' => 4.8,
                'reviews' => 186,
                'skills' => ['Figma', 'Adobe XD', 'Prototype'],
                'description' => '5 yillik tajriba. Murakkab interfeyslar va foydalanuvchi tajribasi dizayni bo‘yicha expert.',
                'projects' => 180,
                'experience' => '5+',
                'success' => '96%',
                'price' => 20,
                'color' => 'purple',
                'status' => 'online',
            ],

            [
                'name' => 'Jasur Umarov',
                'job' => 'Mobile Developer',
                'image' => 'https://ui-avatars.com/api/?name=Jasur+Umarov&background=059669&color=fff&size=256&bold=true',
                'rating' => 4.9,
                'reviews' => 152,
                'skills' => ['Flutter', 'React Native', 'Swift', 'Kotlin'],
                'description' => '4 yillik tajriba. iOS va Android platformalari uchun yuqori sifatli mobil ilovalar yaratish.',
                'projects' => 120,
                'experience' => '4+',
                'success' => '99%',
                'price' => 30,
                'color' => 'green',
                'status' => 'busy',
            ],

            [
                'name' => 'Malika Yusupova',
                'job' => 'SEO Specialist',
                'image' => 'https://ui-avatars.com/api/?name=Malika+Yusupova&background=ea580c&color=fff&size=256&bold=true',
                'rating' => 4.7,
                'reviews' => 98,
                'skills' => ['SEO', 'Google Ads', 'Analytics'],
                'description' => '3+ yillik tajriba. Web-saytlarni TOP-10 ga olib chiqish va trafikni oshirish bo‘yicha mutaxassis.',
                'projects' => 85,
                'experience' => '3+',
                'success' => '94%',
                'price' => 18,
                'color' => 'orange',
                'status' => 'online',
            ],

            [
                'name' => 'Bobur Normatov',
                'job' => 'DevOps Engineer',
                'image' => 'https://ui-avatars.com/api/?name=Bobur+Normatov&background=2563eb&color=fff&size=256&bold=true',
                'rating' => 4.9,
                'reviews' => 210,
                'skills' => ['Docker', 'Kubernetes', 'AWS'],
                'description' => '7 yillik tajriba. Cloud infratuzilma va CI/CD piplinelarini sozlash bo‘yicha ekspert.',
                'projects' => 190,
                'experience' => '7+',
                'success' => '97%',
                'price' => 35,
                'color' => 'blue',
                'status' => 'offline',
            ],

            [
                'name' => 'Sevara Aliyeva',
                'job' => 'Content Strategist',
                'image' => 'https://ui-avatars.com/api/?name=Sevara+Aliyeva&background=db2777&color=fff&size=256&bold=true',
                'rating' => 4.8,
                'reviews' => 165,
                'skills' => ['Copywriting', 'Blog', 'SMM'],
                'description' => '4 yillik tajriba. Professional kontent strategiyasi va copywriting xizmatlari.',
                'projects' => 140,
                'experience' => '4+',
                'success' => '95%',
                'price' => 15,
                'color' => 'pink',
                'status' => 'online',
            ],


        ];

        foreach ($freelancers as $freelancer) {
            Freelance::create($freelancer);
        }
    }
}
