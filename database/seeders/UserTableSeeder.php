<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'t0qh00',
            'email'=>'t0qh00@gmail.com',
            'password'=>bcrypt('admint0qh00'),
            'admin' => true
        ],
        [
            'name' =>'CrisLenin',
            'email'=>'crislenin2506@gmail.com',
            'password'=>bcrypt('adminHondashiSushi'),
            'admin' => true
        ]);
    }
}
