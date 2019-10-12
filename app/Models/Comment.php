<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
      'body', 'postId', 'user_id'
    ];

    public function post(){
        return $this->belongsTo(Post::class);
    }



    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
