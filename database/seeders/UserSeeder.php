<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Role;
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
        $admin=User::create([
            'first_name'=>'Admin',
            'last_name'=>'Admin',
            'email'=>'admin@gmail.com',
            'phone'=>'0123456789',
            'password'=>Hash::make('secret123'),
        ]);

        $admin->roles()->attach(1);

        User::factory(3)->count(10)->hasAttached([Role::find(2)])->create();
    }
}
