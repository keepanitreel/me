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
        if(empty(User::where('email', 'jeff@jeffcobb.com')->first())) {
            User::create([
                "name"     => "Jeffrey Cobb",
                "email"    => "jeff@jeffcobb.com",
                "password" => "foo bar baz"
            ]);
        }
    }
}
