<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "Blog 'Em",
            'contact_number' => '07722 466017',
            'contact_email' => 'emilywallaceprice@gmail.com',
            'address' => 'Southampton, England'
        ]);
    }
}
