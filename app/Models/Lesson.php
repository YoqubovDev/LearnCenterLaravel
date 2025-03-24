<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title', 'description', 'category_id'];

    public function lessonCategory()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
