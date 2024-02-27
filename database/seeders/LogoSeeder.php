<?php

namespace Database\Seeders;

use App\Models\CompanyLogo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyLogo::create([

            "tittle"             =>"No Need",
             "image"             =>"20240226482024.png",
  
                     ]);
    }
}
