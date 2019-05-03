<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        for ($i=0; $i <1000 ; $i++) {
          // code...
          \App\Repairmen::create([
            'LastName' => $faker->lastName,
            'FirstName' => $faker->firstName,
            'Email' => $faker->freeEmail,
            'Mobile' => $faker->e164PhoneNumber,
            'HTel' => rand()

          ]);
        }

        for ($i=0; $i <1000 ; $i++) {
          // code...
          \App\Customer::create([
            'LastName' => $faker->lastName,
            'FirstName' => $faker->firstName,
            'Email' => $faker->freeEmail,
            'Mobile'=> $faker->e164PhoneNumber,
            'HTel' => rand(),
            'AddressLine1' => $faker->address,
            'City' => $faker->city,
            'State' => $faker->state,
            'PostCode' => $faker->postCode
          ]);
        }

        for ($i=0; $i < 1000 ; $i++) {
          // code...

        }

    }
}
