<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable=['name','parent_id'];

    public function parent()
    {

        return $this->belongsTo(Category::class,'parent_id');
    }
    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }


    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'id');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
//
//    public function productCount()
//    {
//        return $this->hasMany(Product::class, 'category_id')->count();
//    }
}
