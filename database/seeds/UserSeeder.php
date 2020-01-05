<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $this->createUser();
        }
    }

    public function createUser()
    {
        $faker = Faker\Factory::create('pt_BR');
        $user = new User;
        $user->name = $faker->name;
        $user->email = $faker->email;
        $user->password = hash::make('123456');
        $user->save();
    }
}
