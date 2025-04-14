<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level_number'];

    // علاقة المستوى بدرجات المستخدمين
    public function scores()
    {
        return $this->hasMany(UserScore::class);
    }

    // علاقة المستوى بالمستخدمين عبر `user_scores`
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_scores')
            ->withPivot('score')
            ->withTimestamps();
    }
}
