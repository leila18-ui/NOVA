<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'author',
        'image',
        'description',
        'price',
        'stock',
        'pages',
        'format',
        'is_featured',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class); 
    }
}
