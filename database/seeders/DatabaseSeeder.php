<?php

namespace Database\Seeders;

use App\Models\Feature;
use App\Models\Package;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Mortgage',
            'email' => 'mortgage@gmai.com',
            'password' => bcrypt('123.321Aa'),
        ]);
        Feature::create([
            'image' => 'https://www.google.com/imgres?q=batman&imgurl=https%3A%2F%2Fi.guim.co.uk%2Fimg%2Fmedia%2Fc8c00617b792d1d53f2d2b318820d5758dc61551%2F231_0_2968_1782%2Fmaster%2F2968.jpg%3Fwidth%3D1200%26quality%3D85%26auto%3Dformat%26fit%3Dmax%26s%3D99459057199a54c97181e29b0947b5fb&imgrefurl=https%3A%2F%2Fwww.theguardian.com%2Ffilm%2F2024%2Fmar%2F15%2Fcan-a-super-grungy-the-batman-sequel-take-the-dc-universe-somewhere-even-darker&docid=RE_dr8yHpFTwMM&tbnid=u536p6v0QvSpOM&vet=12ahUKEwj31Z-buISIAxXlZ0EAHUXZGf4QM3oECBoQAA..i&w=1200&h=720&hcb=2&ved=2ahUKEwj31Z-buISIAxXlZ0EAHUXZGf4QM3oECBoQAA',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => 1,
            'active' => true
        ]);
        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100
        ]);
        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500,
        ]);
    }
}
