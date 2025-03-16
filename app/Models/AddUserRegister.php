<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddUserRegister extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'password',
        'address',
    ];

}
