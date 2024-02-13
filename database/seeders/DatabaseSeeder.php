<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(100)->create();
        \App\Models\Product::factory(100)->create();

        foreach(\App\Models\User::all() as $user){
            for ($i = 0; $i < 20; $i++) {
                $user->orders()->create([
                    "user_id"=>$user->id,
                    "product_id"=>\App\Models\Product::inRandomOrder()->first()->id,
                    "quantity"=>fake()->randomNumber(2),
                    "status"=> fake()->randomElement([1,2,3]),
                ]
                );
            }
        }
    }
}
