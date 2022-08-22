<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Donation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Donation::create([
            "firstname" => "John",
            "lastname" =>  "Doe",
            "email" => "sb-guuib20392647@personal.example.com",
            "country_code" => "MA",
            "amount" => 10,
            "currency_code" => "USD"
        ]);
        Donation::create([
            "firstname" => "omar",
            "lastname" =>  "lmbkbk",
            "email" => "sb-ohy94720349163@personal.example.com",
            "country_code" => "US",
            "amount" => 10,
            "currency_code" => "USD"
        ]);
        Donation::create([
            "firstname" => "Badr",
            "lastname" =>  "Doe",
            "email" => "sb-awlwy20334876@personal.example.com",
            "country_code" => "US",
            "amount" => 5,
            "currency_code" => "USD"
        ]);
        Donation::create([
            "firstname" => "Mouad",
            "lastname" =>  "Doe",
            "email" => "sb-9d7e120334921@personal.example.com",
            "country_code" => "US",
            "amount" => 5,
            "currency_code" => "USD"
        ]);
        Donation::create([
            "firstname" => "Skram",
            "lastname" =>  "Doe",
            "email" => "sb-xbhsm20381934@personal.example.com",
            "country_code" => "US",
            "amount" => 1,
            "currency_code" => "USD"
        ]);
    }
}
