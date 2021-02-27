<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'author_id', 'image', 'description', 'slug'];

    public function author()
    {
        return $this->belongsTo('App\Models\User');
    }
}
