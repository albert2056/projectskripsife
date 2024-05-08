<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutfitRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'outfitCategoryId',
        'name',
        'qty',
        'image',
        'updatedBy',
    ];
}
