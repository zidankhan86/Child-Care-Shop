<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
   
    public function run(): void
    {
        User::create([

            "name"      =>"Admin",
            "email"     =>"admin@gmail.com",
            "phone"     =>"01712345678",
            "address"   =>"Mirpur-1",
            "role"      =>"admin",
            "password"  =>'12345'
        
                    ]);


          
            User::create([
            "name"      => "Customer",
            "email"     => "c@gmail.com",
            "phone"     => "01712345679",
            "address"   => "Dhanmondi",
            "role"      => "customer",
            "password"  => '12345',
             ]);
                    
    }
}
