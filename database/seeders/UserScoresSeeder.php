<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Level;
use Illuminate\Support\Facades\DB;

class UserScoresSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $levels = Level::all();

        foreach ($users as $user) {
            foreach ($levels as $level) {
                DB::table('user_scores')->insert([
                    'user_id' => $user->id,
                    'level_id' => $level->id,
                    'completed' => rand(0, 1),
                    'score' => rand(0, 100),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
