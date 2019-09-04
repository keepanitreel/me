<?php

use App\User;
use Illuminate\Database\Seeder;

class JeffUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=>"Jeffrey Cobb",
            "email"=>"jeff@jeffcobb.com",
            "password"=>"foo bar baz"
        ]);
    }
}
