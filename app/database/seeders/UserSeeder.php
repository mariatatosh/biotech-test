<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

final class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'email' => 'user@gmail.com'
        ]);
        User::factory()->create([
            'role'  => User::ROLE_ADMIN,
            'email' => 'admin@gmail.com',
        ]);
        User::factory()->create([
            'role'  => User::ROLE_MANAGER,
            'email' => 'manager@gmail.com',
        ]);
    }
}
