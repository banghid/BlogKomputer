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
        //   $query[]=[
        //     'PartNum' => rand(),
        //     'ShortName' => $faker->firstName,
        //     'Cost' => $faker->randomNumber%10000000,
        //     'NumInStock' => $faker->randomNumber%1000
        //   ];
        //
        // }
        // DB::table((new \App\Item)->getTable())->insert($query);

        // $query = [];
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   $query[]=[
        //     'SerialNum'=> $faker->randomNumber,
        //     'Make' => $faker->date('Y-m-d','now'),
        //     'Model' => $faker->randomNumber,
        //     'ComputerDescription' => $faker->text(250),
        //     'CustomerId' => \App\Customer::inRandomOrder()->first()->CustomerId
        //   ];
        // }
        // DB::table((new \App\Computer)->getTable())->insert($query);

        // $queryRepairJob = [];
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   $computer = \App\Computer::inRandomOrder()->first();
        //   $queryRepairJob[] = [
        //     'DateReceived' => $faker->date('Y-m-d','now'),
        //     'DateReturned' => $faker->date('Y-m-d','now'),
        //     'DateEnded' => $faker->date('Y-m-d','now'),
        //     'LabourCost' => $faker->randomNumber%100000000,
        //     'TotalCost' => $faker->randomNumber%100000000,
        //     'CustomerId' => $computer->CustomerId,
        //     'ComputerId' => $computer->ComputerId
        //
        //
        //   ];
        // }
        // DB::table((new \App\RepairJob)->getTable())->insert($queryRepairJob);

        // $queryRepJobMen = [];
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   $repairjob = \App\RepairJob::inRandomOrder()->first();
        //   $queryRepJobMen[] = [
        //     'DateStarted' => $repairjob->DateReceived,
        //     'DateEnded' => $repairjob->DateEnded,
        //     'Comments' => $faker->text(250),
        //     'JobNum' => $repairjob->JobNum,
        //     'RepairmenId' => \App\Repairmen::inRandomOrder()->first()->RepairmenId
        //   ];
        // }
        // DB::table((new \App\RepairJobRepairmen)->getTable())->insert($queryRepJobMen);

        // $queryRepJobItem = [];
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   $repairjob = \App\RepairJob::inRandomOrder()->first();
        //   $queryRepJobItem[] = [
        //     'DateUsed' => $faker->date('Y-m-d','now'),
        //     'Quantity' => $faker->randomNumber%10000,
        //     'TotalCost' => $faker->randomNumber%10000000,
        //     'JobNum' => $repairjob->JobNum,
        //     'ItemId' => \App\Item::inRandomOrder()->first()->ItemId
        //
        //   ];
        // }
        // DB::table((new \App\RepairJobItem)->getTable())->insert($queryRepJobItem);

        // $queryRepItem = [];
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   $item = \App\Item::inRandomOrder()->first();
        //   $quantity = $faker->randomNumber%1000;
        //   $queryRepItem[] = [
        //     'DateOrdered' => $faker->date('Y-m-d','now'),
        //     'Quantity' => $quantity,
        //     'TotalCost' => ($quantity*$item->Cost)%100000000,
        //     'ItemId' => $item->ItemId,
        //     'RepairmenId' => \App\Repairmen::inRandomOrder()->first()->RepairmenId
        //   ];
        // }
        // DB::table((new \App\RepairmenItem)->getTable())->insert($queryRepItem);

        // $queryDeposit = [];
        // for ($i=0; $i <1000 ; $i++) {
        //   // code...
        //   $queryDeposit[]=[
        //     'DepositDate' => $faker->date('Y-m-d','now'),
        //     'Amount' => $faker->randomNumber%100000000,
        //     'JobNum' => \App\RepairJob::inRandomOrder()->first()->JobNum
        //   ];
        // }
        // DB::table((new \App\Payment)->getTable())->insert($queryDeposit);





    }
}
