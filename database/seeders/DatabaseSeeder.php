<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();
        
        \App\Models\User::create([
            'name' => 'hudzaifah',
            'email' => 'hudz1357@gmail.com',
            'password' => bcrypt('1234567890'),
        ]);
    }
}
