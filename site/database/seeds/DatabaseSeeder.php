<?php

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
        // VOLGORDE IS BELANGRIJK
        $this->call(MembershipSeeder::class);

        for($i=0; $i<20; $i++){
            $this->call(UserSeeder::class);
        }

        for($i=0; $i<40; $i++){
            $this->call(BlogSeeder::class);
        }
    }
}
