<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'type' => 'admin',
            'status' => 'approved',
            'password' => ('12345678'),
        ]);
        \App\Models\User::factory(10)->create();
    }
}
