<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = [
            'name'=>'Admin',
                   'email'=>'admin@mailinator.com',
                   'password'=> bcrypt('123456'),
    ];
        User::create($value);
    }
}
