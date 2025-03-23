<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model){
            $model->slug= Carbon::now(). Str::slug($model->title);
        });
    }

    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class, 'category_id', 'id');

    }
    public function postUser()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');

    }

}
