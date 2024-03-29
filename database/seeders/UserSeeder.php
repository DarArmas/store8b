<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       User::create([
           'name' => 'David Darnell Sanchez Armas',
           'email' => 'darnell@test.com',
           'password' => Hash::make('1234')
       ]);
       User::factory(10)->create();
    }
}
