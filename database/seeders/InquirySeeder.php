<?php

namespace Database\Seeders;

use App\Models\Inquiry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Inquiry::create([
            'full_name' => 'Kane',
            'email' => 'wwe@kane.com',
            'message' => 'Red Monster from hell',
    ]);
    Inquiry::create([
            'full_name' => 'John Cena',
            'email' => 'john@cena.com',
            'message' => 'Attitude Respect',
    ]);
    Inquiry::create([
            'full_name' => 'Randy Orton',
            'email' => 'randy@orton.com',
            'message' => 'The Viper/ Legend Killer',
    ]);
    }
}
