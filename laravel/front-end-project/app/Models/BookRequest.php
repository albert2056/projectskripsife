<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookRequest extends Model
{
    protected $fillable = [
        'name',
        'totalUsher',
        'eventDate',
        'venue',
        'wo',
    ];

    protected $dates = [
        'eventDate',
    ];
}