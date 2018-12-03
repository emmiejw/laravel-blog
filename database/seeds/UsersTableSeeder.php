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
        App\User::create([
            'name' => 'Emmie Wallace-Price',
            'email' => 'emilyprice84@outlook.com',
            'password' => bcrypt('tyrese84'),
        ]);
    }
}
