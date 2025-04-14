<?php

namespace App\Models;

use App\Models\Language;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Notification extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   protected $table = 'notifications';
  
}
