<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'auther', 'text','article_id',
    ];
    public function article(){
        return $this->belongsTo('App\Article');
    }
}
