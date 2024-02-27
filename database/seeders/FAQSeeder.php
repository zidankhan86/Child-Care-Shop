<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FAQ::create([
            'question'      =>'What is Lorem Ipsum?',
            'answer'        =>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ]);
        FAQ::create([
            'question'      =>'How can I reset my password?',
            'answer'        =>'To reset your password, go to the login page and click on the "Forgot Password" link. Follow the instructions provided to reset your password.'
        ]);
        FAQ::create([
            'question'      =>'What payment methods do you accept?',
            'answer'        =>'We accept various payment methods including credit/debit cards, PayPal, and bank transfers.'
        ]);
        FAQ::create([
            'question'      =>'How do I update my account information?',
            'answer'        =>'You can update your account information by logging into your account and navigating to the "Profile" or "Account Settings" section.'
        ]);
        FAQ::create([
            'question'      =>'What is your return policy?',
            'answer'        =>'Our return policy allows for returns within 30 days of purchase for a full refund. Please refer to our Returns & Exchanges page for more details.'
        ]);
    }
}
