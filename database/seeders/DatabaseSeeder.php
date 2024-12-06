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

        $this->call(ContactSettingSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(SeoDatabaseSeeder::class);
        $this->call(SettingDatabaseSeeder::class);

        $dev = User::factory()->create([
            'name' => 'Developer',
            'email' => 'dev@dev.com',
        ]);

        $dev->syncRoles(['super_admin']);

        $dev->save();

        $ace = User::factory()->create([
            'name' => 'ACE',
            'email' => 'ace@ace.com',
        ]);

        $ace->syncRoles(['super_admin']);

        $ace->save();

        $role = User::factory()->create([
            'name' => 'Role user',
            'email' => 'role@role.com',
        ]);

        $role->syncRoles(['role']);

        $role->save();

        $seo = User::factory()->create([
            'name' => 'SEO',
            'email' => 'seo@seo.com',
        ]);

        $seo->syncRoles(['seo']);

        $seo->save();

        $info = User::factory()->create([
            'name' => 'Info',
            'email' => 'info@sedra.sa',
        ]);

        $info->syncRoles(['super_admin']);

        $info->save();

        $wali = User::factory()->create([
            'name' => 'Waly',
            'email' => 'waly@sedra.sa',
        ]);

        $wali->syncRoles(['super_admin']);

        $wali->save();
    }
}
