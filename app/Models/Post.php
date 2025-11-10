<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'body', 
        'category_id', 'writer_id', 'published_at'
    ];

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }
}