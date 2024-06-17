<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 一つの投稿は一人にユーザーに属する
    public function user(){
        return $this->belongsto(User::class);
    }
}
