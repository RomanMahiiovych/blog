<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class, 'roles_user', 'userId', 'roleId');
    }

    public function getAvatarUrl(){
        return "https://www.gravatar.com/avatar/{{md5( $this->email )}}?d=mm&s=40";
    }
    public function posts(){
        return $this->belongsTo(Post::class, 'id');
    }

    public function comments(){
        return $this->belongsTo(Comment::class, 'id');
    }
}
