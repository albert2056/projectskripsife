<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Authenticatable
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'roleId',
        'name',
        'phoneNumber',
        'email',
        'password'
    ];
}
