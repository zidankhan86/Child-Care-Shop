<?php

namespace Database\Seeders;

use App\Models\BannerOne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstBanner extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BannerOne::create([

           "tittle"             =>"No Need",
            "image"             =>"2024022603154715.png",
 
                    ]);
    }
}
