<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        LanguageLine::create(
            [
                'group' => 'app',
                'key' => 'login',
                'text' => ['en' => 'Login', 'bn' => 'লগইন']
            ]);
        LanguageLine::create(
            [
                'group' => 'app',
                'key' => 'register',
                'text' => ['en' => 'Register', 'bn' => 'রেজিস্টার']
            ]);
        LanguageLine::create(
            [
                'group' => 'app',
                'key' => 'logout',
                'text' => ['en' => 'Logout', 'bn' => 'লগআউট']
            ]);
        LanguageLine::create(
            [
                'group' => 'app',
                'key' => 'togglenavigation',
                'text' => ['en' => 'Toggle navigation', 'bn' => 'টোগল নেভিগেশন']
            ]);
            

        LanguageLine::create(
            [
                'group' => 'login',
                'key' => 'header',
                'text' => ['en' => 'This is a required field', 'bn' => 'লগইন ফর্ম']
            ]);
        LanguageLine::create([
                'group' => 'login',
                'key' => 'email',
                'text' => ['en' => 'This is a required field', 'bn' => 'আপনার ইমেইল'],
            ]);
        LanguageLine::create([
                'group' => 'login',
                'key' => 'password',
                'text' => ['en' => 'This is a required field', 'bn' => 'আপনার পাসওয়ার্ড'],
            ]);
        LanguageLine::create([
                'group' => 'login',
                'key' => 'rememberme',
                'text' => ['en' => 'This is a required field', 'bn' => 'লগইন সংরক্ষিত রাখুন'],
            ]);
        LanguageLine::create([
                'group' => 'login',
                'key' => 'submit',
                'text' => ['en' => 'This is a required field', 'bn' => 'লগইন করুন'],
            ]);
        LanguageLine::create([
                'group' => 'login',
                'key' => 'forgotpassword',
                'text' => ['en' => 'This is a required field', 'bn' => 'পাসওয়ার্ড ভুলে গেছেন?'],
            ]);
        
    }
}
