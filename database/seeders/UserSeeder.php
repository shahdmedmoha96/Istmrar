<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Language;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run()
    {
        $languages = Language::pluck('id')->toArray(); // نحصل على كل الـ IDs من جدول اللغات

        $users = [
            [
                'name' => 'shahd mohamed',
                'email' => 'shahd@example.com',
                'interests' => 'Reading, Traveling',
            ],
            [
                'name' => 'baboly',
                'email' => 'baboly@example.com',
                'interests' => 'Music, Sports',
            ],
            [
                'name' => 'Abdelhamid Hamdi',
                'email' => 'Abdelhamid@example.com',
                'interests' => 'Drawing, Cooking',
            ],
            [
                'name' => 'Ahmed Ali',
                'email' => 'ahmed@example.com',
                'interests' => 'Reading, Traveling',
            ],
            [
                'name' => 'Sara Mohamed',
                'email' => 'sara@example.com',
                'interests' => 'Drawing, Cooking',
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'interests' => 'Music, Sports',
            ],
        ];

        foreach ($users as $user) {
            // نختار لغتين عشوائيتين
            $native = fake()->randomElement($languages);
            do {
                $target = fake()->randomElement($languages);
            } while ($target === $native); // نتأكد إنهم مش نفس اللغة

            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('password'),
                'native_language' => $native,
                'target_language' => $target,
                'interests' => $user['interests'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
