<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'role',
        'name',
        'phoneNumber',
        'email',
        'password',
        'statusCode',
        'description'
    ];
}
