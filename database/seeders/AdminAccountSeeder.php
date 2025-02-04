<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Laravel\Models\User;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@gmail.com')->first();

        if(!$user){
            $admin = new User;
            $admin->name = "SUPER ADMIN";
            $admin->email = "admin@gmail.com";
            $admin->password = bcrypt('admin');
            $admin->type = "super_admin";
            $admin->save();
        }
    }
}
