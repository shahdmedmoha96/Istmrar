<?php

namespace App\Models;

use App\Models\Language;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'native_language',
        'target_language',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // العلاقة مع اللغة الأم
    public function nativeLanguage()
    {
        return $this->belongsTo(Language::class, 'native_language');
    }

    // العلاقة مع اللغة المستهدفة
    public function targetLanguage()
    {
        return $this->belongsTo(Language::class, 'target_language');
    }

    // علاقة المستخدم بدرجاته (يمكن أن يكون له عدة درجات)
    public function scores()
    {
        return $this->hasMany(UserScore::class);
    }

    // علاقة المستخدم بالمستويات عبر الجدول الوسيط `user_scores`
    public function levels()
    {
        return $this->belongsToMany(Level::class, 'user_scores')
            ->withPivot('score') // جلب درجة المستخدم
            ->withTimestamps();
    }

        /**
     * إرجاع قائمة طلبات الصداقة التي أرسلها المستخدم الحالي والتي لا تزال قيد الانتظار.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sentFriendRequests()
    {
        return $this->hasMany(Friendship::class, 'user_id')->where('status', 'pending');
    }

    /**
     * إرجاع قائمة طلبات الصداقة التي استلمها المستخدم الحالي والتي لا تزال قيد الانتظار.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function receivedFriendRequests()
    {
        return $this->hasMany(Friendship::class, 'friend_id')->where('status', 'pending');
    }

    /**
     * إرجاع قائمة الأصدقاء المقبولين للمستخدم الحالي سواء كان هو المرسل أو المستقبل.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function friends()
    {
        return $this->hasMany(Friendship::class, 'user_id')
            ->where('status', 'accepted')
            ->orWhere(function ($query) {
                $query->where('friend_id', $this->id)->where('status', 'accepted');
            });
    }
}
