<?php

namespace Database\Seeders;

use App\Models\BannerTwo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SecondBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerTwo::create([

            "tittle"             =>"No Need",
             "image"             =>"2024022603304730.png",
  
                     ]);
    }
}
