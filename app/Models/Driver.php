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
    protected $fillable = [
        'dvr_fname',
        'dvr_mail',
        'dvr_un',
        'dvr_pw',
        'gcashInfo'
    ];

     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'dvr_pw',
        'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo('App\User'); 
    }
}
