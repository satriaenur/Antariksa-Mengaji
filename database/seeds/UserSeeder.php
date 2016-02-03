<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            "name" => "Admin Antariksa",
            "email" => "admin@indonesiamengaji.org",
            "password" => bcrypt("antariksa2016"),
        ];

        DB::table('users')->insert($users);
    }
}
