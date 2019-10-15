<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'permissions' => [
                'create-post' => true,
                'create-comment' => true
            ]
        ]);

        $commentator = Role::create([
            'name' => 'Commentator',
            'slug' => 'commentator',
            'permissions' => [
                'create-comment' => true
            ]
        ]);

        $admin = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
                'administrate-users' => true
            ]
        ]);
    }
}
