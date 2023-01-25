<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'admin',
                'is_admin' => true,
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'phone' => '01601478427',
                'password' => bcrypt('pass@admin'),
                'address' => 'Dhaka'
            ],
            [
                'name' => 'User',
                'is_admin' => false,
                'email' => 'user@gmail.com',
                'email_verified_at' => now(),
                'phone' => '8801977451259',
                'password' => bcrypt('pass@user'),
                'address' => 'Dhaka'
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }

}
