<?php

namespace Database\Seeders;

use App\Models\Friendship;
use App\Models\User;
use Illuminate\Database\Seeder;

class FriendshipSeeder extends Seeder
{
    public function run()
    {
        $friendships = [
            // shahd mohamed -> Abdelhamid
            ['user_email' => 'shahd@example.com', 'friend_email' => 'Abdelhamid@example.com', 'status' => 'accepted'],
            // shahd mohamed -> sara
            ['user_email' => 'shahd@example.com', 'friend_email' => 'sara@example.com', 'status' => 'accepted'],
            // ahmed -> john
            ['user_email' => 'ahmed@example.com', 'friend_email' => 'john@example.com', 'status' => 'accepted'],
            // sara -> baboly
            ['user_email' => 'sara@example.com', 'friend_email' => 'baboly@example.com', 'status' => 'pending'],
        ];

        foreach ($friendships as $data) {
            $user = User::where('email', $data['user_email'])->first();
            $friend = User::where('email', $data['friend_email'])->first();

            if ($user && $friend) {
                Friendship::create([
                    'user_id' => $user->id,
                    'friend_id' => $friend->id,
                    'status' => $data['status'],
                ]);
            }
        }
    }
}
