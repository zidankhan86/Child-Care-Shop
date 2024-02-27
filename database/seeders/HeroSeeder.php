<?php

namespace Database\Seeders;

use App\Models\HeroBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroBanner::create([

            "tittle"            =>"BEST CHILD PRODUCT IS HERE",
            "small_tittle"      =>"YOUR OWN SHOP",
            "description"       =>"BEST PRODUCT EVER YOU BOUGHT",
            "image"             =>"2024022603044504.jpg",
 
                    ]); 
    }
}
