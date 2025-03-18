<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['type', 'amount'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
