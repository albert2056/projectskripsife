<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'outfitId',
        'eventId',
        'userId',
        'packageId',
        'name',
        'totalUsher',
        'eventDate',
        'venue',
        'wo',
        'totalPrice',
        'paymentStatus',
        'updatedBy',
    ];

    protected $nullable = [
        'outfitId',
        'eventId',
        'userId',
        'packageId',
        'name',
        'totalUsher',
        'eventDate',
        'venue',
        'wo',
        'totalPrice',
        'paymentStatus',
        'updatedBy',
    ];
}