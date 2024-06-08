<?php

namespace Database\Seeders;

use App\Models\ContactSetting;
use Illuminate\Database\Seeder;

class ContactSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactSetting::create([
            'whatsapp' => 'https://wa.me/966570803605',
            'twitter' => 'http://my_site',
            'tiktok' => 'http://my_site',
            'instagram' => 'http://my_site'
        ]);
    }
}
