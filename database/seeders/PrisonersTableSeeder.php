<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prisoner;

class PrisonersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //
    Prisoner::truncate();

    $faker = \Faker\Factory::create();

    for($i = 0; $i < 50; $i++) {
      Prisoner::create([
        'PID' => $faker->numberBetween($min = 1000, $max = 9000),
        'firstName' => $faker->firstNameMale,
        'lastName' => $faker->lastName,
        'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'location' => $faker->address,
      ]);
    }
  }
}
