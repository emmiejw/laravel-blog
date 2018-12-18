<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Emmie Wallace-Price',
            'email' => 'emilyprice84@outlook.com',
            'password' => bcrypt('tyrese84'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar-2.jpg',
            'about' => 'My name is Emmie and i have a son called Lewis and a dog called Toby.',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);


    }
}
