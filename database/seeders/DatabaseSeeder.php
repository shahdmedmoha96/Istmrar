<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            LanguageSeeder::class,      // أول حاجة اللغات
            LevelsSeeder::class,        // بعد كده المستويات
            UserSeeder::class,          // بعد كده المستخدمين (بيعتمدوا على اللغات)
            UserScoresSeeder::class,    // يسجل لكل يوزر سكور في كل ليفيل
            FriendshipSeeder::class,    // وأخيرًا العلاقات بينهم
        ]);
    }
}
