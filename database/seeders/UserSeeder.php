<?php

namespace Database\Seeders;

use App\Models\User;
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
       User::create([
        "f_name"=>'karim',
        "l_name"=>'atef',
        "email"=>'karim@admin.com',
        "phone"=>'123456',
        "password"=>bcrypt('123456789'),
       ]);
    }
}
