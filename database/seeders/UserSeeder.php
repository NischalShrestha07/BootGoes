<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Nischal Shrestha',
            'email' => 'nischal@gmail.com',
            'role' => 'admin',
            'phone' => '9812345678',
            'address' => 'BRT',
            'password' => Hash::make('nischal123'),
        ]);
    }
}
