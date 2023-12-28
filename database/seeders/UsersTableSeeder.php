<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'role'=>'admin',
            'user_type'=>'admin',
            'status'=>'approved',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
        ]);
    }
}
