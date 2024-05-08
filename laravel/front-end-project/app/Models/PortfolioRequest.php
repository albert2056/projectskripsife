<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'gownName',
        'eventDate',
        'venue',
        'wo',
        'column',
        'name',
        'eventName',
    ];

    // protected $nullable = [
    //     'image',
    //     'gownName',
    //     'eventDate',
    //     'venue',
    //     'wo',
    //     'column',
    //     'name',
    //     'eventName',
    // ];

    
}
