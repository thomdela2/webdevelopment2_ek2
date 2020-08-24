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
        $user->firstname = 'Thomas';
        $user->lastname = 'Delahaye';
        $user->email = 'thomdela2@student.arteveldehs.be';
        $user->password = $faker->password(6, 22);
        $user->role = "developer";
        // $user->membership_id = 3;

        $user->save();
    }
}
