<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        /* falls admin seeder gemacht wird hier!! $this->call(Admin::class); */
    }
}

/* falls admin seeder gemacht wird
User::create([
    'name' => 'Admin',
    'email' => 'admin@email.com',
    'email_verified_at' => now(),
    'password' => static::$password ??= Hash::make('password'),
    'remember_token' => Str::random(10),
]);
 */