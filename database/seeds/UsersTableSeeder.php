<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // dummy users' data

        $faker = \Faker\Factory::create();

        for($i = 0; $i < 5; $i++) {
            $gender = $faker->randomElement(['male','female']); 
            $address = $faker->randomElement(array('1', '2','3'));
            $car_mode = $faker->randomElement(array('1', '2','3'));
            User::create([
                'user_name' => $faker->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'photo_url' => $faker->url,
                'phone_num' => $faker->phoneNumber,
                'email' => $faker->safeEmail,
                'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'gender' => $gender,
                'password' => bcrypt('secret'),
                'address' => $address,
                'car_mode' => $car_mode
            ]);
        }
    }
}
