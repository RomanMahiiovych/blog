<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $table = 'posts';
    protected $fillable = [
        'title', 'body', 'userId'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'userId');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'postId');
    }

}
