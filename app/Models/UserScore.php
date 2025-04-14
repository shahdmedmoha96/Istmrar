<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserScore extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'level_id', 'score'];
    // علاقة الدرجة بمستخدم واحد
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // علاقة الدرجة بمستوى واحد
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
