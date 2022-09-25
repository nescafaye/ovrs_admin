<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';
    protected $primaryKey = 'plateNo';
    public $incrementing = false;

    protected $fillable = [
        'plateNo',
        'model',
        'amenities',
        'seatCapacity',
        'desc',
    ];
}
