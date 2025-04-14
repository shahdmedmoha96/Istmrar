<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        DB::table('levels')->insert([
            ['name' => 'Learn from scratch', 'description' => 'I have zero knowledge', 'order' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Getting started', 'description' => "I've done some learning, but can't actually speak much", 'order' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Making good progress', 'description' => 'I can have a basic conversation on limited topics', 'order' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Improving my skills', 'description' => 'I have a good understanding but looking to get better', 'order' => 4, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
