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
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   \App\Repairmen::create([
        //     'LastName' => $faker->lastName,
        //     'FirstName' => $faker->firstName,
        //     'Email' => $faker->freeEmail,
        //     'Mobile' => $faker->e164PhoneNumber,
        //     'HTel' => rand()
        //
        //   ]);
        // }
        //
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   \App\Customer::create([
        //     'LastName' => $faker->lastName,
        //     'FirstName' => $faker->firstName,
        //     'Email' => $faker->freeEmail,
        //     'Mobile'=> $faker->e164PhoneNumber,
        //     'HTel' => rand(),
        //     'AddressLine1' => $faker->address,
        //     'City' => $faker->city,
        //     'State' => $faker->state,
        //     'PostCode' => $faker->postCode
        //   ]);
        // }

        // $query = [];
        // for ($i=0; $i < 1000 ; $i++) {
        //   // code...
        //   $query=[
        //     'PartNum' => rand(),
        //     'ShortName' => $faker->firstName,
        //     'Cost' => $faker->randomNumber,
        //     'NumInStock' => $faker->randomNumber%1000
        //   ];
        //
        // }
        // DB::table((new \App\Item)->getTable())->insert($query);

        $query = [];
        for ($i=0; $i <1000 ; $i++) {
          // code...
          $query[]=[
            'SerialNum'=> $faker->randomNumber,
            'Make' => $faker->date('Y-m-d','now'),
            'Model' => $faker->randomNumber,
            'ComputerDescription' => $faker->text(250),
            'CustomerId' => \App\Customer::inRandomOrder()->first()->CustomerId
          ];
        }
        DB::table((new \App\Computer)->getTable())->insert($query);

        // $queryRepairJob = [];
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   $queryRepairJob = [
        //     'DateReceived' => $faker->date('Y-m-d','now'),
        //     'DateReturned' => $faker->date('Y-m-d','now'),
        //
        //   ];
        // }


    }
}
