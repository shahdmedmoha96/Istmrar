<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('languages')->insert([
            ['name' => 'English', 'code' => 'en', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Arabic', 'code' => 'ar', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'French', 'code' => 'fr', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Spanish', 'code' => 'es', 'created_at' => $now, 'updated_at' => $now],
        ]);    }
}
