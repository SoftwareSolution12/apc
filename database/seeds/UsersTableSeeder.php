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
        User::create([
            'name' => 'Dionisio Macamo',
            'email' => 'macdion9500@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
