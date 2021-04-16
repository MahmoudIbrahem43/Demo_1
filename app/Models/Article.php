<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'author', 'title', 'content',
    ];

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
