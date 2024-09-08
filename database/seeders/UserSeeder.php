<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->name = "admin";
        $user->email = "admin@admin.com";
        $user->password = "admin";
        $user->status = 1;
        $user->save();

        $user->name = "test";
        $user->email = "test@test.com";
        $user->password = "test";
        $user->status = 1;
        $user->save();

        User::factory(20)->create();
    }
}
