<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'transactions';
    protected $primaryKey = 'id';


    protected $fillable = [
        'transactionNo',
        'commuterId',
        'seatsTaken',
        'totalAmount',
        'departureDate',
        'returnDate',
        'fare',
        'paymentMethod',
        'transactionTime',
        // 'contactInfo',
        // 'routeNo'
    ];
}
