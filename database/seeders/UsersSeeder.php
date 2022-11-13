<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        $writerRole = Role::create(['name' => 'writer']);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role_id' => $adminRole->id,
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role_id' => $userRole->id
        ]);

        $writer = User::create([
            'name' => 'Writer',
            'email' => 'writer@mail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role_id' => $writerRole->id
        ]);
    }
}
