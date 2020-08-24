<?php

use App\Membership;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $membership = new Membership();
        $membership->name = 'VSCO';
        $membership->description = 'Free';
        $membership->price = 0.00;
        // $membership->features = $faker->paragraph(1);

        $membership->save();
    }
}
