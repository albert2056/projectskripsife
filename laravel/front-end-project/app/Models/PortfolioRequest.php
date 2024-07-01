<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'gownId',
        'eventDate',
        'venue',
        'wo',
        'name',
        'eventName',
    ];
}
