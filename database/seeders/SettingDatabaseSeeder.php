<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = Setting::create($this->articles());

        $setting->addMedia(__DIR__ . '/setting_img/light-logo.png')->preservingOriginal()->toMediaCollection('light');
        $setting->addMedia(__DIR__ . '/setting_img/dark-logo.png')->preservingOriginal()->toMediaCollection('dark');
    }

    public function articles(): array
    {
        return [
            'name' => 'Ladan',
            'address:ar' => 'المؤنسية طريق الشيخ حسن بن حسين بن علي',
            'address:en' => 'Al Cheikh Hasan Ibn Hussein Ibn Ali, Al Munsiyah, Riyadh 13246',
            'phone' => '+966123423123',
            'email' => 'info@ladantechnology.com.sa',
            'whatsapp' => '+96612341232',
            'instagram' => 'https://instagram.com',
            'tiktok' => 'https://tiktok.com',
            'x' => 'https://x.com',
        ];
    }
}
