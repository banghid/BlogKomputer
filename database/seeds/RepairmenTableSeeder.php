<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RepairmenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        DB::table('Repairmen')->insert([
          'LastName' => $faker->lastName,
          'FirstName' => $faker->firstName,
          'Email' => $faker->freeEmail,
          'Mobile' => $faker->e164PhoneNumber,
          'HTel' => rand()

        ]);
    }
}
