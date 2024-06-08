<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => env('ADMIN_EMAIL', 'admin@app.com'),
            'password' => Hash::make('admin dashboard'),
        ]);

        $this->call(LaratrustSeeder::class);
        $this->call(ContactSettingSeeder::class);
    }
}
