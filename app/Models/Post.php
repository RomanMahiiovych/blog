<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
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



    /*public function addComment($body){
        Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' => Auth::user()
        ]);
    }*/
}
