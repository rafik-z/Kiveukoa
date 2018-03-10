<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'administrator' => 1,
            'avatar' => asset('avatars/avatar.png'),
            'email' => 'admin@rafikzebdi.net'
        ]);

        App\User::create([
            'name' => 'Bruce Wayne',
            'password' => bcrypt('richasfuck'),
            'avatar' => asset('avatars/avatar.png'),
            'email' => 'bruce@wayne-entreprise.com'
        ]);
    }
}
