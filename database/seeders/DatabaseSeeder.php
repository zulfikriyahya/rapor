<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ],
            [
                'name' => 'User',
                'email' => 'user@admin.com',
            ]
        ];
        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
