<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code'];
    public function nativeUsers()
    {
        return $this->hasMany(User::class, 'native_language');
    }

    // العلاقة مع المستخدمين الذين يستهدفون هذه اللغة
    public function targetUsers()
    {
        return $this->hasMany(User::class, 'target_language');
    }
}
