<?php

namespace App\Models;

// use App\Http\Middleware\Authenticate;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, AuthenticableTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'username',
        'password',
        'phone',
        'gender',
        'profilePic',
        'is_admin', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }
}
