<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $user = new User();
        $user->firstname = $faker->firstName();
        $user->lastname = $faker->lastName;
        $user->email = $faker->email;
        $user->password = $faker->password(6, 22);
        $user->role = "visitor";
        // $user->membership_id = 3;

        $user->save();
    }
}
