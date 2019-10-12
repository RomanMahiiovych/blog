<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $table = 'roles';

    protected $fillable = [
        'name', 'slug', 'permissions'
    ];

    protected $casts = [
        'permissions' => 'array'
    ];

    public function users(){
        return $this->belongsToMany(User::class, 'roles_user', 'roleId', 'userId');
    }

    public function hasPermission($permission) : bool{
        return $this->permissions[$permission] ?? false; //перевіряє чи заданий дозвіл, якщо ні - повертає false
    }
}
