<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Driver extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'drivers';
    protected $primaryKey = 'dvr_id';


    protected $fillable = [
        'fname',
        'lname',
        'email',
        'username',
        'password',
        'phone',
        'gender',
        'profilePic',
        'accNumber',
        'accName',
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

    // public function user()
    // {
    //     return $this->belongsTo('App\User'); 
    // }
}
